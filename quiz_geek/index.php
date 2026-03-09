<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Descubra seu DNA Tecnológico</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>🧬 Descubra seu DNA Tecnológico</h1>

<?php
if(isset($_COOKIE['jogador'])){
echo "<p class='volta'>Bem-vindo novamente, ".$_COOKIE['jogador']."!</p>";
}
?>

<p>
Responda algumas perguntas e descubra qual talento tecnológico
combina mais com você.
</p>

<a class="botao" href="quiz.php">Começar Quiz</a>

</div>

</body>
</html>