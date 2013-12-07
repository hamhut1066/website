$(document).ready( function() {
        url = $.url().param("page");
        //$("#location").html(url);
        if (location.pathname == "/") { //this means that I am at root.
            if (url == null) {
                $.ajax({
                    type: "GET",
                    data: "page=index",
                    url: "/ajax/gethint.php",
                    success: function(data) { //if there is a successful reply
                        $("#content").html(data);
                    }
                });
            }
            else { loadPage(url);}
        }
        //this means that I am not at root and have just arrived at the site
        else window.location.replace("http://hamhut1066.com/?page="+location.pathname.substring(1));; 
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
        $(document).on("click", ".click", function() {
            dest = $(this).attr("dest");
            if (dest.substring(0,1) == "#"){ dest = dest.substring(1);}
            loadPage(dest);
        });
    });
});
function loadPage(dest) {
    // add logic to get rid of the # symbol at the beginning
    $.ajax({
        type: "GET",
        data: "page="+dest,
        url: "/ajax/gethint.php",
        success: function(data) { //if there is a successful reply
            $("#content").html(data);
            var stateObj = { foo: "." };
            history.pushState(stateObj, "unknown", "/"+dest);
            //location.hash = dest;
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
