<?php
$Email=$_GET['Email'];
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

$conf=file_get_contents("EmailToken.txt");
$pesquisa=strstr($conf,$Email);


if($pesquisa===false)
{
    $txttoke="token.txt";
    $texto="Email.txt";
    $arquivo=fopen($texto,"a+");
    $digitoke=fopen($txttoke,"a+");
    fwrite($arquivo,$Email.PHP_EOL);
    fwrite($digitoke,$token.PHP_EOL);
    fclose($arquivo); 
}

else
{

}


$toketxt=file_get_contents("token.txt");
$EmailFile=file_get_contents("Email.txt");
$tokearray=explode(PHP_EOL,$toketxt);
$emailarray=explode(PHP_EOL,$EmailFile);

$tokenweb=$_GET['token'];


if($tokenweb!=null)
{
    $tokenweblen=strlen($tokenweb);
    $array=array_search($tokenweb,$tokearray);

if($tokenweblen==4 && $array!==false)
{
    
    
    $Procura=array_search($tokenweb,$tokearray);
    $DadosToken=strval($tokearray[$Procura]);

    $DadosEmail=strval($emailarray[$Procura]);


    $EmailToken='EmailToken.txt';
    $Juncao=fopen($EmailToken,"a+");
    fwrite($Juncao,$DadosEmail.":".$DadosToken.PHP_EOL);
    fclose($Juncao);


    $EmailArquivo='Email.txt';
    $nomeArquivo = 'token.txt';

    $dadosRemocao=$DadosEmail.PHP_EOL;
    $dadoParaRemover = $tokenweb.PHP_EOL;

    $conteudo = file_get_contents($nomeArquivo);
    $novoConteudo = str_replace($dadoParaRemover, '', $conteudo);

    $EmailContent=file_get_contents($EmailArquivo);
    $EmailNovo= str_replace($dadosRemocao, '', $EmailContent);

    file_put_contents($nomeArquivo, $novoConteudo);
    file_put_contents($EmailArquivo, $EmailNovo);

    header('Location: Senha.html');
    die();
}
else
{
    header('Location: Confirmacao.html');
}
}
header('Location: Confirmacao.html');
?>
    
