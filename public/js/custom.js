var $submitContact = $('#formulario')
$submitContact.on('submit', function (e) {
    e.preventDefault();
    var $this = $(this);
    $.ajax({
        type: "GET",
        url: 'https://theressa.net/formulario/contacto',
        dataType: 'json',
        data: $this.serialize(),
        success: function (data) {
            if (data.success) {
                location.href='/contacto/correo';
                $("#formulario").fadeOut();
            } else {
                displayErrorMessages(data);
            }
        },
        error: function (error) {
            console.log('Error inesperado:');
            displayErrorMessages(error.responseJSON);
        }
    });
});

function displayErrorMessages(errors) {
    for (var property in errors) {
        if (errors.hasOwnProperty(property)) {
            alert(errors[property]);
        }
    }
}

window.matchMedia || (window.matchMedia = function () {
    "use strict";
    var styleMedia = (window.styleMedia || window.media);
    if (!styleMedia) {
        var style = document.createElement('style'), script = document.getElementsByTagName('script')[0], info = null;
        style.type = 'text/css';
        style.id = 'matchmediajs-test';
        script.parentNode.insertBefore(style, script);
        info = ('getComputedStyle' in window) && window.getComputedStyle(style, null) || style.currentStyle;
        styleMedia = {
            matchMedium: function (media) {
                var text = '@media ' + media + '{ #matchmediajs-test { width: 1px; } }';
                if (style.styleSheet) {
                    style.styleSheet.cssText = text;
                } else {
                    style.textContent = text;
                }
                return info.width === '1px';
            }
        };
    }
    return function (media) {
        return {matches: styleMedia.matchMedium(media || 'all'), media: media || 'all'};
    };
}());

//google mpas
$(window).load(function () {
    if ($('#mapsgoogle').length <= 0) {
        return;
    }
    $('#mapsgoogle').attr('src', 'https://www.google.com/maps/d/embed?mid=1FVK--ZoWhrVOFXhA3Hm92Vb0NHE');
});

//twitter
!function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (!d.getElementById(id)) {
        js = d.createElement(s);
        js.id = id;
        js.src = "//platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);
    }
}(document, "script", "twitter-wjs");

//call
$(function () {
    $('.call').on('click', function (event) {
        event.preventDefault();

        location.href = 'tel:+013639870';

        setTimeout(function () {
            location.href = '/contacto/llamada';
        }, 500);
    });
});
$(function () {
    $('.call1').on('click', function (event) {
        event.preventDefault();

        location.href = 'tel:+51989093802';

        setTimeout(function () {
            location.href = '/contacto/llamada';
        }, 500);
    });
});
