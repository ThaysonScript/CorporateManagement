<x-layouts.layout>
    <x-slot name="tituloPagina">Pagina Inicial</x-slot>
    <x-layouts.menus.navegacao></x-layouts.menus.navegacao>
    <x-site.home :estoques="$estoques"></x-site.home>
</x-layouts.layout>
