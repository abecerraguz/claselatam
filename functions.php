<?php


/*
Una forma segura de registrar un archivo de estilo CSS para su uso posterior

wp_register_style( $handle, $src, $deps, $ver, $media );

$handle:
(cadena)(requerido) Nombre de la hoja de estilo (que debe ser única, ya que se utiliza para identificar el script en todo el sistema).

$src:
(cadena)(requerido) URL a la hoja de estilo. Ejemplo: 'http://example.com/css/mystyle.css'. Nunca debe codificar las URL a los estilos locales, use plugins_url () (para Complementos) y get_template_directory_uri () (para Temas) para obtener una URL adecuada. Los activos remotos se pueden especificar con una URL sin protocolo, es decir, '//otherdomain.com/css/theirstyle.css'.


$deps:
(matriz) (opcional) Matriz de controladores de cualquier hoja de estilo de la que depende esta hoja de estilo. Las hojas de estilo dependientes se cargarán antes de esta hoja de estilo.
Predeterminado: array ()

$ver:
( string | boolean ) ( opcional ) String que especifica el número de versión de la hoja de estilo, si tiene uno. Este parámetro se utiliza para garantizar que la versión correcta se envíe al cliente independientemente del almacenamiento en caché, por lo que debe incluirse si hay un número de versión disponible y tiene sentido para la hoja de estilo. La versión se adjunta a la URL de la hoja de estilo como una cadena de consulta, como ? Ver = 3.5.1 . Por defecto, o si es falso , se usa la cadena de versión de WordPress. Si es nulo no se anexa nada a la URL.
Predeterminado: falso

$media:
(cadena) (opcional) Cadena que especifica los medios para los que se ha definido esta hoja de estilo. Ejemplos: ' todos ', ' pantalla ', ' computadora de mano ', ' imprimir '. Consulte esta lista para conocer la gama completa de tipos de medios CSS válidos.
Predeterminado: 'todo'

function theme_styles()
{
  // Registro el estilo que te gusta para el tema:
  // (Primero con un nombre único para el
  // estilo (custom-style) después el src,
  // dependencias y número versión y tipo de media)
  wp_register_style( 'custom-style',
    get_template_directory_uri() . '/css/custom-style.css',
    array(),
    '20120208',
    'all' );

  // enqueing:
  wp_enqueue_style( 'custom-style' );
}
add_action('wp_print_styles', 'theme_styles');
    


*/
function themes_style() {
        wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css',array(),'2','all');
        wp_register_style('imageHover', get_template_directory_uri() . '/css/imagehover.css');
        wp_register_style('font-awesome', get_template_directory_uri() . '/css/fontawesome-all.css');
        wp_register_style('owlcarousel', get_template_directory_uri() . '/css/owl.carousel.css');
        wp_register_style('owlcarouselTheme', get_template_directory_uri() . '/css/owl.theme.default.css');
        wp_register_style('myStyle', get_template_directory_uri() . '/css/main.css');
        wp_register_style('dataTable', get_template_directory_uri(). '/css/datatables.min.css');

        wp_enqueue_style('bootstrap');
        wp_enqueue_style('imageHover');
        wp_enqueue_style('font-awesome');
        wp_enqueue_style('owlcarousel');
        wp_enqueue_style('owlcarouselTheme');
        wp_enqueue_style('myStyle');
        wp_enqueue_style('dataTable');
    }
add_action( 'wp_print_styles', 'themes_style' );








;?
