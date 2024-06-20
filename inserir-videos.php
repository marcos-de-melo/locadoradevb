<h2>Inserir Vídeo</h2>
<?php
$tituloVideo = $_POST["tituloVideo"];
$duracaoVideo = $_POST["duracaoVideo"];
$valorLocacaoVideo = $_POST["valorLocacaoVideo"];
$idCategoria = $_POST["idCategoria"];

$sql = "INSERT INTO tbvideos (
tituloVideo,
duracaoVideo,
valorLocacaoVideo,
idCategoria
)values(
'{$tituloVideo}',
'{$duracaoVideo}',
'{$valorLocacaoVideo}',
'{$idCategoria}'
)
";
$rs = mysqli_query($conexao,$sql);

if($rs){
    echo "<p>Registro cadastrado com sucesso.</p>";
}else{
    echo "<p>Erro ao cadastrar o registro.</p>";
}
?>