<?php
session_start();

if (isset($_SESSION['perfil'])):
?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Usuários</title>
        <style>
            body {
                background-color: #000;
                /* Fundo preto */
                color: #fff;
                /* Texto branco */
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }

            .container {
                background-color: #333;
                /* Caixa com fundo cinza escuro */
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(255, 255, 0, 0.7);
                /* Sombra amarela */
                width: 100%;
                max-width: 800px;
                /* Define uma largura máxima */
                text-align: center;
            }

            h2 {
                text-align: center;
                color: #ff0;
                /* Título amarelo */
                margin-bottom: 20px;
            }

            .styled-table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }

            .styled-table thead tr {
                background-color: #ff0;
                /* Cabeçalho amarelo */
                color: #000;
                /* Texto do cabeçalho preto */
            }

            .styled-table th,
            .styled-table td {
                padding: 12px 15px;
                border: 1px solid #ff0;
                /* Bordas amarelas */
                text-align: center;
                color: #fff;
                /* Texto branco para o corpo */
            }

            .styled-table tbody tr {
                background-color: #333;
                /* Fundo das linhas */
            }

            .styled-table tbody tr:hover {
                background-color: #444;
                /* Cor de fundo ao passar o mouse */
            }

            a {
                display: inline-block;
                padding: 10px 20px;
                background-color: #ff0;
                /* Botões amarelos */
                color: #000;
                /* Texto dos botões preto */
                border-radius: 5px;
                text-decoration: none;
                margin: 10px;
                font-weight: bold;
            }

            a:hover {
                background-color: #ffd700;
                /* Mais claro ao passar o mouse */
            }

            .btn {
                display: block;
                margin-top: 20px;
            }
        </style>

    </head>

    <body class="<?= $_SESSION['perfil'] ?> "> <!-- Define a classe com base no perfil do usuário -->
        <div class="container">
            <h2>Lista de Usuários</h2>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Perfil</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['nome'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['perfil'] ?></td>
                            <td>
                                <?php if ($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor'): ?>
                                    <a href="index.php?action=edit&id=<?= $user['id'] ?>">Editar</a>

                                <?php endif; ?>

                                <!-- Insere botão de exclusão apenas para perfil admin -->
                                <?php if ($_SESSION['perfil'] == 'admin'): ?>
                                    <a href="index.php?action=delete&id=<?= $user['id'] ?>">Excluir</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <a href="index.php?action=dashboard" class="btn">Voltar ao Dashboard</a>
        </div>
    </body>

    </html>

<?php else: ?>

    <p>Erro: Você não tem permissão para visualizar essa página</p>

<?php
endif;
?>