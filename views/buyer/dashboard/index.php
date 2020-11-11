<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>buyer_index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= URL ?>public/css/market-header.css" />
    <link rel="stylesheet" href="<?= URL ?>public/css/b-footer.css" />
    <link rel="stylesheet" href="<?= URL ?>public/css/m-home.css" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    
</head>


    <div class="h-container">
        <div class="navbar">


            <div class="logo">
                <img src="<?= URL ?>public/images/hlogoxs.png" width="125px">
            </div>
            <div class="name">
                <h1 class="header-title">TZU-CHI-MARKET</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="<?= URL ?>buyer/help_sup"><i class="fa fa-question-circle fa-lg"><span class="btn-text"> Help & Support</span></i></a></li>
                    <li><a href="<?= URL ?>buyer/b_login"><i class="fa fa-sign-in fa-lg" aria-hidden="true"> <span class="btn-text"> Log-in</span></i></a></li>

                    <li><a href="<?= URL ?>buyer/join_in"><i class="fa fa-user-plus fa-lg" aria-hidden="true"><span class="btn-text"> Join-us</span></i></a></li>


                </ul>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="dis">
                    <h1>Welcome to the <br> TZU-CHI-MARKET</h1>
                    <p>
                        this is tzu-chi-market log-in page. this is tzu-chi-market log-in page. this is tzu-chi-market log-in page.
                        this is tzu-chi-market log-in page. this is tzu-chi-market log-in page. this is tzu-chi-market log-in page.

                    </p>
                </div>



                <div class="mhome-button">
                    <a href="<?= URL ?>register/buyRegForm" class="join-in">Join-in</a>
                </div>
                <div class="have-acc">
                    <p>Allready have an account? please<a href="<?= URL ?>buyer/b_login">Log-in</a></p>
                </div>

                <div class="mhome-button">
                    <a href="<?= URL ?>login" class="log-in">Log-in</a>
                </div>


            </div>
            <div class="col-2">
                <div class="r-img">
                    <img src="<?= URL ?>public/images/home.jpg">
                </div>
            </div>
        </div>
    </div>


    <footer>
        <i>
            <div class="bfooter">Powered by
                <h4>Humanity2020&copy;</h4>
            </div>
        </i>
    </footer>
</body>

</html>