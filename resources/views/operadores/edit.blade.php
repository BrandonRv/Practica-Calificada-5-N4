<!-- resources/views/operadores/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <!-- Aquí puedes agregar el diseño del formulario para editar un operador en un modal -->
    <button id="openEditModal">Editar Operador</button>

    <!-- Modal -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <!-- Formulario de edición -->
            <form method="POST" action="/operadores/{{ $operador->id }}">
                @csrf
                @method('PUT')
                <!-- Campos del formulario con valores actuales -->
                <input type="text" name="nombre" value="{{ $operador->nombre }}">
                <!-- Otros campos -->
                <button type="submit">Actualizar</button>
            </form>
            <button id="closeEditModal">Cerrar</button>
        </div>
    </div>

    <!-- Puedes agregar scripts para controlar la apertura y cierre del modal de edición -->
    <script>
        // Código para mostrar y ocultar el modal de edición
    </script>
@endsection
