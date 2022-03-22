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
    Fornecedor: {{$fornecedores[1]['nome']}}
    <br>
    Status: {{$fornecedores[1]['status']}}
    <br>
    CNPJ: {{$fornecedores[1]['cnpj'] ?? ''}}
    <br>
    Telefone: {{$fornecedores[1]['ddd'] ?? ''}} {{$fornecedores[1]['telefone'] ?? ''}}
    <br>
    @switch($fornecedores[1]['ddd'])
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
@endisset
