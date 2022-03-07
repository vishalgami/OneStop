<?php
    require('../FPDF/fpdf/fpdf17/fpdf.php');
    include("db_conx.php");
    
    $order_id = $_POST['order_id'];
    $query=mysqli_query($conx,"select * from orders where order_id = '".$order_id."'");
    $invoice=mysqli_fetch_array($query);
    
    //A4 width : 219mm
    //default margin : 10mm each side
    //writable horizontal : 219-(10*2)=189mm
    class PDF extends FPDF
    {
    	/* Page header */
    	function Header()
    	{
    		/* Logo */
    		$this->Image('SAMARTH LOGO.png',10,6,15);
    		$this->Ln(15);
    	}
    }
?>
<?php
    ob_end_clean(); //    the buffer and never prints or returns anything.
    ob_start(); // it starts buffering
    /* Instanciation of inherited class */
    $pdf = new PDF('P','mm','A4');
    $pdf->AddPage();
    //set font to arial, bold, 14pt
    $pdf->SetFont('Arial','B',14);
    //Cell(width , height , text , border , end line , [align] )
    $pdf->Cell(130	,5,'ABC',0,0);
    $pdf->Cell(59	,5,'E-INVOICE',0,1,'R');//end of line

    //set font to arial, regular, 12pt
    $pdf->SetFont('Arial','',12);

    $pdf->Cell(130	,5,'9, Harisiddh Shopping Centre,',0,0);
    $pdf->Cell(59	,5,'',0,1);//end of line

    $pdf->Cell(130	,5,'Near Isanpur Bus Stop, Isanpur,',0,0);
    $pdf->Cell(35	,5,'Date:',0,0,'R');
    // $o_date=$invoice['date'];
    // $n_date = date("d/m/Y", strtotime($o_date));
    date_default_timezone_set("Asia/Kolkata");

    $timestamp  = date('d/m/Y');  

    $pdf->Cell(21	,5,$timestamp,0,1);//end of line

    $pdf->Cell(130	,5,'Ahmedabad, Gujarat, India-380043',0,0);
    $pdf->Cell(35	,5,'Order Id:',0,0,'R');
    $pdf->Cell(21	,5,$order_id,0,1);//end of line

    $pdf->Cell(130	,5,'Phone: +917925393490',0,0);
    $pdf->Cell(35	,5,'Customer Id:',0,0,'R');
    $pdf->Cell(21	,5,$invoice['register_id'],0,1);//end of line

    //make a dummy empty cell as a vertical spacer
    $pdf->Cell(189	,10,'',0,1);//end of line


    $pdf->SetFont('Arial','B',12);

    //billing address
    $pdf->Cell(100	,5,'Billing Address:',0,1);//end of line

    $address_id  = $invoice['address_id'];

    $query2 = "select * from  `address` where `id`='".$address_id."';";

    $result2 = mysqli_query($conx,$query2);

    foreach($result2 as $row1) {
        $address_1=$row1['address_1'];                 
        $address_2=$row1['address_2'];
        $city=$row1['city'];                   
        $state=$row1['state'];
        $country=$row1['country'];
        $pincode=$row1['pincode'];
        $address_3=$city.",".$state.",".$country."-".$pincode;
        $ph_no="Phone:".$row1['mob_num'];
        $a_distance=$row1['distance'];
    }

    $pdf->SetFont('Arial','',12);
    //add dummy cell at beginning of each line for indentation
    $pdf->Cell(10	,5,'',0,0);
    $pdf->Cell(90	,5,$invoice['customer_name'],0,1);
    
    $pdf->Cell(10	,5,'',0,0);
    $pdf->Cell(90	,5,$address_1,0,1);
    
    $pdf->Cell(10	,5,'',0,0);
    $pdf->Cell(90	,5,$address_2,0,1);
    
    $pdf->Cell(10	,5,'',0,0);
    $pdf->Cell(90	,5,$address_3,0,1);
    
    $pdf->Cell(10	,5,'',0,0);
    $pdf->Cell(90	,5,$ph_no,0,1);
    
    //make a dummy empty cell as a vertical spacer
    $pdf->Cell(189	,10,'',0,1);//end of line
    
    //invoice contents
    $pdf->SetFont('Arial','B',12);
    
    $pdf->Cell(110	,5,'Product Description',1,0,'L');
    $pdf->Cell(20	,5,'Qty',1,0,'C');
    $pdf->Cell(25	,5,'Unit price',1,0,'C');
    $pdf->Cell(34	,5,'Amount',1,1,'C');//end of line
    
    $pdf->SetFont('Arial','',12);
    
    //Numbers are right-aligned so we give 'R' after new line parameter
    
    //items
    // $query=mysqli_query($conx,"select * from item where invoiceID = '".$invoice['invoiceID']."'");
    // $tax=0;
    // $amount=0;
    // while($item=mysqli_fetch_array($query)){
    $pr_quant= $invoice['product_quantity'];
    
    $pr_aquant = explode(",",$pr_quant);
    
    $count=count($pr_aquant)-1;
    
    $count_q=0;
    
    $pr= $invoice['product_id'];
    
    $pr_aid = explode(",",$pr);

    foreach($pr_aid as $pr_id){
        $query3 = "select * from  `products` where `product_id`='".$pr_id."';";
        $result3 = mysqli_query($conx,$query3);
        foreach($result3 as $row2) {     
            $pdf->Cell(110	,5,$row2['product_name'],1,0);
        	$count=count($pr_aquant)-1;
        	if($count_q <= $count){
        	    $product_quantity=$pr_aquant[$count_q];
        
        	    $product_price=$row2['product_price'];
        
        	    $total=0;
        
        	    $total = $total + ($product_quantity * $product_price);
        
        		$pdf->Cell(20	,5,$product_quantity,1,0,'C');
        
        		$pdf->Cell(25	,5,number_format($product_price,2),1,0,'C');
        		$pdf->Cell(34	,5,number_format($total,2),1,1,'R');//end of line
        		
        		$count_q=$count_q+1;
        	
        	// $tax+=$item['tax'];
        	// $amount+=$item['amount'];
        	}
        }
    }
    $shipping=0;
    
    $total = $invoice['product_init_price'];
    
    $distance = explode(' ',$a_distance);

    if($distance[0] >= '3'){
        $shipping = $total*0.03;
        if($shipping<'49.00'){
            $shipping=49.00;
        }
    }
    else {
        $shipping=0;
    }
    $subtotal = $invoice['product_init_price'];
    $shipping_charges=$shipping;
    
    //$shipping_charges = $order[''];
    
    $total=$subtotal+$shipping_charges;
    
    if(!empty($invoice['promo_discount'])){
    
        $promo= $invoice['promo_discount'];
    
        //$promo=$order[''];
    
        $grand_total=$total - $promo;
    }
    else{
        $grand_total=$total;
    }
    //summary
    $pdf->Cell(110	,5,'',0,0);
    $pdf->Cell(45	,5,'Subtotal',1,0,'L');
    $pdf->Cell(34	,5,number_format($subtotal,2),1,1,'R');//end of line
    $pdf->Cell(110	,5,'',0,0);
    $pdf->Cell(45	,5,'Shipping charges',1,0,'L');
    $pdf->Cell(34	,5,'+'.number_format($shipping_charges,2),1,1,'R');//end of line
    
    if(!empty($invoice['promo_discount'])){   
        $pdf->Cell(110	,5,'',0,0);
        $pdf->Cell(45	,5,'Promo Discount',1,0,'L');
        $pdf->Cell(34	,5,'-'.number_format($promo,2),1,1,'R');//end of line
    }
    
    $pdf->Cell(110	,5,'',0,0);
    $pdf->Cell(45	,5,'Total Amount',1,0,'L');
    
    $pdf->Cell(34	,5,number_format($grand_total,2),1,1,'R');//end of line
    $pdf->Output();
    ob_end_flush(); // It's printed here, because ob_end_flush "prints" what's in
              // the buffer, rather than returning it
              //     (unlike the ob_get_* functions)

?>
