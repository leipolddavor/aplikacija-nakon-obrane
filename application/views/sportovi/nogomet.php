<div class="span4">
<table class="table table-bordered">
<thead>
	<tr><td>Ime</td><td>Prezime</td></tr>
</thead>
<tbody>
<?php foreach($korisnik as $k): ?>
<tr>
	<td><?php echo $k->ime?></td>
	<td><?php echo $k->prezime?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>