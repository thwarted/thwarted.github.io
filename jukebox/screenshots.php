<?require_once "includes/head.php";?>
<body>
<?require_once "includes/logo.php";?>

<div id="Content">

<h1>Screenshots</h1>

<p>
Note that some of the icons, along with the logo I've chosen, are images co-opted and hand-edited from
<a href="http://www.redhat.com/">RedHat's</a> Bluecurve icon set in RH9.  It would be cool if I had mad 
graphic artist skillz, but I don't.  Please forgive me.
</p>

<p>
The outputs have been renamed in these screenshots, from "left" and "right", to "main" and "backup".  Astute readers 
will also notice the background images on the more recent versions.  I chose this image because it's easy to tell if 
the image isn't being drawn correctly or the alpha on the widgets isn't working like it should.  I'm sorry, I can't 
remember where I downloaded this image from, but it's pretty damn cool, being a closeup of cauliflower.
</p>

<p>
All thumbnails are 300x200 and are under 20k in size.  The screenshots themselves are either fullsize 1024x768 (100k
each) or reduced to 800x600 (under 50k).
</p>

<table class="img">
    <tr><td><a href="images/v3/v3-ripping.jpg"><img src="images/v3/v3-ripping-tn.jpg" /></a></td></tr>
    <tr><td class="fsize"><? print number_format(filesize("images/v3/v3-ripping.jpg")); ?> bytes</td></tr>
    <caption>
    This is the new ripping screen, which has been simplied quite a bit from the previous version.  It includes
    a progress bar and a ripping speed measurement.
    </caption>
</table>

<table class="img">
    <tr><td><a href="images/v3/v3-stats.jpg"><img src="images/v3/v3-stats-tn.jpg" /></a></td></tr>
    <tr><td class="fsize"><? print number_format(filesize("images/v3/v3-stats.jpg")); ?> bytes</td></tr>
    <caption>
    The new stats screen can be viewed by hitting the little pie chart icon up in the right.
    </caption>
</table>

<h2>Screenshots from previous versions</h2>

<table class="img">
    <tr><td><a href="images/v2/nowplaying.jpg"><img src="images/v2/nowplaying-tn.jpg" /></a></td></tr>
    <tr><td class="fsize"><? print number_format(filesize("images/v2/nowplaying.jpg")); ?> bytes</td></tr>
    <caption>This is the "now playing" screen.  Up to two defined outputs will show up here.  The entire layout has changed
    to better accomidate incremental updating.  The track info is temporary, just a dump of the data I have until
    I change it to be more visually appealing.</caption>
</table>

<table class="img">
    <tr><td><a href="images/v2/albums.jpg"><img src="images/v2/albums-tn.jpg" /></a></td></tr>
    <tr><td class="fsize"><? print number_format(filesize("images/v2/albums.jpg")); ?> bytes</td></tr>
    <caption>This shot boasts the addition of the album navigation slider between the next and back buttons.</caption>
</table>

<table class="img">
    <tr><td><a href="images/v2/ripping.jpg"><img src="images/v2/ripping-tn.jpg" /></a></td></tr>
    <tr><td class="fsize"><? print number_format(filesize("images/v2/ripping.jpg")); ?> bytes</td></tr>
    <caption>The expanding ripping screen which shows the cover art for the album being ripped if it can find it.
    Note that this is also just a dump of the information, to be expanded upon later.</caption>
</table>

<p>
One thing you can't see in these screenshots is the support for animated icons.  If there is something queued up and 
playing, the "now playing" icon (upper left) has musical notes coming out of it.  If the ripper is currently active
musical notes flash over its icon (the red colored CD in the upper right).
</p>

<table class="img">
    <tr><td><a href="images/v2/ss-idle.jpg"><img src="images/v2/ss-idle-tn.jpg" /></a></td></tr>
    <tr><td class="fsize"><? print number_format(filesize("images/v2/ss-idle.jpg")); ?> bytes</td></tr>
    <caption>This is the "now playing" or "idle" screen.  If there are multiple outputs defined, they all show up here.  
    Changes from the previous version include the volume bar, the pause/play button, and the skip button.</caption>
</table>

<table class="img">
    <tr><td><a href="images/v2/ss-albums.jpg"><img src="images/v2/ss-albums-tn.jpg" /></a></td></tr>
    <tr><td class="fsize"><? print number_format(filesize("images/v2/ss-albums.jpg")); ?> bytes</td></tr>
    <caption>Not much has changed with the album screen since the previous version.</caption>
</table>

<table class="img">
    <tr><td><a href="images/v2/ss-tracks.jpg"><img src="images/v2/ss-tracks-tn.jpg" /></a></td></tr>
    <tr><td class="fsize"><? print number_format(filesize("images/v2/ss-tracks.jpg")); ?> bytes</td></tr>
    <caption>The main difference here is that the scroll buttons disappear when the list is positioned at the
    top or the bottom.</caption>
</table>

<table class="img">
    <tr><td><a href="images/v2/ss-ripper.jpg"><img src="images/v2/ss-ripper-tn.jpg" /></a></td></tr>
    <tr><td class="fsize"><? print number_format(filesize("images/v2/ss-ripper.jpg")); ?> bytes</td></tr>
    <caption>Here you can see the start of the new "ripping progress" screen, which I've split into it's own
    page rather than trying to bunch everything up on the "now playing" page.</caption>
</table>

<hr>

<p>
The latest version has a static icon bar across the top containing three icons.  On the left is the 
"now playing" icon, which will take you to the "now playing" screen.  In the middle is the "album picker"
icon, which shows the list of all albums.  The screen saver can be manually activated using the icon on the
right.
</p>
<p>
Note that the references to "left" and "right" in the screenshots designate one of the multiple output 
channels that are supported.  I had my two sets of speakers set up on the left and right of myself for 
testing.  In my production setting, I plan on having at least two outputs, "kitchen" and "pool room", 
and perhaps "library" as a third, as my house is already wired with (cheap-ass) speakers (that need to 
be replaced).
</p>

<table class="img">
    <tr><td><a href="images/v1/thundaural-nowplaying02.jpg"><img src="images/v1/thundaural-nowplaying02-tn.jpg" /></a></td></tr>
    <tr><td class="fsize"><? print number_format(filesize("images/v1/thundaural-nowplaying02.jpg")); ?> bytes</td></tr>
    <caption>This is the "now playing" screen.  If there are multiple outputs defined, they all show up here.  
    You can also elect to rip additional discs that you own from this screen.</caption>
</table>

<table class="img">
    <tr><td><a href="images/v1/thundaural-albums.jpg"><img src="images/v1/thundaural-albums-tn.jpg" /></a></td></tr>
    <tr><td class="fsize"><? print number_format(filesize("images/v1/thundaural-albums.jpg")); ?> bytes</td></tr>
    <caption>This screen shows a scrolling list of albums, six at a time.  Selecting an album lists the tracks on that album.</caption>
</table>

<table class="img">
    <tr><td><a href="images/v1/thundaural-tracks.jpg"><img src="images/v1/thundaural-tracks-tn.jpg" /></a></td></tr>
    <tr><td class="fsize"><? print number_format(filesize("images/v1/thundaural-tracks.jpg")); ?> bytes</td></tr>
    <caption>The tracks on the album are displayed in a scrolling list.  Statistics for the album and each track are included.
    The output is selectable on the left.</caption>
</table>

<hr>

<h2>Older Screenshots</h2>

<table class="img">
    <tr><td><a href="images/v0/thundaural-nowplaying01.jpg"><img src="images/v0/thundaural-nowplaying01-tn.jpg" /></a></td></tr>
    <tr><td class="fsize"><? print number_format(filesize("images/v0/thundaural-nowplaying01.jpg")); ?> bytes</td></tr>
    <caption>An older version of the "now playing" screen, before I added the progress meter.</caption>
</table>

</div>

<? require_once "includes/menu.php"; ?>
<? require_once "includes/credit.php"; ?>
<div id="lastmod">Last modified <?=date ("D, M jS, Y, H:i:s", filemtime(__FILE__));?></div>
