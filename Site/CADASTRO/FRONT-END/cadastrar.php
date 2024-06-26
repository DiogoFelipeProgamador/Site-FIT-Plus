<?php
include_once('verificarcadastro.php');
if(isset($_GET['erro'])) {
    // Se houver, exiba a mensagem de erro
    $mensagem_erro = $_GET['erro'];
}

?>


<!DOCTYPE html>
<html>
<head>
<title>Fitmais</title>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
    <script src="../js/script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
</head>

<body>
    <header>
    <nav class="navbar">
        <div class="logo animate__animated animate__bounce" onclick="(window.location='inicio')">
            <h1>FIT+</h1>
        </div><!--logo-->
        <ul>
        <li><a href="inicio">Home</a></li>
            <li><a href="alimentação">Alimentação</a></li>
            <li><a href="exercicios">Exercicios</a></li>
            <li><a href="inicio#fit+">Fit+</a></li>
            <li class="button-test"><a href="calculos">Testes</a></li>
        </ul>
        <div class="menu-icon" onclick="menuShow()">
            <img src="imagens/btn-menu.png">
        </div><!--menu-icon-->
    </nav>


    </header>

    <section class="cadastrar">
            <form action="verificarcadastro.php" method="POST">
                <div class="box-cadastrar">
                <div class="mensagem-erro"><?php echo $mensagem_erro; ?></div>
                <h1>Cadastro</h1>
                <label>Nome</label>
                <input type="text" name="nome" placeholder="Nome" required>
                <label>E-mail</label>
                <input type="text" name="email"  placeholder="E-mail" required>
                <label>Senha</label>
                <input type="text" name="senha"  placeholder="Senha" required>
                <label>Altura</label>
                <input type="number" name="altura" step="0.010"  placeholder="Altura" required>
                <label>Peso</label>
                <input type="number" name="peso" step="0.010" placeholder="Peso" required>
                <label>Data de Nascimento</label>
                <input type="date" name="datanasc" required>
                <label>Sexo</label>
                <select name="sexo" required>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
                </select>
                <input type="submit" name="submit" value="Cadastrar">
                <a href="login.php">Ja tem cadastro? <br> Entrar</a>
            </div>
            </form>
    </section>

    <footer class="rodape">
        <div class="box-rodape">
            <div class="text-rodape">
                <p>Todos os direitos reservados</p>
            </div>
        </div>
    </footer>









</body>









</html>

