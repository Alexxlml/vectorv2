<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-red-700">
            Registro del colaborador
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <livewire:formulario-colaborador></livewire:formulario-colaborador>
            </div>
        </div>
    </div>
</x-app-layout>