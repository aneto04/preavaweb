
function corMuda(n){
    document.getElementById(n).style.backgroundColor='#2c2c2d';
    document.getElementById(n).style.color='white';
    document.getElementById("imgLBFrame").style.display='none';
    switch (n){
        case "botao1":
            document.getElementById("botao2").style.backgroundColor='white';
            document.getElementById("botao2").style.color='#5c5c5c';
            document.getElementById("botao3").style.backgroundColor='white';
            document.getElementById("botao3").style.color='#5c5c5c';
            document.getElementById("imgLBFrame").style.display='none';
            break;
        case "botao2":
            document.getElementById("botao1").style.backgroundColor='white';
            document.getElementById("botao1").style.color='#5c5c5c';
            document.getElementById("botao3").style.backgroundColor='white';
            document.getElementById("botao3").style.color='#5c5c5c';
            document.getElementById("imgLBFrame").style.display='block';
            break;
        case "botao3":
            document.getElementById("botao1").style.backgroundColor='white';
            document.getElementById("botao1").style.color='#5c5c5c';
            document.getElementById("botao2").style.backgroundColor='white';
            document.getElementById("botao2").style.color='#5c5c5c';
            document.getElementById("imgLBFrame").style.display='block';
            break;
    }
}

function abreLB(){
    document.getElementById("box").style.display='block';
    document.getElementById("lightBoxBG").style.display='block';
}
function fechaLB(){
    document.getElementById("box").style.display='none';
    document.getElementById("lightBoxBG").style.display='none';
}



function abreLBFrame(){
    document.getElementById("boxLBFrame").style.display='block';
    document.getElementById("boxLBFrame").style.transition='1';
    document.getElementById("boxLBFrame").style.transition='1';
    document.getElementById("bgLBFrame").style.display='block';
    document.getElementById("bgLBFrame").style.transition='1';
}
function fechaLBFrame(){
    document.getElementById("boxLBFrame").style.display='none';
    document.getElementById("bgLBFrame").style.display='none';
}



function lightboxNeg(){
    document.getElementById("lbTitle").innerText="Comentário Negativo";
}
function lightboxPos(){
    document.getElementById("lbTitle").innerHTML="Comentário Positivo";
}