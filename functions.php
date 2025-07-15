<?php
    /** Define */
    define( 'THEME_URL', get_stylesheet_directory() );
    define( 'CORE', THEME_URL . '/core' );
    /** Hook */

    // initialize custom settings for the website
    function initTheme() {
        // change the editor to old version
        add_filter('use_block_editor_for_post', '__return_false');
        add_filter('gutenberg_use_widgets_block_editor', '__return_false');
        add_filter('use_widgets_block_editor', '__return_false');
    }

    /** Functions */
    function remove_menus() {
        remove_menu_page( 'edit.php' );// 投稿.
		if ( current_user_can( 'editor' ) ) {// 投稿者の場合
			remove_menu_page( 'edit.php?post_type=page' ); // 固定.
			remove_menu_page( 'edit-comments.php' ); // コメント.
			remove_menu_page( 'tools.php' ); // ツール.
		}
    }

    function remove_admin_bar_menus( $wp_admin_bar ) {
        $wp_admin_bar->remove_menu( 'comments' ); // コメント.
        $wp_admin_bar->remove_menu( 'new-content' ); // 新規投稿.
	}

    function create_post_type() {
        register_post_type(
            'news',
            array(
                'label' => 'NEWS',
                'labels' => array(
                    'all_items' => 'News一覧',
                    'add_new' => '新規追加',
                    'add_new_item' => 'News追加',
                    'edit_item' => 'News編集',
                    'new_item' => 'News追加',
                    'view_item' => 'Newsビュー',
                    'search_items' => 'News検索',
                    'not_found' => '見つかりません',
                    'not_found_in_trash' => 'ゴミ箱に見つかりません',
                ),
                'public' => true,
                'rewrite' => ['slug' => 'news/%post_id%', 'with_front' => false],
                'has_archive' => 'news',
                'menu_position' => 2,
                'supports' => [ 'title', 'thumbnail', 'editor' ],
            )
        );	
    }
    
    add_action('init', 'create_news_taxonomies');
    function create_news_taxonomies() {
        // カテゴリを作成
        $labels = array(
            'name'                => 'Newsカテゴリ',
            'singular_name'       => 'Newsカテゴリ',
            'search_items'        => 'Newsカテゴリを検索',
            'all_items'           => '全てのNewsカテゴリ',
            'parent_item'         => '親カテゴリ',
            'parent_item_colon'   => '親カテゴリ:',
            'edit_item'           => 'Newsカテゴリを編集',
            'update_item'         => 'Newsカテゴリを更新',
            'add_new_item'        => 'Newsカテゴリを追加',
            'new_item_name'       => '新規Newsカテゴリ',
            'menu_name'           => 'Newsカテゴリ'
        );
        $args = array(
            'hierarchical'        => true,
            'labels'              => $labels,
            'rewrite'             => array( 'slug' => 'news' )
        );
        register_taxonomy( 'news_tax', 'news', $args );
    }
    add_filter('wp_title', 'custom_news_taxonomy_title', 10, 1);
    function custom_news_taxonomy_title($title) {
        if (is_tax('news_tax')) {
            $term = get_queried_object();
            $title = $term->name . ' ｜ NEWS';
        }
        return $title;
    }
    
    function add_page_to_admin_menu() {
        // add_menu_page( 'ADMISSION', 'ADMISSION', 'manage_categories', 'post.php?post=17&action=edit', '','dashicons-admin-post', 6);
    }
    add_action( 'admin_menu', 'add_page_to_admin_menu' );
    add_action('init', 'initTheme');
    // add_theme_support('post-thumbnails', array('post', 'news'));
    add_action( 'admin_menu', 'remove_menus' );
	add_action( 'admin_bar_menu', 'remove_admin_bar_menus', 999 );
    add_action('init', 'create_post_type');
    add_action('init', function() {
        // remove_post_type_support('news', 'editor');
    }, 99);
    
    // ========= custom title page =========
    function get_custom_page_title() {
        if (is_front_page() || is_home()) {
            return 'IMAGE STUDIO 109 TOP';
        }

        if (is_singular('news')) {
            return get_the_title() . ' ｜ NEWS ｜ IMAGE STUDIO 109';
        }

        if (is_page()) {
            $page_id = get_the_ID();
            $page_title = strtoupper(get_the_title($page_id));
            $parent_id = wp_get_post_parent_id($page_id);

            if ($parent_id) {
                $parent_title = strtoupper(get_the_title($parent_id));
                return "$page_title ｜ $parent_title ｜ IMAGE STUDIO 109";
            } else {
                return "$page_title ｜ IMAGE STUDIO 109";
            }
        }
        // fallback cho archive, taxonomy, search, 404, etc.
        return wp_title('', false) . ' ｜ IMAGE STUDIO 109';
    }

    // =========
    add_action('wp_head', function() {
        if (is_user_logged_in()) {
            echo '<style>
                html {
                    margin-top: 0 !important;
                }
            </style>';
        } else {
            remove_action('wp_head', 'wp_admin_bar_render', 1000);
            wp_deregister_style('admin-bar');
        }
    }, 100);

    // Add column to list
    add_filter( 'manage_news_posts_columns', 'customize_news_columns_order' );
    function customize_news_columns_order( $columns ) {
        $new_columns = [];
        foreach ( $columns as $key => $value ) {
            $new_columns[ $key ] = $value;
            // Insert taxonomy column right after title column
            if ( $key === 'title' ) {
                $new_columns['news_tax'] = 'カテゴリ';
            }
        }
        return $new_columns;
    }

    // Display taxonomy column content
    add_action( 'manage_news_posts_custom_column', 'show_news_taxonomy_column', 10, 2 );
    function show_news_taxonomy_column( $column, $post_id ) {
        if ( 'news_tax' === $column ) {
            $terms = get_the_terms( $post_id, 'news_tax' );
            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                $term_names = wp_list_pluck( $terms, 'name' );
                echo esc_html( implode( ', ', $term_names ) );
            } else {
                echo '—';
            }
        }
    }

    // ========= load more news post =========
    // # add scripts load more
    function enqueue_load_more_script() {
        wp_enqueue_script(
            'loadmore-news', // handle
            get_template_directory_uri() . '/assets/js/loadmore-news.js', // path.js
            array(), // dependencies (add 'jquery' necessary)
            null,
            true // load in footer
        );
        wp_localize_script('loadmore-news', 'news_loadmore', array(
            'ajax_url' => admin_url('admin-ajax.php'),
        ));
    }
    add_action('wp_enqueue_scripts', 'enqueue_load_more_script');

    // # run load more
    function load_more_news_callback() {
        $paged = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $taxonomy = isset($_POST['taxonomy']) ? sanitize_text_field($_POST['taxonomy']) : ''; // get taxonomy from AJAX

        $args = array(
            'post_type'      => 'news',
            'post_status'    => 'publish',
            'posts_per_page' => 8,
            'paged'          => $paged,
            'orderby'        => 'date',
            'order'          => 'DESC',
        );

        if (!empty($taxonomy)) { // if there is a taxonomy, add tax_query
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'news_tax',
                    'field'    => 'slug',
                    'terms'    => $taxonomy,
                ),
            );
        }

        $query = new WP_Query($args);

        ob_start();

        if ($query->have_posts()):
            while ($query->have_posts()): $query->the_post();
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

        $html = ob_get_clean();

        wp_send_json([
            'html' => $html,
            'max'  => $query->max_num_pages,
        ]);
    }
    add_action('wp_ajax_load_more_news', 'load_more_news_callback');
    add_action('wp_ajax_nopriv_load_more_news', 'load_more_news_callback');

    // ========= change title to id ==========
    function custom_news_permalinks() {
        // Rule archive /news/
        add_rewrite_rule(
            '^news/?$',
            'index.php?post_type=news',
            'top'
        );
        // Rule /news/123/
        add_rewrite_rule(
            '^news/([0-9]+)/?$',
            'index.php?post_type=news&p=$matches[1]',
            'top'
        );
        // Pagination rules for archive /news/page/[num]/
        add_rewrite_rule(
            '^news/page/([0-9]+)/?$',
            'index.php?post_type=news&paged=$matches[1]',
            'top'
        );
        // Pagination rules for taxonomy /news/[term]/page/[num]/
        add_rewrite_rule(
            '^news/([^/]+)/page/([0-9]+)/?$',
            'index.php?news_tax=$matches[1]&paged=$matches[2]',
            'top'
        );
    }
    add_action('init', 'custom_news_permalinks');

    //
    function custom_news_post_link($post_link, $post) {
        if ($post->post_type === 'news' && $post->ID) {
            return home_url('/news/' . $post->ID . '/');
        }
        return $post_link;
    }
    add_filter('post_type_link', 'custom_news_post_link', 10, 2);

    //
    function check_taxonomy_rewrite() {
        $taxonomy = get_taxonomy('news_tax');
        if ($taxonomy && $taxonomy->rewrite) {
            error_log(print_r($taxonomy->rewrite, true));
        }
    }
    add_action('init', 'check_taxonomy_rewrite');