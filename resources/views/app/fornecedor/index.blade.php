<h3>Fornecedor</h3>

@php
    /*
    if (empty($variavel)) {} // retornar true se a variável estiver vazia
    - ''
    - 0
    - 0.0
    - '0'
    - null
    - false
    - array()
    - $var
    */
@endphp

@isset ($fornecedores)

    @forelse ($fornecedores as $indice => $fornecedor)

        @dd($loop)

        Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) ({{ $fornecedor['telefone'] ?? '' }})
        <br>
        @if ($loop->first)
            Primeira iteração do Loop

            <br>
            Total de registros: {{ $loop->count }}
        @endif

        @if ($loop->last)
            Última iteração do Loop

            
        @endif
        <hr>
    @empty
        Não existe fornecedores cadastrados!!!
    @endforelse

@endisset
