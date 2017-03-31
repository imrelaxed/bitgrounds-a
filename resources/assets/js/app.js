/* @flow */

// $(window).on('load', documentReady);
$(document).ready(function() {
    documentReady();
});

var thePath;


function documentReady() {
    thePath = window.location.pathname;
    setSideMenu();


    // Top menu color change
    $(window).on("scroll", function () {
        setColorMenu();
    });

    setColorMenu();
    function setColorMenu() {
        if ($(window).scrollTop() > 0 || thePath !== '/') {
            $("#header").addClass("active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $("#header").removeClass("active");
        }
    }

    // Set mobile menu
    $('#menu-toggle').on('click', function (e) {
        $('.top-menu-items').toggleClass('open');
    });

    $('top-menu-item').on('click', function(e) {
        $('.top-menu-items').removeClass('open');
    });


    //unsticky menu
    $(window).scroll(function () {
        var offsetTop = $('.footer').offset().top;
        var scrollBottom = $(window).scrollTop() + $(window).height();

        if(scrollBottom >= offsetTop) {
            $('#side-menu').css('position', 'absolute');
            $('#side-menu').css('bottom', '0');

        } else {
            $('#side-menu').css('position', 'fixed');
            $('#side-menu').css('bottom', '');
        }
    });

    // Set target="_blank" on external links
    $(document.links).filter(function() {
        return this.hostname != window.location.hostname;
    }).attr('target', '_blank');

    //check if emails are correct
    var inputfields = $('#mc-embedded-subscribe-form input');

    $('#mc-embedded-subscribe-form input').on('change paste keyup', function () {
        var emailValue = $(this).val();

        if(isEmail(emailValue) && (emailValue !== '')) {
            $(this).parent().find('.button').removeClass('not-active');
        } else {
            $(this).parent().find('.button').addClass('not-active');
        }

    });

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }


    // Dropdown functionality
    $('html').click(function() {
        $('.dropdown').removeClass('dropdown__active');
    });

    $('.dropdown').click(function (e) {
        $(this).toggleClass('dropdown__active');
        e.stopPropagation();
    });

    $('#versions-dropdown .dropdown__item').click(function(e) {
        var goToUrl = $(this).data('url');
        console.log('goToUrl: ', goToUrl);
        window.location = goToUrl;
    })


    $('#mobile-menu li').click(function() {
        $(this).toggleClass('active');
        $(this).next('ul').toggleClass('show');
    });

    $('#mobile-header .hamburger').click(function() {
        $('#mobile-menu').toggleClass('show');
    });


}



// Set side menu
function setSideMenu() {
    var firstPartUrl = thePath.split('/')[1];
    $('.side-menu-list').each(function () {
        var parentUrl = $(this).data('parenturl');
        var firstPartUrlMenu = parentUrl.split('/')[1];
        if (firstPartUrl === firstPartUrlMenu) {
            $(this).css('display', 'block');
        }
    });

    $('.top-menu-item').each(function () {
        var parentUrl = $(this).data('parenturl');
        var firstPartUrlMenu = parentUrl.split('/')[1];
        $(this).removeClass('active');
        if (firstPartUrl === firstPartUrlMenu) {
            $(this).addClass('active');
        }
    });

    var urlInfo = getInfoFromUrl(window.location.pathname);

    if (urlInfo) {
        $('.side-menu__sub__item__text').each(function (element) {
            var elementUrlInfo = getInfoFromUrl($(this).data('url'));
            var isCurrent = '';

            if (elementUrlInfo.version === urlInfo.version) {
                isCurrent = 'selected';
                $(this).css('display', 'block');
            }

            if (elementUrlInfo.pageName === urlInfo.pageName) {
                // $('#versions-dropdown .dropdown__items').append('<option value="' + $(this).attr('href') + '"'+isCurrent+'>' + elementUrlInfo.version + '</option>')
                $('#versions-dropdown .dropdown__items').append('<div data-url="' +$(this).attr('href')+ '" class="dropdown__item '+ isCurrent +'"><i class="fa fa-check" aria-hidden="true"></i>' + elementUrlInfo.version + '</div>');
                $('#versions-dropdown .dropdown__selected').html(urlInfo.version);
            }
        });

        $('#versions-dropdown').css('display', 'block');
    } else {
        $('.side-menu__sub__item__text').each(function () {
            $(this).css('display', 'block');
        });
    }


    function getInfoFromUrl(url) {
        var splittedUrl = url.split('/').slice(1,-1);
        var urlInfo =  {
            pageName: splittedUrl[splittedUrl.length-1],
            version: splittedUrl[splittedUrl.length-2]
        }

        return urlInfo && urlInfo.version && (((urlInfo.version.substring(0,1) === 'v') && !isNaN(urlInfo.version.substring(1,2))) || urlInfo.version === 'katana') ? urlInfo : false;
    }

}