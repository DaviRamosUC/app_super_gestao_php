<h3>Fornecedor</h3>

@php
    /*
        if (true){

        }elseif (true){

        }else{

        }
     */
@endphp

{{--Imprime o array recebido pelo FornecedorController.index, não é possível fazer a impressão pelo @php--}}
{{--@dd($fornecedores)--}}

{{--Exemplo de if // Para ver retire a tag @php e /* juntamente com */ e @endphp --}}
@php
    /*
    @if(count($fornecedores) > 0 && count($fornecedores)<10)
        <h3>Existem alguns fornecedores cadastrados</h3>
    @elseif(count($fornecedores)>10)
        <h3>Existem vários fornecedores cadastrados</h3>
    @else
        <h3>Ainda não existem fornecedores cadastrados</h3>
    @endif
    */
@endphp

{{--@unless é a negação do if, é igual a if(!condicao)--}}
Fornecedor: {{$fornecedores[0]['nome']}}
<br>
Status: {{$fornecedores[0]['status']}}
<br>
@if(!($fornecedores[0]['status'] == 'S'))
    Fornecedor inativo
@endif
<br> {{--O exemplo acima tem o mesmo resultado que o exemplo abaixo--}}
@unless($fornecedores[0]['status'] == 'S')
    Fornecedor inativo
@endunless
