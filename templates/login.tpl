{include file='templates/head.tpl'}

<div>
    <h3>Iniciar sesion</h3>
    <form action="verify" method="post">

        <input placeholder="user" type="text" name="user" id="user" required>
        <input placeholder="password" type="password" name="password" id="password" required>

        <input type="submit" value="Iniciar sesion">
        <input type="submit" value="Entrar como invitado">

    </form>

    <h4>{$error}</h4>

</div>


{include file='templates/footer.tpl'}