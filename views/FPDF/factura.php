<?php

require('fpdf/fpdf.php');

class PDF extends FPDF
{

   // Cabecera de página
   function Header()
   {
      include '../conexion.php'; //llamamos a la conexion BD
      $con=conectar();

      $id_venta = $_GET['id_venta'];
      $consulta_info_ventas = $con->query(" SELECT ventas.id_venta, ventas.idCliente, ventas.cantidad,  ventas.fecha,  ventas.hora, ventas.total, clientes.nombre, clientes.apellidos, clientes.direccion, clientes.telefono, productos.concepto, productos.descripcion, productos.precioVenta
                                             FROM ventas 
                                             INNER JOIN clientes ON ventas.idCliente = clientes.id_cliente
                                             INNER JOIN productos ON ventas.idProducto = productos.id_producto
                                             WHERE ventas.id_venta=$id_venta");
      $dato_info = $consulta_info_ventas->fetch_object();

      /* Folio  */
      $this->Cell(10);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(96, 10, utf8_decode("Folio : MS0" . $id_venta ), 0, 0, '', 0);
      $this->Ln(5);

      $this->Image('logo.png', 185, 5, 20); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
      $this->SetFont('Arial', 'B', 19); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(45); // Movernos a la derecha
      $this->SetTextColor(0, 0, 0); //color
      //creamos una celda o fila
      $this->Cell(110, 15, utf8_decode('FACTURA'), 1, 1, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
      $this->Ln(3); // Salto de línea
      
      //color
      $this->SetTextColor(0, 95, 189);
      $this->Cell(50); // mover a la derecha
      $this->SetFont('Arial', 'B', 15);
      $this->Cell(100, 10, utf8_decode("MATERIALES SANTILLAN "), 0, 0, 'C', 0);
      $this->Ln(7);

      /* Información */
      $this->Cell(65);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode("San Vicente, Municipio de Singuilucan"), 0, 0, '', 0);
      $this->Ln(5);

      /* Numero */
      $this->Cell(85);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode("775-103-16-08"), 0, 0, '', 0);
      $this->Ln(10);

      $this->SetTextColor( 0,0,0); //color
      /* Fecha */
      $this->Cell(10);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(96, 10, utf8_decode("Fecha : ". $dato_info->fecha), 0, 0, '', 0);

      /* Hora */
      $this->Cell(-60);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(96, 10, utf8_decode("Hora : ". $dato_info->hora), 0, 0, '', 0);
      $this->Ln(5);
      
      $this->SetTextColor(103); //color

      /* Nombre del Cliente */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(96, 10, utf8_decode("Nombre : ". $dato_info->nombre), 0, 0, '', 0);
      $this->Ln(5);

      /* Apellidos */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(96, 10, utf8_decode("Apellidos : ". $dato_info->apellidos), 0, 0, '', 0);
      $this->Ln(5);

      /* Direccion */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(59, 10, utf8_decode("Dirección : ". $dato_info->direccion), 0, 0, '', 0);
      $this->Ln(5);

      /* TELEFONO */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode("Telefono : ". $dato_info->telefono), 0, 0, '', 0);
      $this->Ln(15);

      /* CAMPOS DE LA TABLA */
      //color
      $this->SetFillColor(0, 95, 189); //colorFondo
      $this->SetTextColor(255, 255, 255); //colorTexto
      $this->SetDrawColor(163, 163, 163); //colorBorde
      $this->SetFont('Arial', 'B', 11);
      $this->Cell(30, 10, utf8_decode('CANTIDAD'), 1, 0, 'C', 1);
      $this->Cell(35, 10, utf8_decode('CONCEPTO'), 1, 0, 'C', 1);
      $this->Cell(60, 10, utf8_decode('DESCRIPCIÓN'), 1, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('PRECIO'), 1, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('TOTAL'), 1, 1, 'C', 1);

      $this->SetTextColor(103); //colorTexto
      $this->SetFont('Arial', '', 12);
      $this->SetDrawColor(163, 163, 163); //colorBord

      //while ( $dato_info = $consulta_info_ventas->fetch_object()) {      
      //}
         /* TABLA */
         $this->Cell(30, 10, utf8_decode($dato_info->cantidad), 1, 0, 'C', 0);
         $this->Cell(35, 10, utf8_decode($dato_info->concepto), 1, 0, 'C', 0);
         $this->Cell(60, 10, utf8_decode($dato_info->descripcion), 1, 0, 'C', 0);
         $this->Cell(30, 10, utf8_decode($dato_info->precioVenta), 1, 0, 'C', 0);
         $this->Cell(30, 10, utf8_decode($dato_info->total), 1, 1, 'C', 0); 
      
   }

   // Pie de página
   function Footer()
   {
      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C'); //pie de pagina(numero de pagina)

      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, cursiva, tamañoTexto
      $hoy = date('d/m/Y');
      $this->Cell(355, 10, utf8_decode($hoy), 0, 0, 'C'); // pie de pagina(fecha de pagina)
   }
}

$pdf = new PDF();
$pdf->AddPage(); /* aqui entran dos para parametros (horientazion,tamaño)V->portrait H->landscape tamaño (A3.A4.A5.letter.legal) */
$pdf->AliasNbPages(); //muestra la pagina / y total de paginas

$i = 0;
$pdf->SetFont('Arial', '', 12);
$pdf->SetDrawColor(163, 163, 163); //colorBorde



$pdf->Output('Prueba.pdf', 'I');//nombreDescarga, Visor(I->visualizar - D->descargar)
