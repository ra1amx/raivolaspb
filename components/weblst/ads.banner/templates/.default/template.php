<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$this->setFrameMode( true );

$this->addExternalJS($this->__component->__template->__folder."/libs/countdown.js");
?>
<div class="shadow-blur" style="display:none;">
</div>
<div class="recall" style="display:none;">
	<div class="recallcontainer">
 <img src="<?=$arResult['IMG']['SRC']?>">
		<div class="recall-conten">
			<div class="countdown" data-date="<?=$arResult['DATE']?>">
			</div>
			<h2><?=$arResult['NAME']?></h2>
			<p>
				<?=$arResult['TEXT']?>
			</p>
			<form method='POST' onsubmit='send_form(this);return false;'>
				<?=bitrix_sessid_post();?>
				<input type='hidden' name='event' value="<?=$arResult['NAME']?>">
				 <input type="text" name="name" placeholder="Ваше имя" required=""> <button type="submit">Хочу</button>
				 <input type="tel" name="phone" placeholder="+7" required=""> <button type="button" class="recall-close">Нет, спасибо</button>
				 <label><input type="checkbox" checked="">Я согласен на обработку <a href="<?=$arResult['LINK']?>"> персональных данных</a></label>
			</form>
		</div>
	</div>
	<div class="recall-close">
	</div>
</div>
<script>
	function recallclose(){
		$(".recall,.shadow-blur").hide();
		showtwo = document.cookie.replace(/(?:(?:^|.*;\s*)showtwo\s*\=\s*([^;]*).*$)|^.*$/, "$1");
		if(showtwo){
			document.cookie = "recall=close; max-age=86400";
		} else {
		document.cookie = "recall=close; max-age=300";
		document.cookie = "showtwo=yes; max-age=86400";
		}
	}
	function recallshow(){
		$('body').addClass('noScroll');
		show = document.cookie.replace(/(?:(?:^|.*;\s*)recall\s*\=\s*([^;]*).*$)|^.*$/, "$1");
		if(!show){
			$(".recall,.shadow-blur").show();
		}

	}
	setTimeout(recallshow, <?=$arResult['TIMER']?>);
	$(document).ready(function(){
		$(document).on('click','.recall-close',function(){

			recallclose();
		})


	});
	function send_form(_this)
	{	
 		event.preventDefault();
		$.ajax({
			url: window.location.href,
			type: 'POST',
			data: $(_this).serialize(),
			success: function(result) {
				document.cookie = "recall=close; max-age=86400";
				$('.recall-conten').html('<div class="thank">'+result+'<br><button type="button" class="recall-close green">Спасибо</button></div>');
			},
			error: function() {}
		});
		return false;
	}
</script>