<?require_once "includes/head.php";?>
<body>
<?require_once "includes/logo.php";?>

<div id="Content">

<h1>To Do</h1>
<h3>Definite Additions</h3>
<ul>
<li>Using perl's line oriented IO makes the server not respond to any client if one client doesn't sent a newline.  I knew this was going to happen, but I was lazy.  This should really be fixed.</li>
<li>ripping fails when discs have data tracks.  I don't know of a way to reliably find out which tracks are data, which is why this fails.  When cdda2wav/dagrab don't generate a file, which is what happens when it encounters a data track, we assume something is amiss and fail to populate the database with the audio tracks.</li>
<li>error messages related to failed file operations at the end of the rip cycle should indicate which file/track had the problem.</li>
<li>allow modification of the database (import tracks, set cover art file, change genres, etc) through the server.</li>
<li>some indicator with/in the menu icons as to which page is currently active</li>
<li>reorder album listing by other critera (genre, popularity, length, artist, title)</li>
<li>reorder track listing by popularity</li>
<li>browse tracks directly</li>
<li>play songs that have never been played</li>
<li>play popular songs</li>
<li>browse by genre -- this is problematic because people don't have the foggiest idea what they are listening to -- FreeDB is oh-so fucked up.  The Beatles are not "jazz", and not everything can be "misc"!</li>
<li>a the web interface, which should allow editing everything, including uploading of album cover art (for when cover art can't be downloaded), and additional music tracks (how do partial albums or individual tracks get categorized/albumized?).</li>
<li>allow joining of outputs to play the same queued song at the same time (might need ALSA for this)</li>
<li>it might look nice to have the album cover art alpha blended behind the track list</li>
<li>more statistics!  Most popular by time of day, day of week, time of month, season, most popular by output, etc</li>
<li>different themes.  I really think there is an optimal, obvious layout for the interface, such that people can figure out how to use it without a lot of instruction</li>
<li>scheduled playing, ie. automaticly start playing in the morning</li>
<li>add a bunch of missing functions to SDL_perl (like the user defined events) and change code to use them</li>
<li>release SDL perl widgets as a full perl package (whatever that means)</li>
<li>convert to <a href="http://www.alsa-project.org/">ALSA</a> to allow full use of the all the sound hardware (use rear channels for additional outputs).  This might also allow greater automated control of playback, as some ALSA tools seem more feature rich than standard OSS tools.</li>

<li><strike>all buttons should have some visual indication that they've been hit, like the album scroll buttons do</strike> reworked and abstracted the widget code to do this</li>
<li><strike>Play an entire album -- this is only worth doing if the delay between songs can be avoided, for the full "album experience"</strike> at least version 2.0</li>
<li><strike>better recovery for when cover art can't be found</strike></li>
<li><strike>server automaticly creates the database tables if it can't find them.  Should be easy to integrate automatic upgrading of the database schema also this way</strike> (in v1.4)</li>
<li><strike>allow setting an "agressiveness" level when ripping CDs, which will allow a greater or lesser tolerance of error recovery attempts by cdparanoia.</strike> No client/server interface to this functionality, but it's there</li>
<li><strike>play a completely random list</strike> (in v1.4)</li>
<li><strike>figure out a better way to store the cover art, so remote clients can access it.  I don't like the idea of blobs in the database, but it may make sense in this case.  Maybe just make an SMB read-only share for this purpose (then easy to share with windows clients also)</strike> (in v1.4 -- coverart server command)</li>
<li><strike>system status, including disk usage</strike> (in v1.3)</li>
<li><strike>position indicator for album list</strike></li>
<li><strike>change the way the frontend interfaces with the backend.  Get rid of using MySQL as a communications layer.</strike></li>
<li><strike>clean up the code</strike> Although this is an on-going process.  There are still some areas that could use some work.</li>
<li><strike>a (non-obvious, so people don't just randomly use it) way to skip the song that is playing</strike></li>
<li><strike>speed up (or batch) the determination of album popularity.  So far, this needs to happen manually by giving the <tt>rankupdate</tt> command to the server.  There should be a server thread that calculates statistics every so often.</strike> (in v1.3)</li>
<li><strike>track down all the annoying bugs in the interface, they only seem to happen periodicly</strike>
  <ul>
    <li><strike>icon animations stop animating</strike></li>
    <li><strike>ripping page doesn't update</strike></li>
    <li><strike>now playing page draws in the wrong order, so the pause/skip buttons and the text alternate/flash</strike></li>
  </ul>This should be fixed in version 1.1, I think using SDL::Timer was causing random memory corruption from the Timer threads, some strange interaction between SDL's threads and perl?
</li>
<li><strike>figure out rare SDL-perl crashing (uneventful forced exit, segfaults, thread exceptions) issue when too many events are received in a short time frame -- this rarely happens during production use, but is still worth looking into (this has started to happen more often since I cleaned up the code).  I believe it may be related to my perl not being built with thread support (?), but SDL creating threads.</strike>  I think this is fixed, it was due to instability with SDL::Timer</li>
</ul>
<h3>Wish List</h3>
<ul>
<li>self-contained bootable CDROM or mini-image (systems would run from a ram disk, other than storage of database and songs) to make upgrading a snap</li>
<li>a way to record what was going on at the time some track/album/playlist was playing, and be able to reproduce the same feel (by playing the same set of tracks or same genre)</li>
<li>built-in audio clock, chime the hours or some time limit (to avoid having to watch the clock when playing pool)</li>
<li>modify some of the more visually dynamic xscreensaver hacks to somehow use audio output as a rendering variable</li>
<li>a "zooming album browser".  the albums start out really small on a grid (arranged in some predictable pattern?) and you touch to zoom up on them.  Perhaps some coloring by popularity?</li>
<li>get the SDL OpenGL stuff working in perl, it would be really cool to have an interface that is all 3D widgets</li>
<li>write statistics on track playing back to the ogg comment fields, so the metadata travels with the data.  This is kind of useless now, because the jukebox is one way -- stuff only goes in.</li>
<li>bind additional images to albums and individual tracks, to show when playing.  <i>Infrastructure for this is in the databas for version 1.5, which allows multiple images per album.</i></li>
</ul>
</div>
<!-- p><a href="default.asp" title="Layouts to make your own...">&lt; Return to the Layout Reservoir</a> &nbsp;::&nbsp; <a href="view_css.asp?layout=layout1" title="">View the CSS</a></p -->

<? require_once "includes/menu.php"; ?>
<? require_once "includes/credit.php"; ?>
<div id="lastmod">Last modified <?=date ("D, M jS, Y, H:i:s", filemtime(__FILE__));?></div>
