<?php session_start();  ?>



<?php include '../view/header.php'; ?>
<main>
  <div class="parallax-container">
    <div class="parallax"><img src="../images/background3.jpg"></div>
    <div class="container">
      <div class="card back">
        <div class="card-content">
          <div class="row">
            <div class="col s2">
              <a class="btn-large btn-floating center blue darken-2 tooltipped" data-position="right" data-delay="50" data-tooltip="Add a review" href="?action=show_add_form"><i class="material-icons">add</i></a>
            </div>
            <div class="col s8">
              <h1 class="center">Vacation</h1>
            </div>
          </div>
          <div class="row">
              <?php foreach ($vacations as $vacation) : ?>
            <div class="col s12 l6">
              <div class="card-panel blue lighten-5">
                <h4><?php echo $vacation['VacationPlace']; ?></h4>
                <span class=""><?php echo $vacation['VacationReview']; ?></span>
                <p class=""><?php echo $vacation['VacationRating']; ?></p>
                <div class="row">
                  <div class="col s6 m3 offset-m8">
                    <a class="btn-floating btn yellow darken-3 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Edit this review" href=".?action=show_edit_form&VacationId=<?= $vacation['VacationId'] ?>&VacationPlace=<?= $vacation['VacationPlace'] ?>&VacationReview=<?= $vacation['VacationReview'] ?>&VacationRating=<?= $vacation['VacationRating'] ?>"><i class="material-icons">mode_edit</i></a>
                    
                    	<a class="btn-floating btn red tooltipped" data-position="bottom" data-delay="50" data-tooltip="Delete this review" href=".?action=delete_vacation&VacationId=<?= $vacation['VacationId'] ?>"><i class="material-icons">close</i></a>


                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>

<?php include '../view/footer.php' ; ?>