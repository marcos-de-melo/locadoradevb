<?php
include("./db/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>LOCADORA DEV</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>
    <header>
        <h1>LOCADORA DEV</h1>
        <ul>
            <li>
                <a href="index.php?menu=home">Home</a>
            </li>
            <li>
                <a href="index.php?menu=lista-videos">Vídeos</a>
            </li>
            <li>
                <a href="index.php?menu=lista-categorias">Categorias</a>
            </li>
            <li>
                <a href="index.php?menu=lista-clientes">Clientes</a>
            </li>
            <li>
                <a href="index.php?menu=locacoes">Locações</a>
            </li>
        </ul>
    </header>
    <main>
        <?php
        if (isset($_GET["menu"])) {
            $menu = $_GET["menu"];
        } else {
            $menu = "";
        }
        switch ($menu) {
            case "home":
                include("home.php");
                break;
            case "lista-videos":
                include("lista-videos.php");
                break;
            case "cad-videos":
                include("cad-videos.php");
                break;
            case "inserir-videos":
                include("inserir-videos.php");
                break;
            case "editar-videos":
                include("editar-videos.php");
                break;
            case "lista-categorias":
                include("lista-categorias.php");
                break;
            case "lista-clientes":
                include("lista-clientes.php");
                break;
            case "locacoes":
                include("locacoes.php");
                break;
            default:
                include("home.php");
        }



        ?>
    </main>
</body>

</html>