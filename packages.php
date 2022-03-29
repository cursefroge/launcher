<?php
$keys = isset($_GET['key']) ? array_map('trim', explode(',', strtolower($_GET['key']))) : array();
$packages = array();

$packages[] = array(
    'name' => 'endstoneclient',
    'title' => 'Endstone Client',
    'version' => '2022-03-29-09-47-51',
    'priority' => 0,
    'location' => 'endstoneclient.json',
);

$packages[] = array(
    'name' => 'purpurclient',
    'title' => 'PurpurClient',
    'version' => '2022-03-29-09-48-43',
    'priority' => 0,
    'location' => 'purpurclient.json',
);

$out = array('minimumVersion' => 1, 'packages' => $packages);
header('Content-Type: text/plain; charset=utf-8');
echo json_encode($out);
