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
        <hr>
    @empty
        Não existem fornecedores cadastrados
    @endforelse
@endisset
