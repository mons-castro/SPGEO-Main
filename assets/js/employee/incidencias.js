$(document).ready(function() {
    $('.sidenav').load('../assets/logos/nav.php')
    $('#barrah').load('../assets/logos/nav2.php')
    $(".error").hide(); 

    $("#registraincidencias").click(function(){
        //funajax();
        validar();

   });

});


function validar(){

    var array=Array();
    var resp=Array();
    var fecha_solicitud=$("#fecha-incidencia").val();
    var nombre=$("#nombre").val();
    var correo=$("#email").val();
    var fecha_inicio=$("#inicio-incidencia").val();
    var fecha_fin=$("#fin-incidencia").val();
    var motivo=$("#motivo").val();
    var regex =new RegExp("/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/");
    
        //VALIDAR FECHA SOLICITD
        if(fecha_solicitud ==""){
            $("#e-fechasolicitud").text('Debes ingresar fecha de solicitud')
            $("#e-fechasolicitud").fadeIn();  
            $("#fecha-incidencia").css("border","2px solid red"); 
            array.push("Sin fecha de solicitud");   
        }else{
            if(isValidDate(fecha_solicitud)){
                $("#e-fechasolicitud").fadeOut();
                $("#fecha-incidencia").css("border","2px solid green");
            }
            else{
                $("#e-fechasolicitud").text('Fecha de solicitud no valida')
                $("#e-fechasolicitud").fadeOut();
                $("fecha-incidencia").css("border","2px solid red");
                array.push("Fecha de solicitud invalida"); 
            }
            
        }

        //VALIDANDO CAMPO NOMBRE
        if(nombre==""){
            $("#e-nombre").text('Debes ingresar en nombre')
            $("#e-nombre").fadeIn();
            $("#nombre").css("border","2px solid red");
            array.push("Nombre vacio");
            }
        else{
            $("#e-nombre").fadeOut();
            $("#nombre").css("border","2px solid green");
        }   
        
         //VALIDA CORREO ELECTRONICO//
         if(correo==""){
            $("#e-email").text('Debes ingresar un correo electrónico')
            $("#e-email").fadeIn();
            $("#email").css("border","2px solid red");
            array.push("Sin email"); 
        }else{
                $("#e-email").fadeOut();
                $("#email").css("border","2px solid green");
        }
        


        //VALIDA QUE SELECCIONE UN ELEMENTO DEL RADIO
        if($('input[type="radio"]').is(':checked')){
            $("#incidencia").fadeOut();       
            $('input[type="radio"]').css("border","2px solid green"); 
           }
           else{
                $("#incidencia").text('Debes seleccionar el tipo de incidencia')
               $("#incidencia").fadeIn();
               $('input[type="radio"]').css("border","2px solid red"); 
           }

        //VALIDAR FECHA INICIO
        if(fecha_inicio ==""){
            $("#e-inicioincidencia").text('Debes ingresar inicio de incidencia')
            $("#e-inicioincidencia").fadeIn();  
            $("#inicio-incidencia").css("border","2px solid red"); 
            array.push("Sin fecha de inicio");   
        }else{
            if(isValidDate(fecha_inicio)){
                $("#e-inicioincidencia").fadeOut();
                $("#inicio-incidencia").css("border","2px solid green");
            }
            else{
                $("#e-inicioincidencia").text('Fecha de inicio no valida')
                $("#e-inicioincidencia").fadeOut();
                $("#inicio-incidencia").css("border","2px solid red");
                array.push("Fecha de inicio invalida"); 
            }
            
        }

        //VALIDAR FECHA FIN
        if(fecha_fin ==""){
            $("#e-finincidencia").text('Debes ingresar fin de incidencia')
            $("#e-finincidencia").fadeIn();  
            $("#fin-incidencia").css("border","2px solid red"); 
            array.push("Sin fecha de fin");   
        }else{
            if(isValidDate(fecha_fin)){
                $("#e-finincidencia").fadeOut();
                $("#fin-incidencia").css("border","2px solid green");
            }
            else{
                $("#e-finincidencia").text('Fecha de fin no valida')
                $("#e-finincidencia").fadeOut();
                $("#fin-incidencia").css("border","2px solid red");
                array.push("Fecha de fin invalida"); 
            }
            
        }

        
        //VALIDANDO MOTIVO
        if(motivo==""){
            $("#e-motivo").text('Resume el motivo de la incidencia')
            $("#e-motivo").fadeIn();
            $("#motivo").css("border","2px solid red");
            array.push("Sin biografia"); 
            }
        else{
            $("#e-motivo").fadeOut();
            $("#motivo").css("border","2px solid green");
        }   

      


        if(array.length==0){
            funajax();
            $("#error-gral").fadeOut();
        }else{
            $("#error-gral").text('Verifique los campos faltantes.');
            $("#error-gral").fadeIn();
        }

        
}

    function isValidDate(str){
        // STRING FORMAT yyyy-mm-dd
        if(str=="" || str==null){return false;}								
        
        // m[1] is year 'YYYY' * m[2] is month 'MM' * m[3] is day 'DD'					
        var m = str.match(/(\d{4})-(\d{2})-(\d{2})/);
        
        // STR IS NOT FIT m IS NOT OBJECT
        if( m === null || typeof m !== 'object'){return false;}				
        
        // CHECK m TYPE
        if (typeof m !== 'object' && m !== null && m.size!==3){return false;}
                    
        var ret = true; //RETURN VALUE						
        var thisYear = new Date().getFullYear(); //YEAR NOW
        var minYear = 1939; //MIN YEAR
        
        // YEAR CHECK
        if( (m[1].length < 4) || m[1] < minYear || m[1] > thisYear){ret = false;}
        // MONTH CHECK			
        if( (m[2].length < 2) || m[2] < 1 || m[2] > 12){ret = false;}
        // DAY CHECK
        if( (m[3].length < 2) || m[3] < 1 || m[3] > 31){ret = false;}
        
        return ret;			
    }
