<?php

define('BASE_DIR', realpath(dirname(dirname(__FILE__))));
define('LIB_DIR', BASE_DIR.'/lib/');
define('MORIARTY_HTTP_CACHE_DIR', BASE_DIR.'/cache/');
define('MORIARTY_ARC_DIR', LIB_DIR.'arc/');
define('VOID', 'http://rdfs.org/ns/void#');
define('OPENVOCAB', 'http://open.vocab.org/terms/');
define('DCT', 'http://purl.org/dc/terms/');
define('DC', 'http://purl.org/dc/elements/1.1/');
define('VANN', 'http://purl.org/vocab/vann/');
define('xsd', 'http://www.w3.org/2001/XMLSchema#');
define('FOAF', 'http://xmlns.com/foaf/0.1/');
define('MOAT', 'http://moat-project.org/ns#');
define('DSI', 'http://dsi.lod-cloud.net/vocab#');
define('CC', 'http://creativecommons.org/ns#');
define('OKFN', 'http://purl.org/okfn/licenses/');
define('DOAP', 'http://usefulinc.com/ns/doap#');
define('SSD', 'http://www.w3.org/ns/sparql-service-description#');

require_once LIB_DIR.'/moriarty/store.class.php';
require_once LIB_DIR.'/moriarty/credentials.class.php';
require_once LIB_DIR.'/moriarty/httprequestfactory.class.php';
require_once LIB_DIR.'/moriarty/sparqlservice.class.php';
require_once LIB_DIR.'/moriarty/simplegraph.class.php';

define('LOD', 'http://lod-cloud.net/');

define('lodThemes', LOD.'themes/');


function getLodTopics(){

    return   array(
  'geographic',
  'government',
  'media',
  'crossdomain',
  'lifesciences',
  'usergeneratedcontent',
  'ecommerce',
  'schemata',
);


}
function getPrefixes(){
  $RequestFactory = new HttpRequestFactory();
  $Prefixes = json_decode($RequestFactory->make('GET', 'http://prefix.cc/popular/all.file.json')->execute()->body, 1);
  $Prefixes = array_filter($Prefixes, create_function('$a', 'return $a;'));
  return $Prefixes;
}





?>
