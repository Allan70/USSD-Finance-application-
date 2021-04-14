<?php
require_once 'common.php';
$abonent = $_REQUEST['abonent'];
$amount = $_REQUEST['amount'];
$dest = $_REQUEST['dest'];
$message = sendMoney($abandonet, $amount, $dest);
header('Content-Type: text/xml');
print '<?xml version="1.0" encoding="UTF-8"?>';
?>
<page version="2.0">
<title protocol="wap java">Send money</title>
<div><?php echo $message ?></div>
<navigation>
<link accesskey="0" pageId="send-money.php" type="back">Back</link>
<link accesskey="1" pageId="a01.xml"> Main Menu</link>

</navigation>
</page>
