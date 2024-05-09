<?php

namespace App\Livewire\Personals;

use App\Livewire\Forms\PersonalForm;
use App\Models\Personal;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public PersonalForm $form;

    public function mount(Personal $personal)
    {
        $this->form->setPersonalModel($personal);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('personals.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.personal.create');
    }
}
