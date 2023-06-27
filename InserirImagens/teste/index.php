<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include('conn.php');

    $stmt = $pdo->prepare('SELECT caminho FROM imagens');
    $stmt->execute();
    $imagens = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($imagens as $imagem) {
        $caminhoImagem = $imagem['caminho'];

        // Exibe a imagem usando a tag <img> com o caminho da imagem no atributo src
        echo '<div class="teste">
                <img src="'.$caminhoImagem.'" alt="Imagem">
              </div>';
    }
    ?>
</body>
</html>
