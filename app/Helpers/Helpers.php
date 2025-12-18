<?php

use Carbon\Carbon;

function showDate($date)
{
    return Carbon::parse($date)->format('j F Y');
}

function addCurrency($value)
{
    return number_format((float)$value, 2, '.', '')." CAD";
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

