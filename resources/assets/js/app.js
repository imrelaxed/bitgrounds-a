$(document).ready(function() {
    loadScripts();
});

var homeBase;

function loadScripts() {
    homeBase = window.location.pathname;

    $(window).on("scroll", function () {
        MenuBackground();
    });

    MenuBackground();
    function MenuBackground() {
        if ($(window).scrollTop() > 0 || homeBase !== '/') {
            $("#mainNav").addClass("activate");
        } else {
            $("#mainNav").removeClass("activate");
        }
    }
}
