$(document).ready(function(){
$('.review').owlCarousel({
    loop:true,
    margin:10,
      nav:false,
    responsiveClass:true,
items:3,
});

              $('body').on('click', '.openPopUp', function(){
              var openLink = $(this).data("link").replace("#","");
              $('.popUp').each(function(){
                  var thisID = $(this).attr("id");
                  if (openLink == thisID) {
                      $('.popUp').fadeOut(350);
                      $('#'+thisID).fadeIn(350);
                      $('body').addClass('noScroll');
                  };
              });
            });

            $('.closePopUp_link, .popUp_shade').click(function(){
              $('.popUp').fadeOut(350);
              history.pushState(null, null, window.location.href.split('#')[0]);
              $('body').removeClass('noScroll');
            });
$('.conferenc-gall').owlCarousel({
    loop:false,
    margin:20,
    nav:false,
    responsiveClass:true,
	items:4,
	dots: false,
	autoplay: true,
	autoplayTimeout: 1500,
    responsive:{
        0:{
            margin:5,
			items:2
        },
        600:{
			 margin:10
        }
    }
});

	$('h3.title').click(function(){
		$(this).parents('.miniWrap').toggleClass('open');
	})

	$('.form form, .popUp form').submit(function(){

			$.ajax({
			  type: "POST",
			  dataType: 'text',
			  url: '/local/tools/form-raivola.php',
			 data: $(this).serialize(),

			  error: function(){
				  console.log("Error messages");
			  },
			  success: function(data) {
				  if(data.error == undefined){
					//	$.fancybox.close();
					 $('.popUp').fadeOut(350);
                      $('#thanks').fadeIn(350);
                      $('body').addClass('noScroll');
					

				  	}
				  else {
					alert('Что-то пошло не так, возможно вы не ввели капчу или свяжитесь с администрацией сайта.');
				  }
				return false;
			  }
		  }); 

			return false;
	});


        $('.menu a').on('click', function(event){
       // event.preventDefault();
        if ( $('.menu').hasClass('open') ){
            $('.menu').removeClass('open');
        } else {
            $('.menu').addClass('open');
        }

        var $windowHeight = $(window).outerHeight();
        var $hmenu = $('.open .hidden-menu').outerHeight();

        $('.open .hidden-menu').css('margin-top', ( $windowHeight - $hmenu ) / 2 );
                 
    });

    $('.conf-tab').click(function () {
        $('.conf-tab,.zals,.teams').removeClass('active');
        $(this).addClass('active');
        var data = $(this).data('count');
        $('.zal'+data).addClass('active');
    })
    $('.tab').click(function () {
        $('.tab').removeClass('active');
        $(this).addClass('active');
		var tab = $(this).data('tab');
		$('.form').css('display','none');
		$('.form.'+tab).css('display','block');
    })
})