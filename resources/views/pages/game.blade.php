<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Whack A Mole</title>
  <link href='https://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="{{ asset('css/game/style.css') }}">

</head>
<body>

  <h1 class="main">Whack a mole! <span class="score main">0</span></h1>
  {{-- <p class="progress rule">Tap layar hp kamu dimana saja tikus muncul</p>
  <p class="progress rule">dapatkan 7 point untuk menang</p> --}}
  <div class="progress main">
    <progress class="main" value="10" max="10" id="pageBeginCountdown"></progress>
    <p> sisa waktu <span id="pageBeginCountdownText" class="main">14 </span> detik</p>
  </div>
  <button class="start main" onClick="startGame()">Start!</button>



  <div class="game main">
   
    <div class="hole hole1 main">
      <div class="mole main"></div>
    </div>
    <div class="hole hole2 main">
      <div class="mole main"></div>
    </div>
    <div class="hole hole3 main">
      <div class="mole"></div>
    </div>
    <div class="hole hole4 main">
      <div class="mole"></div>
    </div>
    <div class="hole hole5 main">
      <div class="mole"></div>
    </div>
    <div class="hole hole6 main">
      <div class="mole"></div>
    </div>
  </div>

<script>


  window.onload = (event) =>{

        alert("Tap layar hp kamu dimana saja kamu lihat tikus muncul, kamu perlu 7 point untuk menang.");


};

  const mains = document.getElementsByClassName('main');
  const holes = document.querySelectorAll('.hole');
  const scoreBoard = document.querySelector('.score');
  const moles = document.querySelectorAll('.mole');
  const messages = document.getElementsByClassName('message');
  let lastHole;
  let timeUp = false;
  let score = 0;

  function randomTime(min, max) {
    return Math.round(Math.random() * (max - min) + min);
  }

  function randomHole(holes) {
    const idx = Math.floor(Math.random() * holes.length);
    const hole = holes[idx];
    if (hole === lastHole) {
      console.log('Ah nah thats the same one bud');
      return randomHole(holes);
    }
    lastHole = hole;
    return hole;
  }

  function peep() {
    const time = randomTime(400, 1200);
    const hole = randomHole(holes);
    hole.classList.add('up');
    setTimeout(() => {
      hole.classList.remove('up');
      if (!timeUp) peep();
    }, time);
  }

  function startGame() {
      ProgressCountdown(14, 'pageBeginCountdown', 'pageBeginCountdownText');

    scoreBoard.textContent = 0;
    timeUp = false;
    score = 0;
    peep();
    setTimeout(() => timeUp = true, 14000)
  }

  function bonk(e) {
    if(!e.isTrusted) return; // cheater!
    score++;
    this.parentNode.classList.remove('up');
    scoreBoard.textContent = score;
      if (score == 7) {
      timeUp = true;
      scoreBoard.textContent = 'Yey Kamu Menang';                
      window.location.href = "http://127.0.0.1:8000/win";


    }
  }

  function ProgressCountdown(timeleft, bar, text) {
      return new Promise((resolve, reject) => {
        var countdownTimer = setInterval(() => {
          timeleft--;

          document.getElementById(bar).value = timeleft;
          document.getElementById(text).textContent = timeleft;

          if (timeleft <= 0) {
            clearInterval(countdownTimer);
            resolve(true);
          }
        }, 1000);
      });
    }


  moles.forEach(mole => mole.addEventListener('click', bonk));

</script>
</body>
</html>
