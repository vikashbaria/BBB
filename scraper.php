<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful

require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';

/*There are three  type search in every page
1) Check Mark in BBB Accredaited
2) Sort from Best Match
3) Sort from A to Z
*/
//  This is 1 Page https://www.bbb.org/en/ca/search?accreditedFilter=0&inputText=a&locationLatLng=&locationText=&page=1&sort=Relevance

$alpha = array("a", "b", "c");
for($page = 0;  $page< count($alpha); $page++)
{
  for($loop = 1;  $loop< 101; $loop++)
  {
    echo "$page[$loop]\n";
  }
}


//
// // Read in a page
// $html = scraperwiki::scrape("http://foo.com");
//
// // Find something on the page using css selectors
// $dom = new simple_html_dom();
// $dom->load($html);
// print_r($dom->find("table.list"));
//
// // Write out to the sqlite database using scraperwiki library
// scraperwiki::save_sqlite(array('name'), array('name' => 'susan', 'occupation' => 'software developer'));
//
// // An arbitrary query against the database
// scraperwiki::select("* from data where 'name'='peter'")

// You don't have to do things with the ScraperWiki library.
// You can use whatever libraries you want: https://morph.io/documentation/php
// All that matters is that your final data is written to an SQLite database
// called "data.sqlite" in the current working directory which has at least a table
// called "data".
?>
