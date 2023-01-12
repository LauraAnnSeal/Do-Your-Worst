const timer = document.querySelector('#timer')
const days_span = document.querySelector('#days .number')
const hours_span = document.querySelector('#hours .number')
const minutes_span = document.querySelector('#minutes .number')
const seconds_span = document.querySelector('#seconds .number')


var countDownDate = new Date(launch_date).getTime();
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

  // Display the result in the element with id="demo"
days_span.innerText = days;
hours_span.innerText = hours;
minutes_span.innerText = minutes;
seconds_span.innerText = seconds;
  

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    timer.style.display = 'none';
  }
}, 1000);


const initCheck = () => {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  if (distance < 0  || !countDownDate) {
    clearInterval(x);
    timer.style.display = 'none';
  }
}

initCheck()