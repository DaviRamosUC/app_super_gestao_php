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
    @for($i= 0; isset($fornecedores[$i]); $i++)
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
        <hr>
    @endfor
@endisset
