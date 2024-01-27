function Esconder()
{
if(document.getElementById("Senha").type=="password")
{
    document.getElementById("Senha").type="text";
    document.getElementById("MostrarSenha").src="../img/MostrarSenha.png"
}    
else
{
    document.getElementById("Senha").type="password";
    document.getElementById("MostrarSenha").src="../img/EsconderSenha.png"
}

}