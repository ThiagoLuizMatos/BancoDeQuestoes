function jax(elementId,url){
     var xhttp;
     if (window.XMLHttpRequest) {
        xhttp = new XMLHttpRequest();
     }else {
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
     }
     xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById(elementId).innerHTML = this.responseText;
      }
     };
     xhttp.open("GET",url, true);
     xhttp.send();
}

var certoErrado = document.getElementById('certoErrado');
if(certoErrado != null){
certoErrado.onclick = function(){
var div = document.getElementById("inserir-dados");
div.innerHTML = "<button id='texto' onclick='textareaTexto()'>Inserir Texto</button>&nbsp;&nbsp;&nbsp;&nbsp;<input type='file' id='inserirImagem'>";
};
}

var multiplaEscolha = document.getElementById('multiplaEscolha');
if(multiplaEscolha != null){
multiplaEscolha.onclick = function(){
var div = document.getElementById("inserir-dados");
div.innerHTML = "<button id='texto' onclick ='textareaTexto()'>Inserir Texto</button>&nbsp;&nbsp;&nbsp;&nbsp;<input type='file' id='inserirImagem'>&nbsp;&nbsp;&nbsp;&nbsp;<button id='inserir-assertiva' onclick='textareaQuestao()'>Inserir assertiva</button><br><br><br>";
};
}


function textareaTexto(){
    var element = document.getElementById("inserir-texto");
    var textarea = document.createElement("span");
    textarea.innerHTML = "<textarea name ='name' rows='10' cols='150'value='' placeholder='insira aqui o texto da questão'> </textarea> <button>x</button><br><br><br>";
    element.appendChild(textarea);
}


function textareaQuestao(){
    var element = document.getElementById("inserir-questao");
    var textarea = document.createElement("span");
    textarea.innerHTML = "<textarea name ='name' rows='10' cols='150' placeholder='insira uma assertiva'> </textarea> <button>x</button> <br><br><br>";
    element.appendChild(textarea);
}
var btn__ = document.getElementsByTagName('button');
function fecharTag(){
      btn__ = document.getElementsByTagName('button');
      for(var i=0;i<btn__.length;i++){
          btn__[i].id.onClick = function(){

          }
      }
}

function criarCadastro(){
  escurecer();
  var span = document.getElementById("cadastro");
  span.innerHTML ="<div id='div-cadastro'><span id='val-dados'></span>"+
  "<table id='table-cadastro'><tr><td>Nome</td><td><input type='text'id='input-nome' name='nomeUsuario'></td></tr>"+
  "<tr><td>Apelido</td><td><input type='text' id='input-apelido' ></td></tr>"+
  "<tr><td>Email</td><td><input type='email' id='input-email'></td></tr>"+
  "<tr><td>Senha</td><td><input type='password' id='input-senha'></td></tr>"+
  "<tr><td><button id='btn-limpar'>Limpar</button></td><td><button id='btn-cadastrar-usuario' onclick='cadastrarUsuario()'>CADASTRAR</button></td></tr>"+
  "</table> <button id='sair' onclick='closeTag();'>X</button></div>";
}
function cadastrarUsuario(){
    var elementIdApelido = document.getElementById('input-apelido');
    var elementIdEmail = document.getElementById('input-email');
    var elementIdNome = document.getElementById('input-nome');
    var elementIdSenha = document.getElementById('input-senha');
    var elementIdApelidoValor = elementIdApelido.value;
    var elementIdEmailValor = elementIdEmail.value;
    elementIdNome = elementIdNome.value;
    elementIdSenha = elementIdSenha.value;
    var url = "http://localhost/BancoDeQuestoes/HTMLs/php/cadastro_usuario.php?a="+elementIdApelidoValor+"&e="+elementIdEmailValor+"&n="+elementIdNome+"&s="+elementIdSenha;
    //var url1 = "http://localhost/BancoDeQuestoes/HTMLs/php/verifica-usuario.php?q="+elementIdEmailValor;
    //var url2 = "http://localhost/BancoDeQuestoes/HTMLs/php/verifica-usuario.php?q="+elementIdApelidoValor;
    jax('val-dados',url);
    //jax('val-dados', url);
}

function escurecer(){
    var span = document.getElementById('escuro');
    span.innerHTML = "<div id='div-escurecer-tela'></div>";
}

function closeTag(){
  var elementId = document.getElementById('cadastro');
  elementId.innerHTML=null;
  elementId = document.getElementById('escuro');
  elementId.innerHTML=null;
}

function logar(){
    var elementIdEmail = document.getElementById('input-usuario-login');
    var elementIdSenha = document.getElementById('input-senha-login');
    elementIdEmail = elementIdEmail.value;
    elementIdSenha = elementIdSenha.value;
    var url = "http://localhost/BancoDeQuestoes/HTMLs/php/logar.php?usu="+elementIdEmail+"&sen="+elementIdSenha;
    jax('divLogin',url);
}

disciplina();
banca();
function disciplina(){
    jax('sel-disciplina',"http://localhost/BancoDeQuestoes/HTMLs/php/disciplina.php");
}

function banca(){
    jax('sel-banca',"http://localhost/BancoDeQuestoes/HTMLs/php/banca.php");
}

var ano, banca, nivel, disciplina;
function inserirQuestao(){
     ano = document.getElementById("sel-ano").value;
     banca = document.getElementById("sel-banca").value;
     nivel = document.getElementById("sel-nivel").value;
     disciplina = document.getElementById("sel-disciplina").value;
     url = "http://localhost/BancoDeQuestoes/HTMLs/php/gerar-simulado.php?a="+ano+"&b="+banca+"&n="+nivel+"&d="+disciplina;
     jax('divQuestao',url);
}
