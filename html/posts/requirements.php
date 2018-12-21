<!DOCTYPE html>
<html lang="en">

<?php require_once('../../includes/init.php') ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Requirements</title>

    <!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../../css/clean-blog.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<?php require(INCLUDES_PATH . '/navbar.php') ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('../../img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>Requirements</h1>
                    <span class="meta">Posted on December 21, 2018</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
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
            </div>
        </div>
    </div>
</article>

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
<script src="../../vendor/jquery/jquery.min.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="../../js/clean-blog.min.js"></script>

</body>

</html>