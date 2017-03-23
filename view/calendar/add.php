<div style="margin-top: 30%;">
	<center>
		<h2>Voeg een verjaardag toe</h2>
			<form style="margin-top: 5px;" action="/Calendar/add/" method="POST">
				<input style="" type="text" name="person" placeholder="Persoon" value=""><br>
				<input style="" type="text" name="day" placeholder="Dag" value=""><br>
				<input type="text" name="month" placeholder="Maand" value=""><br>
				<input type="text" name="year" placeholder="Jaar" value=""><br>
				<input type="hidden" name="id" value="">
				<button style="margin-top: 7px;" type="submit" name="add">Toevoegen</button>
			</form>
	</center>
</div>