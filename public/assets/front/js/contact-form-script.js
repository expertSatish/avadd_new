

$(document).ready(function() {
    $(document).on('submit', '#contactForm', function(e) {
        e.preventDefault();
        let formData = new FormData($('#contactForm')[0]);
        $.ajax({
            type: "POST",
            url: "contact-save",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.sts) {
                    $('.alert-success').hide();
                    $("#alert_success").html(response.msg);
                    $("#name").html('')
                    $("#email").html('')
                    $("#subject").html('')
                    $("#message").html('')
                    $("#e_namee").html('');
                    $("#e_emaill").html('');
                    $("#e_subject").html('');
                    $("#e_message").html('');
                    $('#contactForm').trigger("reset");
                } else {
                    var obj = response.msg;
                    if (("name" in obj) == 0) {
                        $("#e_namee").html('');
                    } else {
                        $("#e_namee").html(obj.name);
                    }
                    if (("email" in obj) == 0) {
                        $("#e_emaill").html('');
                    } else {
                        $("#e_emaill").html(obj.email);
                    }
                    if (("subject" in obj) == 0) {
                        $("#e_subject").html('');
                    } else {
                        $("#e_subject").html(obj.subject);
                    }
                    if (("message" in obj) == 0) {
                        $("#e_message").html('');
                    } else {
                        $("#e_message").html(obj.message);

                    }
                }
            }
        });
    });
});
