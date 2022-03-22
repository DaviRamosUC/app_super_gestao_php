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
    @php
        $i = 0
    @endphp
    @while(isset($fornecedores[$i]))
        Fornecedor: {{$fornecedores[$i]['nome']}}
        <br>
        Status: {{$fornecedores[$i]['status']}}
        <br>
        CNPJ: {{$fornecedores[$i]['cnpj'] ?? ''}}
        <br>
        Telefone: {{$fornecedores[$i]['ddd'] ?? ''}} {{$fornecedores[$i]['telefone'] ?? ''}}
        <br>
        @switch($fornecedores[$i]['ddd'])
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
        @php $i++; @endphp
        <hr>
    @endwhile
@endisset
