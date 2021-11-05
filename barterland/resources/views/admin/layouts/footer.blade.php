<script src="/admin/js/jquery-3.4.1.min.js"></script>
<script src="/admin/js/js.js"></script>
<script type="text/javascript" src="/admin/js/persian-datepicker.js"></script>
<script type="text/javascript" src="/admin/js/sweetalert2.min.js"></script>
<script type="text/javascript" src="/admin/js/jquery.toast.min.js"></script>
<script>
    $('#date').datepicker({
        dateFormat: 'yy/mm/dd',
            autoSize: true
    });
    $('#date1').datepicker({
        dateFormat: 'yy/mm/dd',
            autoSize: true
    });
    function f() {
        Swal.fire({
            text: "آیا از حذف این آیتم مطمئن هستید؟",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'لغو',
            confirmButtonText: 'حذف کن!',
        })
    }
    function deleteItem(event, route, element = 'tr') {
        Swal.fire({
            text: "آیا از حذف این آیتم مطمئن هستید؟",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'لغو',
            confirmButtonText: 'حذف کن!',
        }).then((result) => {
            if (result.isConfirmed) {
                $.post(route, {_method: "delete", _token: "{{csrf_token()}}"})
                    .done(function (response) {
                        if(response.icon=='success'){
                            event.target.closest(element).remove();
                        }
                        $.toast({
                            heading: response.title,
                            text: response.message,
                            showHideTransition: 'slide',
                            icon: response.icon
                        })
                    })
                    .fail(function (response) {

                    })
            }
        })
    }

</script>
