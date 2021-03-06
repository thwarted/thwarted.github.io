<?
if (preg_match('/leave-it-to/', $_SERVER['SERVER_NAME'])) {
	header("Location: http://thwartedefforts.org/jukebox/");
	exit;
}
?>
<?require_once "includes/head.php";?>
<body>
<?require_once "includes/logo.php";?>

<div id="Content">

<h1>News</h1>

<p>Detailed installation instructions are available both on this site and in the included INSTALL file.  If anyone needs help installing, I suggest joining the <a href="mailinglist.php">mailing list</a>, or by sending an email to me personally to the user name <u>ta</u> at this site's domain name.  Alternatively, you are welcome to contact me via IM for assistance.  I'm 240033388 on ICQ.</p>

<dl>
<dt>May 14th, 2013 23:31:19</dt>
    <dd>
    There are still links around the internet that link to this, and people are still following them, so I've restored this content about the touchscreen jukebox.  However, the code is now hosted at github at <a href="https://github.com/thwarted/thundaural">github.com/thwarted/thundaural</a>.
    </dd>
<dt>Dec 4th, 2005 19:08:39</dt>
    <dd>
    Trying to compile Audio::Mad with recent versions of GCC (like gcc 4.0.2 on FC4) fails because Audio::Mad's XS code uses depreciated constructs ("cast in lvalue").  Applying <a href="dl.php/Mad.xs-dep_cast_in_lvalue.patch">this patch to Mad.xs</a> in the Audio-Mad-0.6 distribution works around this compilation problem.
    </dd>
<dt>Mar 18th, 2005 21:06:31</dt>
    <dd>
    <p>Version 2.1 has been released.  As usual, the <a href="CHANGELOG.txt">change log</a> is the place to go for the details.  A few bugs were squashed, and the major visual change is the addition of a seek-bar on the albums screen, letting you seek around within the album list by first letter.</p>
    <p>I've experienced some problems using high speed drives and recently released CDs, so I've lowered the speed during ripping to make it more reliable.  This is, of course, changable if you need faster ripping.  See the man page for dagrab and modify taripdisc as necessary.</p>
    </p>
    </dd>

<dt>Mar 10th, 2005</dt>
    <dd>
    <p>I acquired the right hardware to make the jukebox software and operating system stored on compact flash, and the harddrive will only be used to store audio.  This should make upgrading a breeze, just put in an updated compact flash card.</p>
    </dd>

<dt>Nov 17th, 2004 01:23:51</dt>
    <dd>
    <p>Version 2.0 has been released and is available in the downloads section and from the subversion repository.  Major changes in this release include directory structure cleaning, modular client code, a clock is displayed in the client, the now-playing screen in the client looks better, and the client responds a lot better.  All the scripts have been renamed, so you might need to make some changes to your startup scripts, but they are minor.  As a whole, the system is less sensitive to being started outside of the distribution directory as the code makes an effort to change to the right directory and include the correct library dirs.</p>
    </dd>

<dt>Nov 3rd, 2004 00:56:11</dt>
    <dd>
    <p>Getting close to a public release of the new client code.  I merged <tt>branches/client-themes</tt> branch into <tt>trunk/</tt> (my first big subversion merge operation, it was kind of confusing at first).  Just clean up now.  The new client code has been running on my production jukebox for a few days now, and a few remaining bugs have popped up which I'm working on fixing before releasing 1.8.</p>
    </dd>

<dt>Oct 27th, 2004 01:18:14</dt>
    <dd>
    <p>Version 1.7 is available in the downloads section.  Check the <a href="CHANGELOG.txt">change log</a> for details.  This is mainly an update to the server portion.  New features in this version include faster ripping (encoding using oggenc in a pipe is what was slowing it down, now it rips to WAV files and then encodes to Ogg Vorbis in the background when the jukebox is idle), the <tt>album-images.pl</tt> script is included, and albums can be added from collections of pre-existing audio files (see the <tt>ADDING_PERSONAL_ARCHIVE.txt</tt> file in the <tt>server/</tt> directory for the low-down on that).  Note that when updating, you'll have to make a slight change to your <tt>thundaural.conf</tt> file, the exact change is documented in the change log.</p>
    </dd>

<dt>Oct 21th, 2004 00:14:31</dt>
    <dd>
    <p>Been busy working on the new client infrastructure in the <a href="http://www.phux.net/websvn/listing.php?repname=thundaural&path=%2Fbranches%2Fclient-themes%2F&rev=0&sc=0">branches/client-themes branch</a>, not enough time for an update until now.  The new client is coming along really nice, and hopefully will be done in a few days, for which there will be a new release.</p>
    <p>By popular demand, in <a href="http://www.phux.net/websvn/">the subversion repository</a> are new files to allow you to load an already digitized (Ogg Vorbis or MP3) audio collection into the Thundaural database.  See <a href="http://www.phux.net/websvn/listing.php?repname=thundaural&path=%2Ftrunk%2Fserver%2F&rev=80">rev 80 of /trunk/server</a>, namely the files <tt>ADDING_PERSONAL_ARCHIVE.txt</tt>, <tt>personal-archive-load.pl</tt>, and the new <tt>ripdisc.pl</tt>.  This will allow you to add those songs you purchased on-line or your huge pre-existing collection of music, and not just load it from CD.  It's a simple three step process if you already have a nicely laid out and clean directory structure.  This is an alpha version, it worked for me on a few albums I have, your milage may vary.  You may want to back up your <tt>db/data.db</tt> database file before giving this a go.</p>
    </dd>

<dt>Sep 18th, 2004 01:55:04</dt>
    <dd>
    <p>I know everyone is just dying to find out what the latest developments are in the world of Thundaural Jukebox.  If so, head on over to the <a href="http://phux.net/websvn/">subversion repository</a> and download the branches/client-themes branch.  I wouldn't suggest replacing your current client directory with this, but just download it and run the interface.pl (you may need to change the line that says <tt>host=&gt;'jukebox'</tt> to your jukebox's name/address, that'll be an option when this branch is merged into trunk).</p>
Things to notice:<blockquote><ul><li>cleaner directory structure</li>
   <li><tt>Widgets/</tt> directory contains all the interface Widgets</li>
   <li>increased use of inheritance</li>
   <li><tt>Themes/</tt> directory to hold theme specific code</li>
   <li>the amount of code needed to customize and program a widget</li>
   <li>animated buttons</li>
   <li>visual feedback when buttons are hit</li>
   <li>minor cleanups in the way widgets are drawn to make them more attractive and consistent</li>
</ul></blockquote>
<p>What's there so far is just for show, activating things and selecting tracks shouldn't actually kick off commands to the server.  And album cover art is not shown for all albums initially (in order to test what not having cover art looks like).</p>
    </dd>

<dt>Sep 16th, 2004 00:59:33</dt>
    <dd>
    <p>Long time no update.  But things have been moving along in the background.  The client is being completely reworked to be more modular (like the server was previously).  The on-screen widgets have been rewritten to be usable in multiple themes.  I have a new design and layout for the interface, but I'm working right now on porting the current interface to the new theme and layout engine.</p>
    <p>A subversion repository has been setup with both the thundaural source code and the sdlperl source.  It is located at <a href="http://phux.net/websvn/">http://phux.net/websvn/</a>.</p>
    <p>If you end up with version 1.x of DBD::SQLite on your machine, you'll be using SQLite3 rather than SQLite2.  There were a number of changes made to how the SQLite API works, and some changes had to made to the thundaural server code to get it working.  Preliminary (not fully tested) fixes are in r20 of the trunk (in the subversion repository), and will included in the next official release.</p>
    </dd>

<dt>Jul 16th, 2004 01:01:03</dt>
    <dd>I goofed in the <tt><b>album-images.pl</b></tt> and didn't join the tables right, so albums that <b>needed</b> images were not listed in the <tt>--list-albums</tt> output.  There is now a new version up, available in the downloads section.</dd>

<dt>Jul 14th, 2004 00:21:22</dt>
    <dd>See the <a href="downloads.php">downloads page</a> for the <tt><b>album-images.pl</b></tt> script.  This will allow you to add and delete album images (cover art) from the command line.  This script will be included in the next release.  I didn't feel it was worth doing a full release just for this addition.</dd>

<dt>Jun 14th, 2004 02:33:47</dt>
	<dd>When the checkdeps script writes a config file for you, it lists a command line for aumix that sets the PCM device volume to 100.  I've found that this causes some odd distortion on a number of sound cards, no matter what the main volume is set to.  The next version's checkdeps script will have a default of 50.  To fix this on your installation, just edit the configuration file (thundaural-server.conf or /etc/thundaural/server.conf) and change the "-w100" in the aumix command line to "-w50", and then restart the server.</dd>

<dt>Jun 10th, 2004 01:31:33</dt>
	<dd>Finally, version 1.6 is ready for release.  See the <a href="CHANGELOG.txt">CHANGELOG</a> for the lowdown, but here's a quick list:
	<ul>
	<li>flush command added</li>
	<li>external audio players, like ogg123/mpg321, are no longer required.  Audio playback is done natively using perl modules through an abstracted interface.  While this means you no longer need to go through the (error-prone) process of patching ogg123, it does mean that additional libraries are necessary to get the perl modules working.</li>
	<li>the server now reads options from a configuration file, replacing the need for the TAProgramLocations.pm file</li>
	<li>will play MP3 files and WAV (once you get them into the database) -- this was added to support some features which have not been implemented yet.</li>
	<li>... among others</li>
	</ul><br/>
	<p>The <tt>checkdeps</tt> script will now generate a configuration file, rather than a <tt>TAProgramLocations.pm</tt>.  I've listed all the necessary perl modules in the INSTALL_PERL_MODULES file.  Any issues or questions or comments, see me on ICQ or subscribe to the mailing list.</p>
	<p>To get this version going, rename/remove your old <tt>/usr/local/thundaural</tt> directory (or where ever you had put it) and untar this version in it's place.  Run the <tt>checkdeps</tt> to generate the configuation file (you'll need to do this for version 1.6 even if you had done it previously for older versions) because 1.6 uses a new configuration file format) and put the generated file in the server directory.</p>
	<p>This is entirely optional, but you might want to checkout <a href="convert-tracknumtags.php">the instructions for convert "tracknumtags"</a> which will give you information on correcting a blunder I made in the old riper script that didn't put track numbers in the encoded files.</p>
	</dd>

<dt>Apr 22nd, 2004 17:31:50<dt>
	<dd>
	<p>Some people might be having problems if the cdrom drive they want to rip from is not accessible via <tt>/dev/cdrom</tt>.  If you are one of these people, either create <tt>/dev/cdrom</tt> as a symlink pointing to the device you want to use, or edit <tt>server/Settings.pm</tt> to list the correct cdrom device.</p>
	<p>When installing, be sure to install SDL-perl <b>last</b> after all the SDL-libraries (and their header/development packages) have been installed.  If you don't do this, SDL-perl's configuration will not compile a perl module that supports all the necessary SDL libs.</p>
	</dt>

<dt>Apr 22nd, 2004 17:28:11<dt>
	<dd>
	<p>Until a new version out, you should verify that the database you are running is version 3 or 4 before making the change I outline below.  You can do this by querying the database file (<tt>sqlite /home/storage/db/data.db</tt>) and issuing a <tt>select * from meta</tt>.  The <tt>dbversion</tt> will indicate which database version you are currently using.  I must have gotten something mixed up in the distribution.  If you run <tt>ripdisc.pl --dbfile /home/storage/db/data.db --storagedir /home/storage --device /dev/cdrom</tt>, it should report a mismatch if there is one and refuse to run.  If there is, just follow the directions immediately below to change ripdisc.pl to work around this.  Most likely, this won't be a problem for the average user.
	</dt>

<dt>Apr 22nd, 2004 02:33:33</dt>
	<dd>
	<p>I recently came across a bug that keeps the ripper script from working.  The ripper script is looking for a version 3 database, but the server upgrades the database to version 4.  You can fix this by changing the top of <tt>server/ripdisc.pl</tt> and change the line near the top that says:
	<pre>
	my $accepteddbversion = 3;
	</pre>
	to
	<pre>
	my $accepteddbversion = 4;
	</pre>
	The changes from version 3 to 4 are unrelated to anything the ripper script does, this is the proper fix, which should get you by until the next release.</p>
	<p>Speaking of the next release, some of the features I'm working on include playing an entire disc in one shot and removing the dependncy on ogg123.  Including the usual bug fixes and minor feature enhancements.
	</dd>

<dt>Mar 27th, 2004 20:59</dt>
	<dd>
	<p>I noticed that the <tt>edit</tt> command wasn't disabled in the server, so I've released version 1.5.1.  Since the schema changed, this command is no longer guaranteed to work, and will most likely be completely removed in a future version.</p>
	</dd>

<dt>Mar 27th, 2004 15:41</dt>
	<dd>
	<p><a href="downloads.php">Version 1.5 has been released</a>.  Check the <a href="CHANGELOG.txt">CHANGELOG</a> for details.</p>
	<p>There has been a lot of cleanups.  The main feature is that the ripping functionality is now modular, and will attempt to interface with <a href="http://www.musicbrainz.org">MusicBrainz</a> to get album information.  I recommend using <a href="http://vertigo.fme.vutbr.cz/~stibor/dagrab.html">dagrab</a> for ripping.  The client is more independent of the server now.  I've also included some scripts to ease getting both the server and client started on bootup.</p>
	<p>As always, feedback is welcome.  I suggest using the <a href="mailinglist.php">mailing list</a>.
	</dd>

<dt>Mar 27th, 2004 04:44</dt>
	<dd>
	<p>These pages have been updated with information for pending release of version 1.5.  I am in the final stages of testing 1.5 and will release over the weekend.</p>
	</dd>

<dt>Mar 22st, 2004</dt>
	<dd>
	<p>Updated the <a href="downloads.php">Dependencies section on the downloads page</a> with a new patch for vorbis-tools that contains both t3i.nl's remote patch, plus my patch to their patch.  What a nightmare.  I plan on removing ogg123 as a playback requirement for Thundaural at some point in the future (which will come a lot sooner than it was going to).  Vorbis-tools will still be required, of course, for encoding.</p>
	</dd>

<dt>Mar 1st, 2004</dt>
	<dd>
	<p>Between being sick and being busy at work, I have not been able to dedicate as much time to development as I'd like.  Which was good because the changes were not jelling in my head.  But things have been moving smoother the last couple of days.  Here's an update.</p>
	<p>First off, it was tough going writing the code to upgrade the database structure to support the changes I previously outlined.  I elected to not mirror MusicBrainz exactly, but rather only store the information Thundaural needs to keep track of tracks and files itself.  Mainly the changes include the removal of the specific genre from each track, and adding an <i>attributes</i> table that stores genres (and, in the future, other stuff).  Also, there is now a seperate <i>performers</i> table, which is intented to help normalize the artist information.  The database will also track multiple images per album, rather than only one that was supported previously.  Future releases will make better use of this as I work in automatic searching and downloading of additional album images, cover art, and liner notes.</p>
	<p>But, really, the part that has been taking the longest so far is the new ripper script.  What I've got going now is much better than the older one, and much more extensible.  First off, it supports using <a href="http://vertigo.fme.vutbr.cz/~stibor/dagrab.html">dagrab</a>, cdda2wav, and cdparanoia, in that order, if it can find them.  cdda2wav is required overall to help get disc information.  What's most important about this new ripper script is that the meta-data grabbing has been modularized -- I was struggling with how I wanted to do this, and it finally fell together.  First it tries MusicBrainz, then falls back on FreeDB.  The great thing about being modular is that additional grabber modules can be pretty much dropped in -- I have plans to write one that uses a local MusicBrainz database, rather than relying on a connection to the Internet at ripping time.  Long term plans include automatic updating of meta-data as sources with higher authority expand -- Thundaural will keep track of the fact that it got album information from FreeDB, for example, and try later to get data from a more authoritative source (currently MusicBrainz).</p>
	<p>This folds into some of the cooler things that MusicBrainz is doing, like lyrics and additional artist information, that can help turn the Thundaural interface into a true kiosk information server for the music it contains -- but those are long range plans.</p>
	</dd>

<dt>Feb 13th, 2004</dt>
	<dd>
	<p>
	I'm hard at work on <a href="http://www.MusicBrainz.org">MusicBrainz</a> database integration.  This will require significant changes to the server and the ripper program, along with the database structure.  I've debated continuing to use the old database structure to ease transition, but right now I'm really leaning toward using the <a href="http://www.MusicBrainz.org/db_structure.html">MusicBrainz database structure</a>, because it is definitely closer to The Right Thing&trade; than CDDB ever was or will be.  It's also more normalized than I originally made my database (by choice, because I was lazy), so we'll gain some new methods of querying with that also (which will manifest in the way songs are chosen for "random play").  Description of the changes are as follows.
	</p>
	    <ul>
		<li>have a multi-tier approach to resolving CD information.
		  <ol>
		  <li>try MusicBrainz.  I'm confident that they'll have information, but if they don't (as their database is smaller than CDDB)...
		  <li>use CDDB. If that fails...
		  <li>allow the user to manually enter the information (interface to be determined)
		  </ol>
		In any case, I'll record where the data came from, and "trust" MusicBrainz data over CDDB and consider MusicBrainz data to be authoritative.  If MusicBrainz ever obtains information that covers data we've gotten from CDDB or have manually entered, it'll be automaticly updated.</li>
		<li>Allow use of a MusicBrainz database stored on the local machine.  I'd prefer not to run the MusicBrainz server locally (as the dependencies are rather steep), but rather load their database into local SQLite tables (which comes to about 400 meg).  This database would be separate from the jukebox database that actually contains information about the music in the jukebox, to ease updating.  Data will be copied from the source (be it MusicBrainz remote query, MusicBrainz local database, CDDB or manual entry) to the jukebox database as needed.</li>
		<li>Unfortunately, the MusicBrainz database is too big to query <b>really</b> fast (despite SQLite being really fast in general, size is an issue here), so even if a local copy of the database exists, it'll only be used for ripping.</li>
		<li>I've come across a number of large "album cover art" websites, which unfortunately are all arranged casino style to get you to look at a lot of advertising.  I've also got some new ideas on how to search for cover art automaticly (google is actually pretty good if you know what to put in the search terms, which I didn't before) which will go into this same release.</li>
	    </ul><br />
	<p>
	This will most likely require a bump of the major version number, unless I can find a good mapping of CDDB IDs to Musicbrainz CD Index IDs.  I'm going to try to ease migration of the data using MusicBrainz queries of artist and track information already in the jukebox database (as obtained from CDDB), I'll see how that goes with my own collection before making a final decision.
	</p>
	</dd>

<dt>Feb 12th, 2004</dt>
	<dd>
	<p>I really want to convert my source control program to <a href="http://www.gnu.org/software/gnu-arch/">GNU arch/tla</a>, because I hate the way CVS handles multi-file check-ins, but I have not gotten around to it.  But eventually...</p>
	</dd>

<dt>Feb 4th, 2004</dt>
	<dd>
	<p>
	I created a mailing list for discussion of Thundaural Jukebox issues.  See the <a href="mailinglist.php">mailing list page</a> for subscription information.
	</p>
	</dd>

<dt>Jan 31st, 2004</dt>
	<dd>
	<p>Version 1.4 is available (<a href="CHANGELOG.txt">CHANGELOG</a>).  The big things for this release include
		<ul>
		<li>randomized play (in the future it'll support randomized genre play, and popular song play, etc)</li>
		<li>better dependency verification in the checkdeps script</li>
		<li>the client can be run completely remotely without needing direct filesystem access to some shared resources (like cover art files) that the server has -- they are transfered to the client on demand and cached</li>
		<li>the server supports building the initial database if it doesn't exist (with support for upgrading it to more recent versions if necessary)</li>
		</ul><br>
	Enjoy.</p>
	<p>Soon I'll have instructions on setting up X and the startup scripts for running Thundaural as a kiosk.</p>
	<p>Special thanks to Christopher Ness and Steve Gerety for helping debug the installation routines and giving me ideas on general improvments (even if they weren't aware they were giving me ideas while we were talking).</p>
	</dd>

<dt>Jan 17th, 2004</dt>
	<dd>
	<p>Released version 1.3 (<a href="CHANGELOG.txt">CHANGELOG</a>).  Theree big changes in this release; the ripping screen is prettier, new stats page, and the inclusion of a script to make sure you have all the dependencies installed.  Also, I fixed some stupid bugs that were making the screen get updated when it didn't need to be.
	</dd>

<dt>Jan 9th, 2004</dt>
	<dd>
	<p>Released version 1.2.  Changes to server include the addition of thread that updates statistics.  The client was changed to handle the case where there are six or less albums in the database.</p>
	</dd>

<dt>Jan 8th, 2004</dt>
	<dd>
	<p>Released version 1.1.  See the <a href="CHANGELOG.txt">CHANGELOG</a>.  Hopefully fixed the problem with the client randomly segfaulting in odd places.  Now includes an INSTALL file and a CHANGELOG file.</p>
	<p>If anyone with mad graphic artist skillz wants to redesign the graphics in the client's interface, I would be forever grateful.  Having multiple graphic sets to choose from would force me to finish the theme support I want to include.</p>
	</dd>

<dt>Jan 2nd, 2004</dt>
	<dd>
	<p>Removed the dependancy on SDL::Timer, which appears to be unstable in SDL_perl 2.0.2.  I suspect it's unstable in perl in general.  It appears to start up another thread (using SDL's threading method).</p>
	</dd>

<dt>Jan 1st, 2004</dt>
	<dd>
	Cleaned up all the web pages.  Added some screenshots.  Uploaded the latest code.
	</dd>

<dt>Dec 24th, 2003</dt>
	<dd><p>Been super busy over the last month, making lots of changes.  First off, the threaded perl server portion has opened up a lot of new possiblities.  <a href="http://www.sqlite.org">SQLite</a> has been a big win here also.  Being multithreaded allows better interaction between the support programs (ogg123, the cd ripper) and the server.  The cd ripper script has had a slight overhaul, mainly to have it interact with the SQLite database, but it's also more robust in the face of scratched CDs.  There's now an upper limit on the number of corrections that cdparanoia will be allowed to do to a single sector.  If that threshold is reached, that track is reripped without cdparanoia's ultra paranoid settings, so at least something will come off the disc, rather than cdparanoia going into an infinite loop.  For discs that are really scratched but do make progress during reading, the progress of the ripping is reported better, so the user can make a determination as to if it's worth it to let it continue and (possibly) finish.</p>
	<p>For the client end, I've abstracted the client/server interaction to a single module.  The previous way I had been doing it with code that closely mirrored the data structure of the database.  Now that the client isn't interfacing directly with a database, there is no need for that.  There is also no longer need for the Album and Track abstractions I created -- the client just asks the server for data and it all comes back as a perl hash -- much cleaner and faster than using full objects and accessor methods for everything; I think I might have been going overboard with the OO.  Sure, the client needs to know something about the data format of the server, but if something changes, it keeps the server and client consistant now anyway, rather than hiding behind a useless (in this case) abstraction.  The client code has also gotten a lot simplier, the different pages of the interface (album listing, track listing, currently playing, etc) have been abstracted to perl modules, and the interface between the on-screen widgets and how they page code interactions with the screen has been cleaned up -- the interaction was inconsistant in the old version, one page would update the screen directly, another page would draw to widgets which would then draw to the screen.  I also finally got the alpha channel figured out for SDL(-perl) which makes the interface visuals cleaner looking (and now supports background images and animated icons).  This fixes a number of bugs related to button feedback (important with a touchscreen), and screen update timing (also important with a touchscreen).  I've also created an 'error page' that is shown if the client looses connection to the server.  Visually, a pause and skip button has been added (now that the new server part exists these actions can actually be done), along with an on-screen volume control.  And the final upshot of all this is that it's obvious how to theme or style the client interface (although I don't have any other themes defined at this time, but they should be relatively easy to add, but'll need to be written in perl (unless you just want to change my crappy graphics)).</p>
	<p>I've added new screenshots showing the new features.</p>
	</dd>

<dt>Nov 23th, 2003</dt>
	<dd><p>Server portion, in perl with threads and SQLite, is coming alone nicely.</p></dd>

<dt>Nov 20th, 2003</dt>
	<dd><p>Finally got the remote interface for ogg123 to compile.  Found a bug (eof on stdin causes it to go into an infinite loop), generated a patch and sent it off to the <a href="http://www.t3i.nl/">place I got the patch from</a>.  The patch against T3i's ogg123 remote prepatch source is available.</p>
	<p>I researched <a href="http://bossogg.wishy.org/">Boss Ogg</a> (which has a fantastic name!), but it uses XMLRPC, which I'm turned off of for this project, as my initial tests in perl and PHP show that it's god awful slow, but damn cool and easy to setup and use.  I'm also more comfortable working in perl for a project of this size.</p>
	<p>Otherwise, Boss Ogg looks to be a very complete package, pick up and go, as it were.  Unfortunately, I'm not in the mood to just do an install and be done.</p>
	</dd>

<dt>Nov 19th, 2003</dt>
	<dd><p>I've decided that mserv and mpd are not close enough to how I want to use them, and I can't get seem to get excited about modifying them. I'm starting to write test programs to get the networking interface going, which will replace the MySQL transport I'm currently using, which is kind of ugly and slow (because I have to poll for changes via a query).  I'm also testing out using <a href="http://www.sqlite.org">SQLite</a> as the storage, to remove the dependancy on the relatively heavyweight MySQL all together, which is overkill for this.</p>
	<p>I also spent quite a bit of time getting a multithreaded perl installed under Trustix, which doesn't provide a multithreaded perl.  The fork design has proven too problematic in terms of subprocess control (I have a hard time getting the lowlevel details just right), hopefully I'll have better luck.</a></p>
	</dd>

<dt>Nov 18th, 2003</dt>
	<dd><p>Tried using XMLRPC/SOAP with perl's SOAP::Lite module, which has a huge number of dependancies (thank you, <a href="http://www.cpan.org/">CPAN</a>).  It's pretty cool, perl's AUTOLOAD and dynamic typing makes RPC a breeze, no need to predeclare all the remote functions, and SOAP::Lite does all the XML conversion behind the scenes (having to generate XML was one of the reasons I had not looked into SOAP sooner).  Unfortunately, it's quite slow (I was working over loopback).  I'm sure there's a way to make it faster, but I wasn't having much fun researching that. XMLRPC/SOAP is cool, but the natively appearing abstraction it gets you can be a red herring -- binding for another kind of RPC (text streams over TCP, ie SMTP, HTTP, etc) are trivial to write in <i>Your Favorite Langauge</i> if the interface is well defined, plus there is, by its very nature, less encapusulation that needs to take place than with XML-based RPC.</p></dd>

<dt>Nov 15th, 2003</dt>
	<dd><p>Both mpd and mserv seem to be lacking some of the features I need, namely some way to imply grouping of the tracks into albums and genres for browsing purposes, along with a way to designate the album coverart.  I suppose I could store this information in the ogg comment fields, but neither appears to have decent support for dumping comments to a client.  mserv implies a album/track structure based on the directory layout, which may cause problems for the web-based client I want to write to allow modifying the meta-data for browsing purposes.  mserv has ranking capabilities though, which is one of the things I want, but it's still kind of hazy as to how this works with a jukebox like I have.  mpd has a cleaner interface for automation, whereas mserv is designed a mini-mud (with other, graphical clients on top of that).</p></dd>

<dt>Nov 11th, 2003</dt>
	<dd><p>Found <a href="http://www.mserv.org/">mserv</a>, which seems to do everything I need, except for the ripping of the discs.  It also uses a client-server protocol over TCP that makes a lot of sense.  This will allow me to move away from MySQL as the communication and storage medium sooner.</p>
	<p>Also happened across <a href="http://www.musicpd.org/">mpd</a>, which also seems to fit the bill.  Research as commenced as to which one to use.</p></dd>

<dt>Nov 3rd, 2003</dt>
	<dd><p>Started creating website.</p></dd>

<dt>Nov 1st, 2003</dt>
	<dd><p>Did some final interface polishing up (finally gettind rid of the goofy up and down arrow icons I was using that idolatrare agreed were ugly) and moved the system downstairs to the pool room and hooked it up to the (relatively crappy, but we didn't find this out until now) built-in speakers.  Reconfigured for only one output (so there's no confusion as to how to queue things up).  The party we threw that night served as the initial usability testbed.  Responses were extremely positive, even with a bug that caused a ten second pause when an album was selected.</p></dd>

<dt>Oct 31th, 2003</dt>
	<dd><p>SDL-perl issues crop up again, and I spin my wheels until 4am tracking them down.  Unfortunately, the SDL-perl website is down, but that's okay, since the website didn't provide much more than the perldoc that comes with the source.</p></dd>

<dt>Oct 30th, 2003</dt>
	<dd><p>The initial design for the album browser and the track browser take final form.</p></dd>

<dt>Oct 29th, 2003</dt>
	<dd><p>While creating the <b>previous</b> and <b>next</b> album list buttons, I realize that 1152x768 on a native 1024x768 LCD screen isn't going to cut it, as the perfectly round buttons I made in The GIMP don't look round anymore.  In an epiphany, I realize that I might need to set some options for the traditionally problematic ProSavage video chipset, which I've had issues with before.  A google search turns up a page that describes the use of the <tt>"UseBIOS"</tt> S3 Device Option, which, when set to false, gets things working like a charm.</p></dd>

<dt>Oct 25th, 2003</dt>
	<dd><p>The touchscreen interface is started.  A lot of misstarts as I narrow down problems with SDL-perl and create workarounds.  I decide that creating my own widget set is the way to go.  Frustration with the lack of SDL-perl documentation, specificly complete lack of the OpenGL interface (which is apparently different enough from the C interface to SDL's OpenGL subsystem to make it difficult to get anything on the screen) sets in.</p></dd>

<dt>Oct 23th, 2003</dt>
	<dd><p>Touchscreen gets delivered.  I have trouble getting it to work in its native resolution, 1024x768, it seems to want to scale 1152x768 down, and XFree86's default VESA modes don't seem to be driving the screen at the correct sync and refresh rates to actually produce a picture at 1024x768.  I deem this to be a minor problem.</p></dd>

<dt>Week of Oct 12th, 2003</dt>
	<dd><p>Shuttle arrives, and I make sure to remove JP2 from the Shuttle's FX41 motherboard to get the FSB to operate at 133mhz.  I go through a few installations of RedHat before realizing that a distribution designed for desktop use isn't going to cut it.  Too much stuff to remove and too many installed dependancies.  I settle on using Trustix, and work from the other direction, doing the "minimal install with SSH" and building up from there.  RPM compilation and installation goes extremely smooth, better than I was expecting considering my experience with battling RPMs (thank you, <a href="http://www.freshrpms.net/">FreshRPMS</a>).</p></dd>

<dt>Week of Oct 5th, 2003</dt>
	<dd><p>Design begins on the server portion, and code is working in a few days on my RH9 desktop box, although I lack dedicated hardware to test it on.  At this point, I also begin researching SDL-perl, and have a hard time wading through the frozen-bubble source looking for hints on how to do things.</p></dd>

</dl>

</div>

<? require_once "includes/menu.php"; ?>
<? require_once "includes/credit.php"; ?>
<div id="lastmod">Last modified <?=date ("D, M jS, Y, H:i:s", filemtime(__FILE__));?></div>
