{include file='templates/head.tpl'}


<h1> Bebida: </h1>

            <ul >
                <li>Bebida: {$bebida[0]->tipo} </li> 
                <li>Categoria: {$bebida[0]->categoria}</li>
                <li>Precio por kg: {$bebida[0]->precio_kg }$</li>
            </ul>

             <input type="submit" value="Eliminar bebida">

<h4><a href="../home">Inicio</a></h4>

{include file='templates/footer.tpl'}