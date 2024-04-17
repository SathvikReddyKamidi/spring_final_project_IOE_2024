
CREATE TABLE IF NOT EXISTS `products`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(200) NOT NULL,
    `author` TEXT NOT NULL,
    `price` DECIMAL(7, 2) NOT NULL,
    `rrp` DECIMAL(7, 2) NOT NULL DEFAULT '0.00',
    `quantity` INT(11) NOT NULL,
    `img` TEXT NOT NULL,
    `date_added` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 6 DEFAULT CHARSET = utf8; INSERT INTO `products`(
    `id`,
    `name`,
    `author`,
    `price`,
    `rrp`,
    `quantity`,
    `img`,
    `date_added`
)
VALUES(
    1,
    'The Buddha In The Attic',
    'Julie Otsuka',
    '29.99',
    '0.00',
    10,
    'julie.jpg',
    '2011-03-13 17:55:22'
),(
    2,
    "The Tiger's Wife",
    'Téa Obreht',
    '14.99',
    '19.99',
    34,
    'tea.jpg',
    '2011-02-14 18:52:49'
),(
    3,
    'Duplex',
    'Kathryn Davis',
    '19.99',
    '0.00',
    23,
    'kathryn.jpg',
    '2013-03-01 18:47:56'
),(
    4,
    '10:04',
    'Ben Lerner',
    '9.99',
    '0.00',
    7,
    'ben.jpg',
    '2014-03-13 17:42:04'
),(
    5,
    'The Idiot',
    'Elif Batuman',
    '13.99',
    '15.99',
    15,
    'elif.jpg',
    '2017-01-10 08:32:15'
),(
    6,
    'Indian Horse',
    'Richard Wagamese',
    '44.99',
    '49.99',
    19,
    'richard.jpg',
    '2018-07-18 12:15:05'
),(
    7,
    'Life After Life',
    'Kate Atkinson',
    '13.99',
    '15.99',
    25,
    'kate.jpg',
    '2013-01-10 11:20:35'
),(
    8,
    'Atlas Of The Heart',
    'Brené Brown',
    '11.99',
    '0.00',
    6,
    'brenebrown.jpg',
    '2022-04-15 06:10:13'
),(
    9,
    'Black River',
    'Nilanjana S. Roy',
    '25',
    '29.99',
    32,
    'nilanjana.jpg',
    '2022-06-10 08:32:15'
),(
    10,
    'Harry Potter & The Deathly Hollows',
    'J K Rowling',
    '31.99',
    '34.99',
    58,
    'harrypotter7.jpg',
    '2007-01-10 21:40:55'
),(
    11,
    'The Path Made Clear',
    'Oprah Winfrey',
    '19.99',
    '0.00',
    17,
    'oprahwinfrey.jpg',
    '2019-11-19 12:32:16'
),(
    12,
    'Becoming',
    'Michelle Obama',
    '19.99',
    '24.99',
    21,
    'michelleobama.jpg',
    '2018-12-24 17:12:36'
),(
    13,
    'Unfinished',
    'Priyanka Chopra Jonas',
    '14.99',
    '18.99',
    15,
    'pcj.jpg',
    '2021-08-15 14:40:59'
);