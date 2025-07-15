<?php
    session_start();
    get_header(); 

    // url
    $projectBase = dirname($_SERVER['SCRIPT_NAME']);  // use localhost/studio109
    $defaultBackUrl = $projectBase . '/news';
    // save referrer if any
    if (!empty($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], '/news') !== false) {
        $_SESSION['news_back_url'] = $_SERVER['HTTP_REFERER'];
    }
    $backUrl = isset($_SESSION['news_back_url']) ? $_SESSION['news_back_url'] : $defaultBackUrl;

    // tax
    $tax_name = 'news_tax';
    $default_id = get_the_ID();
    $category = get_the_terms($default_id, $tax_name); 
?>


    <!-- @main -->
    <main class="newspage">
        <!-- details// -->
        <section class="news detail">
            <div class="news_container">
                <div class="news_wrapper">
                    <div class="c-heading">
                        <h2>News</h2>
                        <p><span>/</span>お知らせ</p>
                    </div>
                    <div class="detail_top">
                        <div class="c-news_items detail_items">
                            <div class="c-news_info">
                                <p class="date"><?= get_the_date('Y.m.d'); ?></p>
                                <a class="category" href="<?= home_url(); ?>/news/<?= $category[0]->slug; ?>">・<?= $category[0]->name ?></a>
                            </div>
                            <p class="c-news_title detail_title"><?= the_title(); ?></p>
                        </div>
                    </div>
                    <div class="detail_content">
                        <?php the_content(); ?>
                    </div>
                    <a href="<?php echo htmlspecialchars($backUrl); ?>" class="news_btn"><p>Back</p></a>
                </div>
            </div>
        </section>
        <!-- //details -->
    </main>
    <!-- @@main -->

<?php get_footer(); ?>