<?require_once "includes/head.php";?>
<body>
<?require_once "includes/logo.php";?>

<div id="Content">

<h1>Downloads</h1>

<h3>Latest</h3>
<p>The tar.bz2 contain an INSTALL file and a copy of the CHANGELOG, along with the code for both the server and the client.  Versions from 1.3 and on include a script to help you check installation and run-time dependencies.
<dl>
<dt><a href="CHANGELOG.txt">CHANGELOG</a></dt>
	<dd>The changelog.</dd>
<dt><a href="dl.php/thundaural-2.1.tar.bz2">thundaural-2.1.tar.bz2</a></dt>
    <dd>(sha1sum <tt>134f2570e8e581aa59a527e7b3a2880c9a16cfa4</tt>)<br/>
	Both the server and the client are being distributed in a single file now.  Also includes some font files that 
	I'm not using and some other stuff that's checked into source control that I have not removed yet.  See the 
	included INSTALL file and the <a href="installation.php">installation page</a> for installation instructions.</dd>
</dl>
<hr/>
<h3>Dependencies</h3>
<p>This is not an exhaustive list of dependancies.  See the <tt>INSTALL*</tt> files in the distribution for a complete list.</p>
<dl>
<dt><a href="dl.php/SDL_Perl-2.1.0-3tef.tar.bz2">SDL_Perl-2.1.0-3tef.tar.bz2</a></dt>
	<dd>(sha1sum 15c8177699dbcdd4d1765355d96282d00ec3bfce)<br/>
	My custom version of SDL_Perl.  There are a number of modifications, mainly, an interface to the SDL_PushEvent function, and
    a bunch of bug fixes.<br/>
	I've sent my changes off to the SDL_Perl maintainers, and I'm told they will appear in a future release.  Until such a release 
	is made, use this version, as it has the patch for the functions that Thundaural needs already applied. It is otherwise 
	exactly the same as the version available from <a href="http://sdl.perl.org/">sdl.perl.org</a>.<br/>
    You can also grab the latest and greatest from my subversion repository at <a href="http://phux.net/websvn/">http://phux.net/websvn/</a>.  There are some minor fixes in source control that have not made it to this download page yet.
	Also available are these older versions:
        <ul><li><a href="dl.php/SDL_perl-2.0.2-thundaural.tar.bz2">2.0.2</a></li>
            <li><a href="dl.php/SDL_Perl-2.1.0-eventpush.tar.bz2">SDL_Perl-2.1.0-eventpush.tar.bz2</a></li></ul>
	</dd>
	<!--
<dt><a href="dl.php/vorbis-tools-1.0.1-1+remote.src.rpm">vorbis-tools-1.0.1-1+remote.src.rpm</a><br/>
<i>or</i><br/>
<a href="dl.php/vorbis-tools-1.0-remote2patch.aab">vorbis-tools-1.0-remote2patch.aab</a> <i>and</i> <a href="dl.php/vorbis-tools-1.0.1.tar.gz">vorbis-tools-1.0.1.tar.gz</a><dt>
	<dd>Originally, <a href="http://www.t3i.nl/shareware/">t3i.nl</a> had a patch to ogg123 to give it "remote" functionality, similar to mpg123's.  Well, <a href="http://www.xiph.org">xiph.org</a> apparently decided to release a newer version of vorbis-tools than this patch could handle (or something, I don't know for sure).  But on top of that, t3i.nl's patch had a bug in it, whereby if stdin was closed, it would go into an infinite loop.  I provided a patch to that patch to fix that bug, and sent it to the guy who wrote the original patch, who I never heard back from.  t3i.nl didn't allow direct links to their stuff, so I didn't want to put his patch on my site (they obviously wanted the hits or something), so I provided a link to their root page and my patch against their patch.  So I go to install a new jukebox, and none of this stuff is patching cleanly.  So I redid the whole thing, and I'm providing a patch to the xiph.org source with both t3i.nl's remote patch plus my fix for their patch.  You need <i>either</i> the src.rpm, which contains the patch itself, but is otherwise the 1.0.1-1 src.rpm from xiph.org<sup>*</sup>, <i>or</i> the .tar.gz and the -remote2patch.aab, which you should apply with <tt>patch -p1</tt>.<br/>
	<br/>
	* If you use the .src.rpm, note that I've commented out the lines that designate the requirements of FLAC and Speex, so if you want those to be listed as dependancies for the resultant RPM (which are not required for Thundaural), then you'll need to uncomment them.
	This section <i>used to</i> say:<blockquote>
	<a href="do not use">ogg123.stdinclose.patch</a><br/>
	a patch against <a href="http://www.t3i.nl/shareware/"><strike>http://www.t3i.nl/shareware/vorbis-tools-1.0-remote-patched-2.tgz</strike></a> that fixes a bug in the remote control code.  You can't download that patch directly from that site, you have to browse for it.</blockquote>which I'm keeping for the record.
	-->
	</dd>
</dl>

<hr/>
<h3>Previous Releases</h3>
<ul>
<li><a href="dl.php/thundaural-2.0.tar.bz2">thundaural-2.0.tar.bz2</a> (sha1sum 9a3e6fa384a1b6306d19d6a6d7bfa25923e0d3b7)</li>
<li><a href="dl.php/thundaural-1.7.tar.bz2">thundaural-1.7.tar.bz2</a> (sha1sum 5c587182b8dff472a929b07b703ad6f8d443e57e)</li>
<li><a href="dl.php/thundaural-1.6.tar.bz2">thundaural-1.6.tar.bz2</a> (sha1sum 0d80ea9e92ee4e4263897baa4b62e6c2bed90af8)</li>
<li><a href="dl.php/thundaural-1.5.1.tar.bz2">thundaural-1.5.1.tar.bz2</a> (sha1sum 24815a393361dbbc4149ce5e3f653f1bdbe0c0bb)</li>
<li><a href="dl.php/thundaural-1.5.tar.bz2">thundaural-1.5.tar.bz2</a> (sha1sum f1b181f6685dac180f4d2ee6943f486e17513c95)</li>
<li><a href="dl.php/thundaural-1.4-server.tar.bz2">thundaural-1.4-server.tar.bz2</a> (sha1sum b0524cc10e69ccb9110e28604d1db3eab575e927)</li>
<li><a href="dl.php/thundaural-1.4-client.tar.bz2">thundaural-1.4-client.tar.bz2</a> (sha1sum 61c657599978291af0dbcc59db1befc632f821c4)</li>
<li><a href="dl.php/thundaural-1.3-server.tar.bz2">thundaural-1.3-server.tar.bz2</a> (sha1sum 3ba45dc1c3df383baa6e23233de2ab07c9c67afa)</li>
<li><a href="dl.php/thundaural-1.3-client.tar.bz2">thundaural-1.3-client.tar.bz2</a> (sha1sum 22ae504b2504ead5b6647426c00ecc430ba71b2e)</li>
<li><a href="dl.php/thundaural-1.2-server.tar.bz2">thundaural-1.2-server.tar.bz2</a> (sha1sum 92fee066e0e49c4d687d63963df1b01e2744705e)</li>
<li><a href="dl.php/thundaural-1.2-client.tar.bz2">thundaural-1.2-client.tar.bz2</a> (sha1sum d27862a9bf0676cc2d1e8b6a1655fa9087c262d9)</li>
<li><a href="dl.php/thundaural-1.1-server.tar.bz2">thundaural-1.1-server.tar.bz2</a> (sha1sum fbdd5486117540ccbe74b58c3be1b4d3cbe683a4)</li>
<li><a href="dl.php/thundaural-1.1-client.tar.bz2">thundaural-1.1-client.tar.bz2</a> (sha1sum 7c3d57fbe1a76c5cd5b1c33485f3615f9e5509cc)</li>
<li><a href="dl.php/thundaural-1.0-server.tar.bz2">thundaural-1.0-server.tar.bz2</a> (sha1sum ce9175bf405a48865e8f03b788a11f0d5305d975)</li>
<li><a href="dl.php/thundaural-1.0-client.tar.bz2">thundaural-1.0-client.tar.bz2</a> (sha1sum 6f7080c631c2c8bc77f0da32352559c9077f6870)</li>
</ul>

<hr/>
<h3>Legacy files</h3>
<dl>
<dt><a href="dl.php/jukeboxdb-schema.mysql.sql">jukeboxdb-schema.mysql.sql</a></dt>
	<dd>The database schema for the jukebox, mysql syntax.  The code doesn't currently support MySQL, but changing it to use MySQL (or the database backend of your choice)
	shouldn't be to hard, just need to change the server code's DBD definitions.  Note that there are a few things in the server code that SQLite supports that MySQL doesn't
	(like views) that you'll have to work around.</dd>
<dt><a href="dl.php/jukeboxdb-schema.sqlite.sql">jukeboxdb-schema.sqlite.sql</a></dt>
	<dd>
	The database schema for the jukebox, sqlite syntax.  
	For reference only.  The current authoritative source for the database schema is in server/DatabaseSetup.pm.  There is also a file database/schema.sql in the 
	server distribution, but that might not be up to date.
	</dd>
<dt>msfonts-1.2.1-1.noarch.rpm</dt>
	<dd>These fonts are no longer used.  I'm unable to verify my ability to redistribute them, and the Bitstream Vera font, which is
	freely redistributable, looks better.
	</dd>
</dl>

</div>

<? require_once "includes/menu.php"; ?>
<? require_once "includes/credit.php"; ?>
<div id="lastmod">Last modified <?=date ("D, M jS, Y, H:i:s", filemtime(__FILE__));?></div>
