/*JS way for setting height: 100vh to slides' height*/

/*const $slides = $(".owl-carousel .owl-slide");

$slides.css("height", $(window).height());

$(window).resize(() => {

  $slides.css("height", $(window).height());

});*/

/*JS way for setting height: 100vh to slides' height*/

/*const $slides = $(".owl-carousel .owl-slide");

$slides.css("height", $(window).height());

$(window).resize(() => {

  $slides.css("height", $(window).height());

});*/





$(window).on("load", function(e) {
    $("#banner .owl-carousel").on("initialized.owl.carousel", () => {

        setTimeout(() => {

            $(" #banner .owl-item.active .owl-slide-animated").addClass("is-transitioned");

            $("section").show();

        }, 200);

    });



    const $owlCarousel = $("#banner .owl-carousel").owlCarousel({

        items: 1,

        loop: true,

        nav: false,

        autoplay: true,

        autoplayTimeout: 5000,

        autoplayHoverPause: true

    });



    $owlCarousel.on("changed.owl.carousel", e => {

        $(" #banner .owl-slide-animated").removeClass("is-transitioned");



        const $currentOwlItem = $("#banner  .owl-item").eq(e.item.index);

        $currentOwlItem.find(".owl-slide-animated").addClass("is-transitioned");



        const $target = $currentOwlItem.find(".owl-slide-text");

        // doDotsCalculations($target);

    });



    $owlCarousel.on("resize.owl.carousel", () => {

        setTimeout(() => {

            setOwlDotsPosition();

        }, 50);

    });



    /*if there isn't content underneath the carousel*/

    //$owlCarousel.trigger("refresh.owl.carousel");



    setOwlDotsPosition();



    function setOwlDotsPosition() {

        const $target = $(".owl-item.active .owl-slide-text");

        // doDotsCalculations($target);

    }

    $('#services-slider .owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        items: 1,
        navText: ["<i class='fa fa-chevron-left' aria-hidden='true'></i>", "<i class='fa fa-chevron-right' aria-hidden='true'></i>"]

    })
});
$(document).ready(function() {
    var urlHash = window.location.href.split("#")[1];
    if (urlHash && $('#' + urlHash).length)
        $('html,body').animate({
            scrollTop: $('#' + urlHash).offset().top - 60
        }, 2500);


});
$(window).on('load', function() {
    $('#myModal2').modal('show');
    $('.modal-backdrop').hide();
});
/*
$(document).ready(function() {
    if (typeof start !== 'undefined') {
        start();
    }
});*/
