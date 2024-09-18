<?php
require 'vendor/autoload.php'; // Certifique-se de que o caminho para autoload.php está correto

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

// Cria o QR code
$qrCode = new QrCode('https://www.exemplo.com/conteudo-permanente');
$qrCode->setSize(300);
$qrCode->setMargin(10);

// Salva o QR code como uma imagem PNG
$writer = new PngWriter();
$writer->writeFile($qrCode, 'qr-code-permanente.png');

echo 'QR code gerado com sucesso!';
?>
