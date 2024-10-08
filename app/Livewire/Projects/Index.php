<?php

namespace App\Livewire\Projects;

use App\Models\Projects;
use Livewire\Component;

class Index extends Component
{ 
    public function render()
    {
        return view('livewire.projects.index', ['projects'=>$this->projects()]);
    }

    public function projects(){
        return Projects::all();
    }
}
