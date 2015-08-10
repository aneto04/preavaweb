function loginsucesso(){
    setTimeout("window.location = 'preAvaliacao.php'", 0)
}
function loginfalha(){
    alert("Email ou senha incorreto, tente novamente");
    setTimeout("window.location = 'index.html'",0)
}