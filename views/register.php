<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <style>
        /* Estilos globais */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #000; /* Fundo preto */
            color: #fff; /* Texto branco */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Centralizando e estilizando o formulário */
        div {
            background-color: #1a1a1a; /* Fundo preto claro */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
            width: 300px;
            text-align: center;
        }

        h2 {
            color: #FFD700; /* Amarelo ouro */
            margin-bottom: 20px;
        }

        /* Estilizando inputs e botões */
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input, select {
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #333; /* Fundo cinza escuro */
            color: #fff; /* Texto branco */
        }

        /* Estilo para placeholders */
        input::placeholder {
            color: #bbb; /* Cinza claro */
        }

        button {
            padding: 10px;
            border-radius: 5px;
            background-color: #FFD700; /* Fundo amarelo */
            color: #000; /* Texto preto */
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #FFC300; /* Amarelo mais claro */
        }

        /* Links estilizados */
        a {
            color: #FFD700; /* Amarelo */
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
    <div>
        <h2>Cadastro de Usuário</h2>
        <form action="index.php?action=register" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required>
            <label for="perfil">Perfil</label>
            <select name="perfil" id="perfil">
                <option value="adimin">Adimin</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">Colaborador</option>
            </select>
 
            <button type="submit">Cadastrar</button>
        </form>
 
        <a href="index.php?action=login">Voltar ao Login</a>
    </div>
</body>
</html>
