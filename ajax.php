<?php
require __DIR__ . '/vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;

$data = Yaml::parseFile('config.yaml');
echo json_encode($data['data_landing']);
?>