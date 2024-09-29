<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
</head>
<body>
    <h1>Perfil do Usuário</h1>
    <p>Nome: <?= htmlspecialchars($user[0]['name']); ?></p>
    <p>Email: <?= htmlspecialchars($user[0]['email']); ?></p>
</body>
</html>
