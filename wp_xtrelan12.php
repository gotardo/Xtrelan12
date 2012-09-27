<?php

   /*
      Plugin Name: WP Xtrelan12
      Plugin URI: http://blog.gotardo.es/xtrelan-2012
      Description: Plugin para el taller de desarrollo de plugins de Xtrelan 2012 (27/09/2012)
      Version: 0.1
      Author: Gotardo González (@gotardo)
      Author URI: http://blog.gotardo.es
   */


    //Función principal del plugin
    function wp_xtrelan12 () {
        //Añadimos acción a admin_notices, se ejecutará siempre
        add_action( 'admin_notices', function () { echo '<div class="updated"><p>Hola, mundo</p></div>';} );
    }


    //Llamamos a la función principal del plugin
    wp_xtrelan12 ();
?>
