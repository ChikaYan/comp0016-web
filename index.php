<!DOCTYPE html>
<html lang="en">

<?php require_once('./includes/init.php') ?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Team 24 - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<?php require(INCLUDES_PATH . '/navbar.php') ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Ocado Review Analysis System</h1>
                    <h2 class="subheading">COMP0016 Team 24</h2>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2 class="section-heading">Abstract</h2>
                <p>Reviews are essential for any company’s improvement and growth, but some of them may not be very
                    useful and as the number increases they can be very hard to manage. For this project, we work with
                    Ocado research team to develop a Machine Learning model that is capable of applying Natural Language
                    Processing (NLP) techniques, analysing the review text and predicting the rating and helpfulness of
                    this particular review. It can help to clean the unhelpful reviews, correct the reviews that are
                    tagged with wrong ratings, and will produce some useful methodology and learning patterns for the
                    research team.</p>

                <h2 class="section-heading">Key Features</h2>
                <ol>
                    <li>Supervised learning model that improves by feeding in example data with correct answers.</li>
                    <li>Use NLP to process reviews.</li>
                    <li>Can predict the rating and helpfulness based on the text of the review.</li>
                    <li>Written in Python.</li>
                </ol>
                <h2 class="section-heading">Development Team</h2>
                <p style="line-height: 2"><img src="img/kryz.jpg" alt="Krzysztof Kozinski"
                                               style="float:left;width:60px;height:70px;">
                    Krzysztof Kozinski
                </p>
                <p style="line-height: 2"><img src="img/walter.jpg" alt="Walter Wu"
                                               style="float:left;width:70px;height:70px;">
                    Walter Wu
                </p>
                <p style="line-height: 2"><img src="img/rui.jpg" alt="Rui Chen"
                                               style="float:left;width:70px;height:70px;">
                    Rui Chen
                </p>
            </div>
        </div>
    </div>
</article>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <a href="html/posts/requirements.php">
                    <h2 class="post-title">
                        Requirements
                    </h2>
                    <h3 class="post-subtitle">
                        The requirements of this project. Including MoSCoW list, persona etc.
                    </h3>
                </a>
                <p class="post-meta">21/12/2018</p>
            </div>
            <!--<hr>-->
            <!--<div class="post-preview">-->
            <!--<a href="post.html">-->
            <!--<h2 class="post-title">-->
            <!--I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.-->
            <!--</h2>-->
            <!--</a>-->
            <!--<p class="post-meta">Posted by-->
            <!--<a href="#">Start Bootstrap</a>-->
            <!--on September 18, 2018</p>-->
            <!--</div>-->
            <!--<hr>-->
            <!--<div class="post-preview">-->
            <!--<a href="post.html">-->
            <!--<h2 class="post-title">-->
            <!--Science has not yet mastered prophecy-->
            <!--</h2>-->
            <!--<h3 class="post-subtitle">-->
            <!--We predict too much for the next year and yet far too little for the next ten.-->
            <!--</h3>-->
            <!--</a>-->
            <!--<p class="post-meta">Posted by-->
            <!--<a href="#">Start Bootstrap</a>-->
            <!--on August 24, 2018</p>-->
            <!--</div>-->
            <!--<hr>-->
            <!--<div class="post-preview">-->
            <!--<a href="post.html">-->
            <!--<h2 class="post-title">-->
            <!--Failure is not an option-->
            <!--</h2>-->
            <!--<h3 class="post-subtitle">-->
            <!--Many say exploration is part of our destiny, but it’s actually our duty to future generations.-->
            <!--</h3>-->
            <!--</a>-->
            <!--<p class="post-meta">Posted by-->
            <!--<a href="#">Start Bootstrap</a>-->
            <!--on July 8, 2018</p>-->
            <!--</div>-->
            <!--<hr>-->
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
</div>

<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/clean-blog.min.js"></script>

</body>

</html>