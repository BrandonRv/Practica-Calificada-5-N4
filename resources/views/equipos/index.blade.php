<!-- resources/views/operadores/index.blade.php -->
@extends('layouts.app')

@section('title', 'Lista de equipos')

@section('content')
    <div class="container mx-auto px-6 py-3">
        <div class="flex w-full items-center">
            <h1 class="text-4xl whitespace-nowrap font-bold">Lista de Equipos</h1>
            <div class="w-full flex justify-end items-end m-6 mb-8">
                <button class="bg-blue-500 hover:bg-blue-700 justify-end text-white font-bold py-2 px-4 rounded"
                    id="open-modal">Nuevo Equipo</button>
            </div>
        </div>
        <table class="table-auto w-full mt-4">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Nombre del Equipo</th>
                    <th class="px-4 py-2">Marca</th>
                    <th class="px-4 py-2">Fecha de Compra</th>
                    <th class="px-4 py-2">Estado</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($equipos as $equipo)
                    <tr>
                        <td class="border px-4 py-2">{{ $equipo->id }}</td>
                        <td class="border px-4 py-2">{{ $equipo->nombre }}</td>
                        <td class="border px-4 py-2">{{ $equipo->marca }}</td>
                        <td class="border px-4 py-2">{{ $equipo->fecha_compra }}</td>
                        <td class="border px-4 py-2">{{ $equipo->estado }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('edquipos.show', $equipo->id) }}"
                                class="text-white font-bold py-1 px-2 rounded"><i class="fa-solid fa-eye fa-xl" style="color: #d1b500;"></i></a>
                            <a href="{{ route('edquipos.edit', $equipo->id) }}"
                                class="text-white font-bold py-1 px-2 rounded"><i class="fa-solid fa-pen-to-square fa-xl" style="color: #00cc33;"></i></a>
                            <form action="{{ route('edquipos.destroy', $equipo->id) }}" method="POST"
                                class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-white font-bold py-1 px-2 rounded"
                                    onclick="return confirm('¿Estás seguro de eliminar este operador?')"><i class="fa-solid fa-trash fa-xl" style="color: #ff0000;"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Definir el modal con el formulario -->
        <div class="hidden fixed z-10 inset-0 overflow-y-auto" id="modal">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" id="modal-backdrop">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                    id="modal-content">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div
                                class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 sm:mx-0 sm:h-10 sm:w-10">
                                <svg class="h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Insertar nuevo Equipo</h3>
                                <div class="mt-2">
                                    <form action="{{ route('edquipos.store') }}" method="POST" id="form">
                                        @csrf
                                        <div class="grid grid-cols-2 gap-4">
                                            <div class="col-span-1">
                                                <label for="nombre"
                                                    class="block text-sm font-medium text-gray-700">Nombre</label>
                                                <input type="text" name="nombre" id="nombre"
                                                    class="mt-1 p-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                    required>
                                            </div>
                                            <div class="col-span-1">
                                                <label for="marca"
                                                    class="block text-sm font-medium text-gray-700">Marca del Equipo</label>
                                                <input type="text" name="marca" id="marca"
                                                    class="mt-1 p-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                    required>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="fecha_compra"
                                                    class="block text-sm font-medium text-gray-700"></label>
                                                <input type="text" name="fecha_compra" id="fecha_compra"
                                                    class="mt-1 p-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                    required>
                                            </div>
                                            <div class="col-span-1">
                                                <label for="estado"
                                                    class="block text-sm font-medium text-gray-700">Estado Actual</label>
                                                <input type="text" name="estado" id="estado"
                                                    class="mt-1 p-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                    required>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button type="submit" form="form"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                            Guardar
                        </button>
                        <button type="button"
                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:mr-3 sm:w-auto sm:text-sm"
                            id="close-modal">
                            Cancelar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const openModal = document.getElementById('open-modal');
        const closeModal = document.getElementById('close-modal');
        const modal = document.getElementById('modal');
        const modalBackdrop = document.getElementById('modal-backdrop');
        const modalContent = document.getElementById('modal-content');
        openModal.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });
        closeModal.addEventListener('click', () => {
            modal.classList.add('hidden');
        });
        modalBackdrop.addEventListener('click', () => {
            modal.classList.add('hidden');
        });
        modalContent.addEventListener('click', (event) => {
            event.stopPropagation();
        });
    </script>
@endsection
