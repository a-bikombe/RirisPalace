<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Form</title>
	<link href="css/form.css" rel="stylesheet">
</head>

<body>
	<h1>Form</h1>
	<form action="log.php" method="post" novalidate>
		<fieldset>
			<legend>Fieldset</legend>
			<div class="block">
				<label for="flower">Flower</label>
				<input type="text" id="flower" name="flower" pattern="\w[\w ',.&]{3,64}">
			</div>
			<div class="block">
				<label for="domain">Domain</label>
				<input type="text" id="domain" name="domain" pattern="(\w[\w\.-]+)*\.\w{2,16}">
			</div>
			<div class="block">
				<label for="number">Number</label>
				<input type="number" id="number" name="quantity" min="0" max="131">
			</div>
			<div class="block">
				<label for="colors">Colors</label>
				<select id="colors" name="colors[]" multiple>
					<option>red</option>
					<option>blue</option>
					<option>yellow</option>
					<option>orange</option>
					<option>white</option>
					<option>pink</option>
					<option>purple</option>
				</select>
			</div>
			<div class="block cb">
				<label>Option <input type="checkbox" id="option" name="option"></label>
			</div>
			<div class="block rb">
				<label>Answer</label>
				<label><input type="radio" name="rb-answer" value="no">No</label>
				<label><input type="radio" name="rb-answer" value="maybe">Maybe</label>
				<label><input type="radio" name="rb-answer" value="yes">Yes</label>
			</div>
			<div class="block">
				<label for="story">Story</label>
				<textarea id="story" name="story"></textarea>
			</div>
		</fieldset>
		<div class="buttons pt-1vw border-5px">
			<button type="submit">Go</button>
			<button type="reset">Reset</button>
		</div>
	</form>
</body>

</html>