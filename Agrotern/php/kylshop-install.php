<?php
/**
 * =================================
 * @copyright (c) 2015 Kylaksizov.ru
 * @link http://kylaksizov.ru/
 * =================================
 * @version 0.0.1
 * =================================
 **/

header("Content-type: text/html; charset=utf-8");
include_once ('engine/data/config.php');
include ('engine/api/api.class.php');

$dle_api -> db -> query("DROP TABLE IF EXISTS ".PREFIX."_kylshop_buy");

//  =====================================================
//  Создаём таблицу для хранения заказов
//  =====================================================
$orders = "CREATE TABLE " . PREFIX . "_kylshop_buy (
    `id` int(11) NOT NULL auto_increment,
    `number` int(11) NOT NULL default '0',
    `name` varchar(40) NOT NULL default '',
    `tmp_name` varchar(50) NOT NULL default '',
    `email` varchar(50) NOT NULL default '',
    `description` varchar(200) NOT NULL default '',
    `fields` text NOT NULL default '',
    `news_id` varchar(150) NOT NULL default '0',
    `sum` float(11) NOT NULL default '0',
    `date` datetime NOT NULL default '0000-00-00 00:00:00',
    `secret_key` varchar(150) NOT NULL default '0',
    `secret_key_freekassa` varchar(150) NOT NULL default '0',
    `status` varchar(30) NOT NULL default '0',
    PRIMARY KEY  (`id`)
    ) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */";

$dle_api -> db -> query($orders);

//  =====================================================
//  Создаём таблицу для настроек
//  =====================================================
$dle_api -> db -> query("DROP TABLE IF EXISTS ".PREFIX."_kylshop_settings");

$settings = "CREATE TABLE " . PREFIX . "_kylshop_settings (
    `name` varchar(50) NOT NULL default '',
    `settings` text NOT NULL default ''
    ) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */";

$dle_api -> db -> query($settings);

function pass($number){
    $chars="qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP*()/#$@%&*";
    $size=StrLen($chars)-1;
    $password=null;
    while($number--)
        $password.=$chars[rand(0,$size)];
    return $password;
}

$sets = array(
    "secret_key" => pass(15)
);

$sets = serialize($sets);

$main_settings = 'a:1:{s:14:"moderation_buy";N;}';

$dle_api -> db -> query( "INSERT INTO " . PREFIX . "_kylshop_settings (name, settings) VALUES ('general', '{$sets}')" );
$dle_api -> db -> query( "INSERT INTO " . PREFIX . "_kylshop_settings (name, settings) VALUES ('webmoney', '{$sets}')" );
$dle_api -> db -> query( "INSERT INTO " . PREFIX . "_kylshop_settings (name, settings) VALUES ('main', '{$main_settings}')" );











$dle_api->install_admin_module('kylshop', 'Kylshop', 'Модуль для продажи цифровых товаров.', 'kylshop.png');

echo "Модуль установлен, обязательно удалите установочный файл и следуйте дальнейшим инструкциям!";





?>