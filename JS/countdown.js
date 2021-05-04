var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();

// Atualiza a contagem a cada um segundo
var x = setInterval(function() {

  // Pega a data e horário de hoje
  var now = new Date().getTime();

  // Calcula o tempo entre hoje e a data escolhida
  var distance = countDownDate - now;

  // Cálculos de tempo
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Exibe o resultado no elemento especificado
  document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // Se a contagem acabar, exibe a mensagem desejada
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "A FCCSI já está acontecendo!";
  }
}, 1000);