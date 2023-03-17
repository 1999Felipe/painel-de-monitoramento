<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="refresh" content="3">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> PAINEL DE MONITORAMENTO</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="center">

<h1>PAINEL DE MONITORAMENTO</h1>
<hr/>

<table border = 1 >
    <tr>
        <td><b>Id</b><td>
		<td><b>Nome</b><td>
		<td><b>Usuario</b><td>
		<td><b>Status</b><td>
    </tr>
  </table> 
   <?php
      
	  $con = mysqli_connect("localhost","root","","callcenter");
	 $result=mysqli_query($con,"select * from ramais");
	  
	 if(( mysqli_num_rows ( $result )== 0 )){
	     echo "ramal nao encontrado";
	  }else{
	   while ($row = mysqli_fetch_array($result)){
	   $status = $row['status'];
	   $statusAtual = null;
	   $dataAtual = date('d/m/Y H:i:s');
	   
	   if($status >= $dataAtual){
	     $laststatus = 'online';
	   }else{
	      $statusAtual = 'offline';
	   }
	
	   
   ?>
   
     <tr>
      
	  <td><?php echo $row['id'];?></td>
	  <td><?php echo $row['nome'];?></td>
	  <td><?php echo $row['usuario'];?></td>
	  <td><?php echo $statusAtual;?></td>
	 
  
  </tr>
  
  
    <?php }}?>

	




</body>
</html>