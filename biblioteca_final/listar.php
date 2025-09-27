<?php
require 'conexao.php';
?>

<h2 class="text-center my-4">lista de livros disponíveis</h2>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">título</th>
                <th scope="col">gênero</th>
                <th scope="col">autor</th>
                <th scope="col">ano</th>
                <th scope="col">páginas</th>
                <th scope="col">opções</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM livros";
            $stmt = $pdo->query($sql);
            while ($livro = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<th scope='row'>".$livro['id']."</th>";
                echo "<td>".$livro['titulo']."</td>";
                echo "<td>".$livro['genero']."</td>";
                echo "<td>".$livro['autor']."</td>";
                echo "<td>".$livro['ano']."</td>";
                echo "<td>".$livro['paginas']."</td>";
                echo "
                <td>
                    <div class='btn-group' role='group'>
                        <a href='form_atualizar.php?id=".$livro['id']."' class='btn btn-primary'>atualizar</a>
                        <a href='excluir.php?id=".$livro['id']."' class='btn btn-danger'>apagar</a>
                    </div>
                </td>
                ";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</div>