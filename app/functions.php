<?php
function get_products(){

    $products = require(APP.'products.php');
    return $products;


}

function get_product_by_id($id){
$products= get_products();

foreach ($products as $i => $v) {
 if($v['id']===$id){
     return $products[$i];



 }
 return false;

}
}




function render_view($view, $data=[]){

if (!is_file(VIEWS.$view.'.php')){
    // si no quiero que exista vita yo quiero que hagas esto
    echo 'No existe la vista: '.$view;
    die;
}
require_once(VIEWS.$view.'.php');

}
function format_currency($number, $simbol='$'){
if(!is_float($number) && !is_integer($number)){
    $number=0;
}
  return $simbol.number_format($number,2,'.',',');


}

// ---------------------------------------------------------------------
// funciones de Carrito
// ---------------------------------------------------------------------

function get_cart(){
    // productos
    // -ID
    // -SKU
    // -IMAGEN
    // -NOMBRE
    // -PRECIO
    // -CANTIDAD


    // total products
    // subtotal
    // shipment "envío"
    // Total
    // payment URL

    // creamos la variable de sesión 
    if(isset($_SESSION['cart'])){
        return $_SESSION['cart'];
    }

    // inicializo carrito 
    $cart =
    [
        'products' => [],//array vacio
        'total' => 0, // inicializo en cero 
        'subtotal' => 0,
        'shipment'=> 0,
        'total'=> 0,
        'payment_url'=>null // inicializo en nulo

    ];

// ingresamos la información en la llave de nustra variable de sesión
$_SESSION['cart'] = $cart;

return $_SESSION['cart'];


}
function json_output($status=200, $msj ='', $data=[]){
    http_response_code($status);
    $resp=
    [
      'status'=> $status,
      'msj'   => $msj,
      'data'  =>$data
    ];
    echo json_encode($resp);
    die;
}
