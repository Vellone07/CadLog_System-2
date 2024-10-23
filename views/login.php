<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <style>
        /* Define o fundo preto e o texto branco */
        body {
            background-color: #000000;
            color: #ffffff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Centraliza o conteúdo na tela */
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        /* Estiliza o formulário, centralizando os campos */
        form {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            width: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Campos de email e senha centralizados */
        input[type="email"], input[type="password"] {
            width: 90%;
            padding: 15px;
            margin: 15px 0;
            font-size: 16px;
            border: 1px solid #000000;
            border-radius: 5px;
        }

        /* Botão estilizado com visual mais elegante */
        button {
            background-color: #FFD700;
            color: #000000;
            padding: 15px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 90%;
            margin-top: 20px;
        }

        button:hover {
            background-color: #FFC400;
        }

        /* Link "Cadastrar-se" alinhado abaixo do botão */
        a {
            color: #FFD700;
            text-decoration: none;
            margin-top: 20px;
            font-size: 16px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <main>
        <form method="post" action="index.php?action=login">
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="senha" placeholder="Senha" required><br>
            <button type="submit">Login</button>
            <!-- Link de cadastro posicionado abaixo do botão de login -->
            <a href="index.php?action=register">Cadastrar-se</a>
        </form>
    </main>
</body>

</html>


