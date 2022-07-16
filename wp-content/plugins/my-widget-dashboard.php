<?php 

//Accion Hook
add_action('wp_dashboard_setup','dcms_agregar_widget');

//Agregar Widget
function dcms_agregar_widget(){
	wp_add_dashboard_widget('id_my_widget','MY Widget of example','dcms_mostrar_widget');
}

//Mostrar Widget
function dcms_mostrar_widget(){
	echo "Hola desde mi nuevo Widget";
}
//Agregar Widget Modificado
function dcms_agregar_widget(){
	wp_add_dashboard_widget('id_mi_widget','Mi Widget de Ejemplo','dcms_mostrar_widget','dcms_configurar_widget');
}


//Configurar Widget
function dcms_configurar_widget()
{

	if ( isset($_POST['dcms_texto']) )
	{
		$dcms_texto = $_POST['dcms_texto'];
		update_option('dcms_text_bd', $dcms_texto); 
	}

	$dcms_texto = get_option('dcms_text_bd');

?> 
<label> Ingrese texto : 
<input type="text" name="dcms_texto" id="dcms_texto" value="<? echo $dcms_texto; ?>" /> 
</label> <?php
}
