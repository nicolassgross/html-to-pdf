<?php
require 'vendor/autoload.php';

$files = [
    'pdfs/Unimestre_original.pdf',
    'pdfs/Unimestre_assinado.pdf',
    'pdfs/Teste-Cliente-Metadata-17.pdf',
    'pdfs/Teste-Cliente-Metadata-imagem.pdf',
    'pdfs/Teste-Cliente-PDFA.pdf',
    'pdfs/Teste-Metadata-criado-no-word.pdf',
    'pdfs/Teste-Metadata-Dados-escondidos-ou-customizados.pdf',
    'pdfs/Teste-Metadata-impresso-em-pdf.pdf',
    'pdfs/Teste-Metadata-impresso-em-pdf-Robson.pdf',

    'pdfs/outros/Document1_foxitreader.pdf',
    'pdfs/outros/Document1_pdfcreator.pdf',
    'pdfs/outros/Document1_pdfcreator_nocompressed.pdf',
    'pdfs/outros/Document1_pdfxchange.pdf',
    'pdfs/outros/Document2_pdfcreator_nocompressed.pdf',
    'pdfs/outros/Document3_pdfcreator_nocompressed.pdf',
    'pdfs/outros/example_metadata.pdf',
];

$parser = new \Smalot\PdfParser\Parser();

foreach ($files as $filepath) {
    echo '<p>'.$filepath.'</p>';
    $document = $parser->parseFile($filepath);
    $details = $document->getDetails();

    echo '<pre>';
    print_r($details);
    echo '</pre>';
    echo '<hr />';
}


