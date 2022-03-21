<h3>Principal(view)</h3>
{{--Usando o método name nas rotas em web.php podemos criar um nome para a rota e assim usar
 o método route nos arquivos html e php dentro do framework--}}
<ul>
    <li>
        <a href="{{route('site.index')}}">Principal</a>
    </li>
    <li>
        <a href="{{route('site.sobrenos')}}">Sobre Nós</a>
    </li>
    <li>
        <a href="{{route('site.contato')}}">Contato</a>
    </li>
</ul>
