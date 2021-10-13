<?php 
    libxml_disable_entity_loader (true);
    $xm = file_get_contents('php://input');
    $dom = new DOMDocument();
    $dom->loadXML($xm, LIBXML_NOENT | LIBXML_DTDLOAD);
    $invite = simplexml_import_dom($dom);
    $prenom = $invite->prenom;
    echo "<pre>Salut $prenom !</pre>";
?> 
