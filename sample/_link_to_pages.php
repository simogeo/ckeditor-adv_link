<?php
/**
 * PHP sample
 * You may want to query the database to populate the dedicated field
 */

session_start();
header('Content-Type: text/html; charset=utf-8');

// encodeURIComponent() is needed when working with accents
// If not used, generate a JS error in CKEDITOR link plugin
function encodeURIComponent( $str ){

	$revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
	return strtr(rawurlencode($str), $revert);

}


$a = array();


// Getting pages from your database
// Uncomment and adapt to generate your content - do not forget to remove sample data below
// $data = $sql->getMyPages();

// foreach ($data as &$el) {

// 	$name = encodeURIComponent($el['title']);
// 	$link = 'index.php?p='.$el['id'];
	
// 	$tmp = array($name, $link);
// 	array_push($a, $tmp);
// }


// SAMPLE DATA
// This is just a sample - this part of code as to be removed or commented
echo "[['Contact','index.php?p=4'],['About','index.php?p=5'],['Home page','index.php?p=1']]";
exit;

// we finally encode the array into JSON
$string = json_encode($a);
echo $string;
exit;
?>