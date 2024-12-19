<?php

function colorStatus($status)
{

    switch ($status) {
        case str_contains('Запуск', $status):
            echo "#7B68EE";
            break;
        case str_contains('В процессе', $status):
            echo "#ffc300";
            break;
        case str_contains('Завершен', $status):
            echo "#7accb8";
            break;
    }
}
