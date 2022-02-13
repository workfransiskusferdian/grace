<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="{{ asset('css/intro/style.css') }}">

    <title>Welcome Grace!!</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12 text-center intro intro-parent">
            <h1 class="intro">Hi Grace</h1>
            <p class="intro ">Ada yang pengen ngasi sesuatu ke kamu tgl 14 nanti lho</p>
            <p class="intro">Sebelumnya, mainkan game nya dulu yuk!</p>
            <button type="button"  id="start" onclick="start()" class="btn btn-lg btn-outline-light intro mt-5">Start</button>
        </div>
        <div class="col-12 text-center scene1">
            <p class="scene1">Hadiah disembunyikan dilayar hp kamu</p>
            <p class="scene1">tap dimana saja pada layar hp kamu untuk menemukan hadiahnya, Good luck!</p>
            <!-- <button type="button" class="btn btn-outline-light">Start</button> -->
        </div>
        <div class="col-12 text-center scene2">
            <p class="scene2">Wkwkwkwk gabut banget ya tap2 layar item :D</p>
            <p class="scene2">selamat anda berhasil dikerjain</p>
            <p class="scene2">oke sekarang klik tombol di bawah untuk memulai game nya</p>
            <p class="scene2">(yg ini serius kok)</p>
            <a href="{{url('/game')}}" class="btn btn-outline-dark scene2">Start</a>

        </div>
    </div>
</div>
{{-- <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script> --}}


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        
                const intros = document.getElementsByClassName('intro');
                const scenes1 = document.getElementsByClassName('scene1');
                const scenes2 = document.getElementsByClassName('scene2');
                let is_started = 0;
                var clicks = 0;

         function start() {
                // document.getElementByClassName("intro").style.visibility = "hidden";

                document.body.style.background = "black";
                
                 for (const intro of intros) {
                     // 👇️ Remove element from DOM
                     intro.style.display = 'none';
                    // intro.attr("style", "display:none");


                 }
                 for (const scene1 of scenes1) {
                     // 👇️ Remove element from DOM
                     scene1.style.visibility = 'visible';
                     scene1.style.animationPlayState = 'running';
                     
                    //  scene1.attr("style", "display:visible");
                        // $("#div2").fadeIn("slow");
                 }

                 is_started = 1


            }
            
            
           document.onclick = function (event) {
             if(is_started == 1){
                 clicks += 1;
                 if (clicks == 10) {
                     // window.location.href = "http://www.w3schools.com";
                    //  document.body.style.backgroundColor = "blue";
                     for (const scene1 of scenes1) {
                         // 👇️ Remove element from DOM
                         scene1.style.display = 'none';

                     }
                      for (const scene2 of scenes2) {
                         // 👇️ Remove element from DOM
                         scene2.style.visibility = 'visible';
                         scene2.style.animationPlayState = 'running';


                     }

                 }

             }
         };
            
    </script>
</body>
</html>