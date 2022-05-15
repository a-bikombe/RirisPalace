<?php

/* https://www.nashuaweb.net/~abikombe/CSCI206/12_lab7ab_log/home.php */

// logging part of script
ini_set('error_log', 'error.log');
error_log('refresh');
// header('Content-Type: text/plain');
header('Refresh: 60'); // 60-second refresh
echo date('r') . PHP_EOL;
$errorLog = implode(array_reverse(file('error.log'))); // see most recent error at the top
?>

<pre><?= $errorLog ?></pre>

<?php

// validation part of script
?>
	<pre><?= PHP_EOL . 'START SUBMISSION PROCESSING' . PHP_EOL ?>
	<?php

$contentNames = [];
foreach ($_POST as $name => $value) {
	array_push($contentNames, $name);
}

$args = [
	'flower' => [
		'filter' => FILTER_VALIDATE_REGEXP,  // Names often require a regular expression for validation
		'options' => [
			'regexp' => "/^\w[\w ',.&]{3,64}$/"  // This should match the pattern attribute of the associated input tag
		]
	],
	'domain' => [
		'filter' => FILTER_VALIDATE_REGEXP,
		'options' => [
			'regexp' => "/^(\w[\w\.-]+)*\.\w{2,16}$/"
		]
	],
	'quantity' => [
		'filter' => FILTER_VALIDATE_INT,
		'options' => [
			'min_range' => 0,
			'max_range' => 131
		]
	],
	'colors' => [
		'filter' => FILTER_VALIDATE_REGEXP,
		'flags' => FILTER_REQUIRE_ARRAY,
		'options' => [
			'regexp' => "/^\w{3,64}$/"
		]
	],
	'option' => [
		'filter' => FILTER_VALIDATE_REGEXP,
		'options' => [
			'regexp' => "/^(?:on|off)$/"
		]
	],
	'rb-answer' => [
		'filter' => FILTER_VALIDATE_REGEXP,
		'options' => [
			'regexp' => "/^(?:yes|maybe|no)$/"
		]
	],
	'story' => [
		'filter' => FILTER_VALIDATE_REGEXP,
		'options' => [
			'regexp' => "/^\w[\w ',.&]{3,100}$/"
		]
	]
];

if (!empty($_POST)) { ?>
	<pre><?= 'submitted content:' . PHP_EOL ?>
	<?php
	$validatedInputs = filter_input_array(INPUT_POST, $args);
	// yell at user if input is invalid, praise them if valid
	foreach ($validatedInputs as $name => $validation) { ?>
	<pre><?= "$name: " ?>
	<?php
		if ($validation === false) { ?>
			<pre><?= 'input is invalid. try again' . PHP_EOL ?>
			<?php
		} else {
			?>
			<pre><?= var_dump($validation) ?>
			<?php
		}
	}
} else {
	?>
	<pre><?= 'no submitted content' . PHP_EOL ?>
	<?php
}

?>

<pre><?= 'END SUBMISSION PROCESSING' . PHP_EOL ?>