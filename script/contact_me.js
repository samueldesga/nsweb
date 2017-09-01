// Contact Form Scripts

$(function() {

    $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#txtName").val();
            
            // Fail message
            $('#success').html("<div class='alert alert-danger'>");
            $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                .append("</button>");
            $('#success > .alert-danger').append("<div><strong>Désolé " + name + ", il y a une erreur dans le formulaire que vous avez rempli.</div>");

            $('#success > .alert-danger').append('</div>');
                
            
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#txtName").val();
            var email = $("input#txtEmail").val();
            var phone = $("input#txtPhone").val();
            var message = $("textarea#txtMessage").val();
            var time = $("input#time").val();
            $.ajax({
                url: "././mail/contact_me.php",
                type: "POST",
                data: {
                    name: name,
                    phone: phone,
                    email: email,
                    message: message,
                    time: time
                },
                cache: false,
                success: function(result) {
                        var errorMessages = result;
                    if(!(errorMessages.length > 0)){
                        // Success message
                        $('#success').html("<div class='alert alert-success'>");
                        $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        $('#success > .alert-success')
                            .append("<strong>Votre message a été envoyé. </strong>");

                        $('#success > .alert-success')
                            .append('</div>');

                        //clear all fields
                        $('#contactForm').trigger("reset");
                    }else{
                        // Fail message
                        $('#success').html("<div class='alert alert-danger'>");
                        $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        $('#success > .alert-danger').append("<div><strong>Désolé " + name + ", il y a une erreur dans le formulaire que vous avez rempli.</div>");
                        for(i = 0; i < errorMessages.length; i++){
                            $('#success > .alert-danger').append("<strong>" + errorMessages[i] + "<br/>");
                        }

                        $('#success > .alert-danger').append('</div>');
                    }
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Désolé " + name + ", le serveur courriel ne répond pas. Veuillez réessayer plus tard.");
                    $('#success > .alert-danger').append('</div>');
                    
                }
            });
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
    
$('#txtEmail').change(function() { $(this).text("test"); });
    


