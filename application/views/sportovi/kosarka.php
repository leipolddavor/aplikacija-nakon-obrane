<div class="span4">
	<h1>Košarka:</h1>
	<form class="well form-search">
		<label>Odaberi mjesec:</label>
		<input type="text" class="datum input-medium search-query">
		<button type="submit" class="btn btn-success">Odaberi</button>
    </form>
	<table class="table table-bordered table-striped table-condensed">
	<thead>
		<tr>
			<td>Datum</td>
			<td>Popunjenost</td>
			<td>Teren</td>
			<td>Prijava</td>
		</tr>
	</thead>
	<tbody>
	<?php for($i=0; $i<30; $i++): ?>
		<tr>
			<td>01.02.2012.</td>
			<td>5</td>
			<td>Jarun</td>
			<td><input class="btn btn-primary" type="button" value="Prijavi se"/></td>
		</tr>
	<?php endfor; ?>
	</tbody>	
	</table>
</div>

<div class="span3">
	<h2>Prijavljeni igraci:</h2><br/>
	<div class="well well-small">
	<table class="table table-bordered table-striped table-condensed">
		<thead>
			<tr>
				<td>Redni broj</td>
				<td>Ime i prezime</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Petar Peric</td>
			</tr>
						<tr>
				<td>1</td>
				<td>Petar Peric</td>
			</tr>
						<tr>
				<td>1</td>
				<td>Petar Peric</td>
			</tr>
						<tr>
				<td>1</td>
				<td>Petar Peric</td>
			</tr>
						<tr>
				<td>1</td>
				<td>Petar Peric</td>
			</tr>
						<tr>
				<td>1</td>
				<td>Petar Peric</td>
			</tr>
						<tr>
				<td>1</td>
				<td>Petar Peric</td>
			</tr>
		</tbody>
	</table>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(".datum").datepicker();
	})
</script>