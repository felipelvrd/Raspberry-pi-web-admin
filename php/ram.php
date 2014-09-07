<?php
	$ram= explode(',',shell_exec("free -m| egrep 'Mem' | sed 's/[[:space:]]\+/,/g'"));
	$total = $ram[1];
	$used = $ram[2];
	$free = $ram[3];
	
	echo "<table width='200' border='1'>
  			<tr>
    			<td>Total</td>
    			<td>Libre</td>
    			<td>En Uso</td>
  			</tr>
  			<tr>
    			<td>".$total."mb</td>
    			<td>".$free."mb</td>
    			<td>".$used."mb</td>
  			</tr>
		</table>";
?>