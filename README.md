# Nengo

日付を和暦から西暦、西暦から和暦に変換する

```php
<?php

use ue555\nengo\JapaneseNengoGenerator;

$nengo = new JapaneseNengoGenerator();
// 和暦から西暦に変換
var_dump($nengo->toWareki(20220112)); // array(4) { ["wareki"] => string(6) "令和" ["year"] => string(2) "04" ["month"] => string(2) "01" ["day"] => string(2) "12" }
```


## インストール

### With Composer

```
$ composer require ue555/nengo
```

```json
{
    "require": {
        "ue555/nengo": "^1.0.2"
    }
}
```

```php
<?php
require 'vendor/autoload.php';

use ue555\nengo\JapaneseNengoGenerator;

$nengo = new JapaneseNengoGenerator();
var_dump($nengo->toWareki(20220112));
```

### Without Composer
なぜ、[composer](https://getcomposer.org/)を利用しないのですか？ 利用しないのなら、nengoの最新リリースをダウンロードし、ZIPアーカイブの中身をプロジェクト内のディレクトリに入れます。そして、すべてのクラスと依存関係を必要な時に読み込むために、autoload.phpというファイルをrequireするように設定します。

```php
<?php
require 'path-to-Nengo-directory/autoload.php';

use ue555\nengo\JapaneseNengoGenerator;

$nengo = new JapaneseNengoGenerator();
var_dump($nengo->toWareki(20220112));
```
