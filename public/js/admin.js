/* delete main brand */
$(document).on("click", ".deletelead", function() {
    var url = $(this).attr("data-url");
   
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
        title: 'Are you sure want to delete this lead?',
        text: "If you delete this,it will be gone forever.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
    }).then((result) => {
        if (result.value) {
            if (result.isConfirmed){
                $.ajax({
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type:'DELETE',
                    success:function(response){
                        location.reload(); 
                    }
                });
            }

        }
    });
});

$(document).ready(function() {
    $('.alert-success').fadeIn().delay(3000).fadeOut();
    $('.alert-danger').fadeIn().delay(3000).fadeOut();
});
