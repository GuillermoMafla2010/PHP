<?php

require_once ("modelo/Personas_Modelo_Cap78.php");
$persona=new Personas_Modelo_Cap78();
$matrizPersonas=$persona->get_personas();


require_once ("vista/Personas_View_Cap78.php");

?>