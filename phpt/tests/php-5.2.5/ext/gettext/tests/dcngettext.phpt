--TEST--
dcngettext() tests
--SKIPIF--
<?php 
if (!extension_loaded("gettext")) die("skip"); 
if (!function_exists("dcngettext")) die("skip dcngettext() doesn't exist");
?>
--FILE--
<?php

var_dump(dcngettext(1,1,1,1));
var_dump(dcngettext(1,1,1,1,1));
var_dump(dcngettext("test","test","test",1,1));
var_dump(dcngettext("test","test","test",0,0));
var_dump(dcngettext("test","test","test",-1,-1));
var_dump(dcngettext("","","",1,1));
var_dump(dcngettext("","","",0,0));

echo "Done\n";
?>
--EXPECTF--	
Warning: Wrong parameter count for dcngettext() in %s on line %d
bool(false)
string(1) "1"
string(4) "test"
string(4) "test"
string(4) "test"
string(0) ""
string(0) ""
Done
