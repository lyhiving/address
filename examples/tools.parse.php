<?php
include __DIR__ . '/../autoload.php';

use lyhiving\address\address;
$address = new address();
//用于tow更新，数据主要来自 https://github.com/uiwjs/province-city-china/blob/gh-pages/town.min.json
$file = __DIR__.'/town.min.json';
 

function jsonParse($file, $case='a4'){
    $data = json_decode(file_get_contents($file), true);
    $i = 10000;
    $items = [];
    foreach($data as $k=>$v){
        $item['name'] = $v['n'];
        $item['pid'] = $v['p'];
        $item['zipcode'] = $v['p'].$v['y'].$v['a']; 
        $items[$i.""] = $item;
        $i++;
    }
    $file = __DIR__."/../src/data/".$case.".php";
    file_put_contents($file, "<?php ".PHP_EOL."  \$".$case."_data=".var_export($items, true).";");
}


jsonParse($file);

