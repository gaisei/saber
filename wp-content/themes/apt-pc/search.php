<?php get_header(); ?>
  <div id="container">
    <div id="main" role="main">
      <div id="content">
        <h1 class="page_ttl">「<?php the_search_query(); ?>」の検索結果</h1>
        <?php
          if(have_posts() && get_search_query()):
            while(have_posts()):
                the_post();

                get_template_part('content-archive');
        
            endwhile;

            if(class_exists('Wp_SiteManager_page_navi')):
              Wp_SiteManager_page_navi::page_navi();
            endif;

            else:
              echo "<p>お探しの記事が見つかりませんでした。</p>";

          endif;
        ?>

      <?php get_template_part(page_top_link); ?>
      </div><!-- end #content -->
    </div><!-- end #main -->
    <?php get_sidebar('post'); ?>
  </div><!-- end #container -->
<?php get_footer(); ?>
