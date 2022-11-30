<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <nav>
                        <a href="{{route('perfil.index',auth()->user()->username)}}">Inicio</a>
                        <a href="{{route('perfil.index',auth()->user()->username)}}">Mi Perfil</a>
                        <a href="{{route('perfil.index',auth()->user()->username)}}">Solicitudes de amistad</a>
                        <a href="{{route('perfil.index',auth()->user()->username)}}">lista de pelicula</a>
                        <a href="{{route('perfil.index',auth()->user()->username)}}">Pelicula</a>
                        <a href="{{route('perfil.index',auth()->user()->username)}}">Editar pelicula</a>
                    </nav>
                    @yield('contenido')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
