<?php
$link = mysql_connect('mysql://root:ONQFOyfGxrCmVopeBSVkhgOALDOfxuHo@junction.proxy.rlwy.net:57085/railway');
if (!$link) 
{
	die('Não pode ser conectado: ' . mysql_error());
}
echo 'Conexão com sucesso!';
mysql_close($link);
?>