<?php
//footer template devoloped by novadata
?>

<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__wrapper-logo col-lg-3">
                <a href="<?php echo site_url('') ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-branco.png"></a>
                <ul class="redes">
                    <li><a href="https://www.instagram.com/ezaligner_br/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icones-midia/instagram-blue.svg"></a></li>
                    <li><a href="https://www.facebook.com/ezaligner.br" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icones-midia/facebook_blue.svg"></a></li>
                    <li><a href="https://www.linkedin.com/company/ezaligner/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icones-midia/linkedin-bue.svg"></a></li>
                </ul>
            </div>
            <div class="footer__wrapper-menu">
                <ul class="footer__wrapper-menu-tratamentos">
                    <h2>Tratamentos</h2>
                    <li><a href="<?php echo site_url('alinhadores-ezaligner') ?>">Alinhador ezaligner</a></li>
                    <li><a href="<?php echo site_url('lentes-de-contato-dental-ezwhite') ?>">Lentes de Contato Dental • LenteSmile</a></li>
                    <li><a href="<?php echo site_url('placas-de-protecao') ?>">Placas de Proteção</a></li>
                    <li><a href="<?php echo site_url('clareamento-dental-ezwhite') ?>">Clareamento Dental ezwhite</a></li>
                </ul>

                <ul class="footer__wrapper-menu-tratamentos">
                    <h2>Trabalhe conosco</h2>
                    <li><a href="#">Dentista Parceiro</a></li>
                    <li><a href="#">Clínica Parceira</a></li>
                </ul>


                <ul class="footer__wrapper-menu-informacoes">
                    <h2>Informacoes</h2>
                    <li><a href="<?php echo site_url('#') ?>">A ez</a></li>
                    <li><a href="<?php echo site_url('#') ?>">Saiba mais</a></li>
                    <li><a href="<?php echo site_url('#') ?>">FAQ</a></li>

                </ul>
                <div class="footer__wrapper-menu-contato">
                    <h2>Contatos</h2>
                    <div class="mobile">
                        <div class="horario">
                            <h3>Horário de funcionamento</h3>
                            <p>Seg à Sex • 8h às 18h</p>
                        </div>
                        <div class="telefone">
                            <h3>Telefone</h3>
                            <a href="tel:+55 213993-5060">(21) 3993 5060</a>
                        </div>
                        <div class="whatsapp">
                            <h3>Whatsapp</h3>
                            <a href="https://api.whatsapp.com/send?phone=555521997872164" target="_blank">(21)
                                99787 2164</a>
                        </div>
                        <div class="email">
                            <h3>Email</h3>
                            <a href="mailto: sac@ezaligner.com">sac@ezaligner.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copy">
            <p>© 2021 ezaligner • Todos os direitos reservados </p>
            <a href="https://novadata.com.br/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/novadata.png"></a>
        </div>
    </div>
</footer>


<!--Modal dos parceiros-->

<div class="modal__parceiros" data-modal="container">
    <div class="modal__parceiros-padrao">
        <div class="modal__parceiros-padrao-nav">
            <h2 class="title"> Dentista Parceiro </h2>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/close.svg" class="fechar" data-modal="fechar">
        </div>
        <div class="modal__parceiros-padrao-coluna1">
            <div class="foto__dentista">
                <img class="modal__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/close.svg">
            </div>
            <div class="mapa__local">
                <?php echo get_sub_field('mapa'); ?>
            </div>
        </div>
        <div class="modal__parceiros-padrao-coluna2">
            <div class="informacoes__parceiro" data-simplebar>
                <div class="nome">
                    <h3>Dentista</h3>
                    <p></p>
                </div>
                <div class="cro">
                    <h3>CRO</h3>
                    <p></p>
                </div>
                <div class="especializacao">
                    <h3>Especialização</h3>
                    <p></p>
                </div>
                <div class="curriculo">
                    <h3>Curriculo</h3>
                    <?php echo get_sub_field('curriculo'); ?>
                </div>
            </div>
            <div class="informacoes__contato">
                <div class="endereco">
                    <h3>Endereço</h3>

                    <p>
                        <a target="_blank" href="'http://maps.google.com/?q=' . <?php echo get_sub_field('endereco'); ?>"></a>
                    </p>
                </div>

                <div class="contato">
                    <a class="whatsapp" href="'https://wa.me/' . <?php str_replace(' ', '-', get_sub_field('numero_telefone')); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icones-midia/whatsapp.svg">
                        <span><?php echo get_sub_field('numero_telefone'); ?></span>
                    </a>
                    <a class="email" href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icones-midia/email.svg">
                        <span><?php echo get_sub_field('email'); ?></span>
                    </a>
                    <a class="telefone" href="tel: +<?php echo get_sub_field('numero_telefone'); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icones-midia/telefone.svg">
                        <span><?php echo get_sub_field('numero_telefone'); ?></span>
                    </a>
                    <a href="#" class="btn__comochegar-desktop">
                        Como chegar
                    </a>
                </div>
            </div>
            <a href="#" class="btn__comochegar-mobile">
                Como chegar
            </a>
        </div>
    </div>
</div>


</main>


<!-- scripts -->
<!-- <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2">
</script> -->

<!-- icones -->
<script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>

<!--AOS-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<!--jquery mask-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mask.min.js"></script> 

<!--script antigo-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom-scripts.js"></script>

<!-- script site novo-->
<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>


<!-- comentados-->
<!-- <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script> -->

<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-select.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js" integrity="sha512-IkLiryZhI6G4pnA3bBZzYCT9Ewk87U4DGEOz+TnRD3MrKqaUitt+ssHgn2X/sxoM7FxCP/ROUp6wcxjH/GcI5Q==" crossorigin="anonymous"></script> -->
<!-- Boostrap 5, Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script> -->

<script>
    /* animação AOS*/
    AOS.init({
        // Global settings:
        disable: 'mobile', // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 30, // offset (in px) from the original trigger point
        delay: 100, // values from 0 to 3000, with step 50ms
        duration: 500, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: true, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });
</script>


<!-- <div id="google_translate_element2"></div>
<script type="text/javascript">
    function googleTranslateElementInit2() {
        new google.translate.TranslateElement({
            pageLanguage: 'pt',
            autoDisplay: false
        }, 'google_translate_element2');
    }
</script> -->





<!-- <script type="text/javascript">
    /*
function enviarMensagem(){
	var celular = '5521997872164'
	var erro = '';
	if(document.querySelector("#nomeWhats").value == ''){
		erro += '<p>O campo <strong>Nome</strong> é obrigatório.</p>'
	}
	if(document.querySelector("#cidadeWhats").value == ''){
		erro += '<p>O campo <strong>Cidade</strong> é obrigatório.</p>'
	}
	
	if(erro != ''){
		$("#erroFormWhats").html(erro)
	}else{
	var texto = 'Meu nome é: ' + document.querySelector("#nomeWhats").value
		texto += '\nSou: ' + document.querySelector("#tipoContatoWhats").value;
		texto += '\nMoro em: ' + document.querySelector("#cidadeWhats").value;
		texto = window.encodeURIComponent(texto);
  
		window.open("https://api.whatsapp.com/send?phone=5521997872164&text=" + texto, "_blank");
	}
}

function GTranslateGetCurrentLang() {
    var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');
    return keyValue ? keyValue[2].split('/')[2] : null;
}

function GTranslateFireEvent(element, event) {
    try {
        if (document.createEventObject) {
            var evt = document.createEventObject();
            element.fireEvent('on' + event, evt)
        } else {
            var evt = document.createEvent('HTMLEvents');
            evt.initEvent(event, true, true);
            element.dispatchEvent(evt)
        }
    } catch (e) {}
}

function doGTranslate(lang_pair) {
    if (lang_pair.value) lang_pair = lang_pair.value;
    if (lang_pair == '') return;
    var lang = lang_pair.split('|')[1];
    if (GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0]) return;
    var teCombo;
    var sel = document.getElementsByTagName('select');
    for (var i = 0; i < sel.length; i++)
        if (/goog-te-combo/.test(sel[i].className)) {
            teCombo = sel[i];
            break;
        }
    if (document.getElementById('google_translate_element2') == null || document.getElementById(
            'google_translate_element2').innerHTML.length == 0 || teCombo.length == 0 || teCombo.innerHTML.length ==
        0) {
        setTimeout(function() {
            doGTranslate(lang_pair)
        }, 500)
    } else {
        teCombo.value = lang;
        GTranslateFireEvent(teCombo, 'change');
        GTranslateFireEvent(teCombo, 'change')
    }
}
*/

    // $('a[href^="#"]').on('click', function(e) {
    //     e.preventDefault();
    //     var id = $(this).attr('href'),
    //         targetOffset = $(id).offset().top;

    //     $('html, body').animate({
    //         scrollTop: targetOffset - 100
    //     }, 700);
    // });
</script> -->


<script>
    //button script
    let mapButton = document.querySelector(".localButton")

    function abreMapa() {
        let bodii = document.querySelector("body")
        bodii.classList.add("abreMapa")
        initMapFooter()
    }


    // var glide = new Glide("#tratamentos", {
    //     type: 'carousel',
    //     startAt: 1,
    //     gap: 30,
    //     perView: 3,
    //     focusAt: "center",
    //     rewind: true,
    //     breakpoints: {


    //         800: {
    //             type: 'carousel',
    //             startAt: 1,
    //             gap: 10,
    //             perView: 1,
    //             focusAt: "center",
    //             rewind: false,
    //             perTouch: 1,
    //             peek: {
    //                 before: 10,
    //                 after: 10
    //             }

    //         },

    //         520: {
    //             type: 'carousel',
    //             gap: 10,
    //             startAt: 1,
    //             perView: 1,
    //             focusAt: "center",
    //             rewind: true,
    //             perTouch: 1,

    //             peek: {
    //                 before: 30,
    //                 after: 10,
    //             }

    //         }


    //     }

    // })


    // function initGlide() {
    //     if (window.innerWidth < 1320) {
    //         glide.mount()

    //     } else {

    //         glide.destroy()
    //     }
    // }
    // initGlide()
    // $(document).ready(function() {
    //     initGlide();
    // });
    // $(window).resize(function() {
    //     initGlide();
    // });
</script>

<script>
    $(document).ready(function() {
        urlAjax = '<?php echo admin_url("admin-ajax.php") ?>'
        $("#localidade").change(function() {
            if ($(this).val() == '') {
                $("#bairro").html('<option value="">Selecione a cidade</option>')
                //$("#bairro").selectpicker('refresh')
            } else {
                $.ajax({
                    type: 'post',
                    url: urlAjax,
                    data: {
                        action: 'busca_bairros',
                        cidade: $(this).val()
                    },

                    success: function(response) {
                        console.log('bairros: ' + response)
                        $("#bairro").html(response)
                        jQuery("#bairro").selectpicker('refresh')
                    },

                    error: function(response) {
                        console.log(response.error)
                    }
                })
            }
        })
        //$('.select2').select2();
        //$(".select-nome").select2()

        var $src = $('#localidade'),
            $dst = $('#cidade');
        $src.change(function() {
            console.log($("#localidade option:selected").val());
            $dst.val($("#localidade option:selected").text().split('-')[1]);
            console.log($dst.val());
        });
    });
</script>

<!--FOOTER WORDPRESS-->
<?php wp_footer(); ?>

</body>

</html>