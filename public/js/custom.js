$(document).ready( function() {
        if (location.hash == "") { //this means that I am at root.
            $.ajax({
                type: "GET",
                data: "page=index",
                url: "/ajax/gethint.php",
                success: function(data) { //if there is a successful reply
                    $("#content").html(data);
                }
            });
        }
        //this means that I am not at root and have just arrived at the site
        else loadPage(location.hash.substring(1)); 
    $(function() { // this is a sample function of how I should deal with ajax
        // <a class = 'plusOne' id = 'someIDForYourSQLTable'>+1</a>
        $(".plusOne").bind("click", function() {
            $.ajax({
                type: "GET",
                data: "v="+$(this).attr("id"),
                url: "plusOne.php",
                success: function(data) {
                    // Whatever you want to do after the PHP Script returns.
                }
            });
        });
    });

    $(function() { 
        $(".click").bind("click", function() {
            dest = $(this).attr("dest");
            loadPage(dest);
        });
    });
});
function loadPage(dest) {
    // add logic to get rid of the # symbol at the beginning
    $("#location").html(dest);
    $.ajax({
        type: "GET",
        data: "page="+dest,
        url: "/ajax/gethint.php",
        success: function(data) { //if there is a successful reply
            $("#content").html(data);
            location.hash = dest;
            //$("#location").html(dest);
        }
    });
}

function makeid()
{
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for( var i=0; i < 5; i++ )
            text += possible.charAt(Math.floor(Math.random() * possible.length));

        return text;
}
