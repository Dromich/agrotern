<?php
/**
 * =================================
 * @copyright (c) 2015 Kylaksizov.ru
 * @link http://kylaksizov.ru/
 * =================================
 * @version 0.0.1
 * =================================
 * info: Страница корзины
 * =================================
 **/

if( ! defined( 'DATALIFEENGINE' ) ) {
    die( "Hacking attempt!" );
}

include ('engine/api/api.class.php');

// корзина
require_once ENGINE_DIR . '/modules/kylshop/config.php';

$tpl -> load_template( 'kylshop/cart.tpl' );


$main_settings = $dle_api -> load_table (PREFIX."_kylshop_settings", 'settings', 'name="main"', true, 0, 1);

$_MS = unserialize($main_settings[0]["settings"]);

/*
echo '<pre>';
print_r($member_id);
echo '</pre>';
*/

/*
    [email] => master_z1zzz@mail.ru
    [password] => 0d992b6a7b094eaf1270474d430f814f
    [name] => Kylaksizov
    [user_id] => 1
    [news_num] => 46
    [comm_num] => 213
    [user_group] => 1
    [lastdate] => 1479279519
    [reg_date] => 1420641355
    [banned] =>
    [allow_mail] => 1
    [info] =>
    [signature] =>
    [foto] => http://kylaksizov.ru/uploads/fotos/foto_1.jpg
    [fullname] =>
    [land] =>
    [favorites] =>
    [pm_all] => 24
    [pm_unread] => 0
    [time_limit] => 1463286982
    [xfields] =>
    [allowed_ip] =>
    [hash] =>
    [logged_ip] => 46.118.219.12
    [restricted] => 0
    [restricted_days] => 0
    [restricted_date] =>
    [timezone] =>
    [payments_tag_hide] => script
    [user_balance] => 0
    [balance24] => 2
*/

############################################
#	Если пользователь авторизован
if($is_logged == "1" || $kylshop_config["guest_allow"] == true){

    if(!isset($_GET["page"])){ // первая страница корзины

        $cont = '<h1>Моя корзина</h1><a href="#" class="cartClear">очистить</a>
		<table class="listing-cart staticCart">
			<tr>
				<th>Нименование</th>
				<th width="70">Количество</th>
				<th width="90">Цена / 1 шт.</th>
			</tr>
		</table>
		<div class="totalGoods">Всего: <b>0</b><span> руб.</span></div>';

        $field = '';

        if($kylshop_config["form"] == true){

            if($kylshop_config["form_fields"]){

                $form_fields = json_decode($kylshop_config["form_fields"]);

                foreach ($form_fields as $key => $form_field) {

                    $fields_type = explode("|", $key);

                    // замена на существующие данные авторизированного пользователя
                    $replace_value = explode("=", $fields_type[1]);
                    if(!empty($replace_value[1])){

                        // Тут происходит замена
                        $input_name = $replace_value[0];

                        $input_value = str_replace(array("user_id", "user_name", "user_email", "user_ip"), array($member_id["user_id"], $member_id["name"], $member_id["email"], $_SERVER["REMOTE_ADDR"]), $replace_value[1]);
                        //$input_value = $replace_value[1];

                    } else{

                        $input_name = $fields_type[1];
                        $input_value = "";
                    }
                    //var_dump($replace_value);

                    if(!empty($fields_type[3])) $fields_type[3] = " " . $fields_type[3];
                    else $fields_type[3] = "";

                    if($fields_type[0] == "text" || $fields_type[0] == "number" || $fields_type[0] == "email" || $fields_type[0] == "tel" || $fields_type[0] == "password" || $fields_type[0] == "hidden"){
                        $field .= '<span class="one_field"><input type="'.$fields_type[0].'" name="'.$input_name.'" id="kylshop_field_'.$input_name.'" placeholder="'.$form_field.'" value="'.$input_value.'"'.$fields_type[3].'></span>';
                    } else if($fields_type[0] == "select"){
                        $options = explode("*", $form_field);
                        $field .= '<span class="one_field"><select name="'.$input_name.'" id="kylshop_field_'.$input_name.'">';
                        foreach ($options as $option) {
                            $field .= '<option value="'.$option.'">'.$option.'</option>';
                        }
                        $field .= '</select></span>';
                    } else if($fields_type[0] == "checkbox" || $fields_type[0] == "radio"){
                        $field .= '<label class="one_field"><input type="'.$fields_type[0].'" name="'.$input_name.'" id="kylshop_field_'.$input_name.'" value="'.$form_field.'"'.$fields_type[3].'> '.$form_field.'</label>';
                    } else if($fields_type[0] == "textarea"){
                        $field .= '<textarea name="'.$input_name.'" id="kylshop_field_'.$input_name.'" placeholder="'.$form_field.'"'.$fields_type[3].'>'.$input_value.'</textarea>';
                    }
                }
                $field .= '<div class="clr"></div>';
            }
        }

        //$field = str_replace(array("{}"), array(), $field);

        if($_MS["online_payments"] == "on") $button_name = 'Перейти к оплате';
        else $button_name = 'Оформить заказ';

        $cont .= '<div class="action_button_cart">
            <form method="POST" action="'.$config["http_home_url"].'?do=cart&page=payments">
                '.$field.'
                <input type="hidden" name="productsIds" id="my_products" value="0" required>
                <input type="hidden" name="productsAmount" id="productsAmount" value="0" required>
                <input type="submit" class="btn_buy" value="'.$button_name.'"> 
            </form>
		</div>';
    }

    if(isset($_GET["page"]) && $_GET["page"] == "payments"){ // первая страница корзины

        require_once(ENGINE_DIR . '/modules/kylshop/payments.php');

    }

    $content = '<div id="staticCart">'.$cont.'</div>';
}

############################################
#	Если ГОСТЬ
else{

    $content = '<p>Пожалуйста авторизуйтесь, что бы купить товары на нашем сайте.</p>';
}

$tpl -> set('{listing-goods}', $content);

$tpl -> compile( 'content' );
$tpl -> clear();

?>