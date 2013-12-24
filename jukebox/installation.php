<?require_once "includes/head.php";?>
<body>
<?require_once "includes/logo.php";?>

<div id="Content">

<h1>Installation</h1>
<p>The INSTALL file in the distribution is much more detailed and up-to-date.  This should give you a quick overview, though.</p>
<hr>
<p>Before attempting installation this early in the development, you should have the following knowledge or at least be comfortable with performing the following tasks:
<ul>
<li>compiling and installing software, perhaps from src RPMS</li>
<li>configuring XFree86 -- may not apply if you use a distribution that sets it up for you</li>
<li>editing inittab</li>
<li>using the SQLite command line client</li>
</ul>
</p>

<h3>Installation and Getting it Running</h3>
<ol>
<li>Untar the distribution to <tt>/usr/local</tt>.  It will make a directory named <tt>thundaural-XX</tt>, where XX is the version number.  I suggest you rename or symlink this 
    directory to just <tt>thundaural</tt>, but this is optional.</li>
<li>If you plan on running the server as user other than root, become that user</li>
<li>cd into the thundaural directory and type<pre>$ ./checkdeps --server</pre>If everything checks out, it will create a configuration file.  If not, resolve any dependancies 
    and/or create any directories.</li>
<li>move the created configuration file to /etc/thundaural or just leave it in the directory there.</li>
<li>Run<pre>$ ./checkdeps --client</pre>Resolve any dependancies.  Some of the dependancies are on the <a href="downloads.php">download page</a>.</li>
<li>If you are going to run the jukebox in a dedicated environment, see the startup/README.startup file for details</li>
  Otherwise, you can start the server with:<blockquote>
<pre>
$ cd /usr/local/thundaural
$ ./taserver
</pre></blockquote>
And starting the client is just as easy with:<blockquote>
<pre>
$ cd /usr/local/thundaural/
$ ./taclient-touchscreen
</pre></blockquote>
The server takes a <tt>--port</tt> option to tell it which port to listen on, and <tt>--foreground</tt>, which keeps it in the foreground.
The client takes <tt>--host</tt> and <tt>--port</tt> to tell it which server to try to connect to.  Host defaults to a machine named <tt>jukebox</tt> (you might want to edit
<tt>/etc/hosts</tt>) and the port defaults to 9000.
The server will take <tt>--log stderr</tt>, <tt>--log syslog</tt>, or <tt>--log /path/to/file</tt> to determine where status and debugging output will go.  By default, it all goes to the syslog.
</li>
</ol>
<p>If everything goes smoothly, put an audio CD in the machine's cdrom drive, goto the rip page (the red cdrom icon in the upper right) and hit <b>start</b>.</p>
<p>Alternatively, if the client doesn't start, you can still start a CD rip (and thus an initial database load) by telneting to port 9000 on the machine the server is running on and typing 'rip cdrom'.  Typing 'status' will show the current status of ripping.  You can type 'help' for a list of commands.
<!-- 
<li>Create /home/storage</li>
<li>Create /home/storage/db</li>
<li>
   <strike>Create the SQLite database /home/storage/db/data.db using the command <tt>touch /home/storage/db/data.db</tt></strike>
   This step is no longer necessary - the server now (version 1.4) creates the database structures if they don't exist.</li>
<li>Import the <a href="downloads.php">SQLite schema</a> into this SQLite database</li>
<li>Modify server/Settings.pm to taste.  More information on what all this stuff means will be forthcoming.  If you have some Linux audio experience, what to change should be obvious.  If you have only one audio card in your machine, you shouldn't need to change anything.</li>
<li>Start up the server:
	<pre>
	$ cd server
	$ ./server.pl</pre>
	You can optionally provide - stderr as an argument, otherwise any information it would print will go to the syslog.
</li>
<li>Start up the client:
	<pre>
	$ cd client
	$ ./interface.pl</pre>
	You can optionally provide - stderr as an argument, otherwise any information it would print will go to the syslog.</li>
-->
<h3>Touchscreen Config</h3>
<p>
I'm using an Elotouch touchscreen, which has XFree86 drivers.  It emulates a mouse.  See the <tt>elographics(4)</tt> man page.
</p>

</div>

<? require_once "includes/menu.php"; ?>
<? require_once "includes/credit.php"; ?>
<div id="lastmod">Last modified <?=date ("D, M jS, Y, H:i:s", filemtime(__FILE__));?></div>
