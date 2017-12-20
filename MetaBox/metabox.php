<?php
    /*
    * Lignes à placer dans un fichier thème functions.php ou dans un module
    */

    // Ajout de la metabox
    add_action( 'add_meta_boxes', 'load_metabox', 10, 2 );
    function load_metabox( $post_type, $post ) {
        if ( 'post' == $post_type )
        {
            add_meta_box( 'nom-machine-informative-metabox', 'Informations', 'informative_metabox', $post_type, 'side', 'core' );
        }
    }


    // La metabox
    function informative_metabox( $post ) 
    {
        echo '<b>Affichage d'une Metabox informative</b>';
    }
