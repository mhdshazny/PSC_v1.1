<?php




require_once __DIR__ . '\..\vendor\autoload.php';

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
<div style="text-align:center;font-size:20pt;font-weight:bold">Paddy Storage Corporation - Invoice</div>
<div style="text-align:center;font-size:17pt;font-weight:bold">Sales Invoice</div>   
<div style="text-align:center;font-size:16pt;font-weight:bold">Sale ID: '.$_POST['saleID'].'    Invoice ID: '.$_POST['ioID'].'</div>
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
                                <th>Date</th>
                                <th>Sale ID</th>
                                <th>IoID</th>
                                <th>Amount</th>

</tr>
</thead>
<tbody>';

include("../Common/config.php");


if (isset($_POST['addBill'])) {
    $InV_ID=$_POST['ioID'];
    $SaleID=$_POST['saleID'];
    $Date= $_POST['Date'];
    $ioID= $_POST['ioID'];
    $Total = $_POST['netTotal'];
    $isActive="1";
//$purchaseDateTo=$_POST['toDate'];
    $InTable = "INSERT INTO `tbl_paymentreceipts`(`saleID`,`ioID`,`amount`,`DateOn`,`isActive`) 
                VALUES ('$SaleID','$InV_ID',' $Total','$Date','$isActive')";
    $con->query($InTable);

    $loadTable = "SELECT * FROM `tbl_paymentreceipts` WHERE `saleID`='$SaleID' ";
    $result = $con->query($loadTable);

    foreach ($result as $row) {
        $html .= '
<!-- ITEMS HERE -->
<tr>
                                        <td>' . $row['DateOn'] . '</td>
                                        <td>' . $row['saleID'] . '</td>
                                        <td>' . $row['ioID'] . '</td>
                                        <td>' . $row['amount'] . '</td>

                                     
                         
</tr>';

    }
}
$html.='</tbody>
</table>
<div style="text-align: center; font-style: italic;">Sales terms: Sales Completed Successfully</div>
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

$mpdf->Output('FO_HO_Invoice.pdf','D');