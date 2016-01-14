(function($) {
    
    $(document).on('click', '#header .btn-menu', function() {
        $('body').toggleClass('navbar-opened');
    });
    
})(jQuery);