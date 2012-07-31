#
# Table structure for table 'tx_bnadaptiveprofiles_profile'
#
CREATE TABLE tx_bnadaptiveprofiles_profile (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	name tinytext,
	minimum_width int(11) DEFAULT '0' NOT NULL,
	maximum_width int(11) DEFAULT '0' NOT NULL,
	is_default_profile tinyint(3) DEFAULT '0' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
) ENGINE=InnoDB;