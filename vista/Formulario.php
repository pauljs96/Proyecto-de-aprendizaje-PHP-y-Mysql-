<html>

<head>

</head>




<body>
<h2 align ="center"> Ingresa tu informacion</h2>

<form action="../controlador/informacion enviada.php " method="post"  enctype="multipart/form-data"   name="form1">

<table align="center" border="1.5" bordercolor=skyblue >
<tr> 
<td align="center"> <label> Titulo </label></td> <td><input type="text" name="campo_titulo" placeholder="escribe aqui"></td> 
</tr>

<tr> 
<td align="center"> Comentarios</td> <td><textarea rows=7 cols=20 name="parrafo"></textarea></td>
</tr>


<tr> 
<td><input type="file" name="imagen" ></td> 
</tr>

<tr> 
 <td align="center" colspan="2"><input type="submit" name="boton_enviar" value="Enviar informacion"></td>
</tr>

</table>

</form>


</body>




</html>