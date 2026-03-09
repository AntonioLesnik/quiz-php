<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Quiz Tecnológico</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Quiz Tecnológico</h1>

<form action="resultado.php" method="POST">

<label>Seu nome:</label>
<input type="text" name="nome" required>

<p>1. O que você prefere fazer?</p>
<label><input type="radio" name="p1" value="codigo" required> Programar</label>
<label><input type="radio" name="p1" value="arte"> Criar design</label>
<label><input type="radio" name="p1" value="jogos"> Criar jogos</label>
<label><input type="radio" name="p1" value="explorar"> Testar tecnologias</label>

<p>2. Qual ferramenta mais te interessa?</p>
<label><input type="radio" name="p2" value="codigo" required> VS Code</label>
<label><input type="radio" name="p2" value="arte"> Figma</label>
<label><input type="radio" name="p2" value="jogos"> Unity</label>
<label><input type="radio" name="p2" value="explorar"> Arduino</label>

<p>3. O que você faria em um projeto?</p>
<label><input type="radio" name="p3" value="codigo" required> Criaria o sistema</label>
<label><input type="radio" name="p3" value="arte"> Faria o layout</label>
<label><input type="radio" name="p3" value="jogos"> Criaria a jogabilidade</label>
<label><input type="radio" name="p3" value="explorar"> Testaria novas ideias</label>

<p>4. Qual matéria você prefere?</p>
<label><input type="radio" name="p4" value="codigo" required> Lógica</label>
<label><input type="radio" name="p4" value="arte"> Artes</label>
<label><input type="radio" name="p4" value="jogos"> Game design</label>
<label><input type="radio" name="p4" value="explorar"> Robótica</label>

<p>5. Qual dessas atividades parece divertida?</p>
<label><input type="radio" name="p5" value="codigo" required> Criar um app</label>
<label><input type="radio" name="p5" value="arte"> Criar uma interface</label>
<label><input type="radio" name="p5" value="jogos"> Criar um jogo</label>
<label><input type="radio" name="p5" value="explorar"> Testar gadgets</label>

<p>6. Qual dessas áreas te chama atenção?</p>
<label><input type="radio" name="p6" value="codigo" required> Desenvolvimento</label>
<label><input type="radio" name="p6" value="arte"> Design digital</label>
<label><input type="radio" name="p6" value="jogos"> Games</label>
<label><input type="radio" name="p6" value="explorar"> Inovação</label>

<p>7. O que você faria num hackathon?</p>
<label><input type="radio" name="p7" value="codigo" required> Programaria</label>
<label><input type="radio" name="p7" value="arte"> Criaria o visual</label>
<label><input type="radio" name="p7" value="jogos"> Criaria a mecânica</label>
<label><input type="radio" name="p7" value="explorar"> Testaria ideias</label>

<p>8. O que mais te define?</p>
<label><input type="radio" name="p8" value="codigo" required> Lógico</label>
<label><input type="radio" name="p8" value="arte"> Criativo</label>
<label><input type="radio" name="p8" value="jogos"> Imaginativo</label>
<label><input type="radio" name="p8" value="explorar"> Curioso</label>

<br><br>

<button class="botao" type="submit">Ver Resultado</button>

</form>

</div>

</body>
</html>