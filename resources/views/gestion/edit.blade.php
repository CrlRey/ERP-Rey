<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-md px-4 my-10 verflow-hidden shadow-sm sm:rounded-lg p-5 sm:px-6 lg:px-8">
                <div class="p-6 text-gray-900 text-center font-bold text-3xl">
                    {{ __($register->nombre) }}
                       <div class="md:flex md:justify-center p-5">
                         <livewire:edit-collection :register="$register"/>
                       </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
