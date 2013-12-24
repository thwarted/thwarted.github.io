-- MySQL dump 9.09
--
-- Host: localhost    Database: jukebox
---------------------------------------------------------
-- Server version	4.0.15

--
-- Table structure for table `albums`
--

CREATE TABLE albums (
  albumid int(11) NOT NULL auto_increment,
  performer varchar(128) default NULL,
  name varchar(128) NOT NULL default '',
  cddbid varchar(8) NOT NULL default '',
  length int(11) default NULL,
  riptime int(11) default NULL,
  tracks int(11) NOT NULL default '0',
  coverartfile varchar(128) default NULL,
  PRIMARY KEY  (albumid)
) TYPE=InnoDB;

--
-- Table structure for table `genres`
--

CREATE TABLE genres (
  genreid int(11) NOT NULL auto_increment,
  genre varchar(64) NOT NULL default '',
  PRIMARY KEY  (genreid),
  UNIQUE KEY category (genre)
) TYPE=InnoDB;

--
-- Table structure for table `layout`
--

CREATE TABLE layout (
  devicename char(32) NOT NULL default '',
  type char(32) NOT NULL default '',
  devicefile char(255) NOT NULL default ''
) TYPE=InnoDB;

--
-- Table structure for table `playhistory`
--

CREATE TABLE playhistory (
  playhistoryid int(11) NOT NULL auto_increment,
  trackid int(11) NOT NULL default '0',
  devicename varchar(32) NOT NULL default '',
  requestedat datetime NOT NULL default '0000-00-00 00:00:00',
  action enum('queued','playing','played','skipped','failed') NOT NULL default 'queued',
  actedat datetime default NULL,
  PRIMARY KEY  (playhistoryid),
  KEY devicename (devicename),
  KEY requestedat (requestedat)
) TYPE=InnoDB;

--
-- Table structure for table `status`
--

CREATE TABLE status (
  name varchar(32) NOT NULL default '',
  devicename varchar(32) default NULL,
  value varchar(255) default NULL,
  KEY name (name)
) TYPE=InnoDB;

--
-- Table structure for table `tracks`
--

CREATE TABLE tracks (
  trackid int(11) NOT NULL auto_increment,
  albumid int(11) NOT NULL default '0',
  performer varchar(128) NOT NULL default '',
  length int(11) default NULL,
  name varchar(128) NOT NULL default '',
  albumorder int(11) NOT NULL default '0',
  genreid int(11) default NULL,
  filename varchar(128) NOT NULL default '',
  PRIMARY KEY  (trackid)
) TYPE=InnoDB;

