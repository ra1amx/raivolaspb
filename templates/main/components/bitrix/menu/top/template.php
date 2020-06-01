					<ul class="menu top_mnu">


<?foreach($arResult as $key=>$item):?>
						<li><a href="<?=$item['LINK']?>" <?if($key==0):?>class='active'<?endif?>><?=$item['TEXT']?></a></li>


<?endforeach?>
					</ul>