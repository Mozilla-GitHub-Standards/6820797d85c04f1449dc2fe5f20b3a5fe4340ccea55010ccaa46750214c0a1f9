<?php

// Variable allowing includes
$valid = true;
$page = 'changelog';

// Init application
require_once 'init.php';

// page title
$title = '<a href="/">Transvision</a> changelog';

// Start output buffering, we will output in a template
ob_start();
?>

<h2 id="v1.2">Version 1.2 - 2012-08-10</h2>
<h3>End user visible changes</h3>
<ul>
    <li>Searches for strings with single and double quotes work ex: <a href="/?locale=fr&amp;repo=release&amp;recherche=Don't">Search for « Don't »</a></li>
    <li>The <em>Glossary</em> option now yields results that make sense, when you select it all other checkboxes are unselected, ex: <a href="/?locale=fr&amp;repo=release&amp;t2t=t2t&amp;recherche=bookmarks">Search for « Bookmarks »</a>. <br/>That option looks for the closest matches for your locale for a word or a few workd and lists them all. It also lists examples of use. The main use for that is to quickly check how a word is usually translated by your team.</li>
    <li><em>Perfect Match</em> option now actually works</li>
    <li>Changelog page uses the same template as the application</li>
</ul>

<h3>Developer visible changes</h3>
<ul>
    <li>json webservice is now available from a normal search if you add <code>&amp;json</code> to your search query (webservice.php is still available so as to not break API consumers, please udate your script to use <code>index.php?json</code> instead. ex: <a href="/?locale=fr&amp;repo=release&amp;recherche=Don't&amp;json">Search for « Don't »</a></li>
</ul>

<h3>Other changes</h3>
<ul>
    <li>Simplification of the python script creating TMX files</li>
    <li>Overall simplification of the PHP code to remove dead code</li>
</ul>
<hr>
<h2 id="v1.1">Version 1.1 - 2012-08-01</h2>
<h3>End user visible changes</h3>
<ul>
    <li>added ach, ff, lij, my, wo locales</li>
    <li>removed oc, mn locales</li>
    <li>results for rtl locales are now correctly aligned</li>
    <li>added locale detection to populate the default locale on home page</li>
    <li>Radio buttons are now clickable</li>
    <li>cleaned up template to hopefully look better and be more readable</li>
</ul>

<h3>Developer visible changes</h3>
<ul>
    <li>json webservice now sends results with application/json Mime type instead of text/html</li>
    <li>install script setup.sh decoupled from glossaire.sh which updates an existing installation</li>
</ul>

<h3>Other changes</h3>
<ul>
    <li>Lots of code clean ups and simplifications</li>
</ul>
<hr>
<h2 id="v1.0">Version 1.0 - 2012-07-27</h2>
<ul>
    <li>Initial import of existing code into github and reinstalling on MozFR server</li>
    <li>New URL is <a href="http://transvision.mozfr.org">http://transvision.mozfr.org</a></li>
</ul>
<?php

$content = ob_get_contents();
ob_end_clean();

// display the page
require_once 'views/template.php';
