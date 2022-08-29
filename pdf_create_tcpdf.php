<?php
require 'vendor/autoload.php';

// Create new PDF document
$pdf = new \TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false, true);

// Set document information
$pdf->setCreator('setCreator:' .PDF_CREATOR);
$pdf->setAuthor('setAuthor: Nicola Asuni');
$pdf->setTitle('setTitle: TCPDF Example 065');
$pdf->setSubject('setSubject: TCPDF Tutorial');
$pdf->setKeywords('setKeywords: TCPDF, PDF, example, test, guide');

$pdf->AddPage();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $html = $_POST['html'];
}

$pdf->writeHTML($html);

$pdf->Output('example_065.pdf', 'I');

