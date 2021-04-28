$(document).ready(function(){
    $('a[id="footer"]').click(function() {
        var position = $('#down').offset().top;
        $('html, body').animate({
            scrollTop: position,
        }, 1600);
    });
    //function for back to top button is click
    $('a[id="back-to-top"]').on('click', function() {
        var position = $('.head').offset().top;
        $('html, body').animate({
            scrollTop: position,
        }, 1600);
    });
    //function for checkbox button
    $('input[id="robotCheck"]').on('click', function(){
        $(this).toggleClass('checked');
    });
});
