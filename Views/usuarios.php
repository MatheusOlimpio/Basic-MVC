<table class="hover">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Usuario</th>
            <th>Senha</th>
            <th>Data de Cadastro</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach($usuarios as $user){
                echo '<tr>';
                    echo '<td>'.$user['nome'].'</td>';
                    echo '<td>'.$user['usuario'].'</td>';
                    echo '<td>'.$user['senha'].'</td>';
                    echo '<td>'.$user['data_cadastro'].'</td>';
                echo '</tr>';
            }
        ?>
    </tbody>
</table>