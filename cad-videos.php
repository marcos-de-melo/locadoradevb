<h2>Cadastro de Vídeo</h2>
<div>
    <form action="index.php?menu=inserir-videos" method="post">
        <div>
            <label for="tituloVideo">Título</label>
            <input type="text" name="tituloVideo" id="tituloVideo">
        </div>
        <div>
            <label for="duracaoVideo">Duração do vídeo</label>
            <input type="text" name="duracaoVideo" id="duracaoVideo">
        </div>
        <div>
            <label for="valorLocacaoVideo">Valor da locação</label>
            <input type="text" name="valorLocacaoVideo" id="valorLocacaoVideo">
        </div>
        <div>
            <label for="idCategoria">Categoria</label>
            <select name="idCategoria" id="idCategoria">
                <option value="">Selecione uma categoria</option>
                <?php
                    $sqlC = "select * from tbcategorias order by nomeCategoria asc";
                    $rs = mysqli_query($conexao, $sqlC);
                    while($dadosC = mysqli_fetch_assoc($rs)){
                    ?>
                        <option value="<?=$dadosC["idCategoria"]?>"><?=$dadosC["nomeCategoria"]?></option>
                <?php
                        }
                ?>
            </select>
        </div>
        <div>
            <button type="submit">Cadastrar</button>
        </div>
    </form>
</div>