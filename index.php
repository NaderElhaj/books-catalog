<?php
include("inc/functions.php") ;
include("inc/data.php") ;
$pageTitle = "Personal Media Library";
$section = null;
include("inc/header.php"); ?>

<div id="content">
	<div class="section catalog random">

		<div class="wrapper">

			<h2>May we suggest something?</h2>

			<ul class="items">
            <?php 
            foreach($catalog as $id =>$item){
                echo get_item_hmtl($id,$item) ;
            }
            ?>
        </ul>

		</div>

	</div>

</div>

<?php include("inc/footer.php") ?>