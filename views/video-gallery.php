    <!-- Start Gallery
    ============================================= -->
    <div class="gallery-area default-padding">
        <div class="container">
            <div class="gallery-items-area text-center">
                <div class="row">
                    <div class="col-md-12 gallery-content">

                        <div class="row magnific-mix-gallery text-center masonary">
                            <div id="portfolio-grid" class="gallery-items col-3">
                            <?php global $youtube;
                                foreach($youtube as $k => $v) { ?>
                                <!-- Single Item -->
                                <div class="pf-item">
                                    <div class="effect-box">
                                        <img src="assets/img/gallery/<?php echo $k; ?>.jpg" alt="video">
                                        <div class="info">
                                            <div class="video">
                                                <a href="<?php echo $v; ?>"
                                                    class="popup-youtube relative theme video-play-button item-center">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                 <?php } ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->