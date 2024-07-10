<div>

<form novalidate wire:submit.prevent='search'>
    <x-input-label for="nif_search" :value="__('Numero de identificacion fiscal (NIF)')"/>
    <x-text-input id="nif_search" class="block mt-1 w-1/2" type="text" wire:model="nif_search" wire:model.defer="nif_search"/>
    <x-input-error :messages="$errors->get('nif_search')" class="mt-2 w-1/2" />
    <x-primary-button class=" mt-3 justify-center font-bold bg-gradient-to-r from-teal-500 to-emerald-500 ">
            BUscar
    </x-primary-button>

</form>

@if ($data->count() > 0)
   <div class="overflow-x-scroll">
     <table >
         <thead>
             <tr>
                 <th  class="text-sm font-bold text-center text-gray-900 px-6 py-4">ID</th>
                 <th  class="text-sm font-bold text-center text-gray-900 px-6 py-4">Nombre</th>
                 <th  class="text-sm font-bold text-center text-gray-900 px-6 py-4">Rol</th>
                 <th  class="text-sm font-bold text-center text-gray-900 px-6 py-4">Departamento</th>
                 <th  class="text-sm font-bold text-center text-gray-900 px-6 py-4">Email</th>
                 <th  class="text-sm font-bold text-center text-gray-900 px-6 py-4">Telefono</th>
                 <th  class="text-sm font-bold text-center text-gray-900 px-6 py-4">NIF</th>

                 <div>
                  <th class="text-sm font-bold text-center text-gray-900 px-6 py-4">Editar</th>
                  <th class="text-sm font-bold text-center text-gray-900 px-6 py-4">Borrar</th>
                 </div>
             </tr>
         </thead>
         <tbody>
             @foreach ($data as $dt)

             <tr>
                 <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-900">{{$dt->id}}</td>
                 <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-900">{{$dt->nombre}}</td>
                 <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-900">{{$dt->rol}}</td>
                 <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-900">{{$dt->department_name}}</td>
                 <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-900">{{$dt->email}}</td>
                 <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-900">{{$dt->telefono}}</td>
                 <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-900">{{$dt->nif}}</td>
                 <div>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-900"><a href="{{route('gestion.edit', $dt->nif)}}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-sky-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                      </svg>
                      </a></td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-900">
                        <button type="button" wire:click="$dispatch('prueba', {{$dt->id}})"  wire:click="$refresh">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-red-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </button>
                    </td>
                  </div>
                </tr>

             @endforeach
         </tbody>
     </table>
   </div>
@else
   <p>No hay nada para mostrar</p>
@endif
</div>

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @script
    <script>
        data = []
        $wire.on('prueba', dtId => {
            Swal.fire({
    title: "¿Eliminar Registro?",
    text: "¡Esta operacion no se puede revertir!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "¡Si, eliminar!"
    }).then((result) => {
    if (result.isConfirmed) {
        data.push(dtId)
        $wire.dispatch('eliminarRegistro', data)
        console.log(data)
        Swal.fire({
        title: "¡Registro Eliminado!",
        text: "Los datos se han eliminado exitosamente",
        icon: "success"
        });
    }
    });
        } )

    </script>
    @endscript
@endpush
