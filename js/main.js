$(document).ready(function () {

    $('#sort').change(function () {
        var sort = $(this).val();
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: 'index.php',
            data:'sort=' + sort,
            success: function(jsondata){
                for(var key in jsondata){
                    $('.product').eq(key).find('p').remove();
                    var insert ='<p>Имя : '+jsondata[key].name+'</p><p>Дата : '+jsondata[key].date+'</p><p>Цена : '+jsondata[key].price+'</p>';
                    $('.product').eq(key).prepend(insert);
                }
            }
        });
    });

    $('.product button').click(function(){
        var info = $(this).siblings('p').clone();
        $("#myModal .modal-body").empty().prepend(info);
        $("#myModal").modal('show');
    });
});