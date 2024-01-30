<?php
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
$token=numero(0,0,0,0);
echo $token;




$conf=file_get_contents("token.txt");
if($conf=="")
{

$texto="token.txt";
$arquivo=fopen($texto,"a+");
fwrite($arquivo,$token);
fclose($arquivo);
}

else
{
    $texto="token.txt";
    $arquivo=fopen($texto,"w+");
    fclose($arquivo);  
    
    $arquivo=fopen($texto,"a+");
    fwrite($arquivo,$token);
    fclose($arquivo); 
}
$tokenweb=$_GET['token'];
$conv=strval($tokenweb);
if($tokenweb==$conf)
{
    echo header('Location: Senha.html');
    die();
}
else
{

}
header('Location: Confirmacao.html');
die();

?>

