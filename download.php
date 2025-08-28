<?php
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if (!$id) {
	http_response_code(404);
	echo "File not found.";
	exit;
}

$pattern = __DIR__ . '/download/ID' . $id . '_*.wad';
$files = glob($pattern);

if (!$files || count($files) === 0) {
	http_response_code(404);
	echo "File not found.";
	exit;
}

$filepath = $files[0];

$downloadName = preg_replace('/^ID\d+_/', '', basename($filepath));
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . $downloadName . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($filepath));

readfile($filepath);
exit;