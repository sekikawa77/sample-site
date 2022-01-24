

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
            <a href="/">ホーム</a>
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

                  <div class="list__cate__item">
                    <input type="checkbox" id="category-01" name="news"> 
                    <label for="category-01" class="chekbox-01">カテゴリ1</label>
                  </div>

                  <div class="list__cate__item">
                    <input type="checkbox" id="category-02" name="news"> 
                    <label for="category-02" class="chekbox-01">カテゴリ2</label>
                  </div>

                  <div class="list__cate__item">
                    <input type="checkbox" id="category-03" name="news"> 
                    <label for="category-03" class="chekbox-01">カテゴリ3</label>
                  </div>
                </dd>
              </div>
            </dl>

            <?php
              $args = array(
                'post_type' => 'news',
                'posts_per_page' => 10,
              );

              $the_query = new WP_Query($args);
            ?>

            <ul class="list__news">
              <?php if($the_query -> have_posts()):
                while($the_query -> have_posts()) : $the_query -> the_post();
              ?>
              <li class="list__news__item">
                <a href="<?php the_permalink(); ?>">
                  <div class="list__news__item__meta">
                    <p class="list__news__item__date"><?php echo get_the_date(); ?></p>
                    <p class="list__news__item__cate">
                      <?php
                        $term = get_the_terms($post->ID,'news-cate');
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