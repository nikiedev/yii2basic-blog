<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\KeepSimple20Asset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

KeepSimple20Asset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- Header
   ================================================== -->
<header id="top">

    <div class="row">

        <div class="header-content twelve columns">

            <h1 id="logo-text"><a href="index" title="">Keep It Simple.</a></h1>
            <p id="intro">Put your awesome slogan here...</p>

        </div>

    </div>

    <nav id="nav-wrap">

        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
        <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>

        <div class="row">

            <ul id="nav" class="nav">
                <li class="current"><a href="index">Home</a></li>
                <li class="has-children"><a href="#">Dropdown</a>
                    <ul>
                        <li><a href="#">Submenu 01</a></li>
                        <li><a href="#">Submenu 02</a></li>
                        <li><a href="#">Submenu 03</a></li>
                    </ul>
                </li>
                <li><a href="demo">Demo</a></li>
                <li><a href="archives">Archives</a></li>
                <li class="has-children"><a href="category">Blog</a>
                    <ul>
                        <li><a href="category">Blog Entries</a></li>
                        <li><a href="single">Single Blog</a></li>
                    </ul>
                </li>
                <li><a href="page">Page</a></li>
            </ul> <!-- end #nav -->

        </div>

    </nav> <!-- end #nav-wrap -->

</header> <!-- Header End -->

<?php echo $content; ?>

<!-- Footer
================================================== -->
<footer>

    <div class="row">

        <div class="twelve columns">
            <ul class="social-links">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-github-square"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
        </div>

        <div class="six columns info">

            <h3>About Keep It Simple</h3>

            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                nibh id elit.
            </p>

            <p>Lorem ipsum Sed nulla deserunt voluptate elit occaecat culpa cupidatat sit irure sint
                sint incididunt cupidatat esse in Ut sed commodo tempor consequat culpa fugiat incididunt.</p>

        </div>

        <div class="four columns">

            <h3>Photostream</h3>

            <ul class="photostream group">
                <li><a href="#"><img alt="thumbnail" src="/keep-simple20/images/thumb.jpg"></a></li>
                <li><a href="#"><img alt="thumbnail" src="/keep-simple20/images/thumb.jpg"></a></li>
                <li><a href="#"><img alt="thumbnail" src="/keep-simple20/images/thumb.jpg"></a></li>
                <li><a href="#"><img alt="thumbnail" src="/keep-simple20/images/thumb.jpg"></a></li>
                <li><a href="#"><img alt="thumbnail" src="/keep-simple20/images/thumb.jpg"></a></li>
                <li><a href="#"><img alt="thumbnail" src="/keep-simple20/images/thumb.jpg"></a></li>
                <li><a href="#"><img alt="thumbnail" src="/keep-simple20/images/thumb.jpg"></a></li>
                <li><a href="#"><img alt="thumbnail" src="/keep-simple20/images/thumb.jpg"></a></li>
            </ul>

        </div>

        <div class="two columns">
            <h3 class="social">Navigate</h3>

            <ul class="navigate group">
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Demo</a></li>
                <li><a href="#">Archives</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>

        <p class="copyright">&copy; Copyright 2014 Keep It Simple. &nbsp; Design by <a title="Styleshout"
                                                                                       href="http://www.styleshout.com/">Styleshout</a>.
        </p>

    </div> <!-- End row -->

    <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-chevron-up"></i></a></div>

</footer> <!-- End Footer-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
