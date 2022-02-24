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

// Cria tag XML para o XMP
$extra_xmp = <<<EXTRAXMP
<rdf:Description xmlns:UnimestreAcervoDigital="https://unimestre.com/">
    <UnimestreAcervoDigital:ItemPersonalizado1>Valor do item 1</UnimestreAcervoDigital:ItemPersonalizado1>
    <UnimestreAcervoDigital:ItemPersonalizado2>Valor do item 2</UnimestreAcervoDigital:ItemPersonalizado2>
</rdf:Description>
EXTRAXMP;

// Seta informações extra
$pdf->setExtraXMPRDF($extra_xmp);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// Set some content to print
$html = <<<EOD
<h1>Example of <a href="http://www.tcpdf.org" style="text-decoration:none;background-color:#CC0000;color:black;">&nbsp;<span style="color:black;">TC</span><span style="color:white;">PDF</span>&nbsp;</a> document in <span style="background-color:#99ccff;color:black;"> PDF/A-1b </span> mode.</h1>
<i>This document conforms to the standard <b>PDF/A-1b (ISO 19005-1:2005)</b>.</i>
<p>Please check the source code documentation and other examples for further information (<a href="http://www.tcpdf.org">http://www.tcpdf.org</a>).</p>
<p style="color:#CC0000;">TO IMPROVE AND EXPAND TCPDF I NEED YOUR SUPPORT, PLEASE <a href="http://sourceforge.net/donate/index.php?group_id=128076">MAKE A DONATION!</a></p>
EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_065.pdf', 'I');

