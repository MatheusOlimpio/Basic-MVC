<div class="card center" style="width: 100%;">
    <div class="card-divider">
        <h4>Tabela de Usuarios</h4>
    </div>
    <table class="hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Data de Cadastro</th>
                <th>Opcoes</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($usuarios as $user){
                    echo '<tr>';
                        echo '<td>'.$user['nome'].'</td>';
                        echo '<td>'.$user['email'].'</td>';
                        echo '<td>'.$user['data_cadastro'].'</td>';
                        echo '<td><a class="button radius bordered shadow success">Editar</a> <a class="button radius bordered shadow alert">Excluir</a></td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</div>