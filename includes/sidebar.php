    <aside
        class="col-lg-4 col-md-4 col-sm-12 col-12 pl-lg-5 pl-md-5 pl-sm-2 pl-2 mt-lg-0 mt-md-0 mt-sm-0 mt-5">
        <div class="sidebar-widget">
            <h5 class="widget-title">Services</h5>
            <!-- end widget tittle-->
            <div class="servide-list">
                <ul>
                <?php
                    foreach($services as $k => $v) { 
                        echo '<li><a href="'.$k.'"><i class="icofont icofont-rounded-right"></i> '.$v.'</a> </li>';
                    }
                ?>
                </ul>
            </div>
        </div>
    </aside>
    <!-- end side bar -->