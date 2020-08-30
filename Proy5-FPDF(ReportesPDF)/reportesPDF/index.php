<?php
require('fpdf/fpdf.php');

class PDF extends FPDF {
    // Cabecera de página
    function Header(){
        // Logo
        //$this->Image('descarga.jpg',10,8,33);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(60);
        // Título
        $this->Cell(70,10,'Reporte de productos',0,0,'C'); // ('Width{20}', 'Height{40}', 'Texto{Hola!}', 'Borde{2}', 'Posición{1}', alinear{C}, ... )
        // Salto de línea
        $this->Ln(20);

        $this->cell(70, 10, 'Nombre', 1, 0, 'c', 0);
        $this->cell(40, 10, 'Precio', 1, 0, 'c', 0);
        $this->cell(40, 10, 'Stock', 1, 0, 'c', 0); 
        $this->cell(40, 10, utf8_decode('Tamaño'), 1, 1, 'c', 0); //Hacer salto de Linea
    }

    // Pie de página
    function Footer(){
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',10);
        // Número de página
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    }
}

// ----------------------- Conexión a la base de datos y selección de todo los datos
require 'conexionDB.php';
$consulta = "SELECT * FROM productos";
$resultado = $mysqli->query($consulta);


// ----------------------- CREAMOS EL ARCHIVO PDF
$pdf = new PDF();
$pdf-> AliasNbPages();  //Insertar Header y Footer en toda las Páginas
$pdf->AddPage('P'); // ('P{vertical} - L{horizontal}','Tamaño{A3,A4,A5}','Rotación{Múltiplo 90'})
$pdf->SetFont('Arial','',13);

// ----------------------- Iteramos con los datos y mostramos en el PDF (TABLA)
while($row = $resultado->fetch_assoc()){
    $pdf->cell(70, 10, utf8_decode($row['nombre_producto']), 1, 0, 'c', 0);
    $pdf->cell(40, 10, utf8_decode($row['precio_producto']), 1, 0, 'c', 0);
    $pdf->cell(40, 10, utf8_decode($row['stock_producto']), 1, 0, 'c', 0); 
    $pdf->cell(40, 10, utf8_decode($row['tamano_producto']), 1, 1, 'c', 0); //Hacer salto de Linea
}

$pdf->Output();

?>