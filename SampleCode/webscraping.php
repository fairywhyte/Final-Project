<?php
$source = file_get_contents('https://www.amazon.com/Clarins-Complete-Control-Concentrate-Tumeric/dp/B013X0TJNC/ref=sr_1_5_s_it?s=beauty&ie=UTF8&qid=1518713262&sr=1-5&keywords=clarins+double+serum');

echo $source;

var_dump(strlen($source));

preg_match('@<div id="reviewSummary".*?id="cr-medley-top-reviews-wrapper"@im', $source, $m);
var_dump($m);
preg_match('@<span data-hook="total-review-count" class="a-size-medium totalReviewCount">(\d+)</span>@im', $m[0], $r);
var_dump($r);