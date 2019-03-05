<html>
    <head>
        <title>Frame Framework</title>
    </head>
    <body>
<?php

$path = "Archivos/Frameworks.txt";
if (!file_exists($path))
    exit("File not found");
$file = fopen($path, "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line;
    }
    if (!feof($file)) {
        echo "Error: EOF not found\n";
    }
    fclose($file);
}

?>

<?php

$path = "Archivos/Frameworks.txt";
if (!file_exists($path))
    exit("File not found");
$file = fopen($path, "r");
?>
<select name="transporte" size="10">

<?php
if ($file) {
    while (($line = fgets($file)) !== false) {
		?><option><?php
        echo $line;
		?></option><?php
    }
    if (!feof($file)) {
        echo "Error: EOF not found\n";
    }
?>

</select>
<?php
    fclose($file);
}
?>

    <FORM name="sugerencias" action="http://www.tecnun.es/cgi-bin/ii/CGI0.exe" method="POST" target="resultado">
      <P>Por favor, introduzca sus sugerencias:<BR>
      <TEXTAREA rows="5" cols="30" name="txtsugerencias">
	  Sus sugerencias aquí...
<?php

$path = "Archivos/Frameworks.txt";
if (!file_exists($path))
    exit("File not found");
$file = fopen($path, "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line;
    }
    if (!feof($file)) {
        echo "Error: EOF not found\n";
    }
    fclose($file);
}

?>
	  </TEXTAREA><BR>
      <INPUT type="hidden" name="identificador" value="Z87X09RF"><BR>
      <INPUT type="submit" value="Enviar">   <INPUT type="reset" value="Borrar">
      </P>
    </FORM>
    
    <a href="serv2.php" target="Servicio"> Cargar serv2.php en el frame Servicio</a>
    <?php
$file = file_get_contents("serv2.php"); //Reemplaza http://example.com por la URL de la Pagina que quieres...
echo $file ?> target="Servicio" <?php;?>
?>
    </body>
</html>