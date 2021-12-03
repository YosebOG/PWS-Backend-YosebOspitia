<?php 
    ini_set("session.auto_start", 0);
    require("../fpdf/fpdf.php");
    require("config_con2.php");

    date_default_timezone_set("America/Bogota");

    $pdf = new FPDF('L','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Times','B',16);
    $pdf->Image('../img/pc_electronics_logo1.png',248,5,40);
    // $pdf->Ln(20);
    $pdf->Cell(100,10,utf8_decode('REPORTE REGISTROS PDF'));
    $pdf->Ln(10);
    $pdf->Cell(90,10,'Fecha: '.date('d/m/Y').'',0);
    $pdf->Ln(10);
    $pdf->Cell(90,10,'Hora: '.date('H:i:s').'',0);
    $pdf->Ln(15);
    $pdf->SetFont('Times','B',10);
    $pdf->Cell(20,20,'CODIGO');
    $pdf->Cell(63,20,'NOMBRE');
    $pdf->Cell(35,20,'TIPO');
    $pdf->Cell(28,20,'CANTIDAD');
    $pdf->Cell(35,20,'CLASE');
    $pdf->Cell(22,20,'MARCA');
    $pdf->Cell(25,20,'SERIAL');
    $pdf->Cell(30,20,'MODELO');
    $pdf->Cell(30,20,'PRECIO');
    $pdf->Ln(15);

    $sql_select = "SELECT * FROM tabla30";
    $result = mysqli_query($conn,$sql_select);

    if (mysqli_num_rows($result) > 0) {
        while ($reg = mysqli_fetch_assoc($result)) {
            $pdf->SetFont('Times','B',9);
            $pdf->Cell(20,20, utf8_decode($reg['pCod']),0);
            $pdf->SetFont('Times','',9);
            $pdf->Cell(63,20, utf8_decode($reg['pNom']),0);
            $pdf->Cell(35,20, utf8_decode($reg['pTip']),0);
            $pdf->Cell(28,20, '     '.($reg['pCant']).'     unid',0);
            $pdf->Cell(35,20, utf8_decode($reg['pClas']),0);
            $pdf->Cell(22,20, utf8_decode($reg['pMarc']),0);
            $pdf->Cell(25,20, utf8_decode($reg['pSer']),0);
            $pdf->Cell(30,20, utf8_decode($reg['pMod']),0);
            $pdf->Cell(30,20, ($reg['pPrecio']),0);
            $pdf->Ln(13);
        }
    }

    ob_end_clean();
    $pdf->Output();
    mysqli_close();
?>