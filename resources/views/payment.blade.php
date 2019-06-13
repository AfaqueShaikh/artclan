@php
    include('resources/views/encdec_paytm.php');
@endphp

<?php
//require_once(base_path('encdec_paytm.php'));
define("merchantMid", "SMmlri50009847667419");//staging
//define("merchantMid", "SMmlri50009847667419");//staging
//define("merchantMid", "");//production
//define("merchantKey", "7lrDdcZEJUIN2_5v");//staging
define("merchantKey", "7lrDdcZEJUlN2_5v");//staging
//define("merchantKey", "");//production
define("channelId", "WEB");
define("website", "DEFAULT");//staging
//define("website", "DEFAULT");//production
define("industryTypeId", "Retail");
define("callbackUrl", url('/come-back'));
$paytmParams = array();
$paytmParams["MID"] = merchantMid;
$paytmParams["ORDER_ID"] = uniqid();
$paytmParams["CUST_ID"] = Auth::user()->id;
$paytmParams["MOBILE_NO"] = Auth::user()->mobile;
$paytmParams["EMAIL"] = Auth::user()->email;
$paytmParams["CHANNEL_ID"] = channelId;
$paytmParams["TXN_AMOUNT"] = '99';
$paytmParams["WEBSITE"] = website;
$paytmParams["INDUSTRY_TYPE_ID"] = industryTypeId;
$paytmParams["CALLBACK_URL"] = callbackUrl;
$paytmChecksum = getChecksumFromArray($paytmParams, merchantKey);
$transactionURL = "https://securegw-stage.paytm.in/theia/processTransaction";//staging
//$transactionURL = "https://securegw.paytm.in/theia/processTransaction"; // for production
?>
<html>
<head>
    <title>Merchant Checkout Page</title>
</head>
<body>
<center><h1>Please do not refresh this page...</h1></center>
<form method='post' action='<?php echo $transactionURL; ?>' name='f1'>
    <?php
    foreach($paytmParams as $name => $value) {
        echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
    }
    ?>
    <input type="hidden" name="CHECKSUMHASH" value="<?php echo $paytmChecksum ?>">
</form>
<script type="text/javascript">
    document.f1.submit();
</script>
</body>
</html>