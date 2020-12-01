<?php

$carta = mt_rand(1,13);
$acoes = [
    "",
    "Aponte para a pessoa que você pegaria e se divirtam...",
    "Escolha 1 jogador para beber 2 goles",
    "Beba 1 gole",
    "Escolha 1 companheiro e bebam 2 goles",
    "Ufa! Não beba nada",
    "Todas as meninas bebem",
    "Dia da Carência! Dê um selinho na pessoa da esquerda, ou beba",
    "Dia da Paixão! Dê um selinho na pessoa da direita, ou beba",
    "Vamos rimar! Escolha uma palavra, e todos devem rimar, quem errar bebê",
    "Cirrose!!! Todos bebem 1 gole",
    "Crie uma regra ou tire uma regra, para nós",
    "Você não bebe nada neném, os outros sim",
    "Todos os garotos bebam"
];
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">
<body style="margin: 0; padding: 0; background: floralwhite;">
<h1 style="text-align: center;font-size: xxx-large; color: red; background: lightgrey; padding: 40px; font-family: 'Graduate', cursive;">Baralho - King Virtual</h1>
<div style="text-align: center; ">
    <img src="<?=$carta?>.png" alt="" style="width: 200px">
    <br>
    <br>
    <h1 style="font-weight: bold">Sua punição: <?=$acoes[$carta]?></h1>
    <br>
    <br>
    <a href="./" style="background: #007bff; padding: 10px 20px; text-decoration: none; color: white; font-size: 2rem; border-radius: 10px">Jogar</a>
</div>