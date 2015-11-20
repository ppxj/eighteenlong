 var primaryNav = function () {

        // Animation Speed, change the values for different results
        var upSpeed         = 150;
        var downSpeed       = 250;

        // Get all primary and sub navigation links
        var menuLinks       = $('.menu-link');
        var submenuLinks    = $('.submenu-link');

        // Initialize number idicators on menu links
        menuLinks.each(function(n, e){
            $(e).append('<span>' + $(e).next('ul').find('a').not('.submenu-link').length + '</span>');
        });
        // Initialize number idicators on submenu links
        submenuLinks.each(function(n, e){
            $(e).append('<span>' + $(e).next('ul').children().length + '</span>');
        });

        // Primary Accordion functionality
        menuLinks.click(function(){
            var link = $(this);

            if (link.parent().hasClass('active') !== true) {
                if (link.hasClass('open')) {
                    link.removeClass('open').next().slideUp(upSpeed);
                }
                else {
                    $('.menu-link.open').removeClass('open').next().slideUp(upSpeed);
                    link.addClass('open').next().slideDown(downSpeed);
                }
            }

        return false;

        alert(123)
});
        primaryNav();