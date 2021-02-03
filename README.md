## Installation

You can install the package via composer:
``` bash
composer require orthosie/transliteration
```


## Usage

Very Simple usage using static method

```php
	use Orthosie\Unicode\Transliteration;

	$mombojombotext = "誓曰：『時日害喪？予及女偕亡。』民欲與之偕亡，雖有";
	$text = Transliteration::transliterate($mombojombotext);
```
