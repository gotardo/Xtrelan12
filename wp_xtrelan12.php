<?php

   /*
      Plugin Name: WP Xtrelan12
      Plugin URI: http://blog.gotardo.es/xtrelan-2012
      Description: Plugin para el taller de desarrollo de plugins de Xtrelan 2012 (27/09/2012)
      Version: 0.2
      Author: Gotardo González (@gotardo)
      Author URI: http://blog.gotardo.es
   */


    //clase principal del plugin

    class xtrelan12 {

        //Constructor
        function __construct() {

            //Registrar acciones
            add_action('admin_menu', array($this,'config_menu_page'));
            add_action('the_post',  array($this,'say_hello'));
        }

        //Añadir menú
        function config_menu_page () {
            //Añadir algunas páginas al menu
            add_menu_page("Xtrelan 2012 | config", "Xtrelan 2012", 6, 'xtrelan12', array($this,'admin_page'));
            add_submenu_page("xtrelan12", "Info", "Info", 6, "xtr-submenu1", array($this, 'info_page'));
        }

        //Página de principal de administración
        function admin_page() {
            echo "<h1>Xtrelan 2012</h1>
                    <h2>¡Esta es la página de administración!</h2>
            ";
        }

        //Página de información del blog
        function info_page () {
            echo "<h1>Xtrelan 2012</h1>
                    <h2>Esta es la página de información</h2>
                    <img src='" . plugins_url("img/wordpress-logos-300px-2.jpeg", __FILE__) . "' />
                    <div>
                        <ul>
                            <li>Nombre:  "      . get_bloginfo("name")          . "</li>
                            <li>Descripción:  " . get_bloginfo("description")   . "</li>
                            <li>Admin:  "       . get_bloginfo("admin_email")   . "</li>
                            <li>Template:  "    . get_bloginfo("template_url")  . "</li>
                            <li>Este fichero: " . __FILE__ . "</li>
                        </ul>
                    </div>
                    ";
        }

        function say_hello () {
            printf("<div>Hello, man</div>");
        }

    }



    //Llamamos a la función principal del plugin
    $xtr = new xtrelan12();


?>
