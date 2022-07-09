<?php

//function normalizeUrl($url) {
//
//    if(strpos($url, 'https://') === 0) {
//        //var_dump(strpos($url, 'https://') . PHP_EOL);
//        return $url;
//    } elseif (strpos($url, 'http://') === 0) {
//        //var_dump(strpos($url, 'http://') . PHP_EOL);
//        return 'https://' . substr($url, 7);
//    } else {
//        //var_dump(strpos($url, 'http://') . PHP_EOL);
//        return "https://{$url}";
//    }
//}
function normalizeUrl($url)
{
    if (strpos($url, 'http://') === 0) {
        $domain = substr($url, 7);
    } elseif (strpos($url, 'https://') === 0) {
        $domain = substr($url, 8);
    } else {
        $domain = $url;
    }

    return "https://{$domain}";
}

print_r(normalizeUrl('google.com') . PHP_EOL);          // 'https://google.com'
print_r(normalizeUrl('http://ai.fi') . PHP_EOL);        // 'https://ai.fi'
print_r(normalizeUrl('https://hexlet.io') . PHP_EOL);   // 'https://hexlet.io'
