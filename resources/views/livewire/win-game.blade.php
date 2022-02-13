<div>
     <div class="col-12 text-center win win-parent">
          <h1 class="win">Congratulation!!!</h1>
          <p class="win">Selamat Grace, kamu akan mendapat gift valentine dari.... rahasia wkwkwk, klik next dulu ya.</p>
          <button type="button"  id="win" onclick="toDirection1()" class="btn btn-lg btn-outline-light win mt-5">Next</button>
     </div>
     <div class="col-12 text-center direction1-parent">
          <p class="direction1">Gift Valentine mu akan dikirimkan di tempat kerjamu di Matera Cafe (tau dari tik tok wkwk) karena pengirim tidak tahu alamat rumahmu</p>
          <p class="direction1">tapi, kamu tetap bisa mengganti alamat & waktu pengiriman jika kamu mau.</p>
          <button type="button"  onclick="toDirection2()" class="btn btn-lg btn-outline-light direction1 mt-5">Next</button>
     </div>
     <div class="col-12 text-center direction2-parent">
          <p class="direction2">Identitas pengirim akan disertakan didalam gift valentine nya </p>
          <p class="direction2">Sebelumnya ada beberapa hal yg perlu pengirim ketahui untuk kepentingan pengiriman gift valentine</p>
          <a href="{{url('/form')}}" class="btn btn-lg btn-outline-light direction2 mt-5">Next</a>
     </div>


      <script>
         const wins = document.getElementsByClassName('win');
         const directions1 = document.getElementsByClassName('direction1');
         const directions2 = document.getElementsByClassName('direction2');


         function toDirection1(){

                for (const win of wins) {
                     win.style.display = 'none';

                 }
                 
                 for (const direction1 of directions1) {
                     direction1.style.visibility = 'visible';
                     direction1.style.animationPlayState = 'running';
                     
                 }

         }

         function toDirection2(){

                for (const win of wins) {
                     win.style.display = 'none';
                 }
                for (const direction1 of directions1) {
                    direction1.style.display = 'none';


                 }
                 for (const direction2 of directions2) {
                     direction2.style.visibility = 'visible';
                     direction2.style.animationPlayState = 'running';                     
                   
                 }

         }
    </script>
    
</div>
