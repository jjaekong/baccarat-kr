(function($) {
    
    $(document).on('click', '#header .btn-menu', function() {
        if ( $('body').hasClass('navbar-opened') ) {
            $('body').removeClass('navbar-opened');
            $(this).find('.glyphicon-remove').removeClass('glyphicon-remove').addClass('glyphicon glyphicon-menu-hamburger');
        } else {
            $('body').addClass('navbar-opened');
            $(this).find('.glyphicon-menu-hamburger').removeClass('glyphicon-menu-hamburger').addClass('glyphicon glyphicon-remove');
        }
    });
    
    $(document).on('click', '#navbar .full > ul > li > a', function() {
        var $menuItems = $('#navbar .full > ul > li');
        var $selectedItem = $(this).parent();
        if ($selectedItem.hasClass('active')) {
            $selectedItem.removeClass('active')
                .find('.glyphicon-minus').removeClass('glyphicon-minus').addClass('glyphicon-plus');
        } else {
            $menuItems
                .parent().find('.active').removeClass('active')
                .find('.glyphicon-minus').removeClass('glyphicon-minus').addClass('glyphicon-plus');
            $selectedItem.addClass('active')
                .find('.glyphicon-plus').removeClass('glyphicon-plus').addClass('glyphicon-minus');
        }
        return false;
    }); 
    
})(jQuery);