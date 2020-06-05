<div class="col-lg-4 col-md-12">
          <aside class="widget-area" id="secondary">

            <section class="widget widget_services_list">
              <h3 class="widget-title">Services</h3>

              <ul>

                <?php foreach ($services as $key => $value) { ?>
                  <li><a href="<?php echo $key; ?>" class="<?php echo ($key == $pg_key) ? 'active' : ''; ?>">
                  <?php echo $value; ?> <i class="flaticon-arrow-pointing-to-right"></i></a></li>
                <?php } ?>

              </ul>
            </section>

          </aside>
        </div>