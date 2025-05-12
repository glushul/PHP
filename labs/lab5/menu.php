<?php

function getMainMenu() {
    $page = $_GET['page'] ?? 'view';
    
    $mainItems = [
        'viewer'   => 'Просмотр',
        'add'    => 'Добавление записи',
        'edit'   => 'Редактирование записи',
        'delete' => 'Удаление записи'
    ];

    $html = '<div class="menu">';
    foreach ($mainItems as $key => $label) {
        $activeClass = ($page === $key) ? 'active' : '';
        $html .= "<a href=\"index.php?page=$key\" class=\"$activeClass\">$label</a>";
    }
    $html .= '</div>';

    return $html;
}
?>