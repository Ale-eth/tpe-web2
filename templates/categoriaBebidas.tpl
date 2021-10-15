{include file='templates/head.tpl'}

{include file='templates/logout.tpl'}

<h1> Categoria: </h1>
 
             <ul class="list-group">
                {foreach from=$bebidas item=$bebida}
                <li class="list-group-item"><a href=../bebida/{$bebida->tipo}>{$bebida->tipo}</a></li>
                {/foreach}
             </ul>

<h4><a href="../home">Inicio</a></h4>
{include file='templates/footer.tpl'}