<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>
<body class="bg-gray-100">
    <header class="bg-black shadow">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div>
                    <a href="/home" class="text-xl font-semibold text-gray-100">Funval</a>
                </div>
                <div>
                    <a href="/operadores" class="text-xl font-semibold text-gray-100">Operadores</a>
                </div>                <div>
                    <a href="/equipos" class="text-xl font-semibold text-gray-100">Equipos</a>
                </div>
                <div class="flex items-center">
                    <form action="{{ route('operadores.index') }}" method="GET" class="relative mr-6">
                        <input type="text" name="search" placeholder="Buscar operador" class="rounded-full w-64 pl-10 pr-4 py-2 border focus:border-blue-500 outline-none">
                        <button type="submit" class="absolute top-0 left-0 mt-2 ml-2">
                            <i class="fa-solid fa-magnifying-glass" style="color: #838a95;"></i>
                        </button>
                    </form>
                    <div class="relative">
                        <button class="flex items-center -ml-4 focus:outline-none" id="user-menu" aria-label="User menu" aria-haspopup="true">
                            <i class="fa-solid fa-circle-arrow-right fa-2xl" style="color: #a9aaad;"></i>
                        </button>
                        <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl" id="user-menu-content" aria-label="User menu">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Perfil</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Configuración</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Cerrar sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Definir el contenido principal de la página -->
    <main class="my-8">
        @yield('content')
    </main>
    <!-- Definir el pie de página con algunos enlaces -->
    <footer class="bg-white shadow">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div>
                    <div class="text-gray-600">© 2023 Brandon Rv. Todos los derechos reservados.</div>
                </div>
                <div class="flex items-center">
                    <a href="#" class="text-gray-600 hover:text-gray-800 mx-4">Acerca de</a>
                    <a href="#" class="text-gray-600 hover:text-gray-800 mx-4">Contacto</a>
                    <a href="#" class="text-gray-600 hover:text-gray-800 mx-4">Política de privacidad</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        const userMenu = document.getElementById('user-menu');
        const userMenuContent = document.getElementById('user-menu-content');
        userMenu.addEventListener('click', () => {
            userMenuContent.classList.toggle('hidden');
        });
    </script>
</body>
</html>
