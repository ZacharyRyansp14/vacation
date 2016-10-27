<?php include '../view/header.php'; ?>
<h2>Edit Review</h2>
<form action="index.php" method="post" id="edit_vacation_form">
	<input type="hidden" name="action" value="edit_vacation" />
	<input name="VacationId" type="hidden" value="<?= $VacationId ?>" />
	<br />
	<label><h5>Edit Vacation Location: </h5></label>
	<input type="input" name="vacation_place" value="<?= $VacationPlace ?>" />
	<br />
	<label><h5>Edit Vacation Review: </h5></label>
	<input type="input" name="vacation_review" value="<?= $VacationReview ?>" />
	<br />
	<label><h5>Edit Vacation Rating: </h5></label>
	<input type="input" name="vacation_rating" value="<?= $VacationRating ?>" />
	<br />
	<br />
	<label>&nbsp;</label>
	<input type="submit" value="Submit Your Update!" class="btn waves-effect amber lighten-1 black-text" />
	</form>

	<p><a href="index.php?action=list_vacation" class="btn waves-effect amber black-text">Go back to other reviews</a></p>

<?php include '../view/footer.php'; ?>
