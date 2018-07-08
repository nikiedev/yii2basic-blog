<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>

<!-- Content
   ================================================== -->
<div id="content-wrap">

	<div class="row">

		<div id="main" class="eight columns">
			<?php foreach ($articles as $article): ?>
			<article class="entry">

				<header class="entry-header">

					<h2 class="entry-title">
						<a href="<?php echo Url::toRoute(['site/single', 'id' => $article->id]); ?>" title=""><?php echo $article->title; ?></a>
					</h2>

					<div class="entry-meta">
						<ul>
							<li><?php echo $article->getDate(); ?></li>
							<span class="meta-sep">&bull;</span>
							<li><a href="<?php echo Url::toRoute(['site/category', 'id' => $article->category->id]); ?>" title="" rel="category tag"><?php echo $article->category->title; ?></a></li>
							<span class="meta-sep">&bull;</span>
							<li>John Doe</li>
						</ul>
					</div>

				</header>

				<div class="entry-content">
					<?php echo $article->description; ?>
				</div>

			</article> <!-- end entry -->
			<?php endforeach; ?>
			<div class="pagenav">
                <?php
                echo LinkPager::widget([
                    'pagination' => $pagination,
                    'prevPageLabel' => 'Prev',
                    'nextPageLabel' => 'Next'
                ]);
                ?>
			</div>


		</div> <!-- end main -->

		<?php echo $this->render('/partials/sidebar', [
			'categories' => $categories,
			'popular' => $popular,
			'recent' => $recent
		]); ?>

	</div> <!-- end row -->

</div> <!-- end content-wrap -->
