<h2>Dados Pablício</h2>
<a href="?page=pablicio_add">Inserir dados</a>
<table class="table table-striped table-bordered">
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
    </tr>
    <?php
        $cod = 0;
        $sql = mysql_query("select * from tbl_pablicio");
        while ($linha = mysql_fetch_array($sql)) {
            $cod++;
            ?>
                <tr>
                    <td><?php echo $cod ?></td>
                    <td><?php echo $linha["nome"] ?></td>
                    <td><?php echo $linha["email"] ?></td>
                    <td><?php echo $linha["telefone"] ?></td>
                </tr>
            <?php
        }
    ?>
</table>

