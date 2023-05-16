<!-- header top starts -->
<?php include 'layout/header_top.php'; ?>
<!-- // header top ends -->

    <div id="wrapper">
        <?php include 'layout/header.php'; ?>
        <section class="a-call contact">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="wrap-title-a-call">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="inner">
                                <!-- controller/authController.php -->
                                    <h3>Register here to have access to our services</h3>
                                    <?php
                                            if(isset($_GET["error"])){
                                            if($_GET["error"] == "emptyinput" ){
                                                echo'
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>Oops!</strong> Fill the fields!
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                              </div>
                                                // <p class ="alerts errormsg">  </p>
                                                ';
                                            }else if($_GET["error"] == "userexit" ){
                                                echo'
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>Oops!</strong> User Exist!
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                              </div>
                                                // <p class ="alerts errormsg">  </p>
                                                ';
                                            }else if($_GET["error"] == "incorrectPassword" ){
                                                echo'
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>Oops!</strong> Your Password doesn\'t match
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                              </div>
                                                // <p class ="alerts errormsg">  </p>
                                                ';
                                            }else if($_GET["error"] == "none" ){
                                                echo'
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Congratulation!</strong> Your information has been submitted successfuly. You can click on above login to continue your process
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                              </div>
                                                // <p class ="alerts errormsg">  </p>
                                                ';
                                            }

                                            }
                                        ?>
                                    <form action="controller/registerController.php" method="post" id="commentform" class="comment-form">
                                        <div class="text-wrap clearfix">
                                            <fieldset class="name-wrap">
                                                <input type="text" class="tb-my-input" name="fullname" tabindex="1" placeholder="Enter your Name...." size="32">
                                            </fieldset>
                                            <fieldset class="email-wrap">
                                                <input type="email" id="email" class="tb-my-input" name="email" tabindex="2" placeholder="Enter your Email...."  size="32">
                                            </fieldset>
                                            <fieldset class="name-wrap">
                                                <input type="number" class="tb-my-input" name="phone" tabindex="1"  maxlength="11" placeholder="Enter your Phone Number....">
                                            </fieldset>
                                            <fieldset class="select">
                                                <select name="location" id="" style="background:rgba(33, 36, 33, 0.5); border:solid black 3px; color:white; padding:16px; padding-left:25px; border-radius: 5px;">
                                                        <option value="">Select your Transformer Location...</option>
                                                        <option value="Come">come</option>
                                                        <option value="Go">Go</option>
                                                </select>
                                            </fieldset>
                                            <fieldset class="name-wrap">
                                                <input type="password" class="tb-my-input" name="password" tabindex="1" placeholder="Enter your Password....">
                                            </fieldset>
                                            <fieldset class="email-wrap">
                                                <input type="password" class="tb-my-input" name="rpassword" tabindex="2" placeholder="Repeat the password...."  size="32">
                                            </fieldset>
                                        </div>
                                        <p class="form-submit">
                                            <button name="register" class="font-style linear-color border-corner submit">Submit Now</button>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="bottom" class="bottom-type1 position-relative">
            <div class="container">
                <div class="bottom-wrap text-center">
                    <div id="copyright">
                        <a href="#">Copyright © 2023 CordsMobile </a><span class="license"> All Rights
                            Reserved</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a id="scroll-top"></a>

    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery-validate.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/countto.js"></script>
    <script>
        $().alert('close')
    </script>
</body>


<!-- Mirrored from themesflat.co/html/soffets/location.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2023 02:49:39 GMT -->

</html>