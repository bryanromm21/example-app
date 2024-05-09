<?php

namespace App\Livewire\Personals;

use App\Models\Personal;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Layout('layouts.app')]
    public function render(): View
    {
        $personals = Personal::paginate();

        return view('livewire.personal.index', compact('personals'))
            ->with('i', $this->getPage() * $personals->perPage());
    }

    public function delete(Personal $personal)
    {
        $personal->delete();

        return $this->redirectRoute('personals.index', navigate: true);
    }
}
