<?php
include "header.php";
?>

<section class="" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 15px;">
          <div class="card-body text-center">
            <h4><?php echo $_SESSION['fname']." ".$_SESSION['lname']?></h4>
            <div>
            </div>
            <button>
                <a href="logout.php">logout</a>
            </button>
          </div>
        </div>


      </div>
    </div>
  </div>
</section>

<?php
    include 'footer.php';
?>