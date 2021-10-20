<?php

    require('mpdf/mpdf.php');

    $fileName = "arquivo.pdf";
    $html     = "<h1>Oi</h1>
                 <p>Você pode montar toda estrutura utilizando HTML <3</p>";

    $mpdf = new mPDF('','A4');
    $mpdf->img_dpi = 96;
    $mpdf->debug = true;
    $mpdf->showImageErrors = true;
    $mpdf->WriteHTML(rtrim($html));
    $mpdf->Output($fileName, 'I');
