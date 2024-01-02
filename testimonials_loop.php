      <div class="testimos_swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <?php
            $query = mysqli_query($conn, "select * from testimonials where is_active=1 order by testimonials_id asc ");
            $totl = mysqli_num_rows($query);
            if ($totl > 0) {
              $id = 1;
              while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="testimonial_card">
                  <blockquote><?= $row['testimonials_quote'] ?></blockquote>
                  <p class="author">- <?= $row['testimonials_name'] ?></p>
                </div>
              <?php $id++;
              }
            } else { ?>
              <div>
                <p salign="center">Can't fetch testimonials, please visit later</p>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>