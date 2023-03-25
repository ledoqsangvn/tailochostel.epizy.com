$(function () {
    var path = window.location.href;
    $('body header nav a.nav-link').each(function () {
        if (this.href === path) {
            $(this).addClass('active fw-bold');
        }
    });
});

$(function () {
    var path = window.location.href;
    $('body div#roomState a[type=button]').each(function () {
        if (this.href === path) {
            $(this).addClass('fw-bold');
        }
    });
});

$(function () {
    $('a').click(function (e) {
        var targetHref = $(this).prop('href');
        var currentHref = window.location.href;
        if (targetHref == currentHref) {
            e.preventDefault();
        }
    })
});

$('input').attr('autocomplete', 'off')
