function createForm() {

  // Writing Shortcuts
  // Atalhos de escrita
  var spreadsheet = SpreadsheetApp.getActiveSpreadsheet();
  const ui = SpreadsheetApp.getUi();
  spreadsheet = spreadsheet.getSheetByName('atividades');

  // Sets some variables and arrays
  // Define algumas variáveis e arrays
  var atividades = [];
  var cell = '';
  var column = '';

  // 'max' é o número de atividades em A
  var max = spreadsheet.getRange('A2').getValues();

  // Gera uma array = [ [atividade1,categoria,dia,horário] , [atividade2,categoria,dia,horário] ]
  for (let i=0; i<max; i++) {

    var row = i + 3;

    atividades[i] = [];

    for (let j=0; j<4; j++) {

      column = spreadsheet.getRange(1,j+1).getA1Notation().match(/\D/);

      cell = column + row;
      atividades[i][j] = spreadsheet.getRange(cell).getValues()[0][0];
    }

  }

  var horarios = ['07:30','08:55','10:25','11:50'];
  var dias = ['26/10','27/10','28/10'];

  /* for (let i = 0; i < atividades.length; i++) {
    
    ui.alert(
      atividades[i][0] + '\n'
      + 'Categoria ' + atividades[i][1]
      + '\n Dia: ' + dias[atividades[i][2]-1]
      + '\n Horário: ' + horarios[atividades[i][3]-1]);

  } */

  var form = FormApp.create('Atividades Integradoras | FCCSI 2021');

  form.setDescription(
    'Formulário de Inscrição para as Atividades Integradoras da Feira Cultural e Científica Salesiano Itajaí em 2021.'
  );

  form.addSectionHeaderItem().setTitle('INSTRUÇÕES GERAIS').setHelpText(
    '* Preencha corretamente o formulário. NÃO nos responsabilizamos por problemas ocasionados por mal-preenchimento do mesmo; \n' +
    '* Somente será aceita uma única inscrição por pessoa. Sujeito a penalidades; \n' +
    '* Verifique previamente o Edital de Atividades Integradoras disponível em nosso website, para que possa escolher com diligência aquelas que mais chamarem a sua atenção; \n' +
    '* Muitas atividades possuem um número limitado de participantes. As vagas serão preenchidas de acordo com a ORDEM DE ENVIO dos formulários; \n' +
    '* O endereço de e-mail com o qual entraremos em contato em caso de problemas é o institucional (@salesianoitajai.page) utilizado para responder este formulário.'
  );

  form.addMultipleChoiceItem().setTitle('Termo de Aceitação')
  .setHelpText('Ao marcar esta opção e prosseguir com o formulário, você afirma que LEU e ACEITOU os termos do Regulamento Oficial da FCCSI.')
  .setRequired(true).setChoiceValues(['Li e aceito os termos do Formulário.']);

  form.addSectionHeaderItem().setTitle('INSTRUÇÕES PARA AUSÊNCIA').setHelpText(
    'Todos os horários disponíveis possuem uma atividade denominada "Ausente" e uma chamada "Organizador". \n \n' +
    'Se você é responsável por alguma Atividade Integradora, você DEVE marcar a opção ORGANIZADOR nos horários correspondentes à sua atividade, MESMO QUE ELA SEJA DESTINADA A OUTRA CATEGORIA. \n \n' +
    'Se você irá se ausentar em algum dia ou horário específico da FCCSI, você DEVE marcar a opção AUSENTE nos horários correspondentes. Ressalta-se que A PRESENÇA SERÁ AFERIDA durante a FCCSI, então não participar de sua atividade resultará em uma anotação de ausência no seu RPA. Justificativas devem ser tratadas diretamente com o e-mail fornecido pelo CSI.'
  );

  form.addMultipleChoiceItem().setTitle('Termo de Confirmação de Leitura')
  .setHelpText('Ao marcar esta opção e prosseguir com o formulário, você afirma que LEU e ACEITOU os termos descritos no tópico "Instruções para Ausência"')
  .setRequired(true).setChoiceValues(['Li e aceito os termos descritos acima.']);

  var sectionTwo = form.addPageBreakItem();
  sectionTwo.setTitle('Informações Pessoais');
  sectionTwo.setHelpText('Esta seção é para identificação dos alunos participantes.');

  form.addParagraphTextItem()
  .setTitle('Nome Completo, sem abreviaturas:')
  .setRequired(true);

  var selecionarCategoria = form.addMultipleChoiceItem();
  selecionarCategoria.setTitle('Categoria:')
  .setRequired(true).setChoices([
      selecionarCategoria.createChoice('CATEGORIA 1 | 6ºs e 7ºs anos'),
      selecionarCategoria.createChoice('CATEGORIA 2 | 8ºs e 9ºs anos'),
      selecionarCategoria.createChoice('CATEGORIA 3 | Ensino Médio')
  ]);

  for (let i = 0; i < 3; i++) {

    let categoria = i + 1;

    form.addPageBreakItem().setTitle('Informações Pessoais – Categoria ' + categoria)
    .setHelpText('Esta seção é para identificação dos alunos participantes.');

    var turma = form.addMultipleChoiceItem().setTitle('Qual é a sua turma?');

    if (categoria == 1) {

      turma.setChoices([
        turma.createChoice('6ºA'),
        turma.createChoice('6ºB'),
        turma.createChoice('6ºC'),
        turma.createChoice('6ºD'),
        turma.createChoice('6ºE'),
        turma.createChoice('7ºA'),
        turma.createChoice('7ºB'),
        turma.createChoice('7ºC'),
        turma.createChoice('7ºD'),
        turma.createChoice('7ºE')])

    } else if (categoria == 2) {

      turma.setChoices([
        turma.createChoice('8ºA'),
        turma.createChoice('8ºB'),
        turma.createChoice('8ºC'),
        turma.createChoice('8ºD'),
        turma.createChoice('8ºE'),
        turma.createChoice('9ºA'),
        turma.createChoice('9ºB'),
        turma.createChoice('9ºC'),
        turma.createChoice('9ºD'),
        turma.createChoice('9ºE')])

    } else if (categoria == 3) {

      turma.setChoices([
        turma.createChoice('1ºA'),
        turma.createChoice('1ºB'),
        turma.createChoice('1ºC'),
        turma.createChoice('1ºD'),
        turma.createChoice('2ºA'),
        turma.createChoice('2ºB'),
        turma.createChoice('2ºC'),
        turma.createChoice('3ºA'),
        turma.createChoice('3ºB'),
        turma.createChoice('3ºC')])

    }

  }

  for (let i = 0; i < 3; i++){ // 3 Categorias

    let categoria = i + 1;

    for (let j = 0; j < 3; j++) { // 3 dias

      form.addPageBreakItem().setTitle('Categoria ' + categoria).setHelpText('Essa seção se refere ao dia ' + dias[j]);

      for (let k = 0; k < 3; k++) {

        var horario = k + 1;
        form.addSectionHeaderItem().setTitle(horario + 'º HORÁRIO')
        .setHelpText('Esse trecho se refere ao horário das ' + horarios[k] + ' às ' + horarios[k+1]);

        options = [];

        for(let at = 0; at < atividades.length; at++) {

          if (atividades[at][1] - 1 == i & atividades[at][2] - 1 == j & atividades[at][3] - 1 == k) {
            
            options.push(atividades[at][0]);

          }

        };

        if (options.length > 0) {

          options.push(['ORGANIZADOR']);
          options.push(['AUSENTE']);

          form.addMultipleChoiceItem().setTitle('De qual atividade você gostaria de participar?')
          .setChoiceValues(options);

        };

      };

    };

  }

  ui.alert(form.getEditUrl());

}