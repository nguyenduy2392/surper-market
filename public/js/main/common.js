$(document).ready(function(){
    $(".login-dlg-link").colorbox({inline: true, width: $('#login-dlg-content').css('width')});
    
    $("#click").click(function(){ 
        $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
        return false;
    });
});

$(document).on('click', '#action .btn-primary', function () {
    $.colorbox.close();
    var url = $(this).data('action-link');
    var data = $('.form-horizontal').serialize();
    ajax(url, 'POST', data, function (rs) {
        if (rs.status) {
            $('.login-name').text(rs.name);
            $('.login-name, .logout-dlg-link, .login-dlg-link').removeClass('login-show login-hide');
            $('.login-name, .logout-dlg-link').addClass('login-show');
            $('.login-dlg-link').addClass('login-hide');
        } else {
            alert(rs.message);
        }
    });
});

$(document).on('click', '.logout-dlg-link', function () {
    var url = $(this).data('action-link');
    var data = $('.form-horizontal').serialize();
    ajax(url, 'POST', data, function (rs) {
        if (rs.status) {
            $('.login-name, .logout-dlg-link, .login-dlg-link').removeClass('login-show login-hide');
            $('.login-name, .logout-dlg-link').addClass('login-hide');
            $('.login-dlg-link').addClass('login-show');
        } else {
            alert(rs.message);
        }
    });
});

function ajax(url, type, data, response) {
    $.ajax({
        url: url,
        type: type,
        dataType: "json",
        data: data,
        async: false,
        success: function (rs)
        {
            response(rs);
        }
    });
}