<?php

$nome = $_POST['nome'] ?? "Jogador";

setcookie("jogador",$nome,time()+86400*30);

$respostas = [
$_POST['p1'],$_POST['p2'],$_POST['p3'],$_POST['p4'],
$_POST['p5'],$_POST['p6'],$_POST['p7'],$_POST['p8']
];

$contador = [
"codigo"=>0,
"arte"=>0,
"jogos"=>0,
"explorar"=>0
];

foreach($respostas as $r){
$contador[$r]++;
}

$perfil="";
$descricao="";
$imagem="";

if($contador["codigo"] > $contador["arte"] && $contador["codigo"] > $contador["jogos"]){

$perfil=" Arquiteto do Código";
$imagem="img/codigo.png";
$descricao="Você possui uma mente lógica e analítica. Resolver problemas através de programação é algo natural para você. Desenvolvedores constroem sites, aplicativos e sistemas que fazem o mundo digital funcionar.";

}

elseif($contador["arte"] > $contador["codigo"] && $contador["arte"] > $contador["jogos"]){

$perfil=" Mestre do Design";
$imagem="img/design.png";
$descricao="Você tem talento para criatividade e estética. Designers transformam ideias em interfaces bonitas e fáceis de usar, criando experiências incríveis para os usuários.";

}

elseif($contador["jogos"] > $contador["codigo"]){

$perfil=" Criador de Games";
$imagem="img/gamer.png";
$descricao="Você gosta de desafios e mundos virtuais. Desenvolvedores de jogos misturam programação, criatividade e diversão para criar experiências interativas.";

}

else{

$perfil=" Explorador da Tecnologia";
$imagem="img/explorer.png";
$descricao="Sua curiosidade te leva a descobrir novas tecnologias. Pessoas como você gostam de experimentar, aprender e inovar no mundo tecnológico.";

}

$arquivo="contador.txt";

if(file_exists($arquivo)){
$total=file_get_contents($arquivo);
}else{
$total=0;
}

$total++;

file_put_contents($arquivo,$total);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Resultado</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Resultado</h1>

<h2><?php echo $nome; ?></h2>

<h3><?php echo $perfil; ?></h3>

<img src="<?php echo $imagem; ?>" class="imagemPerfil">

<p><?php echo $descricao; ?></p>

<p>Este quiz já foi jogado <?php echo $total; ?> vezes.</p>

<a class="botao" href="index.php">Jogar novamente</a>

</div>

</body>

</html>
