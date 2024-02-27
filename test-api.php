<?php

$url = 'https://zukijourney.xyzbot.net';

// Funkce pro z�sk�n� status k�du a pr�m�rn� latence
function getApiStatusAndLatency($url) {
    $status = get_headers($url, 1)[0];
    $time_start = microtime(true);
    $content = file_get_contents($url);
    $time_end = microtime(true);
    $latency = round(($time_end - $time_start) * 1000, 2); // Latence v milisekund�ch
    echo "Status API url $url: $status <br>";
    echo "Pr�m�rn� latence API: $latency ms";
}

// Z�sk�n� a v�pis statusu a pr�m�rn� latence API
getApiStatusAndLatency($url);

?>