<?php


// VARIABLES -------------------------------------------
$ciudades = ['Logroño','Zaragoza','Teruel','Madrid','Lleida','Alicante','Castellón','Segovia','Ciudad Real'];
$conexiones = 	[[0,4,6,8,0,0,0,0,0],
        		[4,0,2,0,2,0,0,0,0],
        		[6,2,0,3,5,7,0,0,0],
        		[8,0,3,0,0,0,0,0,0],
        		[0,2,5,0,0,0,4,8,0],
        		[0,0,7,0,0,0,3,0,7],
        		[0,0,0,0,4,3,0,0,6],
        		[0,0,0,0,8,0,0,0,4],
        		[0,0,0,0,0,7,6,4,0]];
     
@ $ciudad1 = $_REQUEST["ciudad1"];   
@ $ciudad2 = $_REQUEST["ciudad2"];   
@ $ciudad3 = $_REQUEST["ciudad3"];  
       
if(isset($ciudad1)){
	$resp_form1 = '<div style="color: red; font-size: 16px;">Problema <u>matemático</u> del viajante</div>';
}

if(isset($ciudad3)){
	$resp_form2 = '<div style="color: red; font-size: 16px;">Problema <u>matemático</u> del viajante</div>';
}
       
       
       
       
       
       
       
       
       
       
 // VISTA  ----------------------------------------    
echo '
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Next Generation Transport Service</title>
</head>

<body>
	<h1>Panel NGTS</h1>
	
	
	<h2>Ruta más económica</h2>
	<form method="post" name="buscara_por_centro" action="index.php" >
    			Elija las 2 ciudades para calcular ruta y coste
    			<select name="ciudad1" style="width:200px">
    				<option value=""> Elija ciudad ORIGEN	 </option>
    				'.lista_ciudades($ciudades, $ciudad1).'
    			</select>
    			
    			<select name="ciudad2" style="width:200px">
    				<option value=""> Elija ciudad DESTINO </option>
    				'.lista_ciudades($ciudades, $ciudad2).'
    			</select>
    			    			
    			<input type="submit" name="ver" id="ver" value="Ver" />
    			   
    </form>
    
    '.$resp_form1.'
	
	<h2>Coste a todos los destinos</h2>
	<form method="post" name="buscara_por_centro" action="index.php" >
    			Elija ciudad para ver coste a todos los destinos
    			<select name="ciudad3" style="width:200px">
    				<option value=""> Elija CIUDAD	 </option>
    				'.lista_ciudades($ciudades, $ciudad3).'
    			</select>
    				
    			<input type="submit" name="ver" id="ver" value="Ver" />
    			   
    </form>
    
     '.$resp_form2.'
</body>
</html>
';

 






// LÓGICA -----------------------------------------------


function lista_ciudades($ciudades, $ciudad_elegida = ''){
	
	$resultado = '';
	$num = count($ciudades);
	
	for ($i=0; $i<$num; $i++){
		if($ciudad_elegida==$ciudades[$i]){
			$aux = ' selected ';
		}else{
			$aux = '';
		}
		
		$resultado .= '<option value="'.$ciudades[$i].'" '.$aux.'> '.$ciudades[$i].'</option>';
    } 
    
    return $resultado;
}


?>