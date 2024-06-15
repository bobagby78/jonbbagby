<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="../../assets/js/tab-pane.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>jonbbagby</title>
</head>

<body>
    <div class="container my-4">
        <div class="header col-12">
            <div class="header-content col-6 offset-3">
                <p class="center h1" style="margin-left: auto">Jon B Bagby</p>
                <p class="center med-n-bold"> Full Stack Web Developer</p>
            </div>
        </div>
        <div class="row col-md-12 col-lg-10 offset-lg-1 pretty-box">
            <div class="col-6 left image">
                <img id="headshot" src="../../images/image1.jpg" alt="Jon Bagby headshot">
            </div>
            <div class="col-6 words">
                <div id="tab-header" class="vertical col-12">
                    <span data-name="other" class="tab-btn other btn"> Other </span>
                    <span data-name="frameworks" class="tab-btn frameworks btn"> Frameworks </span>
                    <span data-name="languages" class="tab-btn languages btn"> Languages </span>
                    <span data-name="education" class="tab-btn education btn"> Education </span>
                    <span data-name="contact" class="tab-btn contact btn"> Contact </span>
                    <span data-name="about" class="tab-btn about btn active"> About </span>
                </div>
                <div class="tab-content">
                    <div id="about" data-name="about" class="tab-panel about active">
                        <?php include('./templates/about.php') ?>
                    </div>
                    <div id="contact" data-name="contact" class="tab-panel contact hidden">
                        <?php include('./templates/contact.php') ?>
                    </div>
                    <div id="education" data-name="education" class="tab-panel education hidden">
                        <?php include('./templates/education.php') ?>
                    </div>
                    <div id="languages" data-name="languages" class="tab-panel languages hidden">
                        <?php include('./templates/languages.php') ?>
                    </div>
                    <div id="frameworks" data-name="frameworks" class="tab-panel frameworks hidden">
                        <?php include('./templates/frameworks.php') ?>
                    </div>
                    <div id="other" data-name="other" class="tab-panel other hidden">
                        <?php include('./templates/other.php') ?>
                    </div>
                </div>
            </div>


        </div>
    </div>

    </div>
    </div>
</body>

<script>
    $("#headshot").on("mouseover", function() {
        $(this).addClass('hover');
    });
    $("#headshot").on("mouseout", function() {
        $(this).removeClass('hover');
    });
    // tab-panes
    $(document).ready(function() {

        $('.tab-btn').on('click', function() {
            //remove active from tab-btn elements, and tab-panel elements
            $('.tab-btn, .tab-panel').removeClass('active');
            $('.tab-panel').addClass('hidden')

            //if there's a tab-panel with data('name') equal to this.data('name'), add active to it 
            let name = '.' + $(this).data('name');
            $(this).addClass('active');
            $(name).addClass('active').removeClass('hidden');

        })

    });
</script>

</html>