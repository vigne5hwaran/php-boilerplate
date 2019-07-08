<div class="services-sidebar sidebar medium-3 small-12 cell">

    <div class="widget">
        <h2>Related Services</h2>

        <div class="widget-content">
            <ul class="menu vertical">
                <?php menuSidebar($pg_key); ?>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div><!-- widget ends -->

    <div class="widget">
        <h2>Contact Us</h2>

        <div class="widget-content">
            <form action="includes/mail.php" method="POST">                
                <input type="text" name="name" value="" placeholder="Full Name">                   
                <input type="email" name="email" value="" placeholder="Email Address">
                <input type="text" name="phone" value="" placeholder="Phone Number">                                
                <textarea name="message" id="Reason" class="form-control" rows="3" placeholder="Your Message here ..." required></textarea>              									
                <input type="submit" class="button secondary button-second" value="Send Message">
            </form>
        </div>
        <div class="clearfix"></div>
    </div><!-- widget ends -->

</div><!-- Ends Sidebar /-->