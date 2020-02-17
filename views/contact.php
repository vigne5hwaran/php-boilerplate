
<?php require("botdetect.php"); ?>

    <!-- Start Contact Top Entry
    ============================================= -->
    <div class="top-entry-area text-center">
        <div class="container">
            <div class="row">
                <div class="item-box">
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <i class="fas fa-map-marked-alt"></i>
                            <h4>Location</h4>
                            <p>
                                Kumaran Hospital, No. 214, E.V.R Periyar Salai, 
                                Poonamallee High Road, Kilpauk, Chennai, Tamil Nadu 600010 India.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <i class="fas fa-phone"></i>
                            <h4>Emergency Case</h4>
                            <h2>+044 - 4295 6777</h2>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <i class="fas fa-envelope-open"></i>
                            <h4>Email</h4>
                            <p>
                                ayyappas1@yahoo.co.uk
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Top Entry -->

    <!-- Start Contact Area
    ============================================= -->
    <div class="contact-area bg-gray text-center default-padding">
        <div class="container">
            <div class="row">
                <div class="contact-items">
                    <div class="col-md-8 col-md-offset-2 contact-form">
                        <h2>Get in touch with us</h2>
                        <p>
                            Our next drew much you with rank. Tore many held age hold rose than our. She literature
                            sentiments any contrasted. Set aware joy sense young now tears china shy.
                        </p>
                        <form action="includes/process.php" method="POST"
                            class="contact-form">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name *"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email *"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone *"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments"
                                            placeholder="Tell Us About Your Problem *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="6Lfu-bIUAAAAAPrvWLe338aFAbQiRyelGOURQ54K" 
                                        data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" name="submit" id="submit">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Google Maps 
    ============================================= -->
    <div class="maps-area">
        <div class="container-full">
            <div class="row">
                <div class="google-maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End Google Maps -->