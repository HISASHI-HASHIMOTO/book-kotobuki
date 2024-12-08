<aside class="container__aside p-aside">
  <div class="p-aside__box">
    <div class="p-aside__header c-aside-header">
      <div class="c-aside-header__img">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/book-icon-category.png" alt="人気記事" />
      </div>
      <h2 class="c-aside-header__title">人気記事</h2>
    </div>
    <?php
        $args = array(
          "post_type" => "post",
          "posts_per_page" => 3,
          'orderby' => 'date',
          'order' => 'DESC' 
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post();
        ?>
    <div class="p-aside__cards">
      <a href="<?php the_permalink(); ?>" class="p-aside__cards-item c-info-card">
        <div class="c-info-card__img">
          <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail(); ?>
          <?php else: ?>
          <img src=" <?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg"
            alt="<?php the_title(); ?>のアイキャッチ画像" />
          <img src="">
          <?php endif; ?>
        </div>
        <div class="c-info-card__body">
          <time class="c-info-card__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
          <p class="c-info-card__title"><?php the_title(); ?></p>
        </div>
      </a>
    </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else: ?>
    <p class="voice__message">記事が投稿されていません</p>
    <?php endif; ?>
  </div>

  <div class="p-aside__box">
    <div class="p-aside__box">
      <div class="p-aside__header c-aside-header">
        <div class="c-aside-header__img">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon-category.png" alt="カテゴリー" />
        </div>
        <h2 class="c-aside-header__title">カテゴリー</h2>
      </div>

      <div class="p-aside__archive-list c-archive">
        <?php
        $terms = get_terms('news_category');
        foreach ($terms as $term) :
        ?>
        <?php wp_list_categories( array(
        'title_li' => '', // 見出しを非表示にする
        'orderby' => 'name', // 名前順で並べる
        'show_count' => true // カテゴリーの記事数を表示
    ) ); ?>

      </div>
    </div>
  </div>

  <!-- <div class="p-aside__box">
    <div class="p-aside__box">
      <div class="p-aside__header c-aside-header">
        <div class="c-aside-header__img">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/shark-icon-black.png" alt="黒いサメのアイコン" />
        </div>
        <h2 class="c-aside-header__title">カテゴリー</h2>
      </div>
      <?php 
      $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'post_per_page' => '-1',
        'orderby' => 'date',
        'order' => 'DESC'
      );
      
      $categories = get_the_category();
      if ( ! empty( $categories ) ) {
        foreach ( $categories as $category ) {
          echo '<span class="c-blog-card__category">' . esc_html( $category->name ) . '</span> '; 
        }
      }
        
      ?>
      <div class="p-aside__archive-list c-archive">
        <div class="c-archive__list-title js-title">
          <p><?php echo esc_html($year) ?>年</p>
          <ul class=" c-archive__list-items js-items">
            <?php
          foreach ($months as $month => $blog) :
              $post_count = count($blog);
          ?>
            <li class=" c-archive__list-item">
              <a href="<?php echo esc_url(home_url("{$year}/{$month}/")); ?>" class="c-archive__item-link">
                <?php echo esc_html($month); ?>月</a>
            </li>

            <?php endforeach; ?>
          </ul>
        </div>
        <? endforeach; ?>
      </div>
    </div>
  </div> -->
  <div class="p-aside__box">
    <div class="p-aside__box">
      <div class="p-aside__header c-aside-header">
        <div class="c-aside-header__img">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon-archive.png" alt="アーカイブ" />
        </div>
        <h2 class="c-aside-header__title">アーカイブ</h2>
      </div>
      <?php 
      $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'post_per_page' => '-1',
        'orderby' => 'date',
        'order' => 'DESC'
      );

      $the_query = new WP_Query($args);
      $blog_by_year = array();
      
      while($the_query->have_posts()) : $the_query->the_post();
        $year = get_the_date('Y');
        $month = get_the_date('n');
        $blog_by_year[$year][$month][] = $post;
      endwhile;

      wp_reset_postdata();
      if(!empty($blog_by_year)) :
        foreach($blog_by_year as $year => $months) :
        
     ?>
      <div class="p-aside__archive-list c-archive">
        <div class="c-archive__list-title js-title">
          <p><?php echo esc_html($year) ?>年</p>
          <ul class=" c-archive__list-items js-items">
            <?php
          foreach ($months as $month => $blog) :
              $post_count = count($blog);
          ?>
            <li class=" c-archive__list-item">
              <a href="<?php echo esc_url(home_url("{$year}/{$month}/")); ?>" class="c-archive__item-link">
                <?php echo esc_html($month); ?>月</a>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endforeach; ?>
        <?php else : ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</aside>