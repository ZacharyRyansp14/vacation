<?php include '../view/header.php'; ?>

<h3>Add your review!</h3>
<div class="row">
	<form action="index.php" method="post" id="add_vacation_form">
		<input type="hidden" name="action" value="add_vacation" />
		<br />
		<label><h5>Vacation Location: </h5></label>
		<input type="input" name="vacation_place" />
		<br />
		<label><h5>Tell us about the vacation!</h5></label>
		<input type="input" name="vacation_review" />
		<br />

		<label><h5>Edit Vacation Rating: </h5></label>
		<input type="input" name="vacation_rating" />
		<br />
		<br />
		<label>&nbsp;</label>
		<input type="submit" value="Add New Review!" class="btn waves-effect amber black-text" />
		<!--
		<div class="input-field col s12">
	    <select>
	      <option value="" disabled selected>Choose your option</option>
	      <option value="1">1 - Poor</option>
	      <option value="2">2 - Okay</option>
	      <option value="3">3 - Good</option>
	      <option value="4">4 - Great</option>
	      <option value="5">5 - Excellent</option>
	    </select>
		  </div>-->
	</form>
</div>

<?php include '../view/footer.php'; ?>