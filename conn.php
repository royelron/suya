<?php
header('Content-Type: text/html');

$file = isset($_GET['file']) ? htmlspecialchars($_GET['file']) : '';

if (empty($file)) {
    echo 'Goya Marte Aslam!';
    exit;
}

$filePath = __DIR__ . '/' . $file . '.html';

if (file_exists($filePath)) {

    echo file_get_contents($filePath);
} else {

    echo 'Goya Marte Aslam!';
}
?>
