<x-layouts.layout>
    <x-slot name="tituloPagina">Categorias</x-slot>
    <x-layouts.menus.navegacao></x-layouts.menus.navegacao>
    <x-site.mostrar.categorias :estoques="$estoques = ''" :categorias="$categorias"></x-site.mostrar.categorias>
</x-layouts.layout>
