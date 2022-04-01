
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
                <ul class="list__cate">
                  <?php
                    $taxonomy_terms = get_terms('column-cate');
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
            $paged = get_query_var('paged')? get_query_var('paged') : 1;
          ?>

          <ul class="list__card-02">
          <?php if(have_posts()):
              while(have_posts()) : the_post();
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