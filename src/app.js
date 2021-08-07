require('bootstrap');

// Set the date we're counting down to
var countDownDate = new Date("Nov 5, 2021 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);


  document.getElementById("dias").innerHTML = days;
  var spanDias = document.createElement('span');
  spanDias.textContent = 'Dias';
  document.getElementById("dias").appendChild(spanDias);
  
  document.getElementById("horas").innerHTML = hours;
  var spanHoras = document.createElement('span');
  spanHoras.textContent = 'Horas';
  document.getElementById("horas").appendChild(spanHoras);

  document.getElementById("minutos").innerHTML = minutes;
  var spanMinutos = document.createElement('span');
  spanMinutos.textContent = 'Horas';
  document.getElementById("minutos").appendChild(spanMinutos);

  document.getElementById("segundos").innerHTML = seconds;
  var spanSegundos = document.createElement('span');
  spanSegundos.textContent = 'Segundos';
  document.getElementById("segundos").appendChild(spanSegundos);


  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);

document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 200) {
        console.log('scroll');
        document.getElementById('navbar-top').classList.add('navbar-scroll');
        // add padding top to show content behind navbar
        // navbar_height = document.querySelector('.navbar').offsetHeight;
        // document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar-top').classList.remove('navbar-scroll');
         // remove padding top from body
        // document.body.style.paddingTop = '0';
      
        }
    });
}); 