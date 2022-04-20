$(document).ready(function() {
        $('.sidenav').load('../assets/logos/nav.php')
        $('#barrah').load('../assets/logos/nav2.php')
        funajax();
  
});

function funajax(){
        $.ajax({
            type:"POST",
            url:"../connect/php/dashboard_empleado.php",
            dataType:'json',
            async:false,
            success: function(response)
               {
                $.each(response, function(i, item) {
                   
                   $("#tablempleados").append(
                       '<tr class="employee">'+
                       '<td class="text-center">'+item.id_empleado+'</td>'+
                       '<td></td>'+
                       '<td class="text-center">'+item.nombre+"  "+item.segundo_nombre+"  "+item.apaterno+"  "+item.amaterno+'</td>'+
                       '<td class="text-center">'+item.puesto_trabajo+'</td>'+
                       '<td class="td-actions text-center">'+
                       '<a href="./employee.php" class="btn btn-round btn-sm mas">Ver más</a>'+
                       '<a href="./editaremployee.php" class="btn btn-round btn-sm editar">Editar</a>'+
                       /*'<a class="btn btn-round btn-sm">Eliminar</a>'*/
                       '</td>'+
                       '</tr>');
            });
        }
           });
       }