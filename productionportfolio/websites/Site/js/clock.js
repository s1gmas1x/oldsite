timer();

function timer() {
  var now = new Date,
    hours = now.getHours(),
    ampm = hours < 12 ? ' AM' : ' PM',
    minutes = now.getMinutes()
  t_str = [hours > 12 ? hours = hours - 12 : hours,
      (minutes < 10 ? "0" + minutes : minutes)
    ]
    .join(':') + ampm;

  document.getElementById('time').innerHTML = t_str;
  setTimeout(timer, 1000);
}
