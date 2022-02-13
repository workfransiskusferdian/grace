<?php

namespace App\Http\Livewire;

use App\Models\Question;
use Livewire\Component;

class Feedback extends Component
{
    public $questions = [];


    public function mount()
    {

        $quest = Question::all();
        foreach($quest as $q){
            $this->questions[] = ['id' => $q->id, 'question' => $q->question, 'answer' => $q->answer, 'note' => $q->note];
        }

    }


    public function submitAnswer(){
        foreach ($this->questions as $question) {
           $quest = Question::where('id', $question['id'])->first();
            $quest->update(['answer' => $question['answer']]);
        }
        $this->emit('submitAnswer');
    }

    public function render()
    {
        info($this->questions);

        return view('livewire.feedback');
    }
}
