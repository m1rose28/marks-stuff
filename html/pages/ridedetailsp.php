<section id="precontent">

	<h3>Tell us about your car</h3>
	</section>

	<section id="content">
				<ul id="ridedetailslist">
					<li>
					   <h3>Car type</h3>
						  <select class="rselect right" onchange="newridedetails();" id="cartype" name="cartype" data-role="none">
							<option value="Sedan">Sedan</option>
							<option value="SUV">SUV</option>
							<option value="Minivan">Minivan</option>
							<option value="Sports Coupe">Sports Car</option>
							<option value="Other">Other</option>
						  </select>
					</li>
					<li>
						<h3>Car maker</h3>			
							<select class="rselect right" onchange="newridedetails();" id="carmaker" name="carmaker" data-role="none">
								<option value="Acura">Acura</option>
								<option value="Audi">Audi</option>
								<option value="BMW">BMW</option>
								<option value="Buick">Buick</option>
								<option value="Cadillac">Cadillac</option>
								<option value="Chevrolet">Chevrolet</option>
								<option value="Chrysler">Chrysler</option>
								<option value="Dodge">Dodge</option>
								<option value="Ford">Ford</option>
								<option value="GMC">GMC</option>
								<option value="Honda">Honda</option>
								<option value="Hyundai">Hyundai</option>
								<option value="Infinity">Infinity</option>
								<option value="Jaguar">Jaguar</option>
								<option value="Jeep">Jeep</option>
								<option value="Kia">Kia</option>
								<option value="Land Rover">Land Rover</option>
								<option value="Lexus">Lexus</option>
								<option value="Lincoln">Lincoln</option>
								<option value="Mazda">Mazda</option>
								<option value="Mercedes Benz">Mercedes Benz</option>
								<option value="Mercury">Mercury</option>
								<option value="Mini">Mini</option>
								<option value="Mitsubishi">Mitsubishi</option>
								<option value="Nissan/Datsun">Nissan/Datsun</option>
								<option value="Porsche">Porsche</option>
								<option value="Saab">Saab</option>
								<option value="Scion">Scion</option>
								<option value="Smart">Smart</option>
								<option value="Subaru">Subaru</option>
								<option value="Suzuki">Suzuki</option>
								<option value="Tesla">Tesla</option>
								<option value="Toyota">Toyota</option>
								<option value="Volkswagen">Volkswagen</option>
								<option value="Volvo">Volvo</option>
								<option value="Volvo">Other</option>
							</select>
						</li>
						<li>
							<h3>Seats</h3>
								<select class="rselect right" onchange="newridedetails();" id="seats" name="seats" data-role="none">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
						</li>
						<li>
							<h3>Luxury Car</h3>
							<input type="checkbox" onchange="newridedetails();" id="luxurycar" class="rcheckbox right" name="luxurycar" data-role="none">
						</li>

					    <form action="../s3/upload.php" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="startUpload();" >
	
						<li>
							<h3>Car Photo</h3>
							<img src="" width="100px" height="65px" id="frontview" style="display:none;float:right;"/>
							<input name="front" type="file" size="30" onchange="addphoto()"/><br/>
							<input type="submit" style="display:none;" id="loadbutton" name="submitBtn" data-role="none" class="primarybutton" onsubmit="startUpload();" value="Upload Photo" />	 
							<input name="fbid" id="fbid" value="" type="hidden" />
							<center><h2 id="uploadprocess" style="display:none;"><img src="../images/loader.gif" /> &nbsp;&nbsp; Loading... </h2></center>
							<iframe id="upload_target" name="upload_target" src="../s3/upload.php" style="width:0;height:0;border:0px solid #fff;"></iframe>
					    </li>
					 	</form>
			  		</ul>
			  
			</section>

			<input type="submit" style="display:none;" id="driverflow" name="submitBtn" data-role="none" class="primarybutton" onclick="startflow();" value="Next" />	 
