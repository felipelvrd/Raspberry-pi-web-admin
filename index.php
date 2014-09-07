<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<?php include 'php/funciones.php'; ?>
<script src="javascript/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="javascript/funciones.js" type="text/javascript"></script>

<link href="css/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h1>Servicios</h1>
<table width="493" border="1">
  <tr>
    <td width="78">Servicio</td>
    <td width="117">Estado</td>
    <td width="276">Aciones</td>
  </tr>
  <?php 
  	servicio("http://192.168.1.2:9091","transmission","transmission-daemon","transmission-da"); 
	servicio("http://192.168.1.2:8000","pyload","pyload","python");
	servicio("#","EscritorioRemoto", "xrdp","xrdp");
	servicio("#","vpn","pptpd","pptpd");
  ?>
</table>
<h1>Raspberry pi</h1>

<input name="Botón" type="button" id="apagar" value="Apagar"/>
<input name="Botón" type="button" id="reiniciar" value="Reiniciar" />

<h2>RAM</h2>

<div id="ram"></div>

<h2>CPU</h2>
<table width="484" border="1">
  <tr>
    <td width="93">Temperatura</td>
    <td width="117">ARM Frecuencia</td>
    <td width="131">Core Frequencia</td>
    <td width="115">Core Voltage</td>
    <?php getCPU(); ?>
  </tr>
</table>

</body>
</html>
