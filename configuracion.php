<?php

@define("RAIZ", __dir__);
@define("APP", RAIZ."app/");
@define("ASSETS", RAIZ."assets/");
@define("VIEW_SMARTY", ASSETS."views_smarty/");
@define("CONTROLLER", APP."controllers/");
@define("VENDOR", RAIZ."/vendor/");
//@define("SMARTY", VENDOR."/smarty/smarty/libs/");
require( VENDOR. 'autoload.php' );
$smarty = new Smarty();
$smarty->template_dir           =VIEW_SMARTY."template_dir/";
$smarty->cache_dir              = VIEW_SMARTY."cache_dir/";
$smarty->compile_dir            = SVIEW_SMARTY."compile_dir/";
//$smarty->force_compile          = $QConfig->smarty_force_compile;