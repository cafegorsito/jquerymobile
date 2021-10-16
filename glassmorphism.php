<?php
    header( "Content-Type: text/css" ) ;
    $color = isset($_GET["color"]) ? $_GET["color"] : "0" ;
    $brillo = isset($_GET["brillo"]) ? $_GET["brillo"] : "96" ;
    $opacidad = isset($_GET["opacidad"])?$_GET["opacidad"] : 0.25 ;
    $base = "$color"."deg, 50%, $brillo%" ;
?>
        .ui-header, .ui-footer {
            backdrop-filter: blur(4px) !important;
            background-color: hsla(<?=$base?>,<?=$opacidad?>)!important;
            border-color: transparent !important;
        }
        .ui-header .ui-link, .ui-header .ui-btn {
            border: none ;
        }
        .ui-header {
            border-top-left-radius: 10px ;
            border-top-right-radius: 10px ;
        }
        .ui-footer {
            border-bottom-left-radius: 10px ;
            border-bottom-right-radius: 10px ;
        }
        .ui-link, .ui-btn, .ui-listview, .ui-popup, .ui-content { 
            background-color: hsla(<?=$base?>,<?=$opacidad?>)!important;
            backdrop-filter: blur(4px);
        }
        .ui-content h1 {
            border-radius: 10px ;
        }
        [es-responsive] {
            width: 80% ;
            margin: auto ;
            margin-top: -30px ;
        }
        .ui-content {
            border-radius: 10px ;
            border-top-left-radius: 30px ;
            border-top-right-radius: 30px ;
            background-color: hsla(<?=$base?>,<?=$opacidad+.2?>);
            margin-bottom: 30px ;
        }
        .ui-content+.ui-content {
            border-radius: 3px ;
            margin-top: 0 ;
            margin-bottom: 30px ;
        }
        .ui-page-theme-a .ui-btn {
            border: transparent ;
        }
