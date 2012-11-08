transliteration
===============

Port of drupal's transliteration module for standalone usage in php5


Simple Usage

include "PATH_TO_FOLDER/transliteration/JTransliteration.php";

$mombojombotext = "誓曰：『時日害喪？予及女偕亡。』民欲與之偕亡，雖有";

$nonmombojombotex = JTransliteration::transliterate($mombojombotext);

echo $nonmombojombotex;


//see example.php for a working copy