<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            background-color: #000; /* Fundo preto */
            color: #fff; /* Texto branco */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #333; /* Fundo cinza escuro */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 0, 0.7); /* Sombra amarela */
            width: 100%;
            max-width: 500px; /* Largura máxima */
            text-align: center; /* Centraliza o texto */
        }

        h1 {
            color: #ff0; /* Amarelo para o título */
            margin-bottom: 20px;
        }

        p {
            color: #fff; /* Texto branco */
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff0; /* Fundo amarelo */
            color: #000; /* Texto preto */
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .btn:hover {
            background-color: #ffd700; /* Mais claro no hover */
        }
    </style>
</head>
 
<body class="<?= $_SESSION['perfil']  ?>"> <!-- Define a classe com base no perfil -->
    <div class="container">
        <h1>Bem-vindo, <?= $_SESSION['perfil']  ?>!</h1>
        <p>Esta é a visão do perfil <?= $_SESSION['perfil']  ?>.</p>

        <?php if($_SESSION['perfil'] == 'admin'):  ?>
            <!-- Admin pode gerenciar usuários (editar e excluir) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Admin)</a>
        <?php elseif($_SESSION['perfil'] == 'gestor'):  ?>
            <!-- Gestor pode gerenciar usuários (apenas editar) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Gestor)</a>
            <p>Área exclusiva do Gestor.</p>
 
        <?php else: ?>
            <p>Área exclusiva do Colaborador.</p>
        <?php endif; ?>

        <br><br><br><br>
        <!-- Link para logout -->
        <a href="index.php?action=logout" class="btn">Logout</a>
    </div>
</body>
 
</html>
