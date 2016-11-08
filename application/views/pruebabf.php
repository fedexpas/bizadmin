<?php
function pc_permute($items, $perms = array()) {
    if (empty($items)) { 
        echo join('', $perms) . "<br/>";
    } else {
        for ($i = count($items) - 1; $i >= 0; --$i) {
             $newitems = $items;
             print_r($newitems);
             $newperms = $perms;
             list($foo) = array_splice($newitems, $i, 1);
             print_r($foo);print_r($newitems);
             array_unshift($newperms, $foo);
             print_r($newperms);
             if ($i == 0) {
                //exit;
             }
             pc_permute($newitems, $newperms);
         }
    }
}

$arr = array('09', '08', '1986');

pc_permute($arr);
?>

<!-- 
09 08 1986
09 1986 08
08 09 1986
08 1986 09 
1986 08 09 
1986 09 08
-->
