<?php
function conf_to_array($ini_file) {
    $phpini = file($ini_file);
    $configuration = array();
    foreach($phpini as $line) {
        if($line[0] == ";") { continue; }
        if($line[0] == "[") { continue; }
        if(trim($line) == "") { continue; }
        $php_var = explode("=", $line);
        $configuration[trim($php_var[0])] = trim($php_var[1]);
    }
    return $configuration;
}

$php_ini_file1 = "php1.ini";
$config1 = conf_to_array($php_ini_file1);

$php_ini_file2 = "php2.ini";
$config2 = conf_to_array($php_ini_file2);

foreach($config1 as $var => $val ) {
    if(isset($config2[$var])) {
        if($val == $config2[$var]) { continue; }
        echo $var . " = " . $config1[$var] . " (1) | " . $config2[$var] . " (2)\n";
    } else {
        echo $var . " Doesn't exist in $config2\n";
    }
}

?>