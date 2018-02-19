



function window(id) {
    var stat = $('table[id="' + id + '"]');
    var enlace = $('a[id="' + id + '"]');

    enlace.bind('mouseenter', function () { stat.fadeIn("slow"); });
    enlace.bind('mouseleave', function () { stat.fadeOut("slow"); });

}


function show_menu(id) {

    $('div[id="' + id + '"]').fadeIn();



   $('a[id="enlace"]').bind('mouseout', function () {

       $('div[id="' + id + '"]').fadeOut();

     });


}

function open_menu(pagina) {

    $('div[id="menu_content"]').load(pagina);


}

function open_content(pagina)
{
    $('div[id="contenido_principal"]').load(pagina);
}
