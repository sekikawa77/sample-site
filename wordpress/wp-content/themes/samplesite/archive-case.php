
<?php get_header(); ?>

    <main class="main">
      <section class="pagetitle _case">
        <div class="inner">
          <div class="pagetitle__text">
            <h1 class="hdg-lv1-01">事例</h1>
            <p class="hdg-lv1__lead">テキストテキストテキストテキストテキスト</p>
          </div>
        </div>

        <ul class="breadcrumb">
          <li>
            <a href="<?php echo home_url('/'); ?>">ホーム</a>
          </li>
          <li>事例</li>
        </ul>
      </section>
      
      <section class="section">
        <div class="inner">
          <p class="section__lead">テキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキスト</p>
          <ul class="list__card-01">

          <?php
            $args = array(
              'post_type' => 'case',
            );

            $the_query = new WP_Query($args);
          ?>
          <?php if($the_query -> have_posts()):
            while($the_query -> have_posts()) : $the_query -> the_post();
          ?>
            <li class="list__card-01__item">
              <a href="<?php the_permalink(); ?>">
                <div class="list__card-01__image">
                  <img src="<?php the_field('company_image'); ?>" alt="">
  
                  <span class="list__card-01__logo">
                    <img src="<?php the_field('conpany_logo'); ?>" alt="">
                  </span>
                </div>
                <div class="list__card-01__content">
                  <h3 class="list__card-01__hdg"><?php the_title(); ?></h3>
                  <p class="list__card-01__name"><?php the_field('company_name'); ?></p>
  
                  <dl class="list__desc-01">
                    <div>
                      <dt>業種</dt>
                      <dd><?php the_field('industry'); ?></dd>
                    </div>
                    <div>
                      <dt>従業員数</dt>
                      <dd><?php the_field('employee'); ?></dd>
                    </div>
                    <div>
                      <dt>課題</dt>
                      <dd><?php the_field('theme'); ?></dd>
                    </div>
                  </dl>
                </div>
              </a>
            </li>
            <?php
                endwhile;
              endif;
              wp_reset_postdata();
            ?>
          </ul>
        </div>
      </section>

      <?php get_template_part('template-parts/contact'); ?>
    </main>

<?php get_footer(); ?>