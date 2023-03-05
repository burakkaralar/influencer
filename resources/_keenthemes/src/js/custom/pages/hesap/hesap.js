$(document).ready(function(){
    $("#hesap_guncelle")
    .on("click", function () {
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                    "content"
                ),
            },
            method: "POST",
            url: "https://crm.influencerajansi.com/hesap/guncelle",
            data: $("#hesap_formu").serialize(),
        }).done(function (response) {
            window.location.href = "https://crm.influencerajansi.com/hesap";
        }).fail(function (response){
            var json = response.responseJSON;
            console.log(json);
            var message = '';
            $.each(json.message, function( i, l ){
                message += l + `\n`;
            });
            console.log(message);
            Swal.fire({
                text: message,
                icon: "error",
                buttonsStyling: false,
                confirmButtonText: "tamam",
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            });
        });
    });
});