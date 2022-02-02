<?php get_header(); ?>

    <main class="main">
      <section class="pagetitle _column">
        <div class="inner">
          <div class="pagetitle__text">
            <h1 class="hdg-lv1-01">コラム</h1>
            <p class="hdg-lv1__lead">テキストテキストテキストテキストテキスト</p>
          </div>
        </div>

        <ul class="breadcrumb">
          <li>
            <a href="<?php echo home_url('/'); ?>">ホーム</a>
          </li>
          <li>
            <a href="<?php echo home_url('/column/'); ?>">コラム</a>
          </li>
          <li><?php the_title(); ?></li>
        </ul>
      </section>
      
      <section class="section">
        <div class="inner">
          <div class="content">
            <div class="column__header">
              <h2 class="column__header__hdg"><?php the_title(); ?></h2>
              <p class="column__header__date"><?php echo get_the_date(); ?></p>
              <p class="column__header__category"><?php
                  $term = get_the_terms($post->ID,'column-cate');
                  echo $term[0]->name;
                ?></p>
              <div class="column__image">
                <img src="<?php the_field('column_image'); ?>" alt="">
              </div>
            </div>

            <?php if(get_field('column_title1')): ?>
            <div class="column__item">
              <h3 class="hdg-lv3-03"><?php the_field('column_title1'); ?></h3>
              <div class="column__text">
                <?php the_field('column_text1'); ?>
              </div>
            </div>
            <?php endif; ?>

            <?php if(get_field('column_title2')): ?>
            <div class="column__item">
              <h3 class="hdg-lv3-03"><?php the_field('column_title2'); ?></h3>
              <div class="column__text">
                <?php the_field('column_text2'); ?>
              </div>
            </div>
            <?php endif; ?>

            <?php if(get_field('column_title3')): ?>
            <div class="column__item">
              <h3 class="hdg-lv3-03"><?php the_field('column_title3'); ?></h3>
              <div class="column__text">
                <?php the_field('column_text3'); ?>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </section>

      <?php get_template_part('template-parts/contact'); ?>
    </main>

<?php get_footer(); ?>