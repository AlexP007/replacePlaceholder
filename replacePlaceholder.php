<?php
function replacePlaceholder(array $data, string $str) {
    $from = array_map(function($elt) {
        return preg_replace('/(\S+)/', '#$0#', $elt);
    },array_keys($data));
    $to = array_values($data);

    return str_replace($from, $to, $str);
}
