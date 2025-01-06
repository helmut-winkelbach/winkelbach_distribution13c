--
-- Table structure for table 'pages'
--
CREATE TABLE pages (
    nav_icon_set varchar(255) DEFAULT '' NOT NULL,
    nav_icon_identifier varchar(255) DEFAULT '' NOT NULL,
    nav_icon int(11) unsigned DEFAULT '0',
    thumbnail int(11) unsigned DEFAULT '0',
);

--
-- Table structure for table 'tt_content'
--
CREATE TABLE tt_content (
    tx_bootstrappackage_timeline_item int(11) unsigned DEFAULT '0',
);

--
-- Table structure for table 'tx_bootstrappackage_timeline_item'
--

CREATE TABLE tx_bootstrappackage_timeline_item (
    tt_content int(11) unsigned DEFAULT '0',
    date datetime,
    header varchar(255) DEFAULT '' NOT NULL,
    bodytext text,
    icon_set varchar(255) DEFAULT '' NOT NULL,
    icon_identifier varchar(255) DEFAULT '' NOT NULL,
    icon_file int(11) unsigned DEFAULT '0',
    image int(11) unsigned DEFAULT '0',
);
