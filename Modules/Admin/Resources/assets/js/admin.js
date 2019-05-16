$(document).ready(function () {
    $('.list_check_view').click(function () {
        var url = $(this).attr('data-url');
        var id = $(this).attr('data-id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url : url,
            type : "get",
            dataType:"html",
            data : {
                id: id
            },
            success : function (result){
                $('#result').html(result);
            }
        });
    });
});