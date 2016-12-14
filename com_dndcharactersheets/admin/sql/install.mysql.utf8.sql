DROP TABLE IF EXISTS `#__helloworld`;
 
CREATE TABLE `#__helloworld` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`greeting` VARCHAR(25) NOT NULL,
	`published` tinyint(4) NOT NULL,
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;
 
INSERT INTO `#__helloworld` (`greeting`) VALUES
('Hello World!'),
('Good bye World!');

CREATE TABLE IF NOT EXISTS `#__dndcs_character` (
	`character_id`	INT(13)	NOT NULL AUTO_INCREMENT,
	`joomla_user_id`	INT(13) NOT NULL,
	PRIMARY KEY (`character_id`),
	FOREIGN KEY (`joomla_user_id`)
		REFERENCES `#__users`(`id`)
		ON DELETE CASCADE
) 	ENGINE=INNODB
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

CREATE TABLE IF NOT EXISTS `#__dndcs_description` (
	`description_id`	INT(13) AUTO_INCREMENT,
	`name`	VARCHAR(256),
	`race`	VARCHAR(64),
	`gender`	VARCHAR(64),
	`height`	VARCHAR(64),
	`weight`	VARCHAR(64),
	`size`	VARCHAR(64),
	`age`	VARCHAR(64),
	`eye`	VARCHAR(64),
	`hair`	VARCHAR(64),
	`skin`	VARCHAR(64),
	`alignment_good_evil`	VARCHAR(64),
	`alignment_law_chaos`	VARCHAR(64),
	`deity`	VARCHAR(64),
	`background`	VARCHAR(64),
	PRIMARY KEY (`description_id`)
) 	ENGINE=INNODB
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;
	
CREATE TABLE IF NOT EXISTS `#__dndcs_sheet` (
	`sheet_id`	INT(13)	NOT NULL AUTO_INCREMENT,
	`date_archived` DATETIME NULL,
	`date_created`	DATETIME NOT NULL,
	`date_modified`	DATETIME NOT NULL,
	`modified_by`	INT(13),
	`character_id`	INT(13) NOT NULL,
	`description_id`	INT(13) NOT NULL,
	`hp_max`	INT(4),
	`hp_current`	INT(4),
	`non_lethal`	INT(4),
	PRIMARY KEY (`sheet_id`),
	FOREIGN KEY (`modified_by`)
		REFERENCES `#__users`(`id`)
		ON DELETE CASCADE,
	FOREIGN KEY (`character_id`)
		REFERENCES `#__dndcs_character`(`character_id`)
		ON DELETE CASCADE,
	FOREIGN KEY (`character_id`)
		REFERENCES `#__dndcs_description`(`description_id`)
		ON DELETE CASCADE
) 	ENGINE=INNODB
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

CREATE TABLE IF NOT EXISTS `#__dndcs_core_stat_list` (
	stat_id		INT(2)  AUTO_INCREMENT NOT NULL,
	stat_name	VARCHAR(16) NOT NULL,
	stat_abbr	VARCHAR(3) NOT NULL,
	PRIMARY KEY (`stat_id`)
) 	ENGINE=INNODB
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

INSERT IGNORE INTO `#__dndcs_core_stat_list` (`stat_id`,`stat_name`,`stat_abbr`) VALUES
(-1,'none','NO'),
( 1,'strength','STR'),
( 2,'dexterity','DEX'),
( 3,'constitution','CON'),
( 4,'intelegence','INT'),
( 5,'wisdom','WIS'),
( 6,'charisma','CHA');

CREATE TABLE IF NOT EXISTS `#__dndcs_core_stat` (
	sheet_id	INT(13),
	stat_id		INT(2),
	score		INT(2),
	gear		INT(2),
	temp		INT(2),
	PRIMARY KEY (`sheet_id`, `stat_id`),
	FOREIGN KEY (`sheet_id`)
		REFERENCES `#__dndcs_sheet`(`sheet_id`)
		ON DELETE CASCADE,
	FOREIGN KEY (`stat_id`)
		REFERENCES `#__dndcs_core_stat_list`(`stat_id`)
		ON DELETE CASCADE
) 	ENGINE=INNODB
	DEFAULT CHARSET =utf8;
	
CREATE TABLE IF NOT EXISTS `#__dndcs_skill_list` (
	skill_id		INT(3)  AUTO_INCREMENT NOT NULL,
	skill_name	VARCHAR(64),
	primary_ability	INT(2),
	trained_only	BOOLEAN,
	shown_by_default	BOOLEAN,
	PRIMARY KEY (`skill_id`),
	FOREIGN KEY (`primary_ability`)
		REFERENCES `#__dndcs_core_stat_list`(`stat_id`)
		ON DELETE CASCADE
) 	ENGINE=INNODB
	AUTO_INCREMENT =600
	DEFAULT CHARSET =utf8;

INSERT IGNORE INTO `#__dndcs_skill_list` (`skill_id`,`skill_name`,`primary_ability`,`trained_only`,`shown_by_default`) VALUES
(101,'appraise',4,false,true), 
(102,'balance',2,false,true),
(103,'bluff',6,false,true),
(104,'climb',1,false,true),
(105,'concentration',3,false,true),
(106,'craft()',4,false,true),
(107,'decipher script',4,false,true),
(108,'diplomacy',6,false,true),
(109,'disable device',4,false,true),
(110,'disguise',6,false,true),
(111,'escape artist',2,false,true),
(112,'forgery',4,false,true),
(113,'gather information',6,false,true),
(114,'handle animal',6,false,true),
(115,'heal',5,false,true),
(116,'hide',2,false,true),
(117,'intimidate',6,false,true),
(118,'jump',1,false,true),
(119,'knowledge()',4,false,true),
(120,'listen',5,false,true),
(121,'move silently',2,false,true),
(122,'open lock',2,false,true),
(123,'perform()',6,false,true),
(124,'profession()',5,false,true),
(125,'ride',2,false,true),
(126,'search',4,false,true),
(127,'sense motive',5,false,true),
(128,'sleight of hand',2,false,true),
(129,'speak language',-1,false,true),
(130,'spellcraft',4,false,true),
(131,'spot',5,false,true),
(132,'survival',5,false,true),
(133,'swim',1,false,true),
(134,'tumble',2,false,true),
(135,'use magic device',6,false,true),
(136,'use rope',2,false,true),

(201,'craft(alchemy)',4,true,false),

(301,'knowledge(arcane)',4,true,false),
(302,'knowledge(architecture)',4,true,false),
(303,'knowledge(dungeoneering)',4,true,false),
(304,'knowledge(geography)',4,true,false),
(305,'knowledge(history)',4,true,false),
(306,'knowledge(local)',4,true,false),
(307,'knowledge(nature)',4,true,false),
(308,'knowledge(nobility)',4,true,false),
(309,'knowledge(religion)',4,true,false),
(310,'knowledge(the planes)',4,true,false),

(401,'perform(act)',6,false,false),
(402,'perform(comedy)',6,false,false),
(403,'perform(dance)',6,false,false),
(404,'perform(keyboards)',6,false,false),
(405,'perform(oratory)',6,false,false),
(406,'perform(percussion)',6,false,false),
(407,'perform(strings)',6,false,false),
(408,'perform(wood winds)',6,false,false),
(409,'perform(sing)',6,false,false),

(501,'profession()',5,true,false);

CREATE TABLE IF NOT EXISTS `#__dndcs_skill` (
	`sheet_id`	INT(13) NOT NULL, 
	`skill_id`	INT(3) NOT NULL,
	`class_skill`	BOOLEAN,
	`ranks`		INT(2),
	`racial`		INT(2),
	`synergy`		INT(2),
	`misc`		INT(2),
	`notes`		TEXT,
	PRIMARY KEY (`skill_id`, `sheet_id`),
	FOREIGN KEY (`skill_id`)
		REFERENCES `#__dndcs_skill_list`(`skill_id`)
		ON DELETE CASCADE,
	FOREIGN KEY (`sheet_id`)
		REFERENCES `#__dndcs_sheet`(`sheet_id`)
		ON DELETE CASCADE
) 	ENGINE=INNODB
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;
