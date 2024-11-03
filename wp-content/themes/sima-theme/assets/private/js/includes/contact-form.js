$(document).ready(function() {
    let $contacts_form = $('#contact__form');

    if ($contacts_form.length) {
        $contacts_form.validate({
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: 'Name is required!'
                },
                email: {
                    required: 'Please enter your email address!'
                }
            },
            submitHandler: function(form) {
                let data = {
                    'name': $('input[name=name]').val(),
                    'email': $('input[name=email]').val(),
                    'message': $('textarea[name=message]').val(),
                };

                data = JSON.parse(JSON.stringify(data));
                $.ajax({
                    type: "POST",
                    url: "/wp-admin/admin-ajax.php",
                    dataType: "JSON",
                    data: {
                        action: "contacts_form",
                        data: data,
                    },
                    success: function(resp) {
                        // This outputs the result of the ajax request
                        if (resp.success == false) {
                            $('#response__message').text(resp.data);
                        } else {
                            $('#response__message').text(resp.data);
                            form.reset();
                        }
                        // setTimeout(function() {
                        //     window.location.href = "/thank-you?lcl-contacted=true";
                        // }, 2000);
                    },
                    error: function(errorThrown) {
                        
                    }
                });
            }
        })
    }
});