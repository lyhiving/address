## 国内收货地址智能解析

本项目包含2个功能
- 把字符串解析成姓名、收货电话、邮编、身份证号、收货地址
- 把收货地址解析成省、市、区县、街道地址

特色是：***简单易用***

该项目依然采用的是，统计特征分析，然后以最大的概率来匹配，得出大概率的解。因此只能解析中文的收货信息，不能保证100%解析成功，但是从生产环境的使用情况来看，解析成功率保持在96%以上，就算是百度基于人工智能的地址识别，经我实测，也是有一定的不能识别的情况。


## 少啰嗦，先看东西

![最简单版本](https://raw.githubusercontent.com/lyhiving/address/master/examples/image/1.png)


## 安装

使用 Composer

```bash
composer require lyhiving/address
```
或

```json
{
    "require": {
        "lyhiving/address": "1.*"
    }
}
```

## 用法

```php
<?php
use lyhiving\address\address;
$address = new address();

$string = '深圳市龙华区龙华街道1980科技文化产业园3栋317    张三    13800138000 518000 120113196808214821';
$r = $address->smart($string);
```


更多用法参考 [examples](https://github.com/lyhiving/address/blob/master/examples/index.php) 里面的范例。

本文件大部分来自 [@pupuk](https://github.com/pupuk/address) , 我做了composer的适应和部分冗余处理。