<div class="comtainer">
	<?php if (!empty($posts)):?>
	<?php foreach($posts as $post) :?>
		<div class="panel panel-default">
		 	<div class="panel-heading"><?=$post['name']?></div>
	 		<div class="panel-body">
	    		<?=$post['sex']?>
	  		</div>
		</div>
	<?php endforeach; ?>
	<?php endif; ?>
</div>