@props(['colorB' => 'bg-gray-100 border-b', 'colorG' => 'bg-white border-b'])

<div>
   <!-- component -->
   <div class="bg-white px-10 overflow-x-scroll sm:overflow-hidden shadow-sm sm:rounded-lg p-5">
    <div class="block sm:flex sm:justify-between">
        <h2 class="font-bold text-4xl my-8 text-center">Ultimos registros</h2>
      <div class="flex items-center">
          <a href="{{route('gestion.index')}}" class=" text-1xl font-semibold bg-gradient-to-r from-teal-500 to-emerald-500 text-white p-2 rounded-md hover:bg-green-600 transition-colors uppercase">Ver todos</a>
      </div>
    </div>
    <table class="overflow-hidden mt-5 sm:py-5">
        <thead class="bg-white border-b">
          <tr>
            <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4">Nombre</th>
            <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4">Rol</th>
            <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4">Departamento</th>

          </tr>
        </thead>
        <tbody >
        @foreach ($table as $tb)
         @if ($tb->id % 2 === 0)
             <tr {{ $attributes->merge(['class' => $colorB]) }}>
        @else
             <tr {{ $attributes->merge(['class' => $colorG]) }}>
        @endif
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$tb->nombre}}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium  text-gray-900">{{$tb->rol}}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$tb->department_name}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>

  </div>

</div>
