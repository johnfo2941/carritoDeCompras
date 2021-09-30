<!-- contenido principal -->
<div class="container-fluid py-5">
    <div class="row">
        <!-- products -->
        <div class="col-xl-8">
            <h1>Productos</h1>
            <div class="row">

            <?php foreach ($data['products'] as $p):?> <!--ABRE FOREACH-->

                <!-- img 1 -->
                <div class="col-3 mb-3 " >

                    <div class="card" >
                        <img style=" border-radius:12px; " src="<?php echo IMAGENES.$p['imagen'];?>" alt="<?php echo $p['nombre'] ?>" class="cad-img-top">
                        <div class="card-body  p-2">
                            <h5 class="card-title text-truncate"><?php echo $p['nombre'] ?></h5>
                          <p class="text-success"><?php echo format_currency($p['precio'])?></p>
                          
                            <button type="button" class="btn" style="background-color: #29bf12; color:black;" data-bs-toggle="tooltip" data-bs-placement="top" title="Agregar al carrito"> <span> <i class="fas fa-plus"></i></span>
                                Agregar al carrito</button>

                        </div>
                    </div>
                </div>
                <!-- Fin img 1 -->
                <?php endforeach?><!--CIERRA FOREACH-->
            </div>


        </div>
         <!-- carrito -->
        <div class="col-xl-4 bg-dark">
            <h1>Carrito <span><i class="fas fa-shopping-cart"></i></span></h1>
           
           
         


            <!-- card content -->
            <div id="cart_wrapper">

     
           <!-- fin boton -->
           </div>
            <!-- fin tabla de totales -->
        </div>
    </div>
</div>
<!-- Fin de contenido principal -->
<br>