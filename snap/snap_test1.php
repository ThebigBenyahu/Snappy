<?php

require __DIR__ . '/vendor/autoload.php';

use Knp\Snappy\Pdf;

$binaryPath = 'C:/Program Files/wkhtmltopdf/bin/wkhtmltopdf.exe';

$snappy = new Pdf($binaryPath);


$html = '<html>
<head><title>Snappy Test</title>
<style>
body { font-family: sans-serif; text-align: center; padding: 50px; } 
h1 { color: #007bff; }</style>
</head>
<body>
<h1>Welcome niggas!</h1>
<p>Generated successfully with wkhtmltopdf.</p></body>
</html>';

header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="snappy_test.pdf"');

echo $snappy->getOutputFromHtml($html);