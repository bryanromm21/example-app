<?php

namespace App\Livewire\Personals;

use App\Livewire\Forms\PersonalForm;
use App\Models\Personal;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public PersonalForm $form;

    public function mount(Personal $personal)
    {
        $this->form->setPersonalModel($personal);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.personal.show', ['personal' => $this->form->personalModel]);
    }
}
