jQuery(document).ready(function () {
    jQuery(document).on("click", '.cat-add', function () {
        var name = jQuery(".cat-name").val();
        var des = jQuery(".cat-des").val();
        var status = jQuery(".cat-status").val();
        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });

        jQuery.ajax({
            url: '/addcategory',
            type: 'post',
            data: {
                name: name,
                des: des,
                status: status
            },
            success: function (res) {
                alert(res.msg);

            }
        })

    })
})