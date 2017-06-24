<?php
    
if(isset($_POST['enviar']))            
    {
    $nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
    $telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
    $problema=$_POST['problema'];
    if (($nombre=="")||($apellido=="")||($telefono=="")||($correo=="")||($problema==""))
        {
		echo "Todos los campos son requeridos, por favor llenalos <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $nombre<$correo>\r\nReturn-path: $correo";
        $problema = "
		<table border='0' cellspacing='3' cellpadding='2'>
		  <tr>
			<td width='30%' align='left' bgcolor='#f0efef'><strong>Nombre:</strong></td>
			<td width='80%' align='left'>$nombre</td>
		  </tr>
		  <tr>
			<td align='left' bgcolor='#f0efef'><strong>Apellido:</strong></td>
			<td align='left'>$apellido</td>
		  </tr>
		   <tr>
			<td width='30%' align='left' bgcolor='#f0efef'><strong>Teléfono:</strong></td>
			<td width='70%' align='left'>$telefono</td>
		  </tr>
		  <tr>
			<td width='30%' align='left' bgcolor='#f0efef'><strong>Correo:</strong></td>
			<td width='70%' align='left'>$correo</td>
		  </tr>
		  <tr>
			<td align='left' bgcolor='#f0efef'><strong>Mensaje:</strong></td>
			<td align='left'>$problema</td>
		  </tr>
	</table>	
";	
		
		
		echo "Mensaje enviado";
		echo "<br />";
		echo '<a href="../formularioERICK.html">Volver</a>';
	    }
    }  
?>