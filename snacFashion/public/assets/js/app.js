
window.addEventListener('load', function() {
    const preloader = document.querySelector('.preloader');
    setTimeout(() => {
        preloader.classList.add('hidden');
        setTimeout(() => {
            preloader.style.display = 'none';
        }, 500);
    }, 3000);
});



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


// galeria
    document.addEventListener('DOMContentLoaded', function () {
        let fotos = document.querySelectorAll('.foto-figurino');
        let verMaisBtn = document.getElementById('ver-mais-btn');
        let fotosVisiveis = 6;

        // Mostrar as primeiras 6 fotos
        for (let i = 0; i < fotosVisiveis; i++) {
            fotos[i].classList.add('show');
        }

        verMaisBtn.addEventListener('click', function () {
            let novasFotosVisiveis = fotosVisiveis + 6;
            for (let i = fotosVisiveis; i < novasFotosVisiveis; i++) {
                if (fotos[i]) {
                    fotos[i].classList.add('show');
                }
            }
            fotosVisiveis = novasFotosVisiveis;

            // Se todas as fotos estiverem visíveis, ocultar o botão "Ver mais"
            if (fotosVisiveis >= fotos.length) {
                verMaisBtn.style.display = 'none';
            }
        });
    });
