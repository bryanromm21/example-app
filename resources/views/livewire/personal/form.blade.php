<div class="space-y-6">
    
    <div>
        <x-input-label for="nombre" :value="__('Nombre')"/>
        <x-text-input wire:model="form.nombre" id="nombre" name="nombre" type="text" class="mt-1 block w-full" autocomplete="nombre" placeholder="Nombre"/>
        @error('form.nombre')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="apellido" :value="__('Apellido')"/>
        <x-text-input wire:model="form.apellido" id="apellido" name="apellido" type="text" class="mt-1 block w-full" autocomplete="apellido" placeholder="Apellido"/>
        @error('form.apellido')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="edad" :value="__('Edad')"/>
        <x-text-input wire:model="form.edad" id="edad" name="edad" type="text" class="mt-1 block w-full" autocomplete="edad" placeholder="Edad"/>
        @error('form.edad')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="fecha_nacimiento" :value="__('Fecha Nacimiento')"/>
        <x-text-input wire:model="form.fecha_nacimiento" id="fecha_nacimiento" name="fecha_nacimiento" type="text" class="mt-1 block w-full" autocomplete="fecha_nacimiento" placeholder="Fecha Nacimiento"/>
        @error('form.fecha_nacimiento')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="c_i" :value="__('Ci')"/>
        <x-text-input wire:model="form.CI" id="c_i" name="CI" type="text" class="mt-1 block w-full" autocomplete="CI" placeholder="Ci"/>
        @error('form.CI')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="sexo" :value="__('Sexo')"/>
        <x-text-input wire:model="form.sexo" id="sexo" name="sexo" type="text" class="mt-1 block w-full" autocomplete="sexo" placeholder="Sexo"/>
        @error('form.sexo')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input wire:model="form.email" id="email" name="email" type="text" class="mt-1 block w-full" autocomplete="email" placeholder="Email"/>
        @error('form.email')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="contacto_enmergencia" :value="__('Contacto Enmergencia')"/>
        <x-text-input wire:model="form.contacto_enmergencia" id="contacto_enmergencia" name="contacto_enmergencia" type="text" class="mt-1 block w-full" autocomplete="contacto_enmergencia" placeholder="Contacto Enmergencia"/>
        @error('form.contacto_enmergencia')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="cargos_id" :value="__('Cargos Id')"/>
        <x-text-input wire:model="form.cargos_id" id="cargos_id" name="cargos_id" type="text" class="mt-1 block w-full" autocomplete="cargos_id" placeholder="Cargos Id"/>
        @error('form.cargos_id')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>