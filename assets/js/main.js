
   /* promises promesas esta función se compromete a regrsar algo
   .done(); satisfactoria
   .fail(); erronea
   .always(); siempre va a pasar
 */
// se crea lo siguiente con el fin de aseguraerse de que se carga el documento
// y para evitar errores
$(document).ready(function(){// <-- esto se activa una ves el documento está totalmente  cargadoes redir recarga
 
// cargar al carro

// funcion cargar carrito
function load_carrito(){
var wrapper = $('#cart_wrapper'),
action = 'get';
//  petición ajax
$.ajax({
   url: 'ajax.php', // donde va a ser nuestra petición
   type: 'POST',//tipo de petición
   dataType: 'JSON',// Define el tipo de archivo que vamos a traer
   data: 
   {
    action
   },
   beforeSend: function(){//carga el waitMe antes de enviar una petición
    wrapper.waitMe();
   }

}).done(//devuelve satisfactoria
   function(res){
        
      if (res.status===200){
         wrapper.html(res.data);
    
      }
      
       console.log(res);

   }).fail(function(err){//devuelve cuando occurre un error cualquiera que sea
      
      Swal.fire({
        icon: 'error',
        title: 'Upsss...',
        text: 'Está pasando algo!',
        footer: '<a href="">Why do I have this issue?</a>'
      })
       return false;
   }).always(function(){// siempre devuelve algo
      setTimeout(()=>{// este metodo se usa pra que espere 3 segundos antes cargar la información solicitada
        wrapper.waitMe('hide') ;
      },1500);
     
});

};
load_carrito();
// agregar al carro al dar clic en boton 

// actualizar el carro si el pruducto ya existe adentro

// actualizar carro con input

//borrar elemento del carro 


// realizar el pago






});
