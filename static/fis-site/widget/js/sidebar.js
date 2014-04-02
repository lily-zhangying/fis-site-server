define('fis-site:widget/js/sidebar.js', function(require, exports, module){

exports.init = function( selector ) {
    selector = selector || '.post-toc';

    var $window = $(window)
    var $body = $(document.body)

    var navHeight = $('.navbar').outerHeight(true) + 10

    $body.scrollspy({
        target: selector,
        offset: navHeight
    });

    $window.on('load', function() {
        $body.scrollspy('refresh')
    });

    // back to top
    var $sideBar = $(selector);
    setTimeout(function() {
        $sideBar.affix({
            offset: {
                top: $sideBar.offset().top - 80,
                bottom: function() {
                    return (this.bottom = $('#footer').outerHeight(true))
                }
            }
        });
    }, 1000);
}

});