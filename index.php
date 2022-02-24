<h1>POC - Gravar e ler metadados em arquivos PDFs</h1>

<p>Descrevo 2 casos que estou com problemas e na sequencia tem algumas POCs e scripts.</p>

<table border="1">
<tr>
    <td width="50%" valign="top">
        <h3>Caso 1</h3>
        <ul>
            <li><img src="sucesso.png" /> Consigo criar os metadados padrões (creator, author, title, subject, keywords) e também com itens adicionais, usando XMP</li>
            <li><img src="erro.png" /> Não consigo ler (depois de gerado o PDF)</li>
        </ul>

        <small>Exif Viewer - arquivo gerado pela POC com XMP</small>
        <img src="caso1.png" width="400" border="1" />
    </td>
    <td width="50%" valign="top">
        <h3>Caso 2</h3>
        <ul>
            <li><img src="erro.png" /> Não consigo criar o PDF com metadados customizados (que não são via XMP)</li>
            <li><img src="sucesso.png" /> Consigo ler esses metadados</li>
        </ul>

        <small>Campos personalizados - visto via Adobe Reader</small>
        <img src="caso2-b.png" width="400" border="1" />

        <br />
        <br />

        <small>Exif Viewer - arquivo com itens personalizados</small>
        <img src="caso2.png" width="400" border="1" />
    </td>
</tr>
</table>




<hr />

<p>Cria PDF com metadados padrões (Author, Title...) e personalizados (additional XMP)</p>
<ul>
    <li>POC - <a href="pdf_create_tcpdf.php">pdf_create_tcpdf</a></li>
</ul>

<hr />

Faz a "leitura" dos PDFs para encontrar os metadata e outras informações

<ul>
    <li>POC - <a href="pdf_read_pdfparser.php">pdf_read_pdfparser</a></li>
    <li>POC - <a href="pdf_read_phpexiftool.php">pdf_read_phpexiftool</a></li>
</ul>

Ferramentas online
<p>
    - <a href="https://exifviewer.herokuapp.com/">Exif Viewer</a><br />
    - <a href="https://www.metadata2go.com/">Metadata2GO</a>
</p>

<hr />

<p>Libs conhecidas e avaliei</p>
<ul>
    <li><a href="https://github.com/tecnickcom/TCPDF">TCPDF</a></li>
    <li><a href="https://github.com/Setasign/FPDI">FPDI - Free PDF Document Importer</a></li>
    <li><a href="http://www.fpdf.org/">FPDF</a></li>
    <li><a href="https://github.com/smalot/pdfparser">PdfParser</a></li>
    <li><a href="https://github.com/alchemy-fr/PHPExiftool">PHP-Exiftool</a></li>
</ul>
