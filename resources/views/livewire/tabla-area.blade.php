<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">


            <div class="grid grid-cols-2">
                <div class="col-span-1 sm:col-span-1 m-4">
                    <label for="nombre_area" class="block text-sm font-medium text-gray-700">Nombre Área</label>
                    <input type="text" wire:model="nombre_area" name="nombre_area" id="nombre_area"
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="col-span-1 sm:col-span-1 m-4">

                    @if ($bandera_boton == 0)
                        <button wire:click="registrar()"
                            class="inline-flex justify-center px-4 py-2 ml-10 mt-6 text-sm font-medium text-white bg-green-600 border border-transparent rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Registrar Área
                        </button>
                    @else
                        <button wire:click="guardar()"
                            class="inline-flex justify-center px-4 py-2 ml-10 mt-6 text-sm font-medium text-white bg-green-600 border border-transparent rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Actualizar
                        </button>
                    @endif


                </div>
            </div>
        </div>
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <div class="grid grid-cols-4">
                                <div class=" col-span-1 flex px-2 py-2 bg-white border-t border-gray-200 sm:px-3">
                                    <select wire:model='perPage'
                                        class=" border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm mr-4">
                                        <option value="5">5 por página</option>
                                        <option value="10">10 por página</option>
                                        <option value="25">25 por página</option>
                                        <option value="50">50 por página</option>
                                        <option value="100">100 por página</option>
                                    </select>
                                </div>
                                <div class=" col-span-3 flex px-2 py-2 bg-white border-t border-gray-200 sm:px-3">
                                    <input wire:model="search" type="text" placeholder="Buscar"
                                        class="w-full col-span-3 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                            </div>
                        </tr>
                        @if ($areas->count())
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    <div class="flex justify-center text-center">
                                        ID
                                        @if ($sortAsc)
                                            <span class="cursor-pointer" wire:click="sortBy('id')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path
                                                        d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h7a1 1 0 100-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z" />
                                                </svg>
                                            </span>
                                        @endif
                                        @if (!$sortAsc)
                                            <span class="cursor-pointer" wire:click="sortBy('id')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path
                                                        d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM13 16a1 1 0 102 0v-5.586l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L13 10.414V16z" />
                                                </svg>
                                            </span>
                                        @endif
                                    </div>
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    <div class="flex text-left">
                                        Nombre del área
                                        @if ($sortAsc)
                                            <span class="cursor-pointer" wire:click="sortBy('nombre_area')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path
                                                        d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h7a1 1 0 100-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z" />
                                                </svg>
                                            </span>
                                        @endif
                                        @if (!$sortAsc)
                                            <span class="cursor-pointer" wire:click="sortBy('nombre_area')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path
                                                        d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM13 16a1 1 0 102 0v-5.586l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L13 10.414V16z" />
                                                </svg>
                                            </span>
                                        @endif
                                    </div>
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Operaciones
                                </th>
                            </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($areas as $area)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                    {{ $area->id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $area->nombre_area }}
                                </td>
                                <td class="flex justify-items-center px-6 py-4 text-sm font-medium text-right
                                        whitespace-nowrap">
                                    <button wire:click="editar({{ $area->id }})"
                                        class="inline-flex items-center h-8 px-4 m-2 text-sm text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">Editar</button>

                                    <button wire:click="triggerConfirm({{ $area->id }})"
                                        class="inline-flex items-center h-8 px-4 m-2 text-sm text-indigo-100 transition-colors duration-150 bg-red-700 rounded-lg focus:shadow-outline hover:bg-red-800">Eliminar</button>
                                </td>
                            </tr>
                        @endforeach
                        <!-- More items... -->
                    </tbody>
                </table>
                <div class="px-4 py-3 bg-white border-t border-gray-200 sm:px-6">
                    {{ $areas->links() }}
                </div>
            @else
                <div class="px-4 py-3 bg-white border-t border-gray-200 sm:px-6">
                    <h6 class="text-center text-gray-500">No se encontró a ningún campo que coincida con:
                        "{{ $search }}"</h6>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
