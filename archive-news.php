<?php 
    get_header(); 
?>

    <!-- @main -->
    <main class="newspage">
        <!-- news// -->
        <section class="news">
            <div class="news_container">
                <div class="news_wrapper">
                    <div class="c-heading">
                        <h2>News</h2>
                        <p><span>/</span>お知らせ</p>
                    </div>
                    <div class="news_category">
                        <div class="news_category_swiper" data-category-swiper>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a class="<?php echo (!is_tax('news_tax')) ? '--active' : ''; ?>" href="<?= home_url(); ?>/news/">・全て</a>
                                </div>
                                <?php
                                $terms = get_terms([
                                    'taxonomy' => 'news_tax',
                                    'hide_empty' => false,
                                ]);
                                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
                                    foreach ( $terms as $term ) :
                                        $is_active = ( is_tax('news_tax', $term->slug) ) ? '--active' : '';
                                    ?>
                                        <div class="swiper-slide">
                                            <a class="<?php echo esc_attr($is_active); ?>" href="<?php echo esc_url( get_term_link( $term ) ); ?>">
                                                ・<?php echo esc_html( $term->name ); ?>
                                            </a>
                                        </div>
                                    <?php endforeach;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="c-news">
                        <div class="c-news_list" id="news-posts">
                            <?php
                            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                            $args = [
                                'post_type' => 'news',
                                'post_status' => 'publish',
                                'posts_per_page' => 8,
                                'order' => 'DESC',
                                'orderby' => 'date',
                                'paged' => $paged
                            ];
                            $the_query = new WP_Query($args);
                            if ($the_query->have_posts()) :
                                while ($the_query->have_posts()) : $the_query->the_post();
                                    $cate = get_the_terms(get_the_ID(), 'news_tax');
                                    $p = !empty($cate) && is_array($cate) ? $cate[0] : null;
                            ?>
                                    <div class="c-news_items">
                                        <div class="c-news_info">
                                            <p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
                                            <a class="category" href="<?= home_url(); ?>/news/<?= $p->name; ?>">・<?php echo $p ? $p->name : 'まカテゴリーが入ります'; ?></a>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="c-news_title"><?php the_title(); ?></a>
                                    </div>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </div>
                    </div>
                    <?php if ($the_query->max_num_pages > 1): ?>
                        <div class="news_btn" id="load-more" data-page="2" data-taxonomy="" data-term=""><p>Load More</p></div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- //news -->
    </main>
    <!-- @@main -->
     
<?php get_footer(); ?>