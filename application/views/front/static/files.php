<!-- css => Pretty Photo Style -->
<link href="<?= FRONTEND_STATIC_FILES ?>prettyphoto/prettyPhoto.css" media="screen" rel="stylesheet" type="text/css">

<!-- css => Off-canvas Menu Style -->
<link href="<?= FRONTEND_STATIC_FILES ?>css/off-canvas.css" media="screen" rel="stylesheet" type="text/css">

<!-- css => Style sheet -->
<link href="<?= FRONTEND_STATIC_FILES ?>style.css" media="screen" rel="stylesheet" type="text/css">
<link href="<?= FRONTEND_STATIC_FILES ?>css/responsive.css" media="screen" rel="stylesheet" type="text/css">
<link href="<?= FRONTEND_STATIC_FILES ?>css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">

<!-- css => Responsive sheet -->
<link href="<?= FRONTEND_STATIC_FILES ?>css/responsive.css" media="screen" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?= FRONTEND_STATIC_FILES ?>rs-plugin/css/settings.css"/>
    <link rel="stylesheet" href="<?= FRONTEND_STATIC_FILES ?>rs-plugin/css/revolution.css"/>
<script type="text/javascript" src="<?= FRONTEND_STATIC_FILES ?>js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?= FRONTEND_STATIC_FILES ?>js/jquery-migrate.min.js"></script>
<script type="text/javascript" src="<?= FRONTEND_STATIC_FILES ?>js/jquery-ui-1.12.0.min.js"></script>
<!-- BootStrap JavaScript ====================== -->
<script type="text/javascript" src="<?= FRONTEND_STATIC_FILES ?>js/bootstrap.min.js"></script>
<!-- isotope Script =============================== -->
<script type="text/javascript" src="<?= FRONTEND_STATIC_FILES ?>js/jquery.isotope.js"></script>
<!-- Pace Script =============================== -->
<script type="text/javascript" src="<?= FRONTEND_STATIC_FILES ?>js/pace.js"></script> 
<script type="text/javascript" src="<?= FRONTEND_STATIC_FILES ?>rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?= FRONTEND_STATIC_FILES ?>rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src='<?= FRONTEND_STATIC_FILES ?>js/off-canvas.js'></script>
<script type="text/javascript" src='<?= FRONTEND_STATIC_FILES ?>js/off-canvas-call.js'></script>

<!-- Revulation Script =============================== -->

<script type="text/javascript">

    var tpj = jQuery;
    tpj.noConflict();

    tpj(document).ready(function () {

        if (tpj.fn.cssOriginal != undefined)
            tpj.fn.css = tpj.fn.cssOriginal;

        tpj('.banner').revolution(
                {
                    dottedOverlay: "none",
                    delay: 16000,
                    startwidth: 1170,
                    startheight: 1091,
                    hideThumbs: 200,
                    thumbWidth: 100,
                    thumbHeight: 50,
                    thumbAmount: 5,
                    navigationType: "bullet",
                    navigationArrows: "solo",
                    navigationStyle: "preview5",
                    touchenabled: "on",
                    onHoverStop: "on",
                    swipe_velocity: 0.7,
                    swipe_min_touches: 1,
                    swipe_max_touches: 1,
                    drag_block_vertical: false,
                    parallax: "mouse",
                    parallaxBgFreeze: "on",
                    parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
                    keyboardNavigation: "off",
                    navigationHAlign: "center",
                    navigationVAlign: "bottom",
                    navigationHOffset: 0,
                    navigationVOffset: 20,
                    soloArrowLeftHalign: "left",
                    soloArrowLeftValign: "center",
                    soloArrowLeftHOffset: 20,
                    soloArrowLeftVOffset: 0,
                    soloArrowRightHalign: "right",
                    soloArrowRightValign: "center",
                    soloArrowRightHOffset: 20,
                    soloArrowRightVOffset: 0,
                    shadow: 0,
                    fullWidth: "on",
                    fullScreen: "off",
                    spinner: "spinner4",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
         forceFullWidth: "off",
                    hideThumbsOnMobile: "off",
                    hideNavDelayOnMobile: 1500,
                    hideBulletsOnMobile: "off",
                    hideArrowsOnMobile: "off",
                    hideThumbsUnderResolution: 0,
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    startWithSlide: 0,
                    fullScreenOffsetContainer: ""
                });


    });

</script>

<!-- Owl Carousel JavaScript =================== -->
<script type="text/javascript" src="<?= FRONTEND_STATIC_FILES ?>js/owl.carousel.min.js"></script>
<!-- Nouislider Script =============================== -->
<script type="text/javascript" src="<?= FRONTEND_STATIC_FILES ?>js/jquery.nouislider.min.js"></script> 
<!-- Hero Slider Script =============================== -->
<script type="text/javascript" src="<?= FRONTEND_STATIC_FILES ?>js/hero-slider.js"></script>
<!-- slick Script =============================== -->
<script type="text/javascript" src="<?= FRONTEND_STATIC_FILES ?>js/slick.min.js"></script>
<!-- slick Script =============================== -->
<script type="text/javascript" src="<?= FRONTEND_STATIC_FILES ?>js/masonry.pkgd.min.js"></script>
<!-- Pretty Photo Script =============================== -->
<script src="<?= FRONTEND_STATIC_FILES ?>prettyphoto/jquery.prettyPhoto.js"></script>
<!-- Wow Script =============================== -->
<script type="text/javascript" src="<?= FRONTEND_STATIC_FILES ?>js/wow.js"></script>
<!-- Parallax Script =============================== -->
<script type="text/javascript" src="<?= FRONTEND_STATIC_FILES ?>js/parallax.min.js"></script>
<!-- Portfolio Script =============================== -->
<script src="<?= FRONTEND_STATIC_FILES ?>js/portfolio.js"></script>
<script src="<?= FRONTEND_STATIC_FILES ?>js/script.js"></script>



