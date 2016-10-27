<?php include 'view/iHeader.php' ;?>
<main>
  <div class="parallax-container">
    <div class="parallax"><img src="images/background3.jpg"></div>
    <div class="container">
      <div class="card back">
        <div class="card-content">
          <div class="row">
            <div class="col s2">
              <a class="btn-large btn-floating center blue darken-2 tooltipped disabled" data-position="right" data-delay="50" data-tooltip="Login to add a review"><i class="material-icons">add</i></a>
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
                    <a class="btn-floating disabled btn yellow darken-3 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Login to edit this review"><i class="material-icons">mode_edit</i></a>
                    
                      <a class="btn-floating disabled btn red tooltipped" data-position="bottom" data-delay="50" data-tooltip="Login to delete this review"><i class="material-icons">close</i></a>


                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>

<?php include 'view/iFooter.php' ;?>