var JSContentManager;
function initJSContentManager() {

    JSContentManager = new Object();
    JSContentManager.currentHash = '';
    JSContentManager.checkHash = function() {

        if (window.location.hash.substr(1) != JSContentManager.currentHash) {

            JSContentManager.currentHash = window.location.hash.substr(1);
            JSContentManager.autoOpen();
        }
    }
    setInterval('JSContentManager.checkHash()', 50);
    JSContentManager.autoOpen = function() {

        var hash = window.location.hash.substr(1);
        var href = $('#navi a').each(function() {
            var href = $(this).attr('href');
            if (hash == href.substr(0, href.length-5)) {
                // var toLoad = hash+'.html #xcontent';
                //var toLoad = hash+'#menu';
                //var toLoad = hash+'?ajax=on';
                var toLoad = hash + '.html?ajax=on';

                $(".acontainer").hide();

                $('.acontainer').delay(100).queue(function( nxt ) {
                    $(this).load(toLoad, function() 
                    {

                        $(".acontainer").show();
		       
                    });

                    // Hier andere einsetzen
                    nxt();



                });



            }

        });
    }
}

$(document).ready(function() { 


    initJSContentManager();
   

    $('#navi a').click(function() {



        // Remove current (old) active class.
        $('#navi a.rex-current').removeClass('rex-current');

        // Add the active class to the trigger link.
        $(this).addClass('rex-current');

  


        window.location.hash = $(this).attr('href').substr(0, $(this).attr('href').length-5);


        return false;
    });




});
