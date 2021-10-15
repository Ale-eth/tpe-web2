{include file='templates/head.tpl'}

{include file='templates/logout.tpl'}


<h1>Bebida:</h1>
<ul>
    {foreach from=$bebidas item=$bebida}
    <li>
        <a class="list-group-item" href="bebida/{$bebida->tipo}">{$bebida->tipo}</a>
    </li>
    {/foreach}
</ul>


{include file='templates/insertBebida.tpl'}

<h4><a href="home">Inicio</a></h4>
{include file='templates/footer.tpl'}