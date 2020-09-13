<?php
define("SECRET_KEY", "Re3Eqz4ndGBPR5gnLAwBL8HNuYv4f2ggXfbT3J"); // Idram Payment System provide it
define("EDP_REC_ACCOUNT", "110000439"); // Idram Payment System provide it
if(isset($_REQUEST['EDP_PRECHECK']) && isset($_REQUEST['EDP_BILL_NO']) &&
    isset($_REQUEST['EDP_REC_ACCOUNT']) && isset($_REQUEST['EDP_AMOUNT']))
{
    if($_REQUEST['EDP_PRECHECK'] == "YES")
    {
        if($_REQUEST['EDP_REC_ACCOUNT'] == EDP_REC_ACCOUNT)
        {
            // check if $bill_no exists in your system orders if exists then echo OK otherwise nothing
}
    }
}

$bill_no = $_REQUEST['EDP_BILL_NO'];
// check if $bill_no exists in your system orders if exists then echo OK
echo("OK");

if(isset($_REQUEST['EDP_PAYER_ACCOUNT']) && isset($_REQUEST['EDP_BILL_NO']) &&
    isset($_REQUEST['EDP_REC_ACCOUNT']) && isset($_REQUEST['EDP_AMOUNT'])
    && isset($_REQUEST['EDP_TRANS_ID']) && isset($_REQUEST['EDP_CHECKSUM']))
{
    $txtToHash =

        EDP_REC_ACCOUNT . ":" .
        $_REQUEST['EDP_AMOUNT'] . ":" .
        SECRET_KEY . ":" .
        $_REQUEST['EDP_BILL_NO'] . ":" .
        $_REQUEST['EDP_PAYER_ACCOUNT'] . ":" .
        $_REQUEST['EDP_TRANS_ID'] . ":" .
        $_REQUEST['EDP_TRANS_DATE'];

    if(strtoupper($_REQUEST['EDP_CHECKSUM']) != strtoupper(md5($txtToHash)))
    {
        // code to handling payment fail
    }
    else
    {
        // code to handling payment success
        echo("OK");
        }
    }
echo("OK");
