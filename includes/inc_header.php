<!DOCTYPE html>
<html lang="es">

<head>
    <base href="<?php echo BASEPATH?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- el echo que se incorpora es un operador terciario -->
    <title><?php echo (isset($data['title'])? $data['title']:'Proyecto-carrito') ?></title>
    <!--Bootstrap 5  -->
  
     <link rel="stylesheet" href="<?php echo CSS.'bootstrap.min.css' ?>">
    <!--fin Bootstrap 5-->

    <!-- waitME -->
    <!-- Este es el  plugin de espera mientras la página procesa algo -->
    <link rel="stylesheet" href="assets/plugins/waitMe/waitMe.min.css">
    <!-- FIN waitME -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <!--Fin Awesome  -->


    <!-- Sweet alert 2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Fin Sweet alert 2 -->

</head>
<body>
