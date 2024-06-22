// btn-mais scroll
$(document).ready(function() {
    $(".btn-mais").click(function(event) {
        event.preventDefault();

        var target = $(this).attr("href");

        // Verifica se o elemento vinculado existe na página
        if ($(target).length) {
            // Anima o corpo do documento (ou qualquer elemento que você deseja que role) para o elemento vinculado
            $("html, body").animate({
                scrollTop: $(target).offset().top
            }, 1000);
        }
    });
});
