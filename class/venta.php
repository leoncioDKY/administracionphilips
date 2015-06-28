<?php
include_once("bd.php");
class venta extends bd{
	var $tabla="venta";
	function sumarProducto($codproductos){
		$this->campos=array("sum(cantidad) as cantidadventatotal");
		return $this->getRecords("codproductos=$codproductos and activo=1");	
	}
    function totalventames($mes=1,$anio){
		$this->campos=array("*,count(*) as Cantidad,MONTH(`fechaventa`) as Mes");
		return $this->getRecords("MONTH(`fechaventa`) = '$mes' and YEAR(`fechaventa`)='$anio' and activo=1");	
	}
    function totalventadia($dia){
		$this->campos=array("*,count(*) as Cantidad,MONTH(`fechaventa`) as Mes");
		return $this->getRecords("`fechaventa`='$dia' and activo=1");	
	}
}
$codigos=array("D1-23-F2-67-48","AA-9F-65-73","9A-65-D4-2D-96","A4-16-2E-E6-45","3C-B2-B3-98","B1-40-71-8E","1C-10-22-AF-02","7A-3A-A0-F8-B6","16-5B-85-B2-A2","C2-21-B6-A8-D8","22-BD-CD-D9","2C-57-1E-9A","C4-53-79-E4","08-4A-6C-54-D5","55-29-4F-47","16-5B-85-B2-A2","33-0D-32-C9-18","A4-16-2E-E6-45","7E-06-67-11-89","CE-42-9A-E3","63-E5-1D-5B","71-71-DA-19-3B","36-A9-A0-C3-7D","FA-72-A6-CC","9C-00-9C-2A-B0","4A-EA-24-1D-BF","BE-B7-F4-24","E6-EF-84-58-34","D9-DE-6A-59-95","71-71-DA-19-3B");
function GenerarCodigoControl(){
		$codigos=array("D1-23-F2-67-48","AA-9F-65-73","9A-65-D4-2D-96","A4-16-2E-E6-45","3C-B2-B3-98","B1-40-71-8E","1C-10-22-AF-02","7A-3A-A0-F8-B6","16-5B-85-B2-A2","C2-21-B6-A8-D8","22-BD-CD-D9","2C-57-1E-9A","C4-53-79-E4","08-4A-6C-54-D5","55-29-4F-47","16-5B-85-B2-A2","33-0D-32-C9-18","A4-16-2E-E6-45","7E-06-67-11-89","CE-42-9A-E3","63-E5-1D-5B","71-71-DA-19-3B","36-A9-A0-C3-7D","FA-72-A6-CC","9C-00-9C-2A-B0","4A-EA-24-1D-BF","BE-B7-F4-24","E6-EF-84-58-34","D9-DE-6A-59-95","71-71-DA-19-3B");
		$codigos2=array("D1-23-F2-67-48","AA-9F-65-73","9A-65-D4-2D-96","A4-16-2E-E6-45","3C-B2-B3-98","B1-40-71-8E","1C-10-22-AF-02","7A-3A-A0-F8-B6","16-5B-85-B2-A2","C2-21-B6-A8-D8","22-BD-CD-D9","2C-57-1E-9A","C4-53-79-E4","08-4A-6C-54-D5","55-29-4F-47","16-5B-85-B2-A2","33-0D-32-C9-18","A4-16-2E-E6-45","7E-06-67-11-89","CE-42-9A-E3","63-E5-1D-5B","71-71-DA-19-3B","36-A9-A0-C3-7D","FA-72-A6-CC","9C-00-9C-2A-B0","4A-EA-24-1D-BF","BE-B7-F4-24","E6-EF-84-58-34","D9-DE-6A-59-95","71-71-DA-19-3B");
	if($codigo=1){
		$codigos3=array("D1-23-F2-67-48","AA-9F-65-73","9A-65-D4-2D-96","A4-16-2E-E6-45","3C-B2-B3-98","B1-40-71-8E","1C-10-22-AF-02","7A-3A-A0-F8-B6","16-5B-85-B2-A2","C2-21-B6-A8-D8","22-BD-CD-D9","2C-57-1E-9A","C4-53-79-E4","08-4A-6C-54-D5","55-29-4F-47","16-5B-85-B2-A2","33-0D-32-C9-18","A4-16-2E-E6-45","7E-06-67-11-89","CE-42-9A-E3","63-E5-1D-5B","71-71-DA-19-3B","36-A9-A0-C3-7D","FA-72-A6-CC","9C-00-9C-2A-B0","4A-EA-24-1D-BF","BE-B7-F4-24","E6-EF-84-58-34","D9-DE-6A-59-95","71-71-DA-19-3B");
	}
	$codigos4=array("D1-23-F2-67-48","AA-9F-65-73","9A-65-D4-2D-96","A4-16-2E-E6-45","3C-B2-B3-98","B1-40-71-8E","1C-10-22-AF-02","7A-3A-A0-F8-B6","16-5B-85-B2-A2","C2-21-B6-A8-D8","22-BD-CD-D9","2C-57-1E-9A","C4-53-79-E4","08-4A-6C-54-D5","55-29-4F-47","16-5B-85-B2-A2","33-0D-32-C9-18","A4-16-2E-E6-45","7E-06-67-11-89","CE-42-9A-E3","63-E5-1D-5B","71-71-DA-19-3B","36-A9-A0-C3-7D","FA-72-A6-CC","9C-00-9C-2A-B0","4A-EA-24-1D-BF","BE-B7-F4-24","E6-EF-84-58-34","D9-DE-6A-59-95","71-71-DA-19-3B");
	if($codigo=1){
		$codigos3=array("D1-23-F2-67-48","AA-9F-65-73","9A-65-D4-2D-96","A4-16-2E-E6-45","3C-B2-B3-98","B1-40-71-8E","1C-10-22-AF-02","7A-3A-A0-F8-B6","16-5B-85-B2-A2","C2-21-B6-A8-D8","22-BD-CD-D9","2C-57-1E-9A","C4-53-79-E4","08-4A-6C-54-D5","55-29-4F-47","16-5B-85-B2-A2","33-0D-32-C9-18","A4-16-2E-E6-45","7E-06-67-11-89","CE-42-9A-E3","63-E5-1D-5B","71-71-DA-19-3B","36-A9-A0-C3-7D","FA-72-A6-CC","9C-00-9C-2A-B0","4A-EA-24-1D-BF","BE-B7-F4-24","E6-EF-84-58-34","D9-DE-6A-59-95","71-71-DA-19-3B");
	}
	return $codigos;
}
?>