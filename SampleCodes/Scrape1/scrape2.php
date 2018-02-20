<?php

/* Extract dictionary definition title and definition data
from a scraped web page */

# Open the URL to be scraped

//$lyne = file_get_contents("http://www.wellho.co.uk/net/join.html");
$lyne = file_get_contents("https://www.allure.com");
# Process it line by line
# Look for all dictionary titles and associated data.

$includedtext = "";
preg_match_all("!<dt>(.+?)</dt>.*?<dd>(.+?)</dd>!s",$lyne,$here);
        for ($k=0; $k<count($here[0]); $k++) {
                $includedtext .= "<b>".htmlspecialchars(
                                        strip_tags($here[1][$k])).
                                "</b><br />".
                                htmlspecialchars(
                                        strip_tags($here[2][$k])).
                                "<br /><br />";
}
?>
<html>
<head><title>Example of scraping content</title></head>
<body><h1>Scraping Content</h1>
This is an example of a web URL that scrapes content from
another URL (typically you would use this to pull back data
from another site, but we have demonstrated it against another
URL on our own server).<br><br>
Here is the scraped content:<br><br>
<?= $includedtext ?>
<br />
<i>If you want to see the original, click
<a href=http://www.wellho.net/net/join.html>[here]</a></i><br>
</body></html>

