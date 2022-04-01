

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
          <li>お知らせ</li>
        </ul>
      </section>
      
      <section class="section">
        <div class="inner">
          <div class="content">
            <dl class="list__cate__desc">
              <div>
                <dt>種別</dt>
                <dd>
                  <ul class="list__cate">
                  <?php
                    $taxonomy_terms = get_terms('news_cate');
                    foreach ( $taxonomy_terms as $taxonomy_term ):
                  ?>
                    <li><a href="<?php echo get_term_link($taxonomy_term); ?>" class="<?php if($taxonomy_term->slug === $term){ echo 'is-current'; } ?>"><?php echo $taxonomy_term->name; ?></a></li>
                  <?php
                    endforeach;
                  ?>
                  </ul>
                </dd>
              </div>
            </dl>

            <?php
              $term = wp_get_object_terms($post->ID, 'news_cate');
              $paged = get_query_var('paged')? get_query_var('paged') : 1;
            ?>

            <ul class="list__news">
              <?php if(have_posts()):
                while(have_posts()) : the_post();
              ?>
              <li class="list__news__item">
                <a href="<?php the_permalink(); ?>">
                  <div class="list__news__item__meta">
                    <p class="list__news__item__date"><?php echo get_the_date(); ?></p>
                    <p class="list__news__item__cate">
                      <?php
                        $term = get_the_terms($post->ID,'news_cate');
                        echo $term[0]->name;
                      ?>
                    </p>
                  </div>
                  <p class="list__news__item__hdg"><?php the_title(); ?></p>
                </a>
              </li>

              <?php
                  endwhile;
                endif;
              ?>
            </ul>

            <?php wp_pagenavi(); ?>
            
            <?php wp_reset_postdata(); ?>
          </div>
        </div>
      </section>

      <?php get_template_part('template-parts/contact'); ?>
    </main>

<?php get_footer(); ?>