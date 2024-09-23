<?php $render('header');?>
<a href="./novo">Novo Usuários</a>
<table border="1" width="100%">
    <tr>
        <th>ID</ht>
        <th>NOME</ht>
        <th>E-EMAIL</ht>
        <th>AÇÔES</ht>
    </tr>
    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
                <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">[ Editar ]</a>
                <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')">[ Excluir ]</a>
            </td>
        </tr>
        <?php endforeach; ?>
</table>
<button>
</button>
<?php $render('footer')?>
