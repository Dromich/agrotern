<?php
/**
 * =================================
 * @copyright (c) 2015 Kylaksizov.ru
 * @link http://kylaksizov.ru/
 * =================================
 * @version 0.0.1
 * =================================
 * info: список заказаов
 * =================================
 **/

// УСТАНОВКА МОДУЛЯ
// $dle_api->install_admin_module ( "file-inc.php", "Название модуля", "Описание модуля", "ico.pnh", "1" );

if( !defined( 'DATALIFEENGINE' ) OR !defined( 'LOGGED_IN' ) ) {
    die( "Hacking attempt!" );
}

require_once('pagination.php');

if(isset($_GET["order"]) && ctype_digit($_GET["order"]))
    require_once('order.php');

else{

    $rows_buy = $dle_api -> load_table (PREFIX."_kylshop_buy", '*', '1', true, $start_select, $kylshop_config["limit_orders"], 'id', 'DESC');

    $buy_list = '';
    $main_sum = 0;

    foreach ($rows_buy as $row) {

        if($row["status"] == "0"){
            $status = '<p class="status">В ожидании</p>';
            $style = '';
            $action = '<a href="?mod=kylshop&status_go_ok='.$row["number"].'" class="goodsOK" title="Одобрить"></a>';
        }
        if($row["status"] == "1"){
            $status = '<p class="status">Завершено</p>';
            $style = 'background: #BFEFB0;';
            $main_sum += (float)$row["sum"];
            $action = '<a href="?mod=kylshop&status_go_moderation='.$row["number"].'" class="status_m" title="Отправить на модерацию"></a>';
        }
        if($row["status"] == "m"){
            $status = '<b class="status">На модерации</b>';
            $style = 'background: #FFBCBC;';
            $main_sum += (float)$row["sum"];
            $action = '<a href="?mod=kylshop&status_go_ok='.$row["number"].'" class="goodsOK" title="Одобрить"></a>';
        }

        $u_name = explode("*", $row["name"]);

        if(isset($u_name[1])) $uname = $u_name[0].' <i class="quest_desc">гость</i>';
        else $uname = '<a href="'.$config["http_home_url"].'user/' . $row["name"] . '/" target="_blank">' . $row["name"] . '</a>';

        $buy_list .= '<tr style="'.$style.'">
        <td>' . $row["number"] . '</td>
        <td>
            '.$uname.'<br>
            <a href="'.$config["http_home_url"].'admin.php?mod=kylshop&order=' . $row["id"] . '" class="more_info">Подробнее</a>
        </td>
        <td><a href="'.$row["news_link"].'" target="_blank">' . $row["description"] . '</a></td>
        <td>' . $row["email"] . '</td>
        <td>' . $row["date"] . '</td>
        <td style="text-align: right;"><b>' . $row["sum"] . '</b> '.$kylshop_config["ccy"].$status.'</td>
        <td class="btn_actions">
            '.$action.'
            <a href="?mod=kylshop&delete_order='.$row["number"].'" class="deleteGoods" title="Удалить"></a>
        </td>
    </tr>';
    }

    echo '<div class="answer_server">'.$answer_server.'</div>

<div class="box">
    <div class="row">
        <div class="col-md-2 col-sm-3 pad_no_r">
            <ul class="kylshop_menu">
                <li><a href="?mod=kylshop" class="k_active">Список заказов</a></li>
                <li><a href="?mod=kylshop&addon=settings">Настройки</a></li>
                <li><a href="?mod=kylshop&addon=payments">Системы оплаты</a></li>
                <li><a href="?mod=kylshop&addon=fields">Дополнительные поля</a></li>
            </ul>
        </div>
        <div class="col-md-10 col-sm-9 pad_no_l">
            <div class="box-header">
                <div class="title">Список заказов</div>
            </div>
            <div class="box-content">
                <table class="table table-normal table-hover">
                    <tr>
                        <th width="30">№</th>
                        <th>Логин</th>
                        <th>Товар</th>
                        <th>E-mail</th>
                        <th width="200">Дата</th>
                        <th style="text-align: right;">Сумма</th>
                        <th width="20">Действия</th>
                    </tr>
                    '.$buy_list.'
                </table>
                <div class="all_sum">Всего: <b>'.$main_sum.'</b> '.$kylshop_config["ccy"].'</div>
            </div>
        </div>
    </div>
</div>';

    echo $pagination;
}