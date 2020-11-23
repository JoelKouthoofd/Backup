// Eind datum
var countDownDate = new Date("Mar 30, 2020 15:37:25").getTime();

// Update elke seconde
var x = setInterval(function() {

  // Check datum van vandaag
  var now = new Date().getTime();
    
  // Bereken de tijd die er nog overblijft
  var distance = countDownDate - now;
    
  // Bereken tijd voor uur, minuut en seconde
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output het ding met id demo
  document.getElementById("timer").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // Echo dit als countdown is afgelopen
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "TicketVerkoop is gestart!";
  }
}, 1000);