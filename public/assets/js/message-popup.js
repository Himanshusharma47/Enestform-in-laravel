


$(document).ready(function() {
    // Find the alert element with the 'auto-dismiss' class
    var $autoDismissAlert = $('.delay');

    // If the alert element exists, set a timer to fade it out after 2 seconds
    if ($autoDismissAlert.length > 0) {
        setTimeout(function() {
            $autoDismissAlert.fadeOut('slow');
        }, 2000); // 2000 milliseconds (2 seconds)
    }
});

