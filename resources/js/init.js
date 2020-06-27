(function($){
  $(function(){

  	// $('#dro').dropdown();

    $('.modal').modal({

      inDuration: 650,
      outDuration: 650,

    });

  	$('select').formSelect();
    
    $('.tooltipped').tooltip();

    $('#fecha').datepicker({

      format: 'dd-mm-yyyy',
      disableWeekends: true,
      minDate: new Date(),
      i18n:{

        cancel: 'Cancelar',  
        done: 'Aceptar',
        months: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
        monthsShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
        weekdays: ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'],
        weekdaysShort: ['Dom','Lun','Mar','Mie','Jue','Vie','Sab'],
        weekdaysAbbrev: ['D','L','M','M','J','V','S'],  


      },



    });

    $('.timepicker').timepicker({

      i18n: {

        cancel: 'Cancelar',  
        done: 'Aceptar',
        defaultTime: 'now',
        
      },

    });

    
  }); // end of document ready
})(jQuery); // end of jQuery name space





$(document).ready(function(){
  
    $('.dropdown-trigger').dropdown();
	
    $('.modal').modal({

      inDuration: 650,
      outDuration: 650,

    });

    $('.sidenav').sidenav();

    $('select').formSelect();

    $('.collapsible').collapsible();

    $('.tooltipped').tooltip();

    $('.materialboxed').materialbox();

    $('.fixed-action-btn').floatingActionButton();

    $('.carousel').carousel();

    $('.slider').slider();

    $('.tabs').tabs();

    $('.scrollspy').scrollSpy();

    $('input#telefono','input#age').characterCounter();


    

  });




