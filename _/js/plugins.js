$(document).ready(function(){
    
    $("html").niceScroll({
        cursorcolor:"#1976D2",
        cursorborder:"0px solid #fff",
        cursorwidth:"7",
        zindex:10,
        scrollspeed:"60"
    });

    var scrollButton= $("#shm");
    $(window).scroll(function(){
        $(this).scrollTop() >=490 ? scrollButton.show() : scrollButton.hide();
    });
    scrollButton.click(function(){
        $("html,body").animate({scrollTop : 0}, 800);
    });
    
    
    $(".owl-example-4").owlCarousel({
        autoPlay: 4000,
        items : 2,
        stopOnHover : true,
        lazyLoad : true
    });
    $(".owl-example-5").owlCarousel({
        autoPlay: 5000,
        items : 3,
        stopOnHover : true,
        lazyLoad : true
    });
    
    
    $('.hide-more-category').hide();
    $('#Category').change(function () {
      $('.hide-more-category').hide();
      $('.'+$(this).val()).show();
    });
    
    $('.hide-more').hide();
    $('.show-hide-more').show();
    $('#RentTypeSelect').change(function () {
      $('.hide-more').hide();
      $('.show-hide-more').hide();
      $('.'+$(this).val()).show();
    });
    
    
    $('.adSettingMenu').hide();
    $('.smallMenuSetingOneAd').click(function () {
      $('.adSettingMenu',this).toggle();
    });

});
