<?php

namespace App\Livewire\Proposals;

use App\Models\Projects;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{   
    public Projects $project;

    public bool $modal = false;

    #[Rule(['required', 'email'])]
    public string $email = '';

    #[Rule(['required', 'numeric', 'min:1'])]
    public int $hours = 0;

    public bool $agree = false;

    public function save(){
        $this->validate();

        if(!$this->agree){
            $this->addError('agree', 'Você precisa concordar com os termos de uso');
            return;
        }
        
        $this->project->proposals()
        ->updateOrCreate(['email'=>$this->email],
        [
            'email'=>$this->email,
            'hours'=>$this->hours
        ]);

        $this->dispatch('proposal::created');
        $this->modal = false;
    }


    public function render()
    {
        return view('livewire.proposals.create');
    }
}
