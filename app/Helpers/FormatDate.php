<?php

namespace App\Helpers;
use Carbon\Carbon;

class FormatDate
{
    public static function LongTimeFilter($date)
    {
        if ($date == null) {
            return "Oficina creada el día de la apertura";
        }

        $date = Carbon::now();

        $date = $date->format('d-m-Y');
        return "Oficina creada el ".$date;
    }
}
