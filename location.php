<?php include 'header.php'; ?>
<section id="location">
	<div class="container">
		<div class="title">
			<h1><small><span class="first">FIRST</span> Technical Challenge</small></h1>
			<h1>Location</h1>
			<h1><small>Know your way around Battlefield High School</small></h1>
		</div>
	</div>
</section>
<section id="address">
	<div class="container">
		<div id="bhs">
			<article>
				<h3>Battlefield High School</h3>
				1500 Graduation Drive<br>
				Haymarket, Virginia 20169<br><br>
				<a href="https://www.google.com/maps/preview#!q=Battlefield+High+School" target="_blank">Google Maps</a>
				<a href="http://battlefield.groupfusion.net" target="_blank">School Website</a>
			</article>
			<aside>
				<h3>Get Directions</h3>
				<form id="calculate-route" name="calculate-route" action="#" method="get">
					<label class="hidden" for="from">From:</label>
					<input type="text" id="from" name="from" required="required" placeholder="Enter Address" size="30" />
					<label class="hidden" for="to">To:</label>
					<input class="hidden" type="text" id="to" name="to" required="required" placeholder="Battlefield High School" value="Battlefield High School" size="30" />
					<input type="submit" value="Get Directions" />
					<a class="hidden" id="from-link" href="#">Detect Location</a>
					<input type="reset" />
				</form>
				<br>
				On the day of the event, please enter at front door near the flag pole on both sites. Hampton Inn is the closest hotel.
			</aside>
		</div>
	</div>
</section>
<p id="error"></p>
</section>
<section id="map-canvas">
	Please enable javascript for this map to properly load.
</section>
<!--<section id="map">
	<iframe src="http://mapsengine.google.com/map/embed?mid=zwy7eX4uZBt8.kojQPeUNX9l4&zoom=12"></iframe>
</section>-->
<?php include 'footer.php'; ?>