<?php
/**
 * =================================
 * @copyright (c) 2015 Kylaksizov.ru
 * @link http://kylaksizov.ru/
 * =================================
 * @version 0.0.1
 * =================================
 * info: настройки систем оплаты
 * =================================
 **/

if( !defined( 'DATALIFEENGINE' ) OR !defined( 'LOGGED_IN' ) ) {
    die( "Hacking attempt!" );
}

$webmoney_settings = $dle_api -> load_table (PREFIX."_kylshop_settings", 'settings', 'name="webmoney"', true, 0, 1);

$wm_settings = unserialize($webmoney_settings[0]["settings"]);

echo '<div class="box">
	<div class="row">
	    <div class="col-md-2 col-sm-3 pad_no_r">
	        <ul class="kylshop_menu">
	            <li><a href="?mod=kylshop">Список заказов</a></li>
	            <li><a href="?mod=kylshop&addon=settings">Настройки</a></li>
	            <li><a href="?mod=kylshop&addon=payments" class="k_active">Системы оплаты</a></li>
	            <li><a href="?mod=kylshop&addon=fields">Дополнительные поля</a></li>
	        </ul>
	    </div>
	    <div class="col-md-10 col-sm-9 pad_no_l">
		    <div class="box-header">
		        <div class="title">Системы оплаты</div>
		    </div>
		    <div class="box-content">
		    	<form method="post" action name="settings">
			        <table class="table table-normal">
			        	<tr>
			        	<td class="col-xs-10 col-sm-6 col-md-10"><h5>Кошелёк магазина (WebMoney)</h5>
				        	<span class="note large">Укажите номер кошелька, который зарегистрирован в системе <a href="https://merchant.webmoney.ru/conf/purses.asp" target="_blank">WebMoney Merchant</a>.<br>
				        		<a href="#" class="ahtung" data-toggle="modal" data-target="#infoWebmoney">Настройки для WebMoney Merchant.</a>
				        	</span>
			        	</td>
					        <td class="col-xs-2 col-md-2 settingstd"><input type="text" style="width: 100%" name="purse" placeholder="R000000000000" value="'.$wm_settings["purse"].'"></td>
				        </tr>
				        <tr>
			        	<td class="col-xs-10 col-sm-6 col-md-10"><h5>Free-kassa</h5>
				        	<span class="note large">Cистеме <a href="http://www.free-kassa.ru/merchant/cabinet/shops.php" target="_blank">free-kassa.ru</a>.<br>
				        		<a href="" class="ahtung" data-toggle="modal" data-target="#infoFreekassa">Помощь по настройке free-kassa.ru</a>
				        	</span>
			        	</td>
					        <td class="col-xs-2 col-md-2 settingstd">
					        <label>ID кассы:</label>
					        <input type="text" style="width: 100%" name="freekassa_id" placeholder="00000" value="'.$kylshop_config["freekassa_id"].'">
					        <br><br>
					        <label>Секретное слово 1:</label>
					        <input type="text" style="width: 100%" name="freekassa_secret1" value="'.$kylshop_config["secret_word1"].'">
					        
					        <br><br>
					        <label>Секретное слово 2:</label>
					        <input type="text" style="width: 100%" name="freekassa_secret2" value="'.$kylshop_config["secret_word2"].'">
					        
					        </td>
				        </tr>
			        </table>
			        <div class="row box-section">
			        	<input type="hidden" name="payments" value="webmoney">
						<input type="submit" class="btn btn-green" value="Сохранить">
					</div>
				</form>
		    </div>
	    </div>
    </div>
</div>';

// INFO WEBMONEY
echo '
<div class="modal fade" id="infoWebmoney" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Настройки для WebMoney Merchant</h4>
			</div>
			<div class="modal-body">
				<p>Перейдите на страницу <a href="https://merchant.webmoney.ru/conf/purses.asp" target="_blank">WebMoney Merchant</a>.</p>
				<p><b>Тестовый/Рабочий режимы: </b>для начала поставьте тестовый, а после того как проверите всю работу модуля переключите на рабочий.</p>
				<hr>
				<p><b>Торговое имя: </b>Любое имя</p>
				<p><b>Result URL: </b>'.$config["http_home_url"].'?payment=webmoney_result</p>
				<p><b>Success URL: </b>'.$config["http_home_url"].'?payment=webmoney_success</p>
				<p><b>Fail URL и метод его вызова: </b>'.$config["http_home_url"].'?payment=webmoney_fail</p>
				<hr>
				<p>Метод вызова в Success и Fail поставить <b>POST</b>.</p>
				<p>Все остальные настройки по умолчани.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
			</div>
		</div>
	</div>
</div>';

// INFO FREE-KASSA
echo '
<div class="modal fade" id="infoFreekassa" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Настройки для Free-kassa</h4>
			</div>
			<div class="modal-body">
				<p>Перейдите на страницу <a href="http://www.free-kassa.ru/merchant/cabinet/settings.php" target="_blank">настройки кассы</a>.</p>
				<hr>
				<p><b>Название сайта: </b>Любое имя</p>
				<p><b>URL сайта: </b>'.$config["http_home_url"].'</p>
				<p><b>URL оповещения: </b>'.$config["http_home_url"].'?payment=freekassa_result</p>
				<p><b>Метод оповещения: </b>POST</p>
				<p><b>URL возврата в случае успеха: </b>'.$config["http_home_url"].'?payment=freekassa_success</p>
				<p><b>Метод отсылки URL возврата в случае успеха: </b>GET</p>
				<p><b>URL возврата в случае неудачи: </b>'.$config["http_home_url"].'?payment=freekassa_fail</p>
				<p><b>Метод отсылки URL возврата в случае неудачи: </b>GET</p>
				<p><b>Подтверждение платежа: </b>Требуется</p>
				<hr>
				<p>Все остальные настройки на ваше усмотрение.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
			</div>
		</div>
	</div>
</div>';