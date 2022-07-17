<?php
// back-end of stranger-things.php

$plot = "Set in the fictional town of Hawkins, Indiana in the 1980s, the first season focuses on the investigation into the disappearance of a young boy amid supernatural events occurring around the town including the appearance of a psychokinetic girl who helps
the missing boy's friends in their own search.";

$links = [
	'eleven' => '<a href="#eleven" class="no-link-color no-decor">El</a>',
	'mike' => '<a href="#mike" class="no-link-color no-decor">Mike</a>',
	'will' => '<a href="#will" class="no-link-color no-decor">Will</a>',
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

$characterRank = [
	'mike',
	'eddie',
	'max',
	'dustin',
	'steve',
	'eleven',
	'robin',
	'lucas',
	'nancy',
	'erica',
	'joyce',
	'hopper',
	'will',
	'bob',
	'jonathan',
	'argyle',
	'murray',
	'suzie',
	'karen',
	'billy'
];

$seasons = [
	'season-1' => [
		'seasonName' => 'Season 1',
		'dateRelease' => 'Jul 15, 2016',
		'dateSetting' => 'Nov 6-12, 1983',
		'characters' => [
			'joyce' => [
				'images' => [
					'Season 1' => 'https://media.glamour.com/photos/59f21012ad714a335821fc8a/4:3/w_1328,h_996,c_limit/ST%20(1).jpg',
					'Season 2' => 'https://preview.redd.it/du10ngysc0w51.jpg?auto=webp&s=3f4789cd962120e9398206f0c2985306cf2e36da',
					'Season 3' => 'https://cdn3.whatculture.com/images/2019/07/b11ae7cffd476ef2-600x338.png',
					'Season 4' => 'https://pbs.twimg.com/media/FDhCqxlXoAk7yZ8.jpg',
					'Season 5' => 'https://pbs.twimg.com/media/FDhCqxlXoAk7yZ8.jpg'
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
					'Season 1' => 'https://bamfstyle.com/wp-content/uploads/2019/10/sthops1-main1.jpg',
					'Season 2' => 'https://static.onecms.io/wp-content/uploads/sites/6/2017/10/dki-2000.jpg',
					'Season 3' => 'https://www.hollywoodreporter.com/wp-content/uploads/2019/07/stranger_things_s03_still_20.jpg',
					'Season 4' => 'https://www.denofgeek.com/wp-content/uploads/2020/09/stranger-things-russia-david-harbour-netflix.jpg?fit=1200%2C680',
					'Season 5' => 'https://www.denofgeek.com/wp-content/uploads/2020/09/stranger-things-russia-david-harbour-netflix.jpg?fit=1200%2C680'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Jim_Hopper',
				'characterName' => 'Chief What\'s His Name',
				'content' => [
					'Hoppy',
					'Not having it',
					$links['joyce'] . "'s boyfriend",
					'Coffee and contemplation',
					'Punches away his problems',
					$links['eleven'] . "'s dad",
					'Hates ' . $links['mike']
				]
			],
			'mike' => [
				'images' => [
					'Season 1' => 'https://i.pinimg.com/originals/a4/56/06/a45606b7391adad4e5d8ae30b5d0e44a.jpg',
					'Season 2' => 'https://data.whicdn.com/images/306468778/original.jpg',
					'Season 3' => 'https://i.pinimg.com/originals/ec/b0/ec/ecb0ec1a67694893a5742f33daa682c4.jpg',
					'Season 4' => 'images/stranger-things/mike-s4.jpg',
					'Season 5' => 'https://metagalaxia.com.br/wp-content/uploads/2022/05/Mike-Wheeler.webp'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Mike_Wheeler',
				'characterName' => 'Mike Wheelie',
				'content' => [
					'Essentially the leader of his friend group',
					'Annoying to his friends',
					'Repeats himself a lot',
					'Sassy',
					'Loves his friends but mostly ' . $links['eleven'],
					'Has a lot of red flags because he is in fact a Man&trade;',
					'But season 3/4 Mike made the red flags turn green',
					"I'm in love with him oops"
				]
			],
			'eleven' => [
				'images' => [
					'Season 1' => 'https://r2.mt.ru/r5/photoA756/20688347315-0/jpg/bp.webp',
					'Season 2' => 'https://media.vanityfair.com/photos/59f370dd16ff751cf425ef46/master/pass/wv_publicity_pre_launch_A_still_23.jpg',
					'Season 3' => 'https://s2.r29static.com/bin/entry/75e/x,80/2214031/image.jpg',
					'Season 4' => 'https://cdn.vox-cdn.com/thumbor/-8oXNxQXzj65-offemosTJab_jY=/0x0:3840x1912/1520x1013/filters:focal(1613x649:2227x1263):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/70818434/A715C016_210714_R21J.00902542.0.jpg',
					'Season 5' => 'https://cdn.vox-cdn.com/thumbor/-8oXNxQXzj65-offemosTJab_jY=/0x0:3840x1912/1520x1013/filters:focal(1613x649:2227x1263):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/70818434/A715C016_210714_R21J.00902542.0.jpg'
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
					'Season 1' => 'https://media1.popsugar-assets.com/files/thumbor/4ypNkOELQqrpMegFUGjbNGxWVWM/fit-in/2048xorig/filters:format_auto-!!-:strip_icc-!!-/2016/08/16/139/n/1922283/66282b67cb35bc36_dustin/i/Dustin-From-Stranger-Things.jpg',
					'Season 2' => 'https://notesfromachair.files.wordpress.com/2017/12/who-was-the-dumbest-smartest-and-most-heroic-in-stranger-things-season-2.png?w=584&h=438',
					'Season 3' => 'https://s3.r29static.com/bin/entry/869/x,80/2214004/image.jpg',
					'Season 4' => 'https://s3.r29static.com/bin/entry/869/x,80/2214004/image.jpg',
					'Season 5' => 'https://s3.r29static.com/bin/entry/869/x,80/2214004/image.jpg'
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
					'Season 1' => 'https://mfiles.alphacoders.com/810/thumb-1920-810612.jpg',
					'Season 2' => 'https://i.pinimg.com/originals/a3/a6/17/a3a617257b1d4a2504d9f7d3298b1105.jpg',
					'Season 3' => 'https://i.pinimg.com/originals/a0/6c/58/a06c581688c7cf606f99d564b6ef98a8.png',
					'Season 4' => 'https://i.pinimg.com/originals/a0/6c/58/a06c581688c7cf606f99d564b6ef98a8.png',
					'Season 5' => 'https://i.pinimg.com/originals/a0/6c/58/a06c581688c7cf606f99d564b6ef98a8.png'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Lucas_Sinclair',
				'characterName' => 'Lukey',
				'content' => [
					'2/10 would not recommend',
					"Because he didn't like " . $links['eleven'] . ' at the beginning',
					'I can relate a lot to his personality though',
					'Unbothered',
					"Takes nobody's crap",
					'Likes his bandana'
				]
			],
			'nancy' => [
				'images' => [
					'Season 1' => 'https://preview.redd.it/d7z1h7lkfqq81.jpg?width=828&format=pjpg&auto=webp&s=3f3b8e70664b906401332b414cce7586042c2265',
					'Season 2' => 'https://i.pinimg.com/originals/0f/1d/14/0f1d142ca6cfaf932dc11cbaf3f59257.png',
					'Season 3' => 'https://preview.redd.it/daoszdx66vm41.jpg?auto=webp&s=d73d9aee1fa157907fb8998c0816c2fffe662847',
					'Season 4' => 'https://preview.redd.it/daoszdx66vm41.jpg?auto=webp&s=d73d9aee1fa157907fb8998c0816c2fffe662847',
					'Season 5' => 'https://preview.redd.it/daoszdx66vm41.jpg?auto=webp&s=d73d9aee1fa157907fb8998c0816c2fffe662847'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Nancy_Wheeler',
				'characterName' => 'Nancy Drew',
				'content' => [
					$links['mike'] . "'s sister",
					'Goals',
					"Like, she's REALLY pretty (we get it, Arianna)",
					'Bad taste in guys though',
					'Good with a gun',
					'Mean to her dead friend Barb and her two boyfriends'
				]
			],
			'jonathan' => [
				'images' => [
					'Season 1' => 'https://i.pinimg.com/originals/b8/ce/3a/b8ce3aa13638292e28eefdd2ea4e569a.png',
					'Season 2' => 'https://pbs.twimg.com/media/Dwa7KeoX0AE_ssw.jpg',
					'Season 3' => 'https://nitter.net/pic/media%2FFNbhSv8VgAA1izm.jpg%3Fname%3Dsmall',
					'Season 4' => 'https://nitter.net/pic/media%2FFNbhSv8VgAA1izm.jpg%3Fname%3Dsmall',
					'Season 5' => 'https://nitter.net/pic/media%2FFNbhSv8VgAA1izm.jpg%3Fname%3Dsmall'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Jonathan_Byers',
				'characterName' => 'Jonathan? Harry Styles?',
				'content' => [
					$links['will'] . "'s older brother",
					'#Jancy forever',
					'Likes good music',
					'Loves his brother',
					'Abby loves him'
				]
			],
			'will' => [
				'images' => [
					'Season 1' => 'https://pbs.twimg.com/media/E_XL2iGXEAQq8S7.jpg:large',
					'Season 2' => 'https://pyxis.nymag.com/v1/imgs/998/83c/3117e183a858dcaa2e08738c491e90979b-27-will-byers-stranger-things.rsquare.w700.jpg',
					'Season 3' => 'https://preview.redd.it/pr8vqgmqp8o41.png?auto=webp&s=cd7fe89f5e4c424df5d25072e06c6cf285b74b89',
					'Season 4' => 'https://preview.redd.it/pr8vqgmqp8o41.png?auto=webp&s=cd7fe89f5e4c424df5d25072e06c6cf285b74b89',
					'Season 5' => 'https://preview.redd.it/pr8vqgmqp8o41.png?auto=webp&s=cd7fe89f5e4c424df5d25072e06c6cf285b74b89'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Will_Byers',
				'characterName' => 'Will The Wise',
				'content' => [
					'Status: Alive (for now)',
					'Gay',
					"Doesn't deserve this",
					'Has treacherous hair always and forever'
				]
			],
			'steve' => [
				'images' => [
					'Season 1' => 'https://i.imgur.com/wZ3VHFQ.jpg',
					'Season 2' => 'https://cdn.vox-cdn.com/thumbor/SrDH65R7xShm1EJ0l6G5WRk6pAo=/0x0:8000x3720/1200x800/filters:focal(2271x231:3551x1511)/cdn.vox-cdn.com/uploads/chorus_image/image/59165497/wv_publicity_post_launch_still_6.000001.0.jpg',
					'Season 3' => 'https://styles.redditmedia.com/t5_zxomw/styles/profileIcon_bjk7usx496d81.jpg',
					'Season 4' => 'https://styles.redditmedia.com/t5_zxomw/styles/profileIcon_bjk7usx496d81.jpg',
					'Season 5' => 'https://styles.redditmedia.com/t5_zxomw/styles/profileIcon_bjk7usx496d81.jpg'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Steve_Harrington',
				'characterName' => 'Steve Hair-ington',
				'content' => [
					'A+ hair',
					'C- personality up to the end of Season 2',
					'Becomes Babysitter: Ultimate Edition',
					"Kind of doesn't have anything going for him",
					'Fell in love with ' . $links['robin'] . " (we've all been there, Stevie)"
				]
			]
		],
		'episodes' => [
			'one' => [
				'title' => 'The Vanishing of Will Byers',
				'rating' => '3',
				'thoughts' => "A classic. This episode perfectly sets the mood for a spooky winter season. Everyone was so young, and I always get so nostalgic watching this.",
				'quotes' => [
					"IT ROARS IN ANGER",
					"The campaign took two weeks to plan! How was I supposed to know it was gonna take ten hours",
					"Am I speaking <em>Chinese</em> in this house?"
				]
			],
			'two' => [
				'title' => 'The Weirdo on Maple Street',
				'rating' => '4',
				'thoughts' => "Mike and El having their first real conversation makes me cry every time. I also loved when he showed her around his room and showed her all of his toys. Hazy Shade Of Winter playing in the credits after Barb goes missing is probably my favorite ending to any ST episode.",
				'quotes' => [
					"...Well my name's Mike, short for Michael",
					"...The last time I told you I was sick you made me go to school anyway—",
					"We never would've upset you if we knew you had superpowers"
				]
			],
			'three' => [
				'title' => 'Holly, Jolly',
				'rating' => '2',
				'thoughts' => "This episode is kind of boring, since nothing really happens besides the kids riding around on their bikes. Although, it is a classic with the wall alphabet, and the kids finding Will at the end with Heroes playing in the background always makes me so sad. It always devastates me to see anyone yelling at El, especially Mike.",
				'quotes' => [
					"I bet that she could make this fly",
					"COMING",
					"You look at her all like... 'Hi El :) Oh El, El, El'",
					"This is the <em>Monsta Killa</em>"
				]
			],
			'four' => [
				'title' => 'The Body',
				'rating' => '5',
				'thoughts' => "It's so sad how poor Joyce sounded so crazy to anyone she spoke to. Her blasting music and screaming at the walls like \"Come on... COME ON! TALK TO ME!\" was a real serve. Also, El's makeover done by the boys! I love every second.",
				'quotes' => [
					"ARE YOU DEAF",
					"I think I just wanna stay home today... I mean, if that's okay :(",
					"No, not his funeral, <em>screw his funeral</em>",
					"We're— upset :)— :("
				]
			],
			'five' => [
				'title' => 'The Flea and the Acrobat',
				'rating' => '5',
				'thoughts' => "I still hate when Mike yells at El. He's been so mean to her this season and it makes me really disappointed mostly in myself that he's my favorite character. Still, though, the fight between him and Lucas was kind of a good time and I'm always cheering him on to kick his friend's butt.",
				'quotes' => [
					"We're... in mourning",
					"You're blind because you like that a girl's not grossed out by you",
					"NYU, Lonnie! He's wanted to go to NYU since he was <em>six years old!</em>",
					"Bull, that's old blood! Right, El? ...<em>Right, El?</em>"
				]
			],
			'six' => [
				'title' => 'The Monster',
				'rating' => '2',
				'thoughts' => "This one's kind of boring too, but I was a fan of El robbing the grocery store. And Tantrum Wheeler shouldn't be as hilarious as he is. Also, making your boyfriend float in the air to save his life? A serve.",
				'quotes' => [
					"You're <em>shaking his hand</em>\" \"No I'm not",
					"She's our friend and she's crazy!"
				]
			],
			'seven' => [
				'title' => 'The Bathtub',
				'rating' => '3',
				'thoughts' => "Nothing will outdo the chase scene with the kids on the bikes where El flips the van. Everyone tries, but no one succeeds. Also, Dustin and Lucas trying to set up the kiddie pool was funny. Joyce acting as a comforting mother figure to El while she was in the tank was so sweet, and was foreshadowing for Season 4. The parallels between the seasons are so amazing.",
				'quotes' => [
					"*Indistinct shouting over the walkie* \"...You son of a <em>bitch!</em>\"",
					"If anyone asks where I am, I've left the country",
					"Did you see that??\" \"No, Dustin, we missed it",
					"Why are you keeping this curiosity door locked?"
				]
			],
			'eight' => [
				'title' => 'The Upside Down',
				'rating' => '4',
				'thoughts' => "Hopper's flashbacks with his daughter make me sob. And Steve fighting with Nancy and Jonathan is <em>so cool!</em> Him swinging the baseball bat with all the lights flickering around him was probably one of my favorite parts of the whole season.",
				'quotes' => [
					"*Steve gets a gun pointed at him* \"Wait, woah, woah, <em>what?</em>\"",
					"<em>Mike! I found the chocolate pudding!</em>",
					"You go to school dances with someone that you... like",
					"Her name's Eleven\" \"Like the number?",
					"It makes a painful *screech*",
					"Dustin farted!"
				]
			]
		]
	],
	'season-2' => [
		'seasonName' => 'Season 2',
		'dateRelease' => 'Oct 27, 2017',
		'dateSetting' => 'Oct 30 - Nov 4, 1984',
		'characters' => [
			'max' => [
				'images' => [
					'Season 2' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/max-mayfield-stranger-things-season-2-1552398515.jpg',
					'Season 3' => 'https://i.pinimg.com/originals/6e/db/24/6edb24cb3e1e134373b44991b19ac900.jpg',
					'Season 4' => 'https://i.pinimg.com/originals/6e/db/24/6edb24cb3e1e134373b44991b19ac900.jpg',
					'Season 5' => 'https://i.pinimg.com/originals/6e/db/24/6edb24cb3e1e134373b44991b19ac900.jpg'
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
					'Season 2' => 'https://hips.hearstapps.com/digitalspyuk.cdnds.net/17/45/1510058296-dacre-hargrove.png?crop=0.5620608899297423xw:1xh;center,top&resize=480:*',
					'Season 3' => 'https://s3.r29static.com/bin/entry/ac4/x,80/2214044/image.jpg',
					'Season 4' => 'https://s3.r29static.com/bin/entry/ac4/x,80/2214044/image.jpg',
					'Season 5' => 'https://s3.r29static.com/bin/entry/ac4/x,80/2214044/image.jpg'
				],
				'characterLink' => 'http://strangerthings.wikia.com/wiki/Billy',
				'characterName' => 'Billiam',
				'content' => [
					'[Derogatory]',
					'A r*cist',
					$links['max'] . "'s step-brother",
					'Creepy with ' . $links['karen']
				]
			],
			'bob' => [
				'images' => [
					'Season 2' => 'https://preview.redd.it/nk30b23cnn141.png?auto=webp&s=253edbf76e8aef81098e810cf24ff2e49a687b10'
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
					'Season 2' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/mh-strangerthingsmurray-1563208137.jpg?crop=0.500xw:1.00xh;0.348xw,0&resize=480:*',
					'Season 3' => 'https://pyxis.nymag.com/v1/imgs/beb/3db/c45ec2f83466cff18546955c2e7a799691-4-Murray-Bauman.rsocial.w1200.jpg',
					'Season 4' => 'https://pyxis.nymag.com/v1/imgs/beb/3db/c45ec2f83466cff18546955c2e7a799691-4-Murray-Bauman.rsocial.w1200.jpg',
					'Season 5' => 'https://pyxis.nymag.com/v1/imgs/beb/3db/c45ec2f83466cff18546955c2e7a799691-4-Murray-Bauman.rsocial.w1200.jpg'
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
			],
			'erica' => [
				'images' => [
					'Season 2' => 'https://img.fredtvshow.com/img/tv/8760/stranger-things-2meet-the-internets-new-favorite-little-sister.jpg',
					'Season 3' => 'https://media.vanityfair.com/photos/5d1b972f5f741a0008ed0667/3:2/w_1500,h_1000,c_limit/priah-ferguson-stranger-things.jpg',
					'Season 4' => 'https://media.vanityfair.com/photos/5d1b972f5f741a0008ed0667/3:2/w_1500,h_1000,c_limit/priah-ferguson-stranger-things.jpg',
					'Season 5' => 'https://media.vanityfair.com/photos/5d1b972f5f741a0008ed0667/3:2/w_1500,h_1000,c_limit/priah-ferguson-stranger-things.jpg'
				],
				'characterLink' => 'https://strangerthings.fandom.com/wiki/Erica_Sinclair',
				'characterName' => '"Mall Rat"',
				'content' => [
					$links['lucas'] . "'s younger sister",
					'Rude (in a good way)',
					'Bullies everyone for being nerds',
					'Likes ice cream'
				]
			]
		],
		'episodes' => [
			'one' => [
				'title' => 'MADMAX',
				'rating' => '3',
				'thoughts' => "Bob and Miss Max are here! The cinematography in the arcade scene, with the boys surrounding the game screen and Max's name showing up on the leaderboard. And I love the way that they slowly showed El's presence in the cabin before seeing her for the first time this season.",
				'quotes' => [
					"*Nancy chasing Mike through the house* \"Mike! Get <em>back here!</em>\"",
					"I'm not <em>prostituting my sister</em>",
					"Is that why you don't have any friends?"
				]
			],
			'two' => [
				'title' => 'Trick or Treat, Freak',
				'rating' => '4',
				'thoughts' => "I love watching Hopper and El bond as father and daughter, and the kids in their little Ghostbusters costumes are <em>so cute!</em> I miss Will getting to talk to Mike about his problems and having him as his main support system.",
				'quotes' => [
					"*Scary music* \"OH— <em>Jesus</em>\"",
					"I specifically didn't agree to Winston",
					"Crazy together"
				]
			],
			'three' => [
				'title' => 'The Pollywog',
				'rating' => '5',
				'thoughts' => "November 1st, 1984: aka Sweater Day. This day would've been perfect had Mike not called Max annoying. El throwing Max off her skateboard was kind of funny though. Also, baby Dart is kind of cute.",
				'quotes' => [
					"On Day 600, on Day 700? Day 800?",
					"I need my paddles!",
					"That's like saying just because someone's from the Death Star doesn't make them bad"
				]
			],
			'four' => [
				'title' => 'Will the Wise',
				'rating' => '3',
				'thoughts' => "The second time they're ruining the Byers' house: iconic. It seems like everyone likes to brush past the idea that Billy's inherently racist.",
				'quotes' => [
					"You say... I go, and I never leave! <em>Nothing ever happens!</em>",
					"Let's burn that lab to the ground"
				]
			],
			'five' => [
				'title' => 'Dig Dug',
				'rating' => '3',
				'thoughts' => "This episode feels mostly like filler, since it\'s middle-of-the-season stuff, but Bob helping Joyce and the kids decipher the Hawkins map is so sweet. Murray\'s ridiculous, but he's so funny. And I'm kind of here for Indiana Jones Hopper. Baby Erica is <em>so cute</em>. And I loved getting to see El's mom's backstory. Will seizing on the ground at the end was so scary.",
				'quotes' => [
					"What's at the X? Pirate treasure?",
					"I've got a code for you instead; it's called Code Shut... Your... Mouth",
					"I love you, I'm sorry... What the hell am <em>I</em> sorry for?"
				]
			],
			'six' => [
				'title' => 'The Spy',
				'rating' => '2',
				'thoughts' => 'The first 60 seconds of this episode are so good with Will screaming and Joyce crying before you ever even see anything. The lead-up to the lab scene is <em>so scary</em>.',
				'quotes' => [
					"We like Steve... but we don't <em>love</em> Steve",
					"I want you to know that I'm not mad"
				]
			],
			'seven' => [
				'title' => 'The Lost Sister',
				'rating' => '1',
				'thoughts' => "I'm all for an El plot and learning about the other kids from the lab, but on its own; not when it distracts from the rest of the plot.",
				'quotes' => [
					"And on his farm he had a cow...",
					"But <em>I</em> can save them"
				]
			],
			'eight' => [
				'title' => 'The Mind Flayer',
				'rating' => '4',
				'thoughts' => "This episode absolutely breaks my heart. I can't watch the first half, but the second half is my favorite part of the whole season. I loved getting to hear all of Will's stories from his loved ones, especially Mike's.",
				'quotes' => [
					"You broke the rule of law—\" \"SO DID YOU!",
					"We can't just sit here while those <em>things</em> are loose",
					"It's like a play on words—\" \"Okay",
					"I could feel it\" \"Feel what?\" \"The electricity"
				]
			],
			'nine' => [
				'title' => 'The Gate',
				'rating' => '5',
				'thoughts' => "This whole episode is amazing: the Mileven reunion, the exorcism, the burning of the hub, El's floating in the air, the <em>Snow Ball Scene</em>... magnificence. Miss Max is so cool, I should mention. And Lucas's scream is really funny.",
				'quotes' => [
					"Protecting her... PROTECTING HER?",
					"I'm just curious why all of a sudden you look like some kind of MTV punk",
					"Maybe if we set this on <em>fire</em>—\" \"Yeah, <em>that's</em> a no",
					"Yeah, it's me, don't cream your pants",
					"Nancy?",
					"Close it"
				]
			]
		]
	],
	'season-3' => [
		'seasonName' => 'Season 3',
		'dateRelease' => 'Jul 4, 2019',
		'dateSetting' => 'Jun 28 - Jul 4, 1985',
		'characters' => [
			'robin' => [
				'images' => [
					'Season 3' => 'https://s3.r29static.com/bin/entry/bac/x,80/2215810/image.jpg',
					'Season 4' => 'https://s3.r29static.com/bin/entry/bac/x,80/2215810/image.jpg',
					'Season 5' => 'https://s3.r29static.com/bin/entry/bac/x,80/2215810/image.jpg'
				],
				'characterLink' => 'https://strangerthings.fandom.com/wiki/Robin_Buckley',
				'characterName' => 'Tweedledee',
				'content' => [
					'Also gay',
					'Also knows Russian',
					'Was bullied by ' . $links['steve'] . " in high school (who wasn't)",
					'Worked at Scoops Ahoy until the mall collapsed',
					'Had beef with ' . $links['nancy'] . '?',
					'Played soccer',
					'Did drama'
				]
				],
				'suzie' => [
					'images' => [
						'Season 3' => 'https://pbs.twimg.com/media/FOieva8XEBE8L1w.jpg',
						'Season 4' => 'https://pbs.twimg.com/media/FOieva8XEBE8L1w.jpg',
						'Season 5' => 'https://pbs.twimg.com/media/FOieva8XEBE8L1w.jpg'
					],
					'characterLink' => 'https://strangerthings.fandom.com/wiki/Suzie_Bingham',
					'characterName' => 'Suzie With a Z',
					'content' => [
						$links['dustin'] . "'s girlfriend",
						"Codes",
						"Is \"hotter than Phoebe Cates\""
					]
					]
		],
		'episodes' => [
			'one' => [
				'title' => 'Suzie, Do You Copy?',
				'rating' => '3',
				'thoughts' => "El getting all cuddly with Mike when Dustin was showing them his inventions was so cute. It made me sad, though, that you can tell that Will doesn't have the same level of comfort in being vulnerable with Mike about his problems as he did in Season 2.",
				'quotes' => [
					"'Oh El, I wish we could make out forever, and never hang out with any of our friends'",
					"I am gonna <em>lose it</em>, Joyce",
					"You are oh-for-six, Popeye",
					"Oh shit, she doesn't have electricity?",
					"There's nothing wrong with Nana"
				]
			],
			'two' => [
				'title' => 'The Mall Rats',
				'rating' => '3',
				'thoughts' => "The mall scene with Material Girl playing in the background is iconic as always. I love this season's teenage drama of things like lying boyfriends and a dad wanting his daughter to spend less time with said boyfriend, mainly because poor El has to deal with so many life-or-death experiences that it's nice to have lower stakes once in a while.",
				'quotes' => [
					"<em>Mom, get off the phone! How many times?!</em>",
					"Max has dumped me five times",
					"Actually, I can hear everything; you are both <em>extremely loud</em>",
					"<em>What's wrong with you?</em> You know she's not allowed to be here"
				]
			],
			'three' => [
				'title' => 'The Case of the Missing Lifeguard',
				'rating' => '2',
				'thoughts' => "It makes me so sad that El and Will would understand each other so well and could be the closest of friends based on their shared trauma involving the Upside Down, but the opportunity is wasted because they're always fighting over Mike.",
				'quotes' => [
					"Is it <em>early</em>, Michael",
					"I haven't been stood up like that since Alice Gilbert in the ninth grade",
					"You can't leave, it's raining"
				]
			],
			'four' => [
				'title' => 'The Sauna Test',
				'rating' => '5',
				'thoughts' => "This might be one of the scariest episodes of the season. Everyone acted their BUTTS off in the sauna scene. It just sucks that Will just had to put all his feelings aside because there were \"bigger things to worry about\", as though his problems aren't just as important.",
				'quotes' => [
					"Who are you calling? The police?",
					"When he needs you, you're <em>activated</em>",
					"You know what I love most about this country? Capitalism",
					"yEaH"
				]
			],
			'five' => [
				'title' => 'The Flayed',
				'rating' => '2',
				'thoughts' => "This episode is mostly boring, only when you're rewatching. It's mostly plot development. The hospital chase scene was really scary though.",
				'quotes' => [
					"<em>Child murderer?</em>",
					"This is my... <em>family</em>—\" \"—Extended"
				]
			],
			'six' => [
				'title' => 'E Pluribus Unum',
				'rating' => '3',
				'thoughts' => "The melted-people monster has to be one of the grossest things I've ever seen. This episode is kind of boring, but it has my favorite scene probably out of the whole season.",
				'quotes' => [
					"Look at my outfit! You think I just <em>wear</em> this?!",
					"I love her and I can't lose her again",
					"Uhhhh, uhhhh... this is Jim Hopper... uhhh... police chief Hawkins"
				]
			],
			'seven' => [
				'title' => 'The Bite',
				'rating' => '5',
				'thoughts' => "This episode picks way up after Chapter Six. It's probably my favorite episode out of the first three seasons. Robin comes out to Steve, Alexei dies, Mike tries to tell El he loves her... all icon-level plot.",
				'quotes' => [
					"...The big, bad... <em>Fourth of July celebration</em>",
					"She's gonna need some <em>backup</em>",
					"Old people?",
					"You flung that thing like a hot wheel"
				]
			],
			'eight' => [
				'title' => 'The Battle of Starcourt',
				'rating' => '4',
				'thoughts' => "A solid season finale. It's probably my second-favorite finale after Season 2. Hopper's letter breaks my heart into a million pieces. Never-Ending Story kind of ruined the momentum though.",
				'quotes' => [
					"Told you... physics",
					"<em>'It's really hard to listen to you when you make it seem like it's the end of the goddamn world'</em>"
				]
			]
		]
	],
	'season-4' => [
		'seasonName' => 'Season 4',
		'dateRelease' => 'May 27/Jul 1, 2022',
		'dateSetting' => 'March 21-28, 1986',
		'characters' => [
			'eddie' => [
				'images' => [
					'Season 4' => 'images/stranger-things/eddie-s4.jpeg',
					'Season 5' => 'images/stranger-things/eddie-s4.jpeg'
				],
				'characterLink' => 'https://strangerthings.fandom.com/wiki/Eddie_Munson',
				'characterName' => 'Cool Metal Man',
				'content' => [
					'Sweet baby',
					'Not mean and scary like everyone thinks',
					'A drug dealer',
					'Hawkins\'s unsung hero'
				]
			],
			'argyle' => [
				'images' => [
					'Season 4' => 'https://res.cloudinary.com/remezcla/images/f_auto,q_auto/v1653422100/production/Eduardo_Franco_Stranger_Things_Film/Eduardo_Franco_Stranger_Things_Film.jpg?_i=AA',
					'Season 5' => 'https://res.cloudinary.com/remezcla/images/f_auto,q_auto/v1653422100/production/Eduardo_Franco_Stranger_Things_Film/Eduardo_Franco_Stranger_Things_Film.jpg?_i=AA'
				],
				'characterLink' => 'https://strangerthings.fandom.com/wiki/Eddie_Munson',
				'characterName' => 'California Knows How To Party',
				'content' => [
					$links['jonathan'] . "'s new friend",
					'Allegedly introduces ' . $links['jonathan'] . ' to drugs',
					'Pizza delivery man'
				]
			]
		],
		'episodes' => [
			'one' => [
				'title' => 'The Hellfire Club',
				'rating' => '5',
				'thoughts' => "I'm just gonna say: as a Mike stan, I won in this episode. I love the group huddle shot, and the shot of the die going across the table during the Hellfire Club campaign.",
				'quotes' => [
					"You want to <em>postpone</em>... \"The Cult of Vecna\"?",
					"And I'll <em>smile</em> as I watch them die"
				]
			],
			'two' => [
				'title' => "Vecna's Curse",
				'rating' => '4',
				'thoughts' => "Visor City. Will is in LOVE",
				'quotes' => [
					"I heard a lot about your sister",
					"Who's that twig she's with"
				]
			],
			'three' => [
				'title' => 'The Monster and the Superhero',
				'rating' => '3',
				'thoughts' => "Mike hasn't said I love you to El to her face ever. Not even once. In Season 3 she let it pass because she was in love and didn't truly have her own life yet, but she noticed more and more. Like she said, he's never even written it to her. He's more just obsessed with the idea of keeping her around so he has something to hold onto. Sounds like comphet to me.",
				'quotes' => [
					"Blip blip blip"
				]
			],
			'four' => [
				'title' => 'Dear Billy',
				'rating' => '5',
				'thoughts' => "The one-shot military raid scene was one of my favorite parts of the episode. Will took the painting he did for Mike with him when they left the house. Miss Sadie outdid herself by a mile. I loved that they played one of my favorite songs, Dream A Little Dream Of Me.",
				'quotes' => [
					"If you think that I'm gonna spend what is likely the last day of my life in the armpit that is Mike Wheeler's basement, then you're out of your mind",
					"Before he <em>stole my wife</em>",
					"DRIVE",
					"I'm still here"
				]
			],
			'five' => [
				'title' => 'The Nina Project',
				'rating' => '3',
				'thoughts' => "Hopper's speech made me so emotional.",
				'quotes' => [
					"No, you idiot! St. Mary's <em>Hospital!</em>",
					"ArGYLE",
					"They didn't need me, I needed them"
				]
			],
			'six' => [
				'title' => 'The Dive',
				'rating' => '4',
				'thoughts' => "The military people torturing the security man was really scary. Max grabbing the binoculars from Lucas and staring at Steve was really funny.",
				'quotes' => [
					"I got you! I got you good",
					"You're right, it is a <em>stupid name</em>",
					"You're totally, absolutely, 100% wrong. Right now!",
					"Holy sh... heck",
					"My skills end at IP geolocation"
				]
			],
			'seven' => [
				'title' => 'The Massacre at Hawkins Lab',
				'rating' => '5',
				'thoughts' => "Steve <em>pulling the head off of a demobat?</em> There were also so many cool shots in this episode: I really liked the shot of Robin, Steve, Nancy, and Eddie, and the scene with the LiteBrite. I thought the fantasy dust concept of communication was interesting. And the mirror shot of younger teens and older teens riding their bikes in opposite dimensions was so cool.",
				'quotes' => [
					"Erica, do... you... <em>copy?</em>",
					"Do you remember the gate?\" \"No, I blocked that out",
					"I overestimated them"
				]
			],
			'eight' => [
				'title' => 'Papa',
				'rating' => '',
				'thoughts' => "TBA",
				'quotes' => [
					"Small woman",
					"I am stopping us before we get <em>more lost</em>"
				]
			],
			'nine' => [
				'title' => 'The Piggyback',
				'rating' => '',
				'thoughts' => "TBA",
				'quotes' => [
					"It's <em>good?</em>"
				]
			]
		]
	],
	'season-5' => [
		'seasonName' => 'Season 5',
		'dateRelease' => 'TBA',
		'dateSetting' => 'TBA',
		'characters' => [],
		'episodes' => []
	]
];
