<?php $render('header');?>
<h2>Adicionar novo usuário</h2>
<form method="POST" action="<?php $base ?>novo">
    <label>
        Nome:<br>
        <input type="text" name="name">
    </label><br><br>
    <label>
        E-mail:<br>
        <input type="email" name="email">
    </label><br><br>
    <input type="submit" value="Adicionar">
</form>
<?php $render('footer')?>