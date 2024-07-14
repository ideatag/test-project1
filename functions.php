<?php

function getZodiacSign($date)
{
    $zodiacSigns = [
        'Berbec' => ['start' => '03-21', 'end' => '04-19'],
        'Taur' => ['start' => '04-20', 'end' => '05-20'],
        'Gemeni' => ['start' => '05-21', 'end' => '06-20'],
        'Rac' => ['start' => '06-21', 'end' => '07-22'],
        'Leu' => ['start' => '07-23', 'end' => '08-22'],
        'Fecioara' => ['start' => '08-23', 'end' => '09-22'],
        'Balanta' => ['start' => '09-23', 'end' => '10-22'],
        'Scorpion' => ['start' => '10-23', 'end' => '11-21'],
        'Sagetator' => ['start' => '11-22', 'end' => '12-21'],
        'Capricorn' => ['start' => '12-22', 'end' => '01-19'],
        'Varsator' => ['start' => '01-20', 'end' => '02-18'],
        'Pesti' => ['start' => '02-19', 'end' => '03-20'],
    ];

    $partialDate = explode('-', date('m-d', strtotime($date)));
    $month = (int)$partialDate[0];
    $day = (int)$partialDate[1];

    foreach ($zodiacSigns as $name => $dates) {
        $startDate = $dates['start'];
        $endDate = $dates['end'];

        list($startMonth, $startDay) = explode('-', $startDate);
        list($endMonth, $endDay) = explode('-', $endDate);

        $startMonth = (int)$startMonth;
        $startDay = (int)$startDay;
        $endMonth = (int)$endMonth;
        $endDay = (int)$endDay;

        if (($month === $startMonth && $day >= $startDay) || ($month === $endMonth && $day <= $endDay) ||
            ($month > $startMonth && $month < $endMonth) ||
            ($startMonth > $endMonth && ($month < $endMonth || $month > $startMonth))
        ) {
            return $name;
        }
    }

    return null;
}


function calculate($number1, $number2, $operation)
{
    $result = '';

    switch ($operation) {
        case '+':
            $result = $number1 + $number2;
            break;
        case '-':
            $result = $number1 - $number2;
            break;
        case '*':
            $result = $number1 * $number2;
            break;
        case '/':
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                $result = 'Eroare: Impartire la zero';
            }
            break;
        default:
            $result = 'Operatiune invalida';
            break;
    }

    return $result;
}
