<?php
$dest = $_REQUEST['dest'];
header('Content-Type: text/xml');
print '<?xml version="1.0" encoding="UTF-8"?>';
?>
<page version="2.0">
<div protocol="ussd">
<input navigationId="form" title="Enter Destination" name="dest" value="<?php echo $dest ?>" type="hidden"/>
<br/>
<input navigationId="form" title="Enter Amount" name="amount" type="Number"/>
<link pageId="transaction.php"></link>
<navigation>
<link accesskey="0" pageId="send-money.php" type="back">Back</link>
<link accesskey="1" pageId="a01.xml">Main menu</link>
</navigation>
</page>
<!-- To avoid losing the value Destination, a hidden field type=”hidden” is used; you can use a
session mechanism or both. After entering the value “Amount” you are transferred to the page
transaction.php.-->