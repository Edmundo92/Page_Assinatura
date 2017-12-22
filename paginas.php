<?
switch ($_GET['pg']){

	case 'HOME':
	include "index.php";
	break;
	
	case 'LISTA':
	include "lista.php";
	break;

	case 'LEIA':
	include "leia.php";
	break;
		
	default:
	include ("index.php");
	break;

}
?>