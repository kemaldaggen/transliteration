<?php

include "JTransliteration.php";

$mombojombotext = "誓曰：『時日害喪？予及女偕亡。』民欲與之偕亡，雖有";
$nonmombojombotex = JTransliteration::transliterate($mombojombotext);

echo $nonmombojombotex;

?>