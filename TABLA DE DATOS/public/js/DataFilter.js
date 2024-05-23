$(document).ready(function() {
    $("#sidebarCollapse").on('click', function() {
        $("#sidebar").toggleClass('active');
        adjustContentWidth();
    });

    function adjustContentWidth() {
        if ($("#sidebar").hasClass('active')) {
            $("#content").addClass('active');
        } else {
            $("#content").removeClass('active');
        }
    }

    adjustContentWidth();
});