<?php

namespace App\Livewire\Projects;

use App\Models\Projects;
use Livewire\Component;

class Show extends Component
{
    public Projects $project;
    public function render()
    {
        return view('livewire.projects.show');
    }
}
