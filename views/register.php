<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
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

        div {
            background-color: #333; /* Caixa com fundo cinza escuro */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 0, 0.7); /* Sombra amarela */
            width: 100%;
            max-width: 400px; /* Define uma largura máxima */
            display: flex;
            flex-direction: column;
            justify-content: center; /* Centraliza os itens verticalmente */
            align-items: center; /* Centraliza os itens horizontalmente */
        }

        h2 {
            text-align: center;
            color: #ff0; /* Título amarelo */
            margin-bottom: 20px;
        }

        form {
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #ff0; /* Rótulos amarelos */
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid #ff0; /* Borda amarela */
            border-radius: 5px;
            background-color: #000; /* Fundo dos inputs preto */
            color: #fff; /* Texto branco */
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #ff0; /* Fundo do botão amarelo */
            color: #000; /* Texto do botão preto */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #ffd700; /* Botão mais claro ao passar o mouse */
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #ff0; /* Link amarelo */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div>
        <h2>Cadastro de Usuário</h2>
        <form action="index.php?action=register" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required>

            <label for="perfil">Perfil:</label>
            <select name="perfil" id="perfil">
                <option value="admin">Admin</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">Colaborador</option>
            </select>

            <button type="submit">Cadastrar</button>
        </form>

        



