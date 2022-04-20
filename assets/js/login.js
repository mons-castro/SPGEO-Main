$(document).ready(function () {
    $("#error-msg").hide(); 
    $("#login").click(function(){
         funajax();
    });
});
 
 function funajax(){
     $.ajax({
         type:"POST",
         async:true,
         url:"connect/login.php",
         data:$('#login-form').serialize(),
         dataType:"html",
         success: function(res)
            {
                if (res['status']) // if login successful redirect user to secure.php page.
                        {
                            location.href = "../connect/secure.php"; // redirect user to secure.php location/page.
                        } else {
    
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

            }
        });
    }