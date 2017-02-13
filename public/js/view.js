$(document).ready(function(){console.log($('#login-dlg-content').css('width'));
    $(".login-dlg-link").colorbox({inline: true, width: $('#login-dlg-content').css('width')});
    
    $("#click").click(function(){ 
        $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
        return false;
    });
});
//# sourceMappingURL=view.js.map
