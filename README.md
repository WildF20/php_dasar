# Quick usage

AnalisaNGram
```php
require 'src/AnalisaNGram.php';
$ng = new AnalisaNGram("Jakarta adalah ibukota negara Republik Indonesia");
echo $ng->unigrams();
echo $ng->bigrams();
echo $ng->trigrams();
```

AnalisaString
```php
require 'src/AnalisaString.php';
echo (new AnalisaString("TranSISI"))->hitungLowercase();
```

EnkripsiTeks
```php
require 'src/EnkripsiTeks.php';
$enc = new EnkripsiTeks("DFHKNQ");
$cipher = $enc->enkripsi();
echo $cipher . " | " . (new EnkripsiTeks($cipher))->dekripsi();
```

PatternGenerator
```php
require 'src/PatternGenerator.php';
$p = new PatternGenerator(8, 8);
print_r($p->generatePattern());
```

PenilaianUjian
```php
require 'src/PenilaianUjian.php';
$nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
$hasil = new PenilaianUjian($nilai);
echo $hasil->average();
echo $hasil->min();
echo $hasil->max();
```


Usage of 