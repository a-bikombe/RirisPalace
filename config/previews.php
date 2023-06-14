<?php
require_once 'arianna.php';    // about.php arrays
require_once 'kpop-groups.php';    // kpop.php arrays

$celebrity = 'Sam Kiszka';

$celebrities = [
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
		'description' => "Jisung is my bias in NCT Dream. I like him so much because of his deep voice and his talent for dancing.",
		'link' => 'kpop.php#nctdream'
	],
	'Sam Kiszka' => [
		'image' => 'https://i.pinimg.com/564x/f4/7c/10/f47c108b4e5e76536e30d558ee73fa44.jpg',
		'description' => "Sam Kiszka plays bass and piano in the rock band Greta Van Fleet, and is only 23.",
		'link' => 'index.php'
	]
];

$newsArticles = [
	"October 29, 2022: Greta Van Fleet is new in my life. Their music is really good."
];

/* ******************************************** Layout ************************************************ */

$previews = [
	'about-me' => [
		'header' => 'Welcome!',
		'image' => '',
		'text' => $bio,
		'link' => 'about.php'
	],
	'celebrity-of-the-week' => [
		'header' => 'Celebrity Of The Week',
		'image' => $celebrities[$celebrity]['image'],
		'text' => $celebrities[$celebrity]['description'],
		'link' => $celebrities[$celebrity]['link']
	],
	'news' => [
		'header' => 'News',
		'image' => '',
		'text' => end($newsArticles),
		'link' => ''
	]
];

/* 
$celebrities template

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