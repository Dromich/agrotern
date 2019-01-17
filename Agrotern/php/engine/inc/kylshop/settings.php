<?php
/**
 * =================================
 * @copyright (c) 2015 Kylaksizov.ru
 * @link http://kylaksizov.ru/
 * =================================
 * @version 0.0.1
 * =================================
 * info: общие настройки
 * =================================
 **/

if( !defined( 'DATALIFEENGINE' ) OR !defined( 'LOGGED_IN' ) ) {
    die( "Hacking attempt!" );
}

$main_settings = $dle_api -> load_table (PREFIX."_kylshop_settings", 'settings', 'name="main"', true, 0, 1);

$_MS = unserialize($main_settings[0]["settings"]);

if($_MS["online_payments"] == "on") $online_payments = ' checked';
else $online_payments = '';

if($_MS["moderation_buy"] == "on") $moderation_buy = ' checked';
else $moderation_buy = '';

$form_checked = "";
if($kylshop_config["form"] == 1) $form_checked = ' checked';


echo '<div class="box">
	<div class="row">
	    <div class="col-md-2 col-sm-3 pad_no_r">
	        <ul class="kylshop_menu">
	            <li><a href="?mod=kylshop">Список заказов</a></li>
	            <li><a href="?mod=kylshop&addon=settings" class="k_active">Настройки</a></li>
	            <li><a href="?mod=kylshop&addon=payments">Системы оплаты</a></li>
	            <li><a href="?mod=kylshop&addon=fields">Дополнительные поля</a></li>
	        </ul>
	    </div>
	    <div class="col-md-10 col-sm-9 pad_no_l">
		    <div class="box-header">
		        <div class="title">Страница настроек</div>
		    </div>
		    <div class="box-content">
		    	<form method="post" action="" name="personal" class="form-horizontal">
			        <table class="table table-normal">
			        	<!--<tr>
					        <td class="col-xs-9"><h6>Название</h6><span class="note large">Описание</span></td>
					        <td class="col-xs-3 settingstd"><input type="text" style="width: 100%" name=""></td>
				        </tr>-->
				        <tr>
					        <td class="col-xs-9"><h6>Включить онлайн оплату</h6><span class="note large">Если включено, то после оформления заказа будет доступны способы оплаты.</span></td>
					        <td class="col-xs-3 settingstd"><input class="iButton-icons-tab" type="checkbox" name="config_online_payments"'.$online_payments.'></td>
				        </tr>
				        <tr>
					        <td class="col-xs-9"><h6>Сообщение после оформления заказа</h6><span class="note large">Если предыдущая настройка выключена, то этот текст будет выводиться после оформления заказа.</span></td>
					        <td class="col-xs-3 settingstd"><textarea style="width: 100%;" name="config_text_after_offer">'.$kylshop_config["text_after_offer"].'</textarea></td>
				        </tr>
				        <tr>
					        <td class="col-xs-9"><h6>Отправлять заказ на модерацию после оплаты?</h6><span class="note large">Если включено, то после оплаты покупателю будет выведено сообщение о статусе модерации. По умолчанию после оплаты покупателю будет открыт платный участок на странице.</span></td>
					        <td class="col-xs-3 settingstd"><input class="iButton-icons-tab" type="checkbox" name="moderation_buy"'.$moderation_buy.'></td>
				        </tr>
				        <tr>
					        <td class="col-xs-9"><h6>Вывод формы</h6><span class="note large">Если включено, то на странице оплаты будет выведена форма, созданная Вами на странице <b>Дополнительные поля</b></span></td>
					        <td class="col-xs-3 settingstd"><input class="iButton-icons-tab" type="checkbox" name="config_form"'.$form_checked.'></td>
				        </tr>
			        </table>
			        <div class="row box-section">
			        	<input type="hidden" name="main" value="general">
						<input type="submit" class="btn btn-green" value="Сохранить">
					</div>
		    	</form>
		    </div>
    	</div>
    </div>
</div>';