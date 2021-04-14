<?php
header('Content-Type: text/xml');
print '<?xml version="1.0" encoding="UTF-8"?>';
?>
<page version="2.0">
<div protocol="ussd">
<input navigationId="form" title="Enter Destination" name="dest"/>
</div>
<navigation id="form" protocol="ussd">
<link pageId=amount.php></link>
</navigation>
<navigation>
<link accesskey="0" pageId="a01.xml" type="back">Back</link>
</navigation>
</page>
<!-- <input> specifies input fields for the values;
the parameter /**navigationId**/ specifies the identifier of the navigation block for the given field or
for the form of several fields;
parameter /**title**/ is a caption next to the field;
parameter /**name**/ is the name of the variable that conveys the value.After entering the value
/**Destination**/ using /**USSD protocol**/, you are transferred to the page amount.php. -->