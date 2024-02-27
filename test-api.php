<?php

$url = 'https://zukijourney.xyzbot.net';

// Funkce pro získání status kódu a prùmìrné latence
function getApiStatusAndLatency($url) {
    $status = get_headers($url, 1)[0];
    $time_start = microtime(true);
    $content = file_get_contents($url);
    $time_end = microtime(true);
    $latency = round(($time_end - $time_start) * 1000, 2); // Latence v milisekundách
    echo "Status API url $url: $status <br>";
    echo "Prùmìrná latence API: $latency ms";
}

// Získání a výpis statusu a prùmìrné latence API
getApiStatusAndLatency($url);

?>