<?php

namespace App\Livewire\Forms;

use App\Models\Personal;
use Livewire\Form;

class PersonalForm extends Form
{
    public ?Personal $personalModel;
    
    public $nombre = '';
    public $apellido = '';
    public $edad = '';
    public $fecha_nacimiento = '';
    public $CI = '';
    public $sexo = '';
    public $email = '';
    public $contacto_enmergencia = '';
    public $cargos_id = '';

    public function rules(): array
    {
        return [
			'nombre' => 'required|string',
			'apellido' => 'required|string',
			'edad' => 'required',
			'fecha_nacimiento' => 'required',
			'CI' => 'required',
			'sexo' => 'required|string',
			'email' => 'required|string',
			'contacto_enmergencia' => 'required',
			'cargos_id' => 'required',
        ];
    }

    public function setPersonalModel(Personal $personalModel): void
    {
        $this->personalModel = $personalModel;
        
        $this->nombre = $this->personalModel->nombre;
        $this->apellido = $this->personalModel->apellido;
        $this->edad = $this->personalModel->edad;
        $this->fecha_nacimiento = $this->personalModel->fecha_nacimiento;
        $this->CI = $this->personalModel->CI;
        $this->sexo = $this->personalModel->sexo;
        $this->email = $this->personalModel->email;
        $this->contacto_enmergencia = $this->personalModel->contacto_enmergencia;
        $this->cargos_id = $this->personalModel->cargos_id;
    }

    public function store(): void
    {
        $this->personalModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->personalModel->update($this->validate());

        $this->reset();
    }
}
