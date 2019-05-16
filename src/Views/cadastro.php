<form method="POST">
    <label for="">Nome</label>
    <input name="nome" type="text">
    <label for="">Email</label>
    <input name="email" type="email">
    <label for="">senha</label>
    <input name="senha" type="password">
    <button type="submit">Cadastrar</button>
</form>
<?php 
if(empty($aviso)){
    echo '';
}else{
    echo $aviso;
}
?>