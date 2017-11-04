$(".submenu").click(function(){

	if(!$(this).hasClass('active')){
     $('.active').children("ul").slideToggle();
     $('.active').removeClass('active');
     $(this).toggleClass('active');
     $(this).children("ul").slideToggle();
  }else{
    $(this).toggleClass('active');
    $(this).children("ul").slideToggle();
  }
  

})

/*$("ul").click(function(p){

	p.stopPropagation ();

})*/


function soloLetras(e){
     key = e.keyCode || e.which;
     tecla = String.fromCharCode(key).toLowerCase();
     letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
     especiales = "8-37-39-46";

     tecla_especial = false
     for(var i in especiales){
          if(key == especiales[i]){
              tecla_especial = true;
              break;
          }
      }

      if(letras.indexOf(tecla)==-1 && !tecla_especial){
          return false;
      }
}