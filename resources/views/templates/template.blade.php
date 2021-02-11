<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de empresas</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <style type="text/css">
        form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}
.negado{
  color: red;
  background: red;
  
}
.negado2{
  color: red;
  
}
.negado3{
  color: #000000;
  font-size: 30px; 
  span{font-weight: bold;
  
}
/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
  .userLogado{
  color: red;
}

/* aqui começa tudo */







.slider label {
       background-color: #000;
       bottom: 10px;
       cursor: pointer;
       display: block;
       height: 10px;
       position: absolute;
       width: 10px;
       z-index: 10;
   }
  
   .slider li:nth-child(1) label {
       left: 10px;
   }
  
   .slider li:nth-child(2) label {
       left: 40px;
   }
  
   .slider li:nth-child(3) label {
       left: 70px;
   } .slider img {
         opacity: 0;
         visibility: hidden;
     }
    
     .slider li input:checked ~ img {
         opacity: 1;
        visibility: visible;
         z-index: 10;
     } 

     .cont{
      { margin: 0; padding: 0; }

     }
     .slider {
  02     display: block;
      height: 293px;
       width: 600px;
      margin: auto;
       margin-top: 20px;
       position: relative;
   }
  
   .slider li {
       list-style: none;
       position: absolute;
   }
  
   .slider img {
       margin: auto;
       height: 100%;
       width: 100%;
       vertical-align: top;
   } 
  .slider input {
    display: none;
}





    </style>

<script type="text/javascript">
  function fMasc(objeto,mascara) {
				obj=objeto
				masc=mascara
				setTimeout("fMascEx()",1)
			}
			function fMascEx() {
				obj.value=masc(obj.value)
			}
			function mTel(tel) {
				tel=tel.replace(/\D/g,"")
				tel=tel.replace(/^(\d)/,"($1")
				tel=tel.replace(/(.{3})(\d)/,"$1)$2")
				if(tel.length == 9) {
					tel=tel.replace(/(.{1})$/,"-$1")
				} else if (tel.length == 10) {
					tel=tel.replace(/(.{2})$/,"-$1")
				} else if (tel.length == 11) {
					tel=tel.replace(/(.{3})$/,"-$1")
				} else if (tel.length == 12) {
					tel=tel.replace(/(.{4})$/,"-$1")
				} else if (tel.length > 12) {
					tel=tel.replace(/(.{4})$/,"-$1")
				}
				return tel;
			}
			function mCNPJ(cnpj){
				cnpj=cnpj.replace(/\D/g,"")
				cnpj=cnpj.replace(/^(\d{2})(\d)/,"$1.$2")
				cnpj=cnpj.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
				cnpj=cnpj.replace(/\.(\d{3})(\d)/,".$1/$2")
				cnpj=cnpj.replace(/(\d{4})(\d)/,"$1-$2")
				return cnpj
			}
			function mCPF(cpf){
				cpf=cpf.replace(/\D/g,"")
				cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
				cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
				cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
				return cpf
			}
			function mCEP(cep){
				cep=cep.replace(/\D/g,"")
				cep=cep.replace(/^(\d{2})(\d)/,"$1.$2")
				cep=cep.replace(/\.(\d{3})(\d)/,".$1-$2")
				return cep
			}
			function mNum(num){
				num=num.replace(/\D/g,"")
				return num
			}

      function mascaraMutuario(o,f){
    v_obj=o
    v_fun=f
    setTimeout('execmascara()',1)
}
 
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
 
function cpfCnpj(v){
 
    //Remove tudo o que não é dígito
    v=v.replace(/\D/g,"")
 
    if (v.length <= 14) { //CPF
 
        //Coloca um ponto entre o terceiro e o quarto dígitos
        v=v.replace(/(\d{3})(\d)/,"$1.$2")
 
        //Coloca um ponto entre o terceiro e o quarto dígitos
        //de novo (para o segundo bloco de números)
        v=v.replace(/(\d{3})(\d)/,"$1.$2")
 
        //Coloca um hífen entre o terceiro e o quarto dígitos
        v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
 
    } else { //CNPJ
 
        //Coloca ponto entre o segundo e o terceiro dígitos
        v=v.replace(/^(\d{2})(\d)/,"$1.$2")
 
        //Coloca ponto entre o quinto e o sexto dígitos
        v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
 
        //Coloca uma barra entre o oitavo e o nono dígitos
        v=v.replace(/\.(\d{3})(\d)/,".$1/$2")
 
        //Coloca um hífen depois do bloco de quatro dígitos
        v=v.replace(/(\d{4})(\d)/,"$1-$2")
 
    }
 
    return v
 
}

function validacaoEmail(field) {
usuario = field.value.substring(0, field.value.indexOf("@"));
dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
 
if ((usuario.length >=1) &&
    (dominio.length >=3) && 
    (usuario.search("@")==-1) && 
    (dominio.search("@")==-1) &&
    (usuario.search(" ")==-1) && 
    (dominio.search(" ")==-1) &&
    (dominio.search(".")!=-1) &&      
    (dominio.indexOf(".") >=1)&& 
    (dominio.lastIndexOf(".") < dominio.length - 1)) {
document.getElementById("msgemail").innerHTML="E-mail válido";
//alert("E-mail valido");
}
else{
document.getElementById("msgemail").innerHTML="<font color='red'>E-mail inválido </font>";
//alert("E-mail invalido");
}
}
</script>
</head>
<body>


<nav class=”fixed-top position-fixed navbar navbar-default navbar-static-top” style=" position: fixed; top: 0; width: 100%;" >
  <div class=”container”>
    <div class=” navbar-header” style="font-size: 30px; background-color: #000000; ">
    
       
    <div class="text-center top"  ><a href="{{url('/')}}"><img  style="margin-top: 10px;"  src="image/logo.jpg"  width=50 height=50></a></div>
      
    <a style=" margin-left: 60px; color: #F0F8FF; " class=”navbar-brand” href="{{url('/')}}">Home</a>&nbsp;
    <?php if(isset($_SESSION['usuario']) &&  $_SESSION['usuario'] == "VISITANTE"){ ?>
    <a style="color: #F0F8FF;  60px;" class=”navbar-brand” href="{{url('/fazerLogin')}}">Login</a>&nbsp;
    <a style="color: #F0F8FF;" class=”navbar-brand” href="{{url('/novaEmpresa')}}">Empresa</a>
    
    
    
    <?php } ?>
    
    
    <h6 class="text-right top" style=" color:#F0F8FF; margin-top: 0px;   margin-right: 60px;"><?php if(isset($_SESSION['pessoa']) && $_SESSION['usuario'] != "VISITANTE" ){  echo $_SESSION['usuario'], " ", $_SESSION['pessoa'];}  ?></h6>   
  </div>
  
</nav>
 
    <div class="text-center" style="margin-top: 100px;">
       <img style="margin-top: 30px;" src="image/logo2.jpg" class="rounded" alt="some text" width=180 height=120>
    </div>
    
    <h3 class="text-center">CONTROLE DE EMPRESAS</h3>
   

   @yield('content')
   <footer  >
   <div class=" fixed-bottom font-center " >
     <h6 class="font-center text-center"  style=" margin-bottom: 0px; font-size: 20px; color: #F0F8FF;  height: 110px; width: 100%; background-color: #000000; "><p>Sistema Controle de empresas</p><p>Desenvolvedor: Rômulo Ferreira Freire</p>
<p >email: romulo_34ads@hotmail.com</p></h6>
   </div>
   </footer>
</body>
</html>