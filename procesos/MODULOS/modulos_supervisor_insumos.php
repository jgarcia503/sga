<?php 
if ($_SESSION["id_rol"] == 7) {
    //paginas para modulo de actividades
    $conf['actividades'] = array(
        'archivo' => 'buzon_mis_actividades.php',
        'layout' => LAYOUT_DESKTOP
    );
    //paginas para modulo de memorandum
    $conf['memorandum'] = array(
        'archivo' => 'vista_memorandum_digitador.php',
        'layout' => LAYOUT_DESKTOP
    );
    $conf['memodig'] = array(
        'archivo' => 'ingresar_memorandum_digitador.php',
        'layout' => LAYOUT_DESKTOP
    );
    $conf['modmemo'] = array(
        'archivo' => 'modificar_memorandum_digitador.php',
        'layout' => LAYOUT_DESKTOP
    );
    //paginas para modulo de insumos
    $conf['insumos'] = array(
        'archivo' => 'ingresar_solicitud_insumos.php',
        'layout' => LAYOUT_DESKTOP
    );
    $conf['vinsumos'] = array(
        'archivo' => 'vista_solicitudes_insumos.php',
        'layout' => LAYOUT_DESKTOP
    );
    $conf['cinsumos'] = array(
        'archivo' => 'ingresar_articulos_insumos.php',
        'layout' => LAYOUT_DESKTOP
    );
    $conf['articulo'] = array(
        'archivo' => 'vista_bodega_insumos.php',
        'layout' => LAYOUT_DESKTOP
    );
    $conf['descargos_articulo'] = array(
        'archivo' => 'descargo_articulos_insumos.php',
        'layout' => LAYOUT_DESKTOP
    );
    $conf['msolicitud'] = array(
        'archivo' => 'modificar_solicitud.php',
        'layout' => LAYOUT_DESKTOP
    );
    $conf['repinsumo'] = array(
        'archivo' => 'insumos_panel_reportes.php',
        'layout' => LAYOUT_DESKTOP
    );
}
?>