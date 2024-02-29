<html>
<head>
<title>

</title>

<link rel="stylesheet" href="css.css">

<style>
body{
	 background-color: cyan;
}

h1 {
  font-size: 50px;
  font-family: Comic Sans MS;
}

h2 {
  font-size: 30px;
  font-family: Comic Sans MS;
}

p {
  font-size: 20px;
    font-family: Comic Sans MS;
}

table {
  font-size: 20px;
    font-family: Comic Sans MS;
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}
</style>
</head>
<body>
<?php require "../myheader/site.php"; ?>



<div class="sobre" style="background-color:rgba(0, 0, 0, 0.5);">

<div class="sobre-texto" style="opacity:1.0" align="center">
<FORM action="mailto:tiagocosta.22593@esec-sampaio.net"
METHOD="POST" enctype="text/plain">

<p>Nome: <input type="text" name="nome"></p>
<p>Email: <input type="email" name="email"></p>
<br>
<br>
<p>No que podemos ajudar?</p>
<textarea name="comentario" placeholder="escreve algo.." style="height:200px"></textarea>
<br>
<br>
<input type="submit" value="Enviar"> <input type="reset" value="Apagar Campos">
</form>
</div>
</div>

<?php require "../info/site.php"; ?>

</body>
</html>