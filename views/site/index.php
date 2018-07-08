<?php

/* @var $this yii\web\View */

use yii\widgets\LinkPager;

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
                            <a href="index" title=""><?php echo $article->title; ?></a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li><?php echo $article->getDate(); ?></li>
                                <span class="meta-sep">&bull;</span>
                                <li><a href="#" title=""><?php echo $article->category->title; ?></a></li>
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
                    <li><a href="#" title=""><?php echo $category_post->title; ?></a> <?php echo $category_post->getArticlesCount(); ?></li>
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
                <h3>Post Tags.</h3>

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
                    <li><a href="#"><?php echo $popular_post->title; ?></a></li>
                    <?php endforeach; ?>
                </ul>

            </div>

            <div class="widget widget_recent">
                <h3>Recent Posts</h3>

                <ul class="link-list">
			        <?php foreach ($recent as $recent_post): ?>
                        <li><a href="#"><?php echo $recent_post->title; ?></a></li>
			        <?php endforeach; ?>
                </ul>

            </div>

        </div> <!-- end sidebar -->

    </div> <!-- end row -->

</div> <!-- end content-wrap -->

