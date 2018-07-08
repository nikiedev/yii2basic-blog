<?php

/* @var $this yii\web\View */

use yii\widgets\LinkPager;
use yii\helpers\Url;

$this->title = 'Yii2 keep-simple20 Blog';
?>
<!-- Content
================================================== -->
<div id="content-wrap">

    <div class="row">

        <div id="main" class="eight columns">

            <?php foreach ($articles as $article): ?>

                <article class="entry">

                    <div class="entry-header">

                        <h2 class="entry-title">
                            <a href="<?php echo Url::toRoute(['site/single', 'id' => $article->id]) ?>" title=""><?php echo $article->title; ?></a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li><?php echo $article->getDate(); ?></li>
                                <span class="meta-sep">&bull;</span>
                                <li><a href="<?php echo Url::toRoute(['site/category', 'id' => $article->category->id]) ?>" title=""><?php echo $article->category->title; ?></a></li>
                                <span class="meta-sep">&bull;</span>
                                <li>John Doe</li>
                                <li><?php echo $article->viewed; ?></li>
                            </ul>
                        </div>

                    </div>

                    <div class="entry-content">
                        <p><?php echo $article->description; ?></p>
                    </div>

                </article> <!-- end entry -->

            <?php endforeach; ?>

            <div class="row add-bottom">

                <div class="twelve columns add-bottom">

                    <?php
                    echo LinkPager::widget([
	                    'pagination' => $pagination,
                        'prevPageLabel' => 'Prev',
                        'nextPageLabel' => 'Next'
                        ]);
                    ?>

                </div>

                <hr />

            </div> <!-- Row End-->


        </div> <!-- end main -->

	    <?php echo $this->render('/partials/sidebar', [
		    'categories' => $categories,
		    'popular' => $popular,
		    'recent' => $recent
	    ]); ?>

    </div> <!-- end row -->

</div> <!-- end content-wrap -->

