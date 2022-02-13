<div>

  <div class="title text-center mt-3">
      <h1>Please kindly fill the form :)</h1>
  </div>
  <div class="col-12 d-flex justify-content-center mt-3">
      
      <div class="card mt-4" style="width: 25rem;">
        <div class="card-body">
          
          @foreach ($questions as $index => $question)
          <div class="question mt-3">
            <p class="card-text"><span class="number">{{$loop->iteration}} </span>. {{$questions[$index]['question']}}</p>
            <textarea name="questions[{{$index}}][answer]" wire:model="questions.{{$index}}.answer" class="form-control"></textarea>
            <p class="note text-muted">{{$questions[$index]['note']}}</p>
          </div>
          @endforeach
         
         
        </div>
      </div>

  </div>
  <div class="text-center mb-4">
    <button class="btn btn-primary"
                            wire:click.prevent="submitAnswer">Submit</button>
  </div>
<div class="side-note text-center">
      <p>Catatan</p>
      <p>Jika ingin mengupdate feedback kamu bisa login kembali (tp untuk informasi pengiriman jangan mendadak ya :)</p>
      <p>Jika ada pertanyaan atau hal lain yg tidak ada di form,bisa dm tiktok <a href="https://www.tiktok.com/@gabakaljogedd">@gabakaljogedd</a></p>
      <p>Jika form informasi yg berkaitan dengan pengiriman tidak diisi sebagaimana mestinya, gift akan dikirim tgl 14 Februari 2022, di Matera Cafe, antara jam operasional cafe.</p>
  </div>
</div>
