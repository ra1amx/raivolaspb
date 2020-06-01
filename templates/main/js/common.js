$(document).ready(function() {

    if($('input[name=phone]').get(0)) {
        $('input[name=phone]').inputmask('8(999)999-99-99',{ "clearIncomplete": true });
    }
	$('.sect-list li').click(function(){
		if($(this).hasClass('active')){
			return false;
		}
		$('.sect-list li').removeClass('active');
		$(this).addClass('active');
		var id = $(this).data('id');
		$('.item-list').removeClass('active');
		$('#'+id).addClass('active');
		$('#'+id+' li').eq(0).click();

	})
            $('#form .close, #politic .close, .close').click(function(){
               $.fancybox.close();
            });

		$('.item-list li').click(function(){
				$(this).parent('.item-list').find('li').removeClass('active');
				$(this).addClass('active');
				var src = $(this).data('img');
				var price = $(this).data('price');
				var weight = $(this).data('weight');

				$('.weight').html(weight+' гр.');
				$('.price').html(price+' р.');
				$('.item-img').attr('src',src);
		})
		$('.item-list li .additem').click(function(){
			var item = $(this).parent('li');
			var price = $(item).data('price');
			var name = $(item).find('span').text();
			$('.order-value').show();
			$('.menu-block .order-button').show();
			var value = parseInt($('.order-value span').data('val')) +price;
				$('.order-value span').text(value+' р.').data('val',value);
			$('.order-list').append('<li><div class="itemname">'+name+'</div><div class="itemprice" data-val='+price+'>'+price+' р.</div><div class="delete">-</div></li>');
		})
	$('.order-list').on('click','.delete', function(){
			var price = $(this).parent('li').find('.itemprice').data('val');
		
			var value = parseInt($('.order-value span').data('val')) -price;
			$('.order-value span').text(value+' р.').data('val',value);
			$(this).parent('li').remove();
			if($(".order-list li").length < 1){
				$('.order-value').hide();
				$('.order-value').data('val','0');
				$('.menu-block .order-button').hide();
			}

		})

	//Попап менеджер FancyBox
	//Документация: http://fancybox.net/howto
	//<a class="fancybox"><img src="image.jpg" /></a>
	//<a class="fancybox" data-fancybox-group="group"><img src="image.jpg" /></a>
	$(".fancybox").fancybox();

	//Навигация по Landing Page
	//$(".top_mnu") - это верхняя панель со ссылками.
	//Ссылки вида <a href="#contacts">Контакты</a>
	$(".top_mnu").navigation();

	//Добавляет классы дочерним блокам .block для анимации
	//Документация: http://imakewebthings.com/jquery-waypoints/


	//Плавный скролл до блока .div по клику на .scroll
	//Документация: https://github.com/flesler/jquery.scrollTo
	$("a.scroll").click(function() {
		$.scrollTo($(".div"), 800, {
			offset: -90
		});
	});

	//Каруселька
	//Документация: http://owlgraphic.com/owlcarousel/

	var owl = $('.carousel');
	owl.owlCarousel({
            items: 1,
			autoWidth:false,
		    lazyLoad:true,



	});
	$(".next_button img").click(function(){
		owl.trigger("owl.next");
	});
	$(".prev_button img").click(function(){
		owl.trigger("owl.prev");
	});

	//Кнопка "Наверх"
	//Документация:
	//http://api.jquery.com/scrolltop/
	//http://api.jquery.com/animate/
	$("#top").click(function () {
		$("body, html").animate({
			scrollTop: 0
		}, 800);
		return false;
	});
	
	     $(window).scroll(function(){

              $(".menu a").each(function () {
                var window_top = $(window).scrollTop();
                var div_1 = $(this).attr('href');
                var div_top = $(div_1).offset().top;         
                if (window_top  > div_top   ){
                    $('.menu').find('a').removeClass('active');
                   // $('.menu').find('a').css('color','#767676');
                    $('.menu').find('a[href="'+div_1+'"]').addClass('active');
                   // $('.menu').find('a[href="'+div_1+'"]').css('color','#FFFFFF');
                }else{
                     //$('.menu').find('a[href="'+div_1+'"]').css('color','#767676');
                    $('.menu').find('a[href="'+div_1+'"]').removeClass('active');
                };
            });
          
		 }) 

	$('.menu li a').click(function(){
		$('.menu li a').removeClass('active');
		$(this).addClass('active');
	})
    $('.viewall').click(function(){
    	var id = $(this).data('id');
 	$('body').css('overflow', 'hidden');
		//console.log($(window).width());
		$('.owl-item').css('width',$(window).width()+'px')
    	$('#'+id).parent('.hiddenblock').addClass('active');


    });
    $('.close').click(function(){
    	$(this).parents('.slider').parent('.hiddenblock').removeClass('active');
    	$('body').css('overflow', 'auto');
    })
    $('.viewphoto').click(function(){
    	$('.view,.cl').fadeToggle();

    	$('.photos').fadeToggle();
    })
		$('div.order-button').click(function(){
			var type = $(this).data('types');
			$('#form form textarea').remove();
			$('#form form input[name=type]').remove();
			$('#form form input[name=total]').remove();
			$('#form form').append('<input type="hidden" value="'+type+'" name="type">');
			if(type == "zakaz"){
				var list = '';
				var total = $('.order-value span').text()
				$('#form form').append('<input type="hidden" value="'+total+'" name="total">');
				$('.order-list li').each(function(){
					list += $(this).find('.itemname').text()+' -'+$(this).find('.itemprice').text()+" \n\r"
				});
				console.log(list)
					$('#form form').append('<textarea name="list" style="display:none">'+list+'</textarea>');

			}
		})
	$('form').submit(function(){
		var id = $(this).attr('id');
			console.log($(this).serialize());
			var form = $(this);
			$.ajax({
			  type: "POST",
			  dataType: 'text',
			  url: '/local/tools/form-handler.php',
			 data: $(this).serialize(),

			  error: function(){
				  console.log("Error messages");
			  },
			  success: function(data) {
				  if(data.error == undefined){
						$.fancybox.close();
						console.log($(form).find('input[name=type]').val())
					  if($(form).find('input[name=type]').val() == 'promocod'){

						$("#okpromocode").fancybox().trigger('click');
					  } else {
							$("#thanks").fancybox().trigger('click');
					  }

				  	}
				  else {
					alert('Что-то пошло не так, возможно вы не ввели капчу или свяжитесь с администрацией сайта.');
				  }
				return false;
			  }
		  }); 

			return false;
	});
});