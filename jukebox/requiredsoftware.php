<?require_once "includes/head.php";?>
<body>
<?require_once "includes/logo.php";?>

<div id="Content">

<h1>Required Software</h1>
<ul>
<li>linux distribution with X and OSS support for your sound cards</li>
<li>a multithreaded perl, with perl SDL 2.0+ (see the download page) and DBD::SQLite</li>
<li>dagrab (http://vertigo.fme.vutbr.cz/~stibor/dagrab.html)
<li><a href="http://search.cpan.org/~msergeant/DBD-SQLite-0.29/">DBD::SQLite</a></li>
<li>PHP CLI, which the cover art grabber uses (interfaces with Amazon web services)</li>
<li>cdda2wav</li>
<li>ogg vorbis for oggenc, and the ogg/vorbis libs for playback</li>
<li>libmad if you plan on manually (for now) putting MP3s on the jukebox</li>
<li>SDL</li>
<ul>
	<li>SDL_gfx</li>
	<li>SDL_image</li>
	<li>SDL_ttf</li>
	<li>installed, but not used as far as I know: SDL_net</li>
	<li>installed, but not used as far as I know: SDL_mixer</li>
</ul>
<li>and, of course, any of the required dependancies for the above list</li>
</ul>
<h1>From the INSTALL_LIBS_AND_MODULES file</h1>
<p>
Here's a quick list of of the libraries and perl modules needed by
Thundaural Jukebox.  Many desktop/workstation installations may
already have them.  Be sure to install any "development" packages
so you can compile the perl modules that link with those libraries.
I'm reasonablly sure this is an exhaustive list, but I might have
missed something.</p>

<p>Before you start installing things on this list, be sure to run the
checkdeps script, which will tell you if you need to install something.</p>

Libraries
<ul>
<li>for the client<ul>
   <li>libjpeg-6b</li>
   <li>libjpeg-devel-6b</li>
   <li>libpng-1.2.5</li>
   <li>libpng-devel-1.2.5</li>
   <li>SDL-1.2.7-1</li>
   <li>SDL-devel-1.2.7-1</li>
   <li>SDL_gfx-2.0.11-1</li>
   <li>SDL_gfx-devel-2.0.11-1</li>
   <li>SDL_image-1.2.3-1</li>
   <li>SDL_image-devel-1.2.3-1</li>
   <li>SDL_ttf-2.0.6-1</li>
   <li>SDL_ttf-devel-2.0.6-1</li>
</ul></li>

<li>for the server<ul>
   <li>libvorbis-1.0.1-1</li>
   <li>libvorbis-devel-1.0.1-1</li>
   <li>vorbis-tools-1.0.1-1</li>
   <li>libogg-1.1-1</li>
   <li>libogg-devel-1.1-1</li>
   <li>libao-0.8.4-1 (needed by vorbis-tools)</li>
   <li>libao-devel-0.8.4-1</li>
   <li>libmad-0.15.1b</li>
   <li>libmad-devel-0.15.1b</li>
</ul></li></ul>


Perl Modules
<ul>
<li>I think these are part of the perl standard distribution<ul>
   <li>File::Basename</li>
   <li>Socket</li>
   <li>IO::Socket</li>
   <li>IO::Socket::INET</li>
   <li>IO::Select</li>
   <li>Data::Dumper</li>
   <li>IO::File</li>
</ul></li>

<li>these are available on CPAN<ul>
   <li>DBI</li>
   <li>DBD::SQLite</li>
   <li>LWP</li>
   <li>LWP::UserAgent</li>
   <li>XML::Ximple</li>
   <li>CDDB_get</li>
   <li>Ogg::Vorbis::Decoder</li>
   <li>Audio::Mad</li>
   <li>MP3::Info</li>
   <li>Audio::DSP</li>
   <li>Audio::Wav</li>
</ul></li>

<li>these are all installed from perl-SDL. Download it from the
   thundaural downloads page<ul>
   <li>SDL::Surface</li>
   <li>SDL::Constants</li>
   <li>SDL::App</li>
   <li>SDL::Event</li>
   <li>SDL::Color</li>
   <li>SDL::Timer</li>
   <li>SDL::Font</li>
   <li>SDL::TTFont</li>
   <li>SDL::Tool::Graphic</li>
   <li>SDL::Cursor</li>
</ul></li>
</ul>

You'll also need a threaded perl (which you can verify with 
"perl -V | grep 'usethreads=define'"), which should come with 
these modules:
<ul>
   <li>threads</li>
   <li>threads::shared</li>
   <li>Thread::Queue</li>
</ul>


</div>

<? require_once "includes/menu.php"; ?>
<? require_once "includes/credit.php"; ?>
<div id="lastmod">Last modified <?=date ("D, M jS, Y, H:i:s", filemtime(__FILE__));?></div>
