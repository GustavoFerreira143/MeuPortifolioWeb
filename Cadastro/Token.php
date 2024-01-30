<?php
$Email = $_GET['Email'];

function numero($token0, $token1, $token2, $token3)
{
    $i = 0;
    $alfa = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    while ($i != 4) {
        $numram = rand(0, 25);
        $token0 = $alfa[$numram];
        $numram1 = rand(0, 25);
        $token1 = $alfa[$numram1];
        $numram2 = rand(0, 25);
        $token2 = $alfa[$numram2];
        $numram3 = rand(0, 25);
        $token3 = $alfa[$numram3];

        return $token0[0] . $token1[0] . $token2[0] . $token3[0];
    }
}

$pagina="./Confirmacao.html";
header("Location: ".$pagina );
die();



/*$de="gustavo.gamer2350@gmail.com";
$para="gustavo.gamer2350@gmail.com";
$anexo="Teste de envio";
$mensagem=$Email;
$header="From:".$de;
mail($para,$anexo,$mensagem,$header);
