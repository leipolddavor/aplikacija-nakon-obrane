<div class="span4">
	<table class="table table-bordered table-striped table-condensed">
	<thead>
		<tr>
			<td>Datum</td>
			<td>Početak</td>
			<td>Kraj</td>
			<td>Broj prijavljenih</td>
			<td>Prijava</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach($termini as $termin): ?>
		<tr>
			<td><a class="getdetails" href="getdetails/<?php echo $termin->id ?>"><?php echo $termin->datum ?></a></td>
			<td><?php echo $termin->pocetak ?></td>
			<td><?php echo $termin->kraj ?></td>
			<td><?php echo $termin->popunjenost ?></td>
			<td><a class="prijavagumb btn btn-primary" href="prijavautermin/<?php echo $termin->id ?>">Prijava</a></td>
		</tr>
	<?php endforeach; ?>
	</tbody>	
	</table>
</div>

<div class="span4 popiskorisnika">

</div>

<script type="text/javascript">
$(document).ready(function(){
	$(".prijavagumb").click(function(e){
		e.preventDefault();
		var url = $(this).attr("href");
		$.get(url, function(response){
			location.reload();
		})
	})
	
	$(".getdetails").click(function(e){
		e.preventDefault();
		var url = $(this).attr("href");
		$.get(url, function(korisnici){
			$(".popiskorisnika").empty().append(korisnici);
		})
	})
})
</script>
