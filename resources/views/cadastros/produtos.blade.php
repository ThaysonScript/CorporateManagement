<x-layouts.layout>
    <x-slot name="tituloPagina">Cadastre Produtos</x-slot>
    <x-layouts.menus.navegacao></x-layouts.menus.navegacao>
    <x-cadastros.produtos :categorias="$categorias"></x-cadastros.produtos>
</x-layouts.layout>