<?php

define('ELLIPSIS_LENGTH', 3);

use Carbon\Carbon;

if (!function_exists('truncate')) {
    function truncate(?string $text = null, int $limit = 100): ?string
    {
        if (mb_strlen($text) > $limit) {
            $truncatedText = mb_substr($text, 0, $limit - ELLIPSIS_LENGTH) . ' ...';
            
            return $truncatedText;
        }

        return $text;
    }
}

if (!function_exists('formatDate')) {
    function formatDate(?string $date = null)
    {
        // Convertir la date en objet Carbon
        $carbonDate = Carbon::parse($date);
        $formattedDate = $carbonDate->isoFormat('ddd D MMM, HH[h]mm');

        return $formattedDate;
    }
}

