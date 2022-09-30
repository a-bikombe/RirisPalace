<?php
require_once 'arianna.php';    // about.php arrays
require_once 'kpop-groups.php';    // kpop.php arrays

$boy = 'Finn Wolfhard';

$boys = [
	'Finn Wolfhard' => [
		'image' => 'images/boys/finn/b-w.jpeg',
		'description' => "<strong>What else is new?</strong> I have watched every piece of content in his filmography <em>and</em> discography, and I take full pride in that. w",
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
	]
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
		'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
		et dolore magna aliqua. Eget sit amet tellus cras adipiscing. Ut tortor pretium viverra suspendisse.
		Dictum varius duis at consectetur lorem donec massa sapien faucibus. Tristique sollicitudin nibh sit
		amet commodo. Vitae ultricies leo integer malesuada nunc vel risus commodo viverra. Cursus metus
		aliquam eleifend mi in nulla posuere sollicitudin aliquam. Morbi tristique senectus et netus.',
		'link' => ''
	]
];

/* 
$boys template

'Huening Kai' => [
	'image' => '',
	'description' => '',
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