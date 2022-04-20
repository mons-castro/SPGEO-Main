$(document).ready(function () {
    
    $("#file").change(function(){
        readURL(this);
        $("#file").hide();
        $("#e-foto").fadeOut();
    });
        

    
    $(".error").hide(); 
    $("#registraemp").click(function(){
         //funajax();
         validar();

            var fd = new FormData();
            var files = $('#file')[0].files;
            
            // Check file selected or not
            if(files.length > 0 ){
               fd.append('file',files[0]);
               $("#e-foto").fadeOut();
               $.ajax({
                  url: '../connect/php/registro_empleado.php',
                  type: 'post',
                  data: fd,
                  contentType: false,
                  processData: false,
                  success: function(response){
                     if(response != 0){
                       // $("#img").attr("src","../connect/php/"+response); 
                        // Display image element
                     }else{
                        alert('file not uploaded');
                     }
                  },
               });
            }else{
                $("#e-foto").text("Debe seleccionar una imagen");
                $("#e-foto").fadeIn();
              
            }
      
        
         
    });
});


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

function validar(){

    var array=Array();
    var resp=Array();
    var nombre=$("#nombre1").val();
    var nombre2=$("#nombre2").val();
    var apaterno=$("#apaterno").val();
    var amaterno=$("#apaterno").val();
    var tel=$("#tel").val();
    var fecha=$("#nacimiento").val();
    var nss=$("#nss").val();
    var valrfc=$("#rfc").val();
    var valcurp=$("#curp").val();
    var valcp=$("#cp").val();
    var estado=$("#estado").val();
    var municipio=$("#municipio").val();
    var colonia=$("#colonia").val();
    var calle=$("#calle").val();
    var numero=$("#direcnum").val();
    var lic=$("#lic").val();
    var bio=$("#biografia").val();
    var fb=$("#fb").val();
    var ig=$("#ig").val();
    var link=$("#linkedin").val();

    //Expresiones regulares
    var rfc = new RegExp("^[A-Z,Ñ,&]{3,4}[0-9]{2}[0-1][0-9][0-3][0-9][A-Z,0-9]?[A-Z,0-9]?[0-9,A-Z]?$");
    var curp=new RegExp("^[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]$");
    var cp=new RegExp("^[0-9]{5}$");
    
    
        //VALIDANDO CAMPO NOMBRE
        if(nombre==""){
            $("#e-nombre").text('Debes ingresar un nombre')
            $("#e-nombre").fadeIn();
            $("#nombre1").css("border","2px solid red");
            array.push("Nombre vacio");
            }
        else{
            $("#e-nombre").fadeOut();
            $("#nombre1").css("border","2px solid green");
        }   
        
        //VALIDANDO SEGUNDO NOMBRE
        if(nombre2==""){
            $("#e-nombre2").fadeOut();
            $("#nombre2").css("border","2px solid green");
            }
        else{
            $("#e-nombre2").fadeOut();
            $("#nombre2").css("border","2px solid green");
        }   
    
        //VALIDANDO APELLIDO PATERNO
        if(apaterno==""){
            $("#e-apat").text('Debes ingresar apellido')
            $("#e-apat").fadeIn();
            $("#apaterno").css("border","2px solid red");
            array.push("Sin apellido paterno");
            }
        else{
            $("#e-apat").fadeOut();
            $("#apaterno").css("border","2px solid green");
        } 

        //VALIDANDO APELLIDO MATERNO
        if(amaterno==""){
            $("#e-amat").text('Debes ingresar apellido')
            $("#e-amat").fadeIn();
            $("#amaterno").css("border","2px solid red");
            array.push("Sin apellido materno");
            }
        else{
            $("#e-amat").fadeOut();
            $("#amaterno").css("border","2px solid green");
        }   

        //VALIDANDO TELEFONO
        if(tel=="" || isNaN(tel)){
            $("#e-tel").text('Debes ingresar número de teléfono')
            $("#e-tel").fadeIn();  
            $("#tel").css("border","2px solid red"); 
            array.push("Sin número telefónico");         
            }     
            else{
            $("#e-tel").fadeOut();
            $("#tel").css("border","2px solid green");
            }    
        
        
        //VALIDAR FECHA
        if(fecha ==""){
            $("#e-fecha").text('Debes ingresar tu fecha de nacimiento')
            $("#e-fecha").fadeIn();  
            $("#nacimiento").css("border","2px solid red"); 
            array.push("Sin fecha de nacimiento");   
        }else{
            if(isValidDate(fecha)){
                $("#e-fecha").fadeOut();
                $("#nacimiento").css("border","2px solid green");
            }
            else{
                $("#e-fecha").text('Fecha de nacimiento mayor a 1939')
                $("#e-fecha").fadeOut();
                $("#nacimiento").css("border","2px solid red");
                array.push("Fecha de nacimiento invalida"); 
            }
            
        }

        //VALIDANDO SEXO
        if ($('#sexo').val() =="") {
            $("#e-sexo").text('Debes seleccionar una opción')
            $("#e-sexo").fadeIn();
            $("#sexo").css("border","2px solid red");
            array.push("Sin sexo válido"); 
    
        } else {
            $("#e-sexo").fadeOut();
            $("#sexo").css("border","2px solid green");
        }

        //VALIDAR RELIGION
        if ($('#religion').val()== "") {
            $("#e-religion").text('Debes seleccionar una opción')
            $("#e-religion").fadeIn();
            $("#religion").css("border","2px solid red");
            array.push("Sin religión válida"); 
    
        } else {
            $("#e-religion").fadeOut();
            $("#religion").css("border","2px solid green");
        }

        //VALIDAR ESTADO CIVIL
        if ($('#estcivil').val()== "") {
            $("#e-edocivil").text('Debes seleccionar una opción')
            $("#e-edocivil").fadeIn();
            $("#estcivil").css("border","2px solid red");
            array.push("Sin estado civil"); 
    
        } else {
            $("#e-edocivil").fadeOut();
            $("#estcivil").css("border","2px solid green");
        }

        //VALIDAR NSS
        if(nss ==""){
            $("#e-nss").text('Debes ingresar tu NSS')
            $("#e-nss").fadeIn();
            $("#nss").css("border","2px solid red");
            array.push("Sin NSS"); 
        }
        else{
            if(nss.length == 11){
               $("#e-nss").fadeOut();
               $("#nss").css("border","2px solid green"); 
            }
            else{
                if(nss.length <11){
                    $("#e-nss").text('No debe incluir menos de 11 digitos')
                    $("#e-nss").fadeIn();
                    $("#nss").css("border","2px solid red");
                    array.push("NSS incompleto"); 
                }
                else{
                    if(nss.length >11){
                        $("#e-nss").text('No debe incluir más de 11 digitos')
                        $("#e-nss").fadeIn();
                        $("#nss").css("border","2px solid red");
                        array.push("NSS inválido"); 
                    }
                }
            }
        }

        //VALIDAR RFC

        if(valrfc==""){
            $("#e-rfc").text('Debes ingresar tu RFC')
            $("#e-rfc").fadeIn();
            $("#rfc").css("border","2px solid red");
            array.push("Sin RFC"); 
        }else{
            if(rfc.test(valrfc)){
                $("#e-rfc").fadeOut();
                $("#rfc").css("border","2px solid green");
            }else{
                $("#e-rfc").text('Intenta de nuevo')
                $("#e-rfc").fadeIn();
                $("#rfc").css("border","2px solid red");
                array.push("RFC inválido"); 
            }
        }

        //VALIDAR CURP
        if(valcurp==""){
            $("#e-curp").text('Debes ingresar tu CURP')
            $("#e-curp").fadeIn();
            $("#curp").css("border","2px solid red");
            array.push("Sin CURP"); 
        }else{
            if(curp.test(valcurp)){
                $("#e-curp").fadeOut();
                $("#curp").css("border","2px solid green");
            }else{
                $("#e-curp").text('Curp no válida')
                $("#e-curp").fadeIn();
                $("#curp").css("border","2px solid red");
                array.push("CURP INVALIDA"); 
            }
        }
        
        //VALIDAR CP
        if(valcp==""){
            $("#e-cp").text('Debes ingresar tu Código Postal')
            $("#e-cp").fadeIn();
            $("#cp").css("border","2px solid red");
            array.push("Sin CP"); 
        }else{
            if(cp.test(valcp)){
                $("#e-cp").fadeOut();
                $("#cp").css("border","2px solid green");
            }else{
                $("#e-cp").text('Código Postal no válido')
                $("#e-cp").fadeIn();
                $("#cp").css("border","2px solid red");
                array.push("CP inválido"); 
            }
        }
        
        //VALIDAR ESTADO
        if(estado==""){
            $("#e-estado").text('Campo obligatorio');
            $("#e-estado").fadeIn();
            $("#estado").css("border","2px solid red");
            array.push("Sin Estado"); 
            }
        else{
            $("#e-estado").fadeOut();
            $("#estado").css("border","2px solid green");
        }   

        //VALIDANDO MUNICIPIO
        if(municipio==""){
            $("#e-municipio").text('Campo obligatorio');
            $("#e-municipio").fadeIn();
            $("#municipio").css("border","2px solid red");
            array.push("Sin fecha de municipio"); 
            }
        else{
            $("#e-municipio").fadeOut();
            $("#municipio").css("border","2px solid green");
        }   

        //VALIDANDO COLONIA
        if(colonia==""){
            $("#e-colonia").text('Campo obligatorio');
            $("#e-colonia").fadeIn();
            $("#colonia").css("border","2px solid red");
            array.push("Sin colonia"); 
            }
        else{
            $("#e-colonia").fadeOut();
            $("#colonia").css("border","2px solid green");
        }   

        //VALIDANDO CALLE
         if(calle==""){
            $("#e-calle").text('Campo obligatorio');
            $("#e-calle").fadeIn();
            $("#calle").css("border","2px solid red");
            array.push("Sin calle"); 
            }
        else{
            $("#e-calle").fadeOut();
            $("#calle").css("border","2px solid green");
        } 

        //VALIDANDO NUMERO
        if(numero=="" || isNaN(numero)){
            $("#e-numero").text('Campo obligatorio')
            $("#e-numero").fadeIn();  
            $("#direcnum").css("border","2px solid red");    
            array.push("Sin número");       
            }     
            else{
            $("#e-numero").fadeOut();
            $("#direcnum").css("border","2px solid green");
            }    
        
        //VALIDANDO LICENCIATURA
        if(lic==""){
            $("#e-lic").text('Debes ingresar la Licenciatura')
            $("#e-lic").fadeIn();
            $("#lic").css("border","2px solid red");
            array.push("Sin licenciatura"); 
            }
        else{
            $("#e-lic").fadeOut();
            $("#lic").css("border","2px solid green");
        }   

        //VALIDANDO PUESTO
        if ($('#puesto').val() =="") {
            $("#e-puesto").text('Debes seleccionar una opción')
            $("#e-puesto").fadeIn();
            $("#puesto").css("border","2px solid red");
            array.push("Sin puesto"); 
    
        } else {
            $("#e-puesto").fadeOut();
            $("#puesto").css("border","2px solid green");
        }


        //VALIDANDO BIOGRAFIA LABORAL
        if(bio==""){
            $("#e-bio").text('Hablanos sobre ti')
            $("#e-bio").fadeIn();
            $("#biografia").css("border","2px solid red");
            array.push("Sin biografia"); 
            }
        else{
            $("#e-bio").fadeOut();
            $("#biografia").css("border","2px solid green");
        }   

        //INPUT FILE
        

        //USUARIO DE FB
        if(fb==""){
            $("#e-fb").text('Debes ingresar tu usuario de Facebook')
            $("#e-fb").fadeIn();
            $("#fb").css("border","2px solid red");
            array.push("Sin usuario de facebook"); 
            }
        else{
            $("#e-fb").fadeOut();
            $("#fb").css("border","2px solid green");
        }   

        //USUARIO DE IG
        if(ig==""){
            $("#e-ig").text('Debes ingresar tu usuario de Instagram')
            $("#e-ig").fadeIn();
            $("#ig").css("border","2px solid red");
            array.push("Sin usuario de instagram"); 
            }
        else{
            $("#e-ig").fadeOut();
            $("#ig").css("border","2px solid green");
        }   

        //USUARIO DE LINKEDIN
        if(link==""){
            $("#e-linkedin").text('Debes ingresar tu usuario de LinkedIn')
            $("#e-linkedin").fadeIn();
            $("#linkedin").css("border","2px solid red");
            array.push("Sin usuario de linkedin"); 
            }
        else{
            $("#e-linkedin").fadeOut();
            $("#linkedin").css("border","2px solid green");
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



function funajax(){
    $.ajax({
        type:"POST",
        async:true,
        url:"../connect/php/registro_empleado.php",
        data:$("#registro").serialize(),
        dataType:"html",
        success: function(res)
           {
               if (res['guardado']) // if login successful redirect user to secure.php page.
                       {
                           location.href = "../employees/dashboard_employee.php"; // redirect user to secure.php location/page.
                       } /*else {
   
                           var errorMessage = '';
                           // if there is any errors convert array of errors into html string, 
                           //here we are wrapping errors into a paragraph tag.
                           console.log(res.msg);
                           $.each(res['msg'], function(index, message) {
                               errorMessage += '<div>' + message + '</div>';
                           });
                           // place the errors inside the div#error-msg.
                           $("#error-msg").html(errorMessage);
                           $("#error-msg").show(); // show it on the browser, default state, hide
                           // remove disable attribute to the login button, 
                           //to prevent multiple form submissions 
                           //we have added this attribution on login from submit
                           self.prop('disabled', false);
                       }
                */
           }
       });
   }

  