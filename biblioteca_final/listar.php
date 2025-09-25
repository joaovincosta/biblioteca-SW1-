<?php
require 'conexao.php';
?>

<h2>lista de livros disponíveis</h2>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">TÍTULO</th>
                <th scope="col">GÊNERO</th>
                <th scope="col">AUTOR</th>
                <th scope="col">ANO</th>
                <th scope="col">PÁGINAS</th>
                <th scope="col">OPÇÕES</th>
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
                        <a href='form_atualizar.php?id=".$livro['id']."' class='btn btn-primary'>Atualizar</a>
                        <a href='excluir.php?id=".$livro['id']."' class='btn btn-danger'>Apagar</a>
                    </div>
                </td>
                ";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</div>