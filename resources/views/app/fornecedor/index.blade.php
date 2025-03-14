<h3>Fornecedor</h3>

@php
    /*
    if  (<!condicao>) {} // enquanto executa se o retorno for true
    */
@endphp

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
@if ( $fornecedores[0]['status'] !== 'S' )
    Fornecedor inativo
@endif
<br>
@unless ($fornecedores[0]['status'] == 'S') <!-- Se o retorno da condição for false -->
    Fornecedor inativo
@endunless

{{-- @unless executa se o retorno for false --}}