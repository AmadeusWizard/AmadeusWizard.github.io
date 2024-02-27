<?php
// URL adresa API
$url = 'https://zukijourney.xyzbot.net';

// Získání dat z API
$response = file_get_contents($url);

// Dekódování JSON odpovědi
$data = json_decode($response, true);

// Vypsání stavu
$status = $data['status'];
echo 'Stav získaný z API: ' . $status;
?>
