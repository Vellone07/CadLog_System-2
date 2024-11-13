<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <style>
        /* CSS embutido */
        body.edit-body {
            background-color: #000; /* fundo preto */
            color: #fff; /* texto branco */
            font-family: Arial, sans-serif;
        }

        .edit-container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #1a1a1a; /* fundo mais escuro para o container */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .edit-container h2 {
            text-align: center;
            color: #FFD700; /* amarelo ouro */
        }

        .edit-form label {
            display: block;
            margin-bottom: 5px;
            color: #FFD700; /* amarelo ouro */
        }

        .edit-form input[type="text"],
        .edit-form input[type="email"],
        .edit-form select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #FFD700; /* borda amarela */
            border-radius: 4px;
            background-color: #333; /* fundo cinza escuro */
            color: #fff;
        }

        .edit-form .btn {
            width: 100%;
            padding: 10px;
            background-color: #FFD700; /* amarelo ouro */
            color: #000;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .edit-form .btn:hover {
            background-color: #ffc700; /* amarelo mais claro ao passar o mouse */
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #FFD700; /* amarelo ouro */
            text-decoration: none;
            transition: color 0.3s;
        }

        .back-link:hover {
            color: #ffc700; /* amarelo mais claro ao passar o mouse */
        }
    </style>
</head>
 
<body class="edit-body">
    <div class="edit-container">
        <h2>Editar Usuário</h2>
        <form method="post" action="index.php?action=edit&id=<?= $user['id'] ?>" class="edit-form">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= $user['nome'] ?>" required>
 
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?= $user['email'] ?>" required>
 
            <label for="perfil">Perfil:</label>
            <select name="perfil" id="perfil">
                <option value="admin" <?= $user['perfil'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                <option value="gestor" <?= $user['perfil'] == 'gestor' ? 'selected' : '' ?>>Gestor</option>
                <option value="colaborador" <?= $user['perfil'] == 'colaborador' ? 'selected' : '' ?>>Colaborador</option>
            </select>
 
            <button type="submit" class="btn">Salvar</button>
        </form>
        <a href="index.php?action=list" class="back-link">Voltar para Lista de Usuários</a>
    </div>
</body>
 
</html>
