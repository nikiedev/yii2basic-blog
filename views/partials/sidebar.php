<?php

use yii\helpers\Url;

?>

<div id="sidebar" class="four columns">

	<div class="widget widget_search">
		<h3>Search</h3>
		<form action="#">

			<input type="text" value="Search here..."
			       onblur="if(this.value == '') { this.value = 'Search here...'; }"
			       onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
			<input type="submit" value="" class="submit-search">

		</form>
	</div>

	<div class="widget widget_categories group">
		<h3>Categories</h3>
		<ul>
			<?php foreach ($categories as $category_post): ?>
				<li><a href="<?php echo Url::toRoute(['site/category', 'id' => $category_post->id]); ?>" title=""><?php echo $category_post->title; ?></a> <?php echo $category_post->getArticlesCount(); ?></li>
			<?php endforeach; ?>
		</ul>
	</div>

	<div class="widget widget_text group">
		<h3>Widget Text</h3>

		<p>Lorem ipsum Ullamco commodo laboris sit dolore commodo aliquip incididunt fugiat esse dolor aute
			fugiat minim eiusmod do velit labore fugiat officia ad sit culpa labore in consectetur sint cillum
			sint consectetur voluptate adipisicing Duis irure magna ut sit amet reprehenderit.</p>

	</div>

	<div class="widget widget_tags">
		<h3>Post Tags</h3>

		<div class="tagcloud group">
			<a href="#">Corporate</a>
			<a href="#">Onepage</a>
			<a href="#">Agency</a>
			<a href="#">Multipurpose</a>
			<a href="#">Blog</a>
			<a href="#">Landing Page</a>
			<a href="#">Resume</a>
		</div>

	</div>

	<div class="widget widget_popular">
		<h3>Popular Posts</h3>

		<ul class="link-list">
			<?php foreach ($popular as $popular_post): ?>
				<li><a href="<?php echo Url::toRoute(['site/single', 'id' => $popular_post->id]); ?>"><?php echo $popular_post->title; ?></a></li>
			<?php endforeach; ?>
		</ul>

	</div>

	<div class="widget widget_recent">
		<h3>Recent Posts</h3>

		<ul class="link-list">
			<?php foreach ($recent as $recent_post): ?>
				<li><a href="<?php echo Url::toRoute(['site/single', 'id' => $recent_post->id]); ?>"><?php echo $recent_post->title; ?></a></li>
			<?php endforeach; ?>
		</ul>

	</div>

</div> <!-- end sidebar -->