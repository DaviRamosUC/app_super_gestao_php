<h3>Fornecedor</h3>

@php
    /*
        if(empty(@variavel)) {} retorna true se a variável estiver vazia
  *  ''
  *  0
  *  0.0
  * '0'
  * null
  *  false
  *  array()
  *  $var
     */
@endphp

@isset($fornecedores)
    @forelse($fornecedores as $indicie => $fornecedor)
        Iteração atual: {{$loop->iteration}}
        <br>
        Fornecedor: {{$fornecedor['nome']}}
        <br>
        Status: {{$fornecedor['status']}}
        <br>
        CNPJ: {{$fornecedor['cnpj'] ?? ''}}
        <br>
        Telefone: {{$fornecedor['ddd'] ?? ''}} {{$fornecedor['telefone'] ?? ''}}
        <br>
        @switch($fornecedor['ddd'])
            @case('11')
            São paulo - SP
            @break
            @case('32')
            Juiz de fora - MG
            @break
            @case('85')
            Fortaleza - CE
            @break
            @default
            Estado não identificado
        @endswitch
        <br>
        @if($loop->first)
            Primeira iteração do Loop
        @endif
        @if($loop->last)
            Última iteração do Loop
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados
    @endforelse
@endisset
