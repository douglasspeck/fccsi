const countDownDate = new Date("Oct 26, 2021 07:25:00").getTime();

// Atualiza a contagem a cada um segundo
var x = setInterval(function() {

  // Pega a data e horário de hoje
  var now = new Date().getTime();

  // Calcula o tempo entre hoje e a data escolhida
  var distance = countDownDate - now;

  // Cálculos de tempod
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Exibe o resultado no elemento especificado
  document.getElementById("days").innerHTML = days;
  document.getElementById("hours").innerHTML = hours;
  document.getElementById("minutes").innerHTML = minutes;
  document.getElementById("seconds").innerHTML = seconds;

  // Se a contagem acabar, exibe a mensagem desejada
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "<h1>A FCCSI 2021 já acabou,<br>mas ainda há muito por vir!</h1>";
  }
}, 1000);