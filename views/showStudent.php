<?php
ob_start();
?>

<div class="container text-center mt-4 mb-3">
  <h1>Liste des candidats</h1>
  <div class="row">
    <?php foreach ($student as $students)  { ?>
      <div class="col-md-4 mt-4 mb-4">
        <div class="card" style="width: 22rem;">
          <img src="<?php echo $students['avatar']?>" class="card-img-top" alt="les candidats">
          <div class="card-body">
            <h4 class="card-title text-center"><a href="./students/<?php echo $students['id']?>"> <?php echo $students['full_name']; ?></a></h4>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<?php
$content = ob_get_clean();
require('public/index.php');
