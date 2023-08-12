<x-layouts.layout>
    <x-slot name="tituloPagina">Cadastrar Fornecedores</x-slot>
    <x-layouts.menus.navegacao></x-layouts.menus.navegacao>
    <x-cadastros.fornecedores :estoques="$estoques" :categorias="$categorias" :produtos="$produtos"></x-cadastros.fornecedores>
</x-layouts.layout>