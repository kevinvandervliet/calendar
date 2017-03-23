<head>
  <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<div style="margin-top: 30%;">
	<center>
		<h2>Verander informatie</h2>
		<form style="margin-top: 5px;" action="/Calendar/editSave/" method="POST">
			<input type="text" name="person" value="<?= $person["person"]; ?>"><br>
			<input type="text" name="day" value="<?= $person["day"]; ?>"><br>
			<input type="text" name="month" value="<?= $person["month"]; ?>"><br>
			<input type="text" name="year" value="<?= $person["year"]; ?>"><br>
			<input type="hidden" name="id" value="<?= $person["id"]; ?>">
			<button style="margin-top: 7px;" type="submit">Opslaan</button>
		</form>
	</center>
</div>