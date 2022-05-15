<?

require_once 'kpop-groups.php';

$boy = 'Huening Kai';

$boys = [
	'Finn Wolfhard' => [
		'image' => 'images/boys/finn/b-w.jpeg',
		'description' => 'What else is new? Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eget sit amet tellus cras adipiscing. Ut tortor pretium viverra suspendisse. Dictum varius duis at consectetur lorem donec massa sapien faucibus. Tristique sollicitudin nibh sit amet commodo. Vitae ultricies leo integer malesuada nunc vel risus commodo viverra. Cursus metus aliquam eleifend mi in nulla posuere sollicitudin aliquam.',
		'link' => 'stranger-things.php'
	],
	'Huening Kai' => [
		'image' => $groups['active']['groups']['txt']['members']['HueningKai']['image'],
		'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eget sit amet tellus cras adipiscing. Ut tortor pretium viverra suspendisse. Dictum varius duis at consectetur lorem donec massa sapien faucibus. Tristique sollicitudin nibh sit amet commodo.',
		'link' => 'kpop.php#txt'
	],
	'Park Jisung' => [
		'image' => $groups['active']['groups']['nctdream']['members']['Jisung']['image'],
		'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eget sit amet tellus cras adipiscing. Ut tortor pretium viverra suspendisse. Dictum varius duis at consectetur lorem donec massa sapien faucibus. Tristique sollicitudin nibh sit amet commodo.',
		'link' => 'kpop.php#nctdream'
	]
];

$previews = [
	'about-me' => [
		'header' => 'Welcome!',
		'image' => '',
		'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
		et dolore magna aliqua. Eget sit amet tellus cras adipiscing. Ut tortor pretium viverra suspendisse.
		Dictum varius duis at consectetur lorem donec massa sapien faucibus. Tristique sollicitudin nibh sit
		amet commodo. Vitae ultricies leo integer malesuada nunc vel risus commodo viverra. Cursus metus
		aliquam eleifend mi in nulla posuere sollicitudin aliquam. Morbi tristique senectus et netus. Semper
		auctor neque vitae tempus quam pellentesque nec nam aliquam. Non curabitur gravida arcu ac tortor
		dignissim convallis aenean. Tincidunt arcu non sodales neque sodales ut etiam sit. Tempus iaculis
		urna id volutpat lacus laoreet. Consectetur lorem donec massa sapien faucibus. Quis ipsum
		suspendisse ultrices gravida dictum fusce ut placerat orci.',
		'link' => 'about.php'
	],
	'boy-of-the-week' => [
		'header' => 'Celebrity Of The Week',
		'image' => $boys[$boy]['image'],
		'text' => $boys[$boy]['description'],
		'link' => $boys[$boy]['link']
	]
];

/* 'Huening Kai' => [
		'image' => '',
		'description' => '',
		'link' => ''
	]
	
	*/

/* 

'header' => '',
'image' => '',
'text' => '',
'link' => ''
*/