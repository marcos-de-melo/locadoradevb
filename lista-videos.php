<?php
$sql = "select 
idVideo,
tituloVideo,
duracaoVideo,
valorLocacaoVideo,
nomeCategoria,
case
	when statusVideo = 1 then 'Disponivel'
    when statusVideo = 2 then 'Locado'
    when statusVideo = 3 then 'Indisponivel'
end as statusVideo 
 from 
tbvideos as v inner join tbcategorias as c on v.idCategoria = c.idCategoria 
order by tituloVideo asc";
$rs = mysqli_query($conexao,$sql);
?>
<h2>Lista de Vídeos</h2>
<div>
    <a href="index.php?menu=cad-videos">Novo Vídeo</a>
</div>
<div>
    <form action="index.php?menu=lista-videos" method="post">
      <label for="txtPesquisa">Pesquisar</label>
      <input type="search" name="txtPesquisa" id="txtPesquisa"> 
       <button type="submit"><i class="ph ph-magnifying-glass"></i></button>
    </form>
</div>
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