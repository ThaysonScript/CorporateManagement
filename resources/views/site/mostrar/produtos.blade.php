<x-layouts.layout>
    <x-slot name="tituloPagina">Cadastrar Categorias</x-slot>
    <x-layouts.menus.navegacao></x-layouts.menus.navegacao>
    <x-site.mostrar.produtos :produtos="$produtos" :categorias="$categorias"></x-cadastros.categorias>
</x-layouts.layout>