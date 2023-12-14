<!-- resources/views/operadores/create.blade.php -->
@extends('layouts.app')

@section('title', 'Crear nuevo operador')

@section('content')
 <!-- Definir el modal con el formulario -->
    <div class="fixed z-10 inset-0 overflow-y-auto" id="modal">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" id="modal-backdrop">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" id="modal-content">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 sm:mx-0 sm:h-10 sm:w-10">
                            <svg class="h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Crear nuevo operador</h3>
                            <div class="mt-2">
                                <form action="{{ route('operadores.store') }}" method="POST" id="form">
                                    @csrf
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="col-span-1">
                                            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                                            <input type="text" name="nombre" id="nombre" class="mt-1 p-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                                        </div>
                                        <div class="col-span-1">
                                            <label for="apellido" class="block text-sm font-medium text-gray-700">Apellido</label>
                                            <input type="text" name="apellido" id="apellido" class="mt-1 p-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                                        </div>
                                        <div class="col-span-2">
                                            <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección</label>
                                            <input type="text" name="direccion" id="direccion" class="mt-1 p-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                                        </div>
                                        <div class="col-span-1">
                                            <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                                            <input type="text" name="telefono" id="telefono" class="mt-1 p-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                                        </div>
                                        <div class="col-span-1">
                                            <label for="edad" class="block text-sm font-medium text-gray-700">Edad</label>
                                            <input type="number" name="edad" id="edad" class="mt-1 p-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="submit" form="form" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Guardar
                    </button>
                    <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:mr-3 sm:w-auto sm:text-sm" id="close-modal">
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
