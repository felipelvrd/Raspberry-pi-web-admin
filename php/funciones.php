<?php

function comando($imp){
	return shell_exec($imp);
}

function getEstado($proceso){
	$msg = shell_exec("ps -A | grep $proceso -c");
	if((int)$msg!=0){
		return '<span class="verde">Iniciado</span>';
	}
	else{
		return '<span class="rojo">Detenido</span>';
	}
}

function getCPU(){
	
	$temp= comando('sudo /opt/vc/bin/vcgencmd measure_temp| egrep "[0-9.]{4,}" -o');
	$arm = comando('sudo /opt/vc/bin/vcgencmd measure_clock arm| egrep "[0-9.]{4,}" -o');
	$core = comando('sudo /opt/vc/bin/vcgencmd measure_clock core| egrep "[0-9.]{4,}" -o');
 	$volts = comando('sudo /opt/vc/bin/vcgencmd measure_volts core| egrep "[0-9.]{4,}" -o');
 
	
	echo "<tr>
    		<td>".$temp."ºC</td>
    		<td>" . (int)$arm/1000000 ."mhz</td>
    		<td>".(int)$core/1000000 . "mhz</td>
			<td>".$volts."v</td>
  		</tr>";
}

function servicio($url,$nombre,$servicio,$proceso){
	
	echo '<tr>
    <td><a href="'.$url.'" target="_blank">'.$nombre.'</a></td>
    <td><span id="'.$nombre.'">' . getEstado($proceso) .'</span></td>
    <td><input type="button" value="Iniciar" onclick=\'servicio("'.$servicio.'","'.$nombre.'","start")\' />
    <input type="button" value="Detener" onclick=\'servicio("'.$servicio.'","'.$nombre.'","stop")\' />
    <input type="button" value="Reiniciar" onclick=\'servicio("'.$servicio.'","'.$nombre.'","restart")\' /></td>
  </tr>';
}

?>