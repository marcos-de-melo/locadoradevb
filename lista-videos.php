<?php
$sql = "select 
idVideo,
tituloVideo,
duracaoVideo,
valorLocacaoVideo,
nomeCategoria,
statusVideo
 from 
tbvideos as v inner join tbcategorias as c on v.idCategoria = c.idCategoria";
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
            <td><?=$dados["idVideo"]?></td>
            <td><?=$dados["tituloVideo"]?></td>
            <td><?=$dados["duracaoVideo"]?></td>
            <td>R$ <?=$dados["valorLocacaoVideo"]?></td>
            <td><?=$dados["nomeCategoria"]?></td>
            <td><?=$dados["statusVideo"]?></td>
        </tr>
        <?php
       }
        ?>
    </tbody>
</table>