<div>

  <div class="title text-center mt-3">
      <h1>Feedback</h1>
  </div>
  <div class="col-12 d-flex justify-content-center mt-3">
      
      <div class="card mt-4" style="width: 25rem;">
        <div class="card-body">  
          @foreach ($questions as $index => $question)
          <div class="question mt-3">
            <p class="card-text"><span class="number">{{$loop->iteration}} </span>. {{$questions[$index]['question']}}</p>
            <textarea disabled name="questions[{{$index}}][answer]" wire:model="questions.{{$index}}.answer" class="form-control"></textarea>
            <p class="note text-muted">{{$questions[$index]['note']}}</p>
          </div>
          @endforeach
        </div>
      </div>

  </div>
  
</div>
