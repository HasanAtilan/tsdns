(function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '', 'ga');

ga('create', 'UA-68051225-3', 'auto');
ga('send', 'pageview');


$('.Count').each(function() {
    $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
    }, {
        duration: 1000,
        easing: 'swing',
        step: function(now) {
            $(this).text(Math.ceil(now));
        }
    });
});


function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode > 58 && charCode > 46)
        return false;
    return true;
}




function dil(dil) {

$.ajax({
	type: "get",
	url: "/",
	data: {
		dil: dil
	},
	success: function(html) {
		location.reload();
	}
});


};

$(document).ready(function() {
    $('.onoffswitch').click(function() {
        var hiddenValueID = $(this).children(':hidden').val();
        if ($(this).children(':checked').length == 0) {
            var valueData = '1';
        } else {
            var valueData = '0';
        }

        $.ajax({
            type: "POST",
            url: "/",
            data: {
                value: valueData,
                idd: hiddenValueID
            },
            success: function(html) {
                location.reload();
            }
        });

    });
});


$(document).ready(function() {
    $('td a.delete').click(function() {
        if (confirm("Silmek istediğinize emin misiniz?")) {
            var id = $(this).parent().parent().attr('id');
            var parent = $(this).parent().parent();
            $.ajax({
                type: "POST",
                url: "/",
                data: {
                    id: id
                },
                success: function(html) {
                    parent.fadeOut('slow', function() {
                        $(this).remove();
                    });
                }
            });
        }
    });
});

var currentIndex = 0;
var placeholderArray = [
    "Klan Adınız",
    "Clan Name",
    "Guild Adınız",
    "Guild Name",
    "Adınız",
    "Your Name",
    "Ne isterseniz :)",
    "Anyway :)"
]

function whileTrue() {
    $("#subname").attr("placeholder", placeholderArray[currentIndex]);
    currentIndex++;
    if (currentIndex >= placeholderArray.length) {
        currentIndex = 0;
    }
    setTimeout("whileTrue();", 1000);
}
$(document).ready(function() {
    whileTrue();
});


var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
(function() {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = '';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();

function duzenle(hostname, targetHostname, targetPort){
$('#editAddress').modal('show');
$(".hostname").each(function( index ) {
  $(this).html(hostname);
  $(this).val(hostname);
});
$(".target-hostname").each(function( index ) {
  $(this).html(targetHostname);
  $(this).val(targetHostname);
});
$(".target-port").each(function( index ) {
  $(this).html(targetPort);
  $(this).val(targetPort);
});
}
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
