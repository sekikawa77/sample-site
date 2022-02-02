
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
          <li>コラム</li>
        </ul>
      </section>
      
      <section class="section">
        <div class="inner">
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
            $paged = get_query_var('paged')? get_query_var('paged') : 1;
            $args = array(
              'post_type' => 'column',
              'paged' => $paged,
              'posts_per_page' => 10,
            );

            $the_query = new WP_Query($args);
          ?>

          <ul class="list__card-02">
          <?php if($the_query -> have_posts()):
              while($the_query -> have_posts()) : $the_query -> the_post();
          ?>
            <li class="list__card-02__item">
              <a href="<?php the_permalink(); ?>">
                <div class="list__card-02__image">
                  <img src="<?php the_field('column_image'); ?>" alt="">
                </div>

                <div class="list__card-02__content">
                  <p class="list__card-02__date"><?php echo get_the_date(); ?></p>
                  <h3 class="list__card-02__hdg"><?php the_title(); ?></h3>
                  <p class="list__card-02__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。<span class="more">（続きを読む）</span></p>
                  <p class="list__card-02__category"><?php
                    $term = get_the_terms($post->ID,'column-cate');
                    echo $term[0]->name;
                  ?></p>
                </div>
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
      </section>

      <?php get_template_part('template-parts/contact'); ?>
    </main>

<?php get_footer(); ?>