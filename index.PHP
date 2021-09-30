<?php
// traemos el archivo  de configuración y destro de este están las funciones
require_once('app/config.php');

// a tra ves de esta manera traigo la información que quiero mostrar
$data=
[
    'title'=> 'Tienda de carrito',
    'products'=> get_products()
];


// traigo la vista carito ene esta vista contiene las partes incluidas para mostrar

// renderizado de vista (no olvidar que la función está en functions)
render_view('carrito_view', $data);





