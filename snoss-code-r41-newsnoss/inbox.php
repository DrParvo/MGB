<?
//$queryinfo is where the query information for non-cookie login is found
require 'require.php';
checkall(); //check for the cookie and check it's authenticity - and do the rest.
//end standard stuff

parse_xml("inbox.xml");
?>
