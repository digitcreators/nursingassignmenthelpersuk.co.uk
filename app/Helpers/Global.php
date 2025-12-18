<?php

use Carbon\Carbon;
use Illuminate\Support\Str;

function showDate($date)
{
    return Carbon::parse($date)->format('j F Y');
}

function addCurrency($value)
{
    return number_format((float)$value, 1, '.', ',')." GBP";
}

function showDateTime($date)
{
    return Carbon::parse($date)->format('jS \of F Y \a\t h:i A');
}

function showDateTimeDay($date)
{
    return Carbon::parse($date)->format('\(l\)  jS \of F Y \a\t h:i:s A');
}

function getEstimateReadingTime($body)
{
    Str::macro('readDuration', function(...$text) {
        $totalWords = str_word_count(implode(" ", $text));
        $minutesToRead = round($totalWords / 200);

        return (int)max(1, $minutesToRead);
    });

    return Str::readDuration($body). ' min to read';
}

function getTableData($data)
{
    $table  = '     <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#19BCBD">';
    $table .= '        <tbody>';
    $table .= '            <tr>';
    $table .= '                <td align="left" class="esd-block-text es-p10t es-p10l">';
    $table .= '                    <p style="color: #ffffff;"><strong>Name:</strong></p>';
    $table .= '                </td>';
    $table .= '            </tr>';

    echo $table;
}
