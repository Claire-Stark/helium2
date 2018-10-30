<div class="col-sm-6 col-md-3">
  <div class="team-item">
    <figure class="team-profile">
      <img src="<?php echo the_field('image'); ?>" alt="">
      <figcaption class="our-team">
        <div class="details">
          <p class="content-white"><?php the_field('content'); ?></p>
          <hr class="small-divider border-white">
          <div class="social">
            <a class="facebook" href="#"><i class="fa <?php the_field('facebook'); ?>"></i></a>
            <a class="twitter" href="#"><i class="fa <?php the_field('twitter'); ?>"></i></a>
            <a class="google-plus" href="#"><i class="fa <?php the_field('instagram'); ?>"></i></a>


          </div>
        </div>
      </figcaption>
    </figure>
    <div class="info">
      <h2>
        <?php the_title(); ?>
      </h2>
      <p>
        <?php the_content(); ?>
      </p>
    </div>
  </div>
</div>