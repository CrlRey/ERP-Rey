
   <form novalidate action="" class="md:w-1/2 space-y-5" wire:submit.prevent='agregarRegistro'>
    @csrf
    <div class="text-start">
        <x-input-label for="name" :value="__('Nombre')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" wire:model="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
    <div class="text-start">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" wire:model="email" :value="old('email')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>
    <div class="text-start">
        <x-input-label for="department" :value="__('departamento')" />
        <select wire:model="department" id="department" class="rounded-md shadow-sm border-gray-300 focus:border-green-500 focus:ring-green-500 w-full">
        @foreach ($options as $option )
            <option value="{{$option->id}}">{{$option->department}}</option>
        @endforeach
    </select>
        <x-input-error :messages="$errors->get('department')" class="mt-2" />

    </div>
   <div class="flex space-x-6">
     <div class="text-start w-1/2">
          <x-input-label for="rol" :value="__('Rol')" class="block"/>
          <x-text-input id="rol" class="block mt-1 w-full" type="text" wire:model="rol" :value="old('rol')" required autofocus autocomplete="rol" />
          <x-input-error :messages="$errors->get('rol')" class="mt-2" />
     </div>
     <div class="text-start w-1/2">
         <x-input-label for="phone" :value="__('Numero de telefono')" class="block"/>
         <x-text-input id="phone" class="block mt-1 w-full" type="tel" wire:model="phone" :value="old('phone')" required autofocus autocomplete="phone" />
         <x-input-error :messages="$errors->get('phone')" class="mt-2" />
     </div>
   </div>

   <div class="text-start ">
    <x-input-label for="nif" :value="__('Número de Identificación Fiscal')" class="block"/>
    <x-text-input id="nif" class="block mt-1 w-full" type="text" wire:model="nif" :value="old('nif')" required autofocus autocomplete="rol" />
    <x-input-error :messages="$errors->get('nif')" class="mt-2" />
   </div>

   <div class="text-start ">
    <x-input-label for="create_date" :value="__('Fecha de alta')" class="block"/>
    <x-text-input id="create_date" class="block mt-1 w-full" type="date" wire:model="create_date" :value="old('create_date')" required autofocus autocomplete="create_date" />
    <x-input-error :messages="$errors->get('create_date')" class="mt-2" />
   </div>

   <x-primary-button class="w-full mt-3 justify-center font-bold">
    {{ __('Guardar Registro') }}
    </x-primary-button>


   </form>

