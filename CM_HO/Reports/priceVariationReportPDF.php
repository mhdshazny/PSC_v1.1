<?php
require_once __DIR__ . '\..\..\vendor\autoload.php';

$html.='
<html>
<head>
<style>
body {font-family: sans-serif;
	font-size: 10pt;
}
p {	margin: 0pt; }
table.items {
	border: 0.1mm solid #000000;
}
td { vertical-align: top; }
.items td {
	border-left: 0.1mm solid #000000;
	border-right: 0.1mm solid #000000;
}
table thead th{ background-color: #EEEEEE;
	text-align: center;
	border: 0.1mm solid #000000;
	font-variant: small-caps;
}
.items td.blanktotal {
	background-color: #EEEEEE;
	border: 0.1mm solid #000000;
	background-color: #FFFFFF;
	border: 0mm none #000000;
	border-top: 0.1mm solid #000000;
	border-right: 0.1mm solid #000000;
}
.items td.totals {
	text-align: right;
	border: 0.1mm solid #000000;
}
.items td.cost {
	text-align: "." center;
}
</style>
</head>
<body>
<!--mpdf
<htmlpageheader name="myheader">
<div style="text-align:center;font-size:20pt;font-weight:bold">Paddy Storage Corporation - Reports</div>   
<div style="text-align:center;font-size:17pt;font-weight:bold">Price variation Report</div>   
<div style="text-align:center;font-size:16pt;font-weight:bold">As of '.$_POST['fromDate'].' to '.$_POST['toDate'].'</div>
</htmlpageheader>
<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #000000; font-size: 9pt; text-align: center; padding-top: 3mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>
<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />
mpdf-->

<table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; " cellpadding="8">
<thead>
<tr>
<th>Purchase ID</th>
<th>farmerID</th>
<th>paddyType</th>
<th>Qty</th>
<th>unitPrice</th>
<th>total</th>
<th>stockID</th>
<th>DateOn</th>
<th>Description</th>

</tr>
</thead>
<tbody>';

include("../../Common/config.php");
$purchaseDateFrom=$_POST['fromDate'];
$purchaseDateTo=$_POST['toDate'];
$loadTable = "SELECT * FROM `tbl_purchaseorder` WHERE `DateOn` BETWEEN '$purchaseDateFrom' AND '$purchaseDateTo' ";
$result = $con->query($loadTable);

foreach($result as $row){
    $html.='
<!-- ITEMS HERE -->
<tr>
                                        <td>'. $row['poID'] .'</td>
                                        <td>'. $row['farmerID'] .'</td>
                                        <td>'. $row['paddyType'] .'</td>
                                        <td>'. $row['Qty'] .'</td>
                                        <td>'. $row['unitPrice'] .'</td>
                                        <td>'. $row['total'] .'</td>
                                        <td>'. $row['stockID'] .'</td>
                                        <td>'. $row['DateOn'] .'</td>
                                        <td>'. $row['Description'] .'</td>
                                     
                         
</tr>';

}
$html.='</tbody>
</table>
<div style="text-align: center; font-style: italic;">Pricing terms: Price variation within '.$_POST['fromDate'].' to '.$_POST['toDate'].' days</div>
</body>
</html>
';

$mpdf = new \Mpdf\Mpdf([
    'margin_left' => 20,
    'margin_right' => 15,
    'margin_top' => 48,
    'margin_bottom' => 25,
    'margin_header' => 10,
    'margin_footer' => 10,
    'format' => 'A4-L'
]);

$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("Acme Trading Co. - Invoice");
$mpdf->SetAuthor("Acme Trading Co.");
$mpdf->showWatermarkText = true;
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->watermarkTextAlpha = 0.1;
$mpdf->SetDisplayMode('fullpage');

$mpdf->WriteHTML($html);

$mpdf->Output('priceVariationReport.pdf','D');