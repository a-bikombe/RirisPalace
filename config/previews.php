<?php
require_once 'arianna.php';    // about.php arrays
require_once 'kpop-groups.php';    // kpop.php arrays

$boy = 'Sam Kiszka';

$boys = [
	'Finn Wolfhard' => [
		'image' => 'images/boys/finn/b-w.jpeg',
		'description' => "<strong>What else is new?</strong> I have watched every piece of content in his filmography <em>and</em> discography, and I take full pride in that.",
		'link' => 'stranger-things.php#mike'
	],
	'Huening Kai' => [
		'image' => $groups['active']['groups']['txt']['members']['HueningKai']['image'],
		'description' => "My bias in the K-Pop group Tomorrow X Together (aka TXT), Huening Kai has caught my eye since their debut in March 2019. However, he didn't become my bias until August of 2021. I dedicate most of my interest in him to his alleged resemblence to Finn Wolfhard.",
		'link' => 'kpop.php#txt'
	],
	'Park Jisung' => [
		'image' => $groups['active']['groups']['nctdream']['members']['Jisung']['image'],
		'description' => "Jisung is my bias in my ult K-Pop group, NCT Dream.I like him so much because of his deep voice and his talent for dancing.",
		'link' => 'kpop.php#nctdream'
	],
	'Sam Kiszka' => [
		'image' => 'https://i.pinimg.com/564x/f4/7c/10/f47c108b4e5e76536e30d558ee73fa44.jpg',
		'description' => "Oh my goodness. Oh, sweet heavens. Have you SEEN him? AND he plays bass and piano, AND is still like a nice person. Personally, if I was that attractive I would make it everyone else",
		'link' => 'index.php'
	]
];

$newsPosts = [
	"Greta Van Fleet is new in my life. Their music is really good."
];

$previews = [
	'about-me' => [
		'header' => 'Welcome!',
		'image' => '',
		'text' => $bio,
		'link' => 'about.php'
	],
	'boy-of-the-week' => [
		'header' => 'Celebrity Of The Week',
		'image' => $boys[$boy]['image'],
		'text' => $boys[$boy]['description'],
		'link' => $boys[$boy]['link']
	],
	'news' => [
		'header' => 'News',
		'image' => '',
		'text' => $newsPosts[-1],
		'link' => ''
	]
];

/* 
$boys template

'Huening Kai' => [
	'image' => '',
	'description' => "",
	'link' => ''
]
*/

/* 
preview template

'header' => '',
'image' => '',
'text' => '',
'link' => ''
*/