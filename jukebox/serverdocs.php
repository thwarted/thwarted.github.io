<?require_once "includes/head.php";?>
<body>
<?require_once "includes/logo.php";?>

<div id="Content">

<h1>Server Command List</h1>
<p>All commands return a status code, similar in format and meaning to HTTP status codes, in the first three columns.  200 means success.  201 means an "output list" follows, upto a line containing only a period (the result line also contains a count).  The status line in that case will have a list of fields between parens that label each column in the output list.  For output lists, the fields are delimited by tabs.  400 means command not found.  500 means server error, etc. <i>(I have not been very deligent in assigning these, as the scope is so small)</i>.</p>
<p>Tracks have both a trackid and a trackref.  A trackref is usually an albumid and a track number based on the order of that track on the album, separated by a slash.  Everywhere a trackid could be used, a trackref could be used instead, and vice versa. <i>(todo: make the syntax for trackrefs context specific, ie A/T for album/tracknum, or GgT for tracks relative to genre -- this needs to be thought about more)</i>.</p>
<p>The command "<tt>help x</tt>" is the same as the command "<tt>x help</tt>" where x is a command from this list.</p>
<dl>
  <dt><tt>noop
  [&lt;label&gt;]
  </tt></dt>
  <dd>No operation.  Always returns a 200 status code, the text of the status line will contain the optional &lt;label&gt; if specified.  This can be used to resync the client connection with the server's output.  The only label that shouldn't be used is <tt>help</tt>.</dd>

  <dt><tt>name
  &lt;name&gt;
  </tt></dt>
  <dd>Sets the name of the connection to &lt;name&gt;.  Used in server logs and other reporting.</dd>

  <dt><tt>time</tt></dt>
  <dd>Prints the server's idea of the current time, in UNIX time format.</dd>

  <dt><tt>who</tt></dt>
  <dd>Shows all the client connections and their set names</dd>

  <dt><tt>checksum
  &lt;type&gt;
  &lt;cmd&gt;
  </tt></dt>
  <dd>Executes <tt>&lt;cmd&gt;</tt> and calculates a checksum for its output.  <tt>&lt;type&gt;</tt> can be either <tt>md5</tt> or <tt>sha1</tt>.  This is most useful for commands that might produce a lot of output that the client may be caching, like cover art images.</dd>

  <dt><tt>volume 
  &lt;device&gt;
  [&lt;amount&gt;]
  </tt></dt>
  <dd>Reports the volume on 
  &lt;device&gt;, optionally setting it to
  &lt;amount&gt; first.  &lt;amount&gt; should be a number in the range of 0 to 100.
  </dd>

  <dt><tt>status</tt></dt>
  <dd>Returns the latest information about each device, both playing and reading devices.  Inapplicable fields are either 0 or blank.</dd>

  <dt><tt>rip
  &lt;device&gt;
  </tt></dt>
  <dd>Begin ripping from the reading device named &lt;device&gt;</dt>

  <dt><tt>abort
  &lt;device&gt;
  </tt></dt>
  <dd>Abort the ripping process currently running on &lt;device&gt;</dt>

  <dt><tt>pause
  &lt;device&gt;
  </tt></dt>
  <dd>Pause the song currently playing on output device &lt;device&gt;</dt>

  <dt><tt>skip
  &lt;device&gt;
  </tt></dt>
  <dd>Skip the song currently playing on output device &lt;device&gt;.  It is recorded that this entry was skipped.</dt>

  <dt><tt>track
  &lt;t&gt;
  </tt></dt>
  <dd>Detailed info about track &lt;t&gt;, a trackid or trackref.</dt>

  <dt><tt>rankupdate
  </tt></dt>
  <dd>Update track rankings and popularity. <i>This command will eventually be removed, and stats will be updated periodicly in another server thread.</i></dd>

  <dt><tt>tracks
  &lt;albumid&gt;
  </tt></dt>
  <dd>List the tracks on album &lt;albumid&gt; in the same format that the track command provides.</dd>

  <dt><tt>queued
  &lt;device&gt;
  </tt></dt>
  <dd>List the tracks queued on &lt;device&gt; in the same format that the track command provides.</dd>

  <dt><tt>devices
  </tt></dt>
  <dd>Dumps a list of all the devices the system knows about, along with their types.</dd>

  <dt><tt>play
  &lt;t&gt;
  [&lt;device&gt;]
  </tt></dt>
  <dd>Queue track &lt;t&gt; on &lt;device&gt; if specified, otherwise the default device.  &lt;t&gt; is either a trackid or a trackref.<dd>

  <dt><tt>albums
  [ &lt;albumid&gt; ... ]
  </tt></dt>
  <dd>List info about all albums or just the specified albumids.  By default the output list is sorted by performer and then album name.</dd>

  <dt><tt>randomize
  [ &lt;devicename&gt; ]
  for
  &lt;m&gt;
  </tt></dt>
  <dd>Starts randomized play on the specified device, or the default device, which will continue for &lt;m&gt; minutes.</dd>

  <dt><tt>coverart
  [ &lt;albumid&gt; | ripping ]
  </tt></dt>
  <dd>Dumps the cover art graphic file (usually a JPEG).  Byte count is included in the first line of the response.  Data ends with a period followed by a newline.  If <tt>ripping</tt> is specified as the argument, it will dump the cover art file for the album being currently ripped, if there is one.</dd>

  <dt><tt>flush &lt;devicename&gt;
  </tt></dt>
  <dd>flush all queued tracks on &lt;devicename&gt;</dd>

  <dt><tt>quit
  </tt></dt>
  <dd>Client disconnect.</dd>

  <dt><tt>help
  [&lt;cmd&gt;]
  </tt></dt>
  <dd>Show a list of all commands along with their descriptions, or just the specified command.</dd>

</dl>
</div>

<? require_once "includes/menu.php"; ?>
<? require_once "includes/credit.php"; ?>
<div id="lastmod">Last modified <?=date ("D, M jS, Y, H:i:s", filemtime(__FILE__));?></div>
