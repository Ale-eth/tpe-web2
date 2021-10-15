{include file='templates/head.tpl'}

{include file='templates/logout.tpl'}

<h1> Categorias: </h1>
 
             <ul class="list-group">

              {foreach from=$categorias item=$tabla}
                <li class="list-group-item"><a class="list-group-item" href="categoria/{$tabla->categoria}">{$tabla->categoria}</a></li>
              {/foreach}

            
             </ul>


{include file='templates/insertCategoria.tpl'}
<h4><a href="home">Inicio</a></h4>
{include file='templates/footer.tpl'}