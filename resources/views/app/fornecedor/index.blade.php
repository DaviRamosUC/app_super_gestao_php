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

@if(count($fornecedores) > 0 && count($fornecedores)<10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores)>10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif
