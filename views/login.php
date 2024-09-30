<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>

    <style>
        /* Estilos globais */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #000; /* Preto */
            color: #fff; /* Branco */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Centraliza o conteúdo */
        main {
            background-color: #1a1a1a; /* Preto mais claro */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
            width: 300px;
            text-align: center;
        }

        /* Formulários */
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        /* Inputs */
        input {
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #333; /* Cinza escuro */
            color: #fff; /* Branco */
        }

        input::placeholder {
            color: #bbb; /* Cinza claro para placeholders */
        }

        /* Botão de Login */
        button {
            padding: 10px;
            border-radius: 5px;
            background-color: #FFD700; /* Amarelo ouro */
            color: #000; /* Preto */
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #FFC300; /* Amarelo mais claro */
        }

        /* Links */
        a {
            color: #FFD700; /* Amarelo ouro */
            text-decoration: none;
            margin-top: 20px;
            display: block;
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
        </form>
        <a href="index.php?action=register">Cadastrar-se</a>

    </main>

</body>

</html>
