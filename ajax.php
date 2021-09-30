<?php
require_once('app/config.php');
// respuesta que regrea a ajax
// ejemplo de usode ajax
// function get_json(){
// $products= get_products();
// $respuesta =
// [

// 'status'=> 200,
// 'mensaje'=>' Hola Es la primera respuesta',
// 'data'=> $products


// ];
// // escupimosun jeison en pantalla

// echo json_encode($respuesta);

// }
// get_json();

// que tipo de petición está solicitando ajax
if (!isset($_POST['action'])) {
    http_response_code(403);
    echo json_encode(['status', 403]);
    die;
}
// GET 
$action = $_POST['action'];

switch ($action) {
    case 'get':
        $cart = get_cart();
 $output='';

        if (!empty($cart['products'])) {
            $output  .= '<div class="table-responsive">
  <table class="table table-hover table-striped table-sm">
  <thead>
      <tr>
          <th style="background-color:#29bf12; border-radius:3px;">Producto</th>
          <th class="bg-danger">Cantidad</th>
          <td style="background-color:#ff9914; border-radius:3px;">Total</td>
          <th class="text-right"></th>
      </tr>
  </thead>
  <tbody>
      <!-- producto -->
      <tr>
          <td>
              <small class="d-block text-withe ">Portátil lenovo A10</small>
          </td>
          <td>
              <small class="d-block text-withe "><input class="form-control form-control-sm bg-light" style=" width:50px;" type="number" min="00" max="50" value="1"></small>
          </td>
          <td>
              <smoll class="d-block text-withe  ">$13200</smoll>
          </td>
          <td class="text-right align-middle " style="cursor:pointer;"><i class="fas fa-times text-danger "></i></td>


      </tr>
      <!-- FIN PRODUCTO -->
      <!-- producto -->
      <tr>
          <td>
              <small class="d-block text-withe ">Moto G 30</small>
          </td>

          <td>
              <small class="d-block text-withe "><input class="form-control form-control-sm bg-light " style=" width:50px;" type="number" min="00" max="50" value="1"></small>
          </td>
          <td>
              <smoll class="d-block text-withe ">$144800</smoll>
          </td>
          <td class="text-right align-middle" style="cursor:pointer;"><i class="fas fa-times text-danger"></i></td>
              

      </tr>
      <!-- FIN PRODUCTO -->
      <!-- producto -->
      <tr>
          <td>
              <small class="d-block text-white ">Auriculares bt</small>
          </td>
          <td>
              <small class="d-block text-white "><input class="form-control form-control-sm bg-light" style=" width:50px;" type="number" min="00" max="50" value="1"></small>
          </td>
          <td>
              <smoll class="d-block text-white ">$10600</smoll>
          </td>
          <td class="text-right align-middle" style="cursor:pointer;"><i class="fas fa-times text-danger"></i></td>

      </tr>
      <!-- FIN PRODUCTO -->
      <!-- producto -->
      <tr>
          <td>
              <small class="d-block text-withe ">Manos libres</small>
          </td>
          <td>
              <small class="d-block text-withe "><input class="form-control form-control-sm bg-light" style=" width:50px;" type="number" min="00" max="50" value="1"></small>
          </td>
          <td>
              <smoll class="d-block text-withe ">$23200</smoll>
          </td>
          <td class="text-right align-middle" style="cursor:pointer;"><i class="fas fa-times text-danger"></i></td>
      </tr>
      <!-- FIN PRODUCTO -->
  </tbody>

</table> 
</div>
<button class="btn btn-sm btn-danger">Vaciar carrito</button>';
        } else {

            $output .= '
            <div class="text-center">
            
            <img src="'.IMAGENES.'empty-cart.png'.'"  class="img-fluid"  alt="Nombre de la imagen">
            El carrito se encuentra vacío!
            </div>
            ';
        }
        $output .=

            '<!-- end card content -->
<!-- tabla de totales -->
<br><br>

<table class="table">
 <tr>
     <th>Subtotal</th>
     <td class="text-success text-center border-0 ">'.format_currency($cart['subtotal']).'</td>
 </tr>
 <tr>
     <th>Envío</th>
     <td class="text-success text-center">'.format_currency($cart['shipment']).'</td>
 </tr>
 <tr>
     <th  class=" fw-bold"> <h4> Total</h4></th>
     <td class="text-success text-center ">
         <h4 class="fw-bold">'.format_currency($cart['total']).'</h4>
     </td>
 </tr>


</table>
<!-- boton pagar ahora -->
<div class="d-grid gap-2">
 <button class="btn mt-2" style="background-color: #8338ec; height:40px; color:#fff; border-radius:12px;" type="button">Pagar</button>

</div>';







        json_output(200, 'Ok', $output);

        break;

    default:

        break;
}
