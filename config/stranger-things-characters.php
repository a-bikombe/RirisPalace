<?php
// back-end of stranger-things.php

$plot = "Set in the fictional town of Hawkins, Indiana in the 1980s, the first season focuses on the investigation into the disappearance of a young boy amid supernatural events occurring around the town including the appearance of a psychokinetic girl who helps
the missing boy's friends in their own search.";

$links = [
	'eleven' => '<a href="#eleven" class="no-link-color no-decor">El</a>',
	'mike' => '<a href="#mike" class="no-link-color no-decor">Mike</a>',
	'will' => '<a href="#will" class="no-link-color no-decor">Will</a>',
	'finn' => '<a href="finn.php" class="no-link-color no-decor" id="oops-finn-link" title="You don\'t wanna do that">I\'m in love with him oops</a>',
	'robin' => '<a href="#robin" class="no-link-color no-decor">a lesbian</a>',
	'lucas' => '<a href="#lucas" class="no-link-color no-decor">Lucas</a>',
	'dustin' => '<a href="#dustin" class="no-link-color no-decor">Dustin</a>',
	'max' => '<a href="#max" class="no-link-color no-decor">Max</a>',
	'billy' => '<a href="#billy" class="no-link-color no-decor">Billy</a>',
	'karen' => '<a href="#karen" class="no-link-color no-decor">Karen</a>',
	'joyce' => '<a href="#joyce" class="no-link-color no-decor">Joyce</a>',
	'nancy' => '<a href="#nancy" class="no-link-color no-decor">Nancy</a>',
	'steve' => '<a href="#steve" class="no-link-color no-decor">Steve</a>',
	'jonathan' => '<a href="#jonathan" class="no-link-color no-decor">Jonathan</a>'
];

$seasons = [
	'season-1' => [
		'seasonName' => 'Season 1',
		'characters' => [
			'joyce' => [
				'images' => [
					'Season 1' => 'https://media.glamour.com/photos/59f21012ad714a335821fc8a/4:3/w_1328,h_996,c_limit/ST%20(1).jpg',
					'Season 2' => 'images/stranger-things/s1/joyce/s2.jpeg',
					'Season 3' => 'images/stranger-things/s1/joyce/s3.png',
					'Season 4' => 'images/stranger-things/s1/joyce/s4.png',
					'Season 5' => 'images/stranger-things/s1/joyce/s4.png'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Joyce_Byers',
				'characterName' => 'Joyce "Have You Seen My Son" Byers',
				'content' => [
					'Nervous',
					'Desperate',
					'Just wants her son back',
					'A cigarette a day keeps the pain at bay',
					'Has ' . $links['will'] . ' as her sole purpose for living until realizing the existence of magnets',
					'Elite'
				]
			],
			'hopper' => [
				'images' => [
					'Season 1' => 'images/stranger-things/s1/hopper/s1.png',
					'Season 2' => 'images/stranger-things/s1/hopper/s2.png',
					'Season 3' => 'images/stranger-things/s1/hopper/s3.jpeg',
					'Season 4' => 'images/stranger-things/s1/hopper/s4.jpeg',
					'Season 5' => 'images/stranger-things/s1/hopper/s4.jpeg'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Jim_Hopper',
				'characterName' => 'Chief What\'s His Name',
				'content' => [
					'Hoppy',
					'Not having it',
					$links['joyce'] . '\'s boyfriend',
					'Coffee and contemplation',
					'Punches away his problems',
					$links['eleven'] . '\'s dad',
					'Hates ' . $links['mike']
				]
			],
			'mike' => [
				'images' => [
					'Season 1' => 'images/stranger-things/s1/mike/s1.png',
					'Season 2' => 'images/stranger-things/s1/mike/s2.jpeg',
					'Season 3' => 'images/stranger-things/s1/mike/s3.jpeg',
					'Season 4' => 'images/stranger-things/s1/mike/s4.png',
					'Season 5' => 'images/stranger-things/s1/mike/s4.png'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Mike_Wheeler',
				'characterName' => 'Mikey',
				'content' => [
					'Essentially the leader of his friend group',
					'Annoying to his friends',
					'Repeats himself a lot',
					'Sassy',
					'Loves his friends but mostly ' . $links['eleven'],
					'Has a lot of red flags because he is in fact a Man&trade;',
					'But season 3/4 Mike made the red flags turn green',
					$links['finn']
				]
			],
			'eleven' => [
				'images' => [
					'Season 1' => 'images/stranger-things/s1/eleven/s1.jpg',
					'Season 2' => 'images/stranger-things/s1/eleven/s2.jpeg',
					'Season 3' => 'images/stranger-things/s1/eleven/s3.jpeg',
					'Season 4' => 'images/stranger-things/s1/eleven/s4.jpeg',
					'Season 5' => 'images/stranger-things/s1/eleven/s4.jpeg'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Eleven',
				'characterName' => '011',
				'content' => [
					'Yasssss queen',
					'Better than her three male friends',
					'Has telekinetic powers and a lot of nosebleeds',
					'Only says "' . $links['mike'] . '" and "Eggos"',
					'Really loves both',
					'Does everything to protect ' . $links['mike'],
					'Is only just starting to realize she has a personality outside of the men in her life'
				]
			],
			'dustin' => [
				'images' => [
					'Season 1' => 'images/stranger-things/s1/dustin/s1.jpg',
					'Season 2' => 'images/stranger-things/s1/dustin/s2.jpeg',
					'Season 3' => 'images/stranger-things/s1/dustin/s3.png',
					'Season 4' => 'images/stranger-things/s1/dustin/s3.png',
					'Season 5' => 'images/stranger-things/s1/dustin/s3.png'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Dustin_Henderson',
				'characterName' => 'Dusty-Bun',
				'content' => [
					'I love him more than I love ' . $links['mike'],
					'Genuinely believes in ' . $links['eleven'],
					'Sooooooo cute',
					'Nilla Wafer connoisseur',
					'Loves animals and has(d) a cat named Mews',
					'Hates the lunch lady (bald-faced liar)'
				]
			],
			'lucas' => [
				'images' => [
					'Season 1' => 'images/stranger-things/s1/lucas/s1.png',
					'Season 2' => 'images/stranger-things/s1/lucas/s2.jpeg',
					'Season 3' => 'images/stranger-things/s1/lucas/s3.png',
					'Season 4' => 'images/stranger-things/s1/lucas/s3.png',
					'Season 5' => 'images/stranger-things/s1/lucas/s3.png'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Lucas_Sinclair',
				'characterName' => 'Lukey',
				'content' => [
					'2/10 would not recommend',
					'Because he didn\'t like ' . $links['eleven'] . ' at the beginning',
					'I can relate a lot to his personality though',
					'Unbothered',
					'Takes nobody\'s crap',
					'Likes his bandana'
				]
			],
			'nancy' => [
				'images' => [
					'Season 1' => 'images/stranger-things/s1/nancy/s1.png',
					'Season 2' => 'images/stranger-things/s1/nancy/s2.jpeg',
					'Season 3' => 'images/stranger-things/s1/nancy/s3.png',
					'Season 4' => 'images/stranger-things/s1/nancy/s3.png',
					'Season 5' => 'images/stranger-things/s1/nancy/s3.png'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Nancy_Wheeler',
				'characterName' => 'Nancy Drew',
				'content' => [
					$links['mike'] . '\'s sister',
					'Goals',
					'Like, she\'s REALLY pretty (we get it, Arianna)',
					'Bad taste in guys though',
					'Good with a gun',
					'Mean to her dead friend Barb and her two boyfriends'
				]
			],
			'jonathan' => [
				'images' => [
					'Season 1' => 'images/stranger-things/s1/jonathan/s1.jpg',
					'Season 2' => 'images/stranger-things/s1/jonathan/s2.jpeg',
					'Season 3' => 'images/stranger-things/s1/jonathan/s3.png',
					'Season 4' => 'images/stranger-things/s1/jonathan/s3.png',
					'Season 5' => 'images/stranger-things/s1/jonathan/s3.png'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Jonathan_Byers',
				'characterName' => 'Jonathan? Harry Styles?',
				'content' => [
					$links['will'] . '\'s older brother',
					'#Jancy forever',
					'Likes good music',
					'Loves his brother',
					'Abby loves him'
				]
			],
			'will' => [
				'images' => [
					'Season 1' => 'images/stranger-things/s1/will/s1.png',
					'Season 2' => 'images/stranger-things/s1/will/s2.jpg',
					'Season 3' => 'images/stranger-things/s1/will/s3.png',
					'Season 4' => 'images/stranger-things/s1/will/s3.png',
					'Season 5' => 'images/stranger-things/s1/will/s3.png'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Will_Byers',
				'characterName' => 'Will The Wise',
				'content' => [
					'Status: Alive (for now)',
					'Gay',
					'Doesn\'t deserve this',
					'Has treacherous hair always and forever'
				]
			],
			'steve' => [
				'images' => [
					'Season 1' => 'images/stranger-things/s1/steve/s1.jpg',
					'Season 2' => 'images/stranger-things/s1/steve/s2.jpeg',
					'Season 3' => 'images/stranger-things/s1/steve/s3.jpeg',
					'Season 4' => 'images/stranger-things/s1/steve/s3.jpeg',
					'Season 5' => 'images/stranger-things/s1/steve/s3.jpeg'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Steve_Harrington',
				'characterName' => 'Steve Hair-ington',
				'content' => [
					'A+ hair',
					'C- personality up to the end of Season 2',
					'Becomes Babysitter: Ultimate Edition',
					'Kind of doesn\'t have anything going for him',
					'Fell in love with ' . $links['robin'] . ' (we\'ve all been there, Stevie)'
				]
			],
			'karen' => [
				'images' => [
					'Season 1' => 'images/stranger-things/s1/karen/s1.jpg',
					'Season 2' => 'images/stranger-things/s1/karen/s2.png',
					'Season 3' => 'images/stranger-things/s1/karen/s3.png',
					'Season 4' => 'images/stranger-things/s1/karen/s3.png',
					'Season 5' => 'images/stranger-things/s1/karen/s3.png'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Karen_Wheeler',
				'characterName' => 'Live, Laugh, Don\'t Love Your Husband',
				'content' => [
					$links['nancy'] . '\'s and ' . $links['mike'] . '\'s mom',
					'Doesn\'t understand any of what\'s going on',
					'Is perpetually annoyed by her husband Ted',
					'Likes making casserole',
					'Is obsessed with stalking her teen childrens\' relationships',
					'Only truly cares about her youngest daughter Holly'
				]
			]
		]
	],
	'season-2' => [
		'seasonName' => 'Season 2',
		'characters' => [
			'max' => [
				'images' => [
					'Season 2' => 'images/stranger-things/s2/max/s2.png',
					'Season 3' => 'images/stranger-things/s2/max/s3.jpeg',
					'Season 4' => 'images/stranger-things/s2/max/s3.jpeg',
					'Season 5' => 'images/stranger-things/s2/max/s3.jpeg'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Max',
				'characterName' => 'Very Mad Max',
				'content' => [
					$links['dustin'] . ' and ' . $links['lucas'] . ' fall in love with her',
					'But ' . $links['lucas'] . ' somehow wins her heart',
					'Sweet baby that just wants friends',
					'Gaslight Gatekeep Girlboss'
				]
			],
			'billy' => [
				'images' => [
					'Season 2' => 'images/stranger-things/s2/billy/s2.png',
					'Season 3' => 'images/stranger-things/s2/billy/s3.png',
					'Season 4' => 'images/stranger-things/s2/billy/s3.png',
					'Season 5' => 'images/stranger-things/s2/billy/s3.png'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Billy',
				'characterName' => 'Billiam',
				'content' => [
					'[Derogatory]',
					'A r*cist',
					$links['max'] . '\'s step-brother',
					'Creepy with ' . $links['karen']
				]
			],
			'bob' => [
				'images' => [
					'Season 2' => 'images/stranger-things/s2/bob/s2.png'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Bob_Newby',
				'characterName' => 'Bob Newby: Superhero',
				'content' => [
					'Sweet baby of a man',
					'Loved ' . $links['joyce'] . ' and the kids',
					'Bob The Brain'
				]
			],
			'murray' => [
				'images' => [
					'Season 2' => 'images/stranger-things/s2/murray/s2.jpeg',
					'Season 3' => 'images/stranger-things/s2/murray/s3.png',
					'Season 4' => 'images/stranger-things/s2/murray/s3.png',
					'Season 5' => 'images/stranger-things/s2/murray/s3.png'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Bob_Newby',
				'characterName' => 'Bunman',
				'content' => [
					'Calls everyone out on their bullshit',
					'Knows Russian',
					'Kinda sketchy and weird but endearing',
					'Hates children',
					'Balding'
				]
			]
		]
	],
	'season-3' => [
		'seasonName' => 'Season 3',
		'characters' => [
			'robin' => [
				'images' => [
					'Season 3' => 'images/stranger-things/s3/robin/s3.png',
					'Season 4' => 'images/stranger-things/s3/robin/s3.png',
					'Season 5' => 'images/stranger-things/s3/robin/s3.png'
				],
				'characterLink' => 'https://strangerthings.fandom.com/wiki/Robin_Buckley',
				'characterName' => 'Tweedledee',
				'content' => [
					'Also gay',
					'Also knows Russian',
					'Was bullied by ' . $links['steve'] . ' in high school (who wasn\'t)',
					'Worked at Scoops Ahoy until the mall collapsed',
					'Had beef with ' . $links['nancy'] . '?',
					'Played soccer',
					'Did drama'
				]
			],
			'erica' => [
				'images' => [
					'Season 2' => 'images/stranger-things/s3/erica/s3.png',
					'Season 3' => 'images/stranger-things/s3/erica/s3.png',
					'Season 4' => 'images/stranger-things/s3/erica/s3.png',
					'Season 5' => 'images/stranger-things/s3/erica/s3.png'
				],
				'characterLink' => 'https://strangerthings.fandom.com/wiki/Erica_Sinclair',
				'characterName' => '"Psycho"',
				'content' => [
					$links['lucas'] . '\'s younger sister',
					'Rude (in a good way)',
					'Bullies everyone for being nerds',
					'Likes ice cream'
				]
			]
		]
	],
	'season-4' => [
		'seasonName' => 'Season 4',
		'characters' => [
			'eddie' => [
				'images' => [
					'Season 4' => 'images/stranger-things/s4/eddie/s4.jpeg',
					'Season 5' => 'images/stranger-things/s4/eddie/s4.jpeg'
				],
				'characterLink' => 'https://strangerthings.fandom.com/wiki/Eddie_Munson',
				'characterName' => 'Cool Metal Man',
				'content' => [
					'Seems cool',
					'I hope he\'s not mean'
				]
			],
			'argyle' => [
				'images' => [
					'Season 4' => 'images/stranger-things/s4/argyle/s4.jpeg',
					'Season 5' => 'images/stranger-things/s4/argyle/s4.jpeg'
				],
				'characterLink' => 'https://strangerthings.fandom.com/wiki/Eddie_Munson',
				'characterName' => 'California Knows How To Party',
				'content' => [
					$links['jonathan'].'\'s new friend',
					'Allegedly introduces '.$links['jonathan'].' to drugs'
				]
			]
		]
	],
	'season-5' => [
		'seasonName' => 'Season 5',
		'characters' => []
	]
];