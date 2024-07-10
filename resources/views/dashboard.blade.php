<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenido')}} {{ Auth::user()->name }}

        </h2>
    </x-slot>

    <div class="py-12">
        {{-- Grid --}}
        @if (session()->has('message'))
            <div
                class="alert alert-success text-lg text-green-500 space-y-1 font-bold bg-green-100 ps-2 border-transparent border-l-green-700 border-4 p-3 my-3">
                {{ session('message') }}
            </div>
        @endif
            {{-- Usuarios --}}
        <div class="max-w-7xl grid grid-cols-1 px-3 gap-4 mx-auto sm:grid-cols-3 sm:px-0 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                    <div class="flex items-center justify-between">
                        <div class="bg-gradient-to-r from-green-300 to-teal-500 p-3 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                              </svg>
                        </div>
                        <div class="block ml-3">
                            <p class="font-extralight text-1xl text-center">Usuarios</p>
                                  <h2 class="text-4xl text-center">
                                    {{$register}}
                                  </h2>
                          </div>
                    </div>

                </div>
                {{-- Department --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                    <div class="flex items-center justify-between">
                        <div class="bg-gradient-to-r from-red-400 to-rose-500 p-3 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                              </svg>
                        </div>
                        <div class="block ml-3">
                            <p class="font-extralight text-1xl text-right">Departamento mas concurrido</p>
                                  <h2 class="text-3xl text-right">
                                    {{$department->department}}
                                  </h2>
                          </div>
                    </div>

                </div>
                {{-- Other --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                    <div class="flex items-center justify-between">
                        <div class="bg-gradient-to-r from-cyan-400 to-sky-500 p-3 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                              </svg>

                        </div>
                        <div class="block ml-3">
                            <p class="font-extralight text-1xl text-right">Nuevos registros</p>
                                  <h2 class="text-4xl text-right">
                                    {{$countV}}
                                  </h2>
                          </div>
                    </div>

                </div>
                {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                    <div>
                        <h1 class="font-medium text-1xl text-center my-2">Departamento mas concurrido</h1>
                    </div>
                    <div class="flex justify-between">
                        <h2 class="text-4xl">
                            {{$department->department}}
                        </h2>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-16">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                          </svg>
                    </div>
                </div> --}}
                {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                    <div>
                        <h1 class="font-medium text-1xl text-center my-2">Departamento mas concurrido</h1>
                    </div>
                    <div class="flex justify-between">
                        <h2 class="text-4xl">
                            {{$department->department}}
                        </h2>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-16">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                          </svg>
                    </div>
                </div> --}}
        </div>
        {{-- endGrid --}}

        {{-- table --}}
        <div class="grid grid-cols-1 px-3 my-5 max-w-7xl mx-auto sm:px-6 sm:grid-cols-2 md:grid-cols-2 lg:px-8 gap-5">

                <livewire:show-users :table="$table"/>
            <div class="bg-white px-10 shadow-sm sm:rounded-lg min-h-full">


                    {!! $chart->container() !!}
            </div>

        </div>

        {{-- endTable --}}
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    {!! $chart->script() !!}

</x-app-layout>
