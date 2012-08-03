<div class="span4">
	
		<h1>Unesi podatke:</h1><br/>

		<form action="<?php echo base_url("user/registriraj");?>" method="post">
		<table class="table table-condensed table-striped table-bordered">
			<tr>
				<td>Ime:</td>
				<td><input type="text" name="ime"/></td>
			</tr>
			<tr>
				<td>Prezime:</td>
				<td><input type="text" name="prezime"/></td>
			</tr>
			<tr>
				<td>Broj mobitela:</td>
				<td><input type="text" name="mobitel"/></td>
			</tr>
			<tr>
				<td>Email adresa:</td>
				<td><input type="text" name="email"/></td>
			</tr>
			<tr>
				<td>Željeno korisničko ime:</td>
				<td><input type="text" name="username"/></td>
			</tr>
			<tr>
				<td>Željena lozinka</td>
				<td><input type="text" name="password"/></td>
			</tr>
			<tr>
				<td>Godina rođenja</td>
				<td>
					<select name="godina">
					<?php 
						for($i=1950; $i<2012; $i++)
							echo "<option value='$i'>$i</option>";
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Mjesto stanovanja</td>
				<td><input type="text" name="mjesto"/></td>
			</tr>
		</table>

		<div class="form-actions">
			<button type="submit" class="btn btn-primary">Spremi</button>
		</div>
		</form>
	</div>