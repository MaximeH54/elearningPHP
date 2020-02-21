<?php
ob_start();
?>

<div class="container text-center mt-4 mb-3">
	<form class="form-style-4" action="post.php" method="post">
		<div class="plate">
			<p class="script"><span>Liste</span></p>
			<p class="shadow text1">des</p>
			<p class="shadow text2">QUIZ</p>
			<p class="shadow text3">à réaliser</p>
			<p class="script"><span>bonne chance !</span></p>
		</div>
  <div class="row">
    <?php foreach ($quiz as $quizz)  { ?>
      <div class="col-md-4 mt-4 mb-4">
        <div class="card" style="width: 22rem;">
          <div class="card-body">
            <h4 class="card-title text-center">
							<a href="./quiz/<?php echo $quizz['id']?>">
								<?php echo $quizz['name']; ?>
							</a>
						</h4>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<?php
$content = ob_get_clean();
require('public/index.php');
