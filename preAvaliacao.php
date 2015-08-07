<?php
$host      = "localhost";
$user      = "root";
$pass      = "vertrigo";
$banco     = "preavaliacao";
$conexao   = mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());

session_start();
if(!isset($_SESSION['username']) and !isset($_SESSION['senha'])){
    header("location: index.html");
}
$db = new mysqli($host, $user, $pass, $banco);
$sql       = "SELECT * FROM usuarios WHERE username = '$_SESSION[username]'"; 
$resultado = $db->query($sql);
$dadosUsuarios = array();

while($row = $resultado->fetch_array()) {
    $dadosUsuarios = $row;
}

?>

<!-- =========================================================== Código HTML ========================================================== -->

<!DOCTYPE html>
<html>
<head lang="pt-br">
    <link rel="shortcut icon" href="imagens/icon.ico" type="image/x-icon" />

    <title>Pré Avaliação Web</title>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-iframe.css" rel="stylesheet">

    <script src="js/jquery.js" type="text/javascript" charset="UTF-8"></script>

    <script src="js/script-preAvaliacao.js" charset="UTF-8"></script>
</head>
<body>

<div class="barraMenu">
    <div id="barraInfos">
    <img class="logoItevaBranco" src="imagens/logo-branca.png">

    <div class="user">
        <div class="identificaUsuario">

            <img id="imgUser" src="imagens/usuarios/giselly.jpg">
            <div id="nameUser">
                <?php echo $dadosUsuarios['nome']." ".$dadosUsuarios['sobrenome']; ?>
            </div>

        </div>
        
        <div class="opcoesMenu">
            <img id="configUser" src="imagens/config.png">
            <a href="logout.php"><img id="sair" src="imagens/sair.png"></a>
        </div>
    </div>
</div>
</div>

<!-- ===================================================== LightBox Comentários =========================================================-->


<div id="lightBoxBG" onclick="fechaLB()"></div>

<div id="box">

    <img id="fechar" onclick="fechaLB()" src="imagens/fechar.png">

    <div id="lbTitle"></div>

    <hr>

    <a>Comentário</a>

    <br>

    <form method="post" id="formNeg" name="comentarios" action="comentariosneg.php">

        <textarea id="textA" name="comentario"></textarea><br>

        <input type="submit" id="salvarLB" value="Salvar" onclick="fechaLB()"><br>

    </form>

    <form method="post" id="formPos" name="comentarios" action="comentariospos.php">

        <textarea id="textA" name="comentario"></textarea><br>

        <input type="submit" id="salvarLB" value="Salvar" onclick="fechaLB()"><br>

    </form>
</div>


<!-- ================================================== LightBox Avaliação Passada ====================================================== -->

<div id="bgLBFrame" onclick="fechaLBFrame()"></div>
<div id="boxLBFrame">
    <img id="fecharLBFrame" onclick="fechaLBFrame()" src="imagens/fechar.png">
    <h2>Avaliação Passada</h2>

    <hr>

    <div class="quadrosJS">
        <div id="quadroLB">
            <form method="post" id="formTableFrame">
                <table id="comomeavalLB">
                    <tr id="tbTituloLBFrame">
                        <th class="quesitoLBFrame">Quesito</th>
                        <th class="paLBFrame">PA</th>
                        <th class="pbLBFrame">PB</th>
                        <th class="pqLBFrame">PQ</th>
                        <th class="obspasLBFrame">Obs.</th>
                    </tr>
                    <tr class="tbCorpo" >
                        <td class="quesitoLBFrame">União e cooperação</td>
                        <th class="paLBFrame">
                            <input type="text">
                        </th>
                        <th class="pbLBFrame">
                            <input type="text">
                        </th>
                        <th class="pqLBFrame">
                            <input type="text">
                        </th>
                        <td class="obspasLBFrame">
                            <input type="text">
                        </td>
                    </tr>
                    <tr class="tbCorpo">
                        <td class="quesitoLBFrame">Disciplina</td>
                        <th class="pa">
                            <input type="text">
                        </th>
                        <th class="pbLBFrame">
                            <input type="text">
                        </th>
                        <th class="pqLBFrame">
                            <input type="text">
                        </th>
                        <td class="obspasLBFrame">
                            <input type="text">
                        </td>
                    </tr>
                    <tr class="tbCorpo">
                        <td class="quesitoLBFrame">Dedicação</td>
                        <th class="paLBFrame">
                            <input type="text">
                        </th>
                        <th class="pbLBFrame">
                            <input type="text">
                        </th>
                        <th class="pqLBFrame">
                            <input type="text">
                        </th>
                        <td class="obspasLBFrame">
                            <input type="text">
                        </td>
                    </tr>
                    <tr class="tbCorpo">
                        <td class="quesitoLBFrame">Consciência crítica</td>
                        <th class="paLBFrame">
                            <input type="text">
                        </th>
                        <th class="pbLBFrame">
                            <input type="text">
                        </th>
                        <th class="pqLBFrame">
                            <input type="text">
                        </th>
                        <td class="obspasLBFrame">
                            <input type="text">
                        </td>
                    </tr>
                    <tr class="tbCorpo">
                        <td class="quesitoLBFrame">Bom domínio e agilidade nas rotinas</td>
                        <th class="paLBFrame">
                            <input type="text">
                        </th>
                        <th class="pbLBFrame">
                            <input type="text">
                        </th>
                        <th class="pqLBFrame">
                            <input type="text">
                        </th>
                        <td class="obspasLBFrame">
                            <input type="text">
                        </td>
                    </tr>
                    <tr class="tbCorpo">
                        <td class="quesitoLBFrame">Boa organização nos processos</td>
                        <th class="paLBFrame">
                            <input type="text">
                        </th>
                        <th class="pbLBFrame">
                            <input type="text">
                        </th>
                        <th class="pqLBFrame">
                            <input type="text">
                        </th>
                        <td class="obspasLBFrame">
                            <input type="text">
                        </td>
                    </tr>
                    <tr class="tbCorpo">
                        <td class="quesitoLBFrame">Boa criatividade</td>
                        <th class="paLBFrame">
                            <input type="text">
                        </th>
                        <th class="pbLBFrame">
                            <input type="text">
                        </th>
                        <th class="pqLBFrame">
                            <input type="text">
                        </th>
                        <td class="obspasLBFrame">
                            <input type="text">
                        </td>
                    </tr>
                    <tr class="tbCorpo">
                        <td class="quesitoLBFrame">Interação com seus coordenadores</td>
                        <th class="paLBFrame">
                            <input type="text">
                        </th>
                        <th class="pbLBFrame">
                            <input type="text">
                        </th>
                        <th class="pqLBFrame">
                            <input type="text">
                        </th>
                        <td class="obspasLBFrame">
                            <input type="text">
                        </td>
                    </tr>
                    <tr class="tbCorpo">
                        <td class="quesitoLBFrame" rowspan="15">Iniciativa</td>
                        <th class="paLBFrame">
                            <input type="text">
                        </th>
                        <th class="pbLBFrame">
                            <input type="text">
                        </th>
                        <th class="pqLBFrame">
                            <input type="text">
                        </th>
                        <td class="obspasLBFrame">
                            <input type="text">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <input type="submit" id="salvarLBFrame" value="Salvar" onclick="fechaLBFrame()"><br>
</div>
<!-- ================================================= Conteúdo da página principal ====================================================== -->

<div class="background">

<label for="periodo"  id="periodo">
        <select name="periodo" id="tperiodo">
            <option> Trimestre 1 </option>
            <option> Trimestre 2 </option>
            <option> Trimestre 3 </option>
            <option> Trimestre 4 </option>
        </select>
    </label>
    


    <div class="info">

        <img id="imgUserInfo" src="imagens/usuarios/giselly.jpg">

        <div class="infoTexto">
            <div id="textoDaInfo">
            <p id="nomeUser">

                <?php echo $dadosUsuarios['nome']." ".$dadosUsuarios['sobrenome']; ?>

                <a id="comments">
                    16 comentários
                </a>

                <a id="pessoasTexto">Pessoas</a>
                </p>
        <iframe id="iframePessoas" src="Pessoas%20Scroll.html" width="190" height="480" frameborder="0" scrolling="no"></iframe>
                <p>Posto:
                    <a><?php echo $dadosUsuarios['posto']; ?></a>
                </p>
                <hr id="hr">
                <p>Email:
                    <a><?php echo $dadosUsuarios['email']; ?></a>
                </p>
            
            </div>

        </div>

    </div>


            <div class="avaliacao">

                <img id="imgLBFrame" src="imagens/lapis-preto.png" onclick="abreLBFrame()">

                <a href="informacoesgerais.php" target="frame">
                    <input type="button" name="botaojs" id="botao1" onclick="corMuda('botao1');"  value="Informações gerais">
                </a>

                <a href="comoeumeavaliaria.php" target="frame">
                    <input type="button" name="botaojs" id="botao2" onclick="corMuda('botao2');" value="Como eu me avaliaria">
                </a>

                <a href="avaliacaopassada.php" target="frame">
                    <input type="button" name="botaojs" id="botao3" onclick="corMuda('botao3');" value="Avaliação passada">
                </a>

                <iframe name="frame" id="iframe" src="informacoesgerais.php" FrameBorder="0" width="630" height="360" scrolling="no"></iframe>

            </div>

<table id="sessaoComentario">
    <tr>
        <td>
            <div id="pontoNegativo">
                <div class="pontosPositNegat1">

                    <a>Pontos negativos</a>

                    <a href="#" id="imgNegPos1" onclick="abreLB(); lightboxNeg()">

                        <img src="imagens/lapis.png">

                    </a>
                </div>

                <div class="blocoPontos1">
                    <?php
                        $sqlcomment = mysql_query("SELECT * FROM comentariosneg");
                        $linha = mysql_num_rows($sqlcomment);
                        if ($linha > 0){
                            while ($line = mysql_fetch_array($sqlcomment)) {
                                echo strtoupper("<p style='color: black; width:450px; border-top: black;'>".$comentario = $line['comentario']."</p>");
                            }
                        }
                    ?>
                </div>
            </div>
        </td>
        <td>
            <div id="pontoPositivo">
                <div class="pontosPositNegat2">

                    <a>Pontos positivos</a>

                    <a href="#" id="imgNegPos2">
                        <img src="imagens/lapis.png" onclick="abreLB(); lightboxPos()">
                    </a>
                </div>

                <div class="blocoPontos2">
                    <?php
                        $sqlcomment2 = mysql_query("SELECT * FROM comentariospos");
                        $linha2 = mysql_num_rows($sqlcomment2);
                        if ($linha2 > 0){
                            while ($line2 = mysql_fetch_array($sqlcomment2)) {
                                echo strtoupper("<p style='color: black; width:450px; border-top: black;'>".$comentario2 = $line2['comentario']."</p>");
                            }
                        }
                    ?>
                </div>
            </div>
        </td>
    </tr>
</table>

</div>
</body>
</html>