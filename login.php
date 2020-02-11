<!DOCTYPE html>
<html>
<head>
  <title>Pesquisar</title>
</head>
<body>
  
  <?php
   
   $loginComSucesso = False;
   
   $login = $_POST["nomeDoUsuario"];
   $senha = $_POST["senhaDoUsuario"];
   
   $nomeValidoDeUsuario="aluno1";
   $senhaValidaDeUsuario=123;
   
   
   echo "<script> alert('".$login."') </script>";
   echo "<script> alert('".$senha."') </script>";
   
   if( $login == $nomeValidoDeUsuario && $senha == $senhaValidaDeUsuario ){
     $loginComSucesso = true;
   }
   
   
   
   echo "alert('$loginComSucesso <br>')";
   echo $loginComSucesso;
   echo $loginComSucesso;
   
   if($loginComSucesso==false){
	   echo "<script> alert('".$loginComSucesso."') </script>";
	   echo "<script> alert('$loginComSucesso era falso e foi convertido como string vazia e login falhou') </script>";
  
   }else{
		echo "<script> alert('".$loginComSucesso."') </script>";
		echo "<script> alert('Ou seja, Login Com Sucesso') </script>";

      //https://www.w3schools.com/php/func_network_header.asp
	  //header("Location: TelaInicial.html");
   }

  ?>

</body>
</html>