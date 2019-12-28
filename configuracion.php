<?php

@define("RAIZ", __dir__);
@define("APP", RAIZ."app/");
@define("ASSETS", RAIZ."assets/");
@define("VIEW_SMARTY", ASSETS."views_smarty/");
@define("CONTROLLER", APP."controllers/");
@define("CONFIG", APP."config/");
@define("VENDOR", RAIZ."/vendor/");
//@define("SMARTY", VENDOR."/smarty/smarty/libs/");
require( VENDOR. 'autoload.php' );

/** cargue de modulo de smarty */
$smarty = new Smarty();
$smarty->template_dir           =VIEW_SMARTY."template_dir/";
$smarty->cache_dir              = VIEW_SMARTY."cache_dir/";
$smarty->compile_dir            = SVIEW_SMARTY."compile_dir/";
//$smarty->force_compile          = $QConfig->smarty_force_compile;

/** Constantes para la conexion a la base de datos */
@define("HOST", "sql132.main-hosting.eu");
@define("USER", "u219029939_prueba_geral");
@define("PASS", "Cuervo2017");
@define("DB_NAME", "u219029939_prueba_geral");