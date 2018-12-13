<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Global Essay, Dissertation and Assignment Help </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta title="Looking for online essay, thesis or dissertation help? OnlineAssignmenthelp.com is your destination. We offer global assignment help service for all subjects at unbelievably cheap price.
                ">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/animated.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/scrollanimations.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://npmcdn.com/flickity@1.2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include './header.php'?>
    <div class="onl-banner-sections">
        <div class="onl-inrs-banner-sections-login-signups">
               <?php include './notification.php'?>
        </div>
    </div>
    <div class="online-login-assigments">
        <div class="login-on-sec">
            <div class="login-images-sect">
                <span class="login-logo-images">
                    <img src="./assets/images/OAH Logo.png" />
                </span>
                <span class="login-headers">
                    Welcome Back in OnlineAssigment
                </span>
                <span class="please-login-headers">
                    Please Login to Continue
                </span>
            </div>
        </div>
    </div>
 <form action="connection.php" method="post">	
    <div class="lg-sg-form-se">
        <div class="lg-sg-form-ins">
            <div class="lg-sub-inners">
                <div class="lg-sub-inners-left-sec">
                    <div class="lg-header-sec">
                        <span class="lg-hdd">
                            Sign In
                        </span>
                    </div>
                    <div class="social-icons-01">
                        <ul>
                            <li>
                                <a href="javascript:void(0)" class="ss-ic fb">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="ss-ic google">
                                    <i class="fa fa-google" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="ss-ic ins">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="over-bd">
                        <div class="border-overlay">
                            <span>OR</span>
                        </div>
                    </div>
                    <div class="form-sections-login">
                        <div class="lg-fr ">
                            <input type="text" name="signuserid" id="signuserid" placeholder="Enter registered email" required="true"/>
                            <span class="users-pp">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="lg-fr ">
                            <input type="password" name="signpassword" id="signpassword" placeholder="Enter Password" required="true" />
                            <span class="users-pp">
                                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="remember-me-and-forgets">
                            <span class="remember-m">
                                <p>
                                    <input type="checkbox" id="test1" />
                                    <label for="test1">Remember me</label>
                                </p>
                            </span>
                            <span class="forget-pass">
                                <a href="javascript:void(0)">Forget Password ?</a>
                            </span>
                        </div>
                        <div class="submit-buttin-sections">
                            <button type="submit" class="signin" name="signsubmit">
                                Sign in
                            </button>
                        </div>
                        <div class="notifications-sign">
                            <span class="notify-text">
                                Logging in for the first time?
                                <a href="signup.php" class="signup">
                                    SignUp
                                </a>
                                Instead
                            </span>
                        </div>
                    </div>
                </div>
                <div class="lg-sub-inners-right-sec">
                    <div class="lg-sub-inners-sections">
                        <div class="lg-contents-sc">
                            <div class="usss">
                                <div class="user-mmmg">
                                    <img src="./assets/images/Home Page Banner.png" />
                                </div>
                            </div>
                            <span class="user-nnnnm">
                                Pritam KumarSoni
                            </span>
                            <p class="user-testimonial">“Looking for online essay, thesis or dissertation help? OnlineAssignmenthelp.com is your destination”
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<form action="connection.php" method="get">
 <div>
	 <label style="color:red;"></label>
 </div>
</form>
    
	<?php include './footer.php'?>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="./assets/js/scrollanimations.js"></script>
<script src="./assets/js/style.js"></script>



</html>