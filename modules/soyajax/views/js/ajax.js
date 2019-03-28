$(document).ready(function () {
    
    $("#soyajax_submit").click(function (evt) {
        
        evt.preventDefault();
        
        $.ajax({
            method: "POST",
            url: ajax_link,
            success: function (data) {
                console.log(data);
            }
        });
    });

});