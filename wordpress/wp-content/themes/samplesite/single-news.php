<?php get_header(); ?>

    <main class="main">
      <section class="pagetitle _news">
        <div class="inner">
          <div class="pagetitle__text">
            <h1 class="hdg-lv1-01">お知らせ</h1>
            <p class="hdg-lv1__lead">テキストテキストテキストテキストテキスト</p>
          </div>
        </div>

        <ul class="breadcrumb">
          <li>
            <a href="<?php echo home_url('/'); ?>">ホーム</a>
          </li>
          <li>
            <a href="<?php echo home_url('/news/'); ?>">お知らせ</a>
          </li>
          <li><?php the_title(); ?></li>
        </ul>
      </section>
      
      <section class="section">
        <div class="inner">
          <div class="content">
            <?php if(have_posts()):
              while(have_posts()) : the_post();
            ?>
            <div class="detail__header">
              <p class="detail__header__date"><span class="category">
                <?php
                  $term = get_the_terms($post->ID,'news_cate');
                  echo $term[0]->name;
                ?>
              </span><?php echo get_the_date(); ?></p>
              <h2 class="detail__header__hdg"><?php the_title(); ?></h2>
            </div>

            <div class="news-detail__content">
              <?php the_content(); ?>
            </div>

            <?php
                  endwhile;
                endif;
                wp_reset_postdata();
              ?>
          </div>
        </div>
      </section>

      <?php get_template_part('template-parts/contact'); ?>
    </main>

<?php get_footer(); ?>