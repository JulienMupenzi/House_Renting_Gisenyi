$(document).ready(function() {
    $('.btn-delete').on('click', function() {

        var url = $(this).data('url');
        var token = $("meta[name=csrf-token]").attr("content");

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {

                $.ajax({
                    type: "POST",
                    url: url,
                    data: {
                        _method: 'DELETE',
                        _token: token
                    },
                    success: function(data) {
                        Swal.fire(
                            'Deleted!',
                            'Successfully deleted.',
                            'success'
                        )
                        location.reload();
                    }
                });

            }
        })
    })
});