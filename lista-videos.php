<?php
$sql = "SELECT * FROM tbvideos";
$rs = mysqli_query($conexao,$sql);
?>
<h2>Lista de Vídeos</h2>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Duração</th>
            <th>Valor da Locação</th>
            <th>Categoria</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
       <?php
       while($dados = mysqli_fetch_assoc($rs)){
       ?>
        <tr>
            <td>353</td>
            <td>Crepusculo</td>
            <td>2:30 hs</td>
            <td>R$ 10,00</td>
            <td>Romance</td>
            <td>Disponivel</td>
        </tr>
        <?php
       }
        ?>
    </tbody>
</table>