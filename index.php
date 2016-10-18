<?php include 'view/iHeader.php' ;?>
<main>
  <div class="parallax-container">
    <div class="parallax"><img src="images/background3.jpg"></div>
    <div class="container">
      <div class="card back">
        <div class="card-content">
          <div class="row">
            <div class="col s2">
              <a class="btn-large btn-floating center blue darken-2 disabled tooltipped" data-position="right" data-delay="50" data-tooltip="Add a review"><i class="material-icons">add</i></a>
            </div>
            <div class="col s8">
              <h1 class="center">Vacation</h1>
            </div>
          </div>
          <div class="row">
            <div class="col s12 l6">
              <div class="card-panel blue lighten-5">
                <!-- This is where code for different reviews will go -->
                <h4>Future vacation location</h4>
                <span class="">Future Vacation Review Goes here</span>
                <p class="">Future Vacation Rating </p>
                <div class="row">
                  <div class="col s6 m4 offset-m8">
                    <a class="btn-floating btn yellow darken-3 disabled tooltipped" data-position="bottom" data-delay="50" data-tooltip="Edit this review"><i class="material-icons">mode_edit</i></a>
                    <a class="btn-floating btn red disabled tooltipped" data-position="bottom" data-delay="50" data-tooltip="Delete this review"><i class="material-icons">close</i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include 'view/iFooter.php' ;?>