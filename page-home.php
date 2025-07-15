<?php 
    get_header(); 
?>

    <!-- @main -->
    <main class="homepage">
        <!-- top// -->
        <section class="fv">
            <div class="fv_container">
                <div class="fv_video">
                    <video playsinline autoplay muted loop>
                        <source src="<?= get_template_directory_uri() ?>/assets/images/movie_sp.mp4" type="video/mp4" media="(max-width: 1024px)">
                        <source src="<?= get_template_directory_uri() ?>/assets/images/movie_pc.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="fv_overlay" data-fv-overlay></div>
                <div class="fv_heading">
                    <h2>
                        Sharpening visuals <br />
                        with expertise and innovation.
                    </h2>
                    <p>映像表現を研ぎ澄ます、確かな技術と環境。</p>
                </div>
                <div class="fv_scrolldown">
                    <span></span>
                </div>
            </div>
            <div class="fv_content" data-fv-content>
                <div class="fv_content_wrapper" data-fadein>
                    <h3>映像制作のトータルソリューション</h3>
                    <div class="fv_content_desc">
                        <p>
                            IMAGE STUDIO 109は、撮影・編集・配信まで、<br class="sp-only" />高品質な映像制作サービスを提供。<br class="pc-only" />
                            最新機材と設備を<br class="sp-only" />完備し、ライブ配信や字幕制作、データ変換にも対応。<br />
                            オンライン送稿やホテル向け放送など業界特化型の<br class="sp-only" />ソリューションも展開し、<br class="pc-only" />
                            クリエイティブから<br class="sp-only" />技術サポートまでトータルに支援します。
                        </p>
                    </div>
                    <div class="fv_content_logo">
                        <svg width="323.744" height="65.462">
                            <use xlink:href="#logo-icon" />
                        </svg>
                    </div>
                </div>
            </div>
        </section>
        <!-- //top -->

        <!-- service// -->
        <section class="services">
            <div class="services_container u-container">
                <div class="services_heading c-heading" data-texttop>
                    <h2>Our Service</h2>
                    <p><span>/</span>事業内容</p>
                </div>
                <div class="services_swiper" data-services-swiper>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div data-fadein>
                                <a href="<?= home_url(); ?>">
                                    <picture>
                                        <source media="(max-width: 1024px)"
                                            data-srcset="<?= get_template_directory_uri() ?>/assets/images/ser_slide_02.webp">
                                        <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/ser_slide_02.webp" alt="撮影スタジオ"
                                            draggable="false" width="366" height="315">
                                    </picture>
                                    <div class="services_content">
                                        <h3>撮影スタジオ</h3>
                                        <p>高い防音性を備えた都心最大級のスタジオ群で快適な撮影環境をご提供します。</p>
                                    </div>
                                    <div class="services_arrow sp-only">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31.734" height="6.855"
                                            viewBox="0 0 31.734 6.855">
                                            <g id="Component_55_5" data-name="Component 55 – 5"
                                                transform="translate(0 0.354)">
                                                <path id="Path_304" data-name="Path 304" d="M447.5,1362.2H478.03l-6-6"
                                                    transform="translate(-447.503 -1356.195)" fill="none" stroke="#fff"
                                                    stroke-width="1" />
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div data-fadein>
                                <a href="<?= home_url(); ?>">
                                    <picture>
                                        <source media="(max-width: 1024px)"
                                            data-srcset="<?= get_template_directory_uri() ?>/assets/images/ser_slide_03.webp">
                                        <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/ser_slide_03.webp" alt="ポストプロダクション"
                                            draggable="false" width="366" height="315">
                                    </picture>
                                    <div class="services_content">
                                        <h3>ポストプロダクション</h3>
                                        <p>オフライン、オンライン、カラーグレーディング、MAをワンストップ、高品質でご提供します。</p>
                                    </div>
                                    <div class="services_arrow sp-only">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31.734" height="6.855"
                                            viewBox="0 0 31.734 6.855" style="overflow: initial;">
                                            <g id="Component_55_5" data-name="Component 55 – 5"
                                                transform="translate(0 0.354)">
                                                <path id="Path_30" data-name="Path 304" d="M447.5,1362.2H478.03l-6-6"
                                                    transform="translate(-447.503 -1356.195)" fill="none" stroke="#fff"
                                                    stroke-width="1" />
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div data-fadein>
                                <a href="<?= home_url(); ?>">
                                    <picture>
                                        <source media="(max-width: 1024px)"
                                            data-srcset="<?= get_template_directory_uri() ?>/assets/images/ser_slide_04.webp">
                                        <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/ser_slide_04.webp" alt="撮影特機サービス"
                                            draggable="false" width="366" height="315">
                                    </picture>
                                    <div class="services_content">
                                        <h3>ポストプロダクション</h3>
                                        <p>
                                            スパイダーカムや車載ロボットアームなどの撮影
                                            特殊機材とオペレーションで、映像表現の可能性を
                                            拡げます。
                                        </p>
                                    </div>
                                    <div class="services_arrow sp-only">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31.734" height="6.855"
                                            viewBox="0 0 31.734 6.855">
                                            <g id="Component_55_5" data-name="Component 55 – 5"
                                                transform="translate(0 0.354)">
                                                <path id="Path_304" data-name="Path 304" d="M447.5,1362.2H478.03l-6-6"
                                                    transform="translate(-447.503 -1356.195)" fill="none" stroke="#fff"
                                                    stroke-width="1" />
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div data-fadein>
                                <a href="<?= home_url(); ?>">
                                    <picture>
                                        <source media="(max-width: 1024px)"
                                            data-srcset="<?= get_template_directory_uri() ?>/assets/images/ser_slide_05.webp">
                                        <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/ser_slide_05.webp" alt="オンライン送稿サービス"
                                            draggable="false" width="366" height="315">
                                    </picture>
                                    <div class="services_content">
                                        <h3>オンライン送稿サービス</h3>
                                        <p>ポストプロダクションとしてのこれまでの経験を生かし、迅速で安心安全なサービスをご提供します。</p>
                                    </div>
                                    <div class="services_arrow sp-only">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31.734" height="6.855"
                                            viewBox="0 0 31.734 6.855">
                                            <g id="Component_55_5" data-name="Component 55 – 5"
                                                transform="translate(0 0.354)">
                                                <path id="Path_304" data-name="Path 304" d="M447.5,1362.2H478.03l-6-6"
                                                    transform="translate(-447.503 -1356.195)" fill="none" stroke="#fff"
                                                    stroke-width="1" />
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div data-fadein>
                                <a href="<?= home_url(); ?>">
                                    <picture>
                                        <source media="(max-width: 1024px)"
                                            data-srcset="<?= get_template_directory_uri() ?>/assets/images/ser_slide_06.webp">
                                        <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/ser_slide_06.webp" alt="ロケーションサポート"
                                            draggable="false" width="366" height="315">
                                    </picture>
                                    <div class="services_content">
                                        <h3>ロケーションサポート</h3>
                                        <p>経験豊富なスタッフと多様な機材で、さまざまな撮影をサポートします。</p>
                                    </div>
                                    <div class="services_arrow sp-only">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31.734" height="6.855"
                                            viewBox="0 0 31.734 6.855">
                                            <g id="Component_55_5" data-name="Component 55 – 5"
                                                transform="translate(0 0.354)">
                                                <path id="Path_304" data-name="Path 304" d="M447.5,1362.2H478.03l-6-6"
                                                    transform="translate(-447.503 -1356.195)" fill="none" stroke="#fff"
                                                    stroke-width="1" />
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div data-fadein>
                                <a href="<?= home_url(); ?>">
                                    <picture>
                                        <source media="(max-width: 1024px)"
                                            data-srcset="<?= get_template_directory_uri() ?>/assets/images/ser_slide_07.webp">
                                        <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/ser_slide_07.webp"
                                            alt="TVCM字幕制作・データ変換" draggable="false" width="366" height="315">
                                    </picture>
                                    <div class="services_content">
                                        <h3>TVCM字幕制作・データ変換</h3>
                                        <p>多種多様なデータ変換から「より伝わる」CM字幕まで、経験豊富な専任スタッフが対応します。</p>
                                    </div>
                                    <div class="services_arrow sp-only">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31.734" height="6.855"
                                            viewBox="0 0 31.734 6.855" style="overflow: initial;">
                                            <g id="Component_55_5" data-name="Component 55 – 5"
                                                transform="translate(0 0.354)">
                                                <path id="Path_30" data-name="Path 304" d="M447.5,1362.2H478.03l-6-6"
                                                    transform="translate(-447.503 -1356.195)" fill="none" stroke="#fff"
                                                    stroke-width="1" />
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div data-fadein>
                                <a href="<?= home_url(); ?>">
                                    <picture>
                                        <source media="(max-width: 1024px)"
                                            data-srcset="<?= get_template_directory_uri() ?>/assets/images/ser_slide_01.webp">
                                        <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/ser_slide_01.webp" alt="ライブ配信サポート"
                                            draggable="false" width="366" height="315">
                                    </picture>
                                    <div class="services_content">
                                        <h3>ライブ配信サポート</h3>
                                        <p>高品質な映像と音響でイベントやセミナーのライブ配信をサポートします。</p>
                                    </div>
                                    <div class="services_arrow sp-only">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31.734" height="6.855"
                                            viewBox="0 0 31.734 6.855">
                                            <g id="Component_55_5" data-name="Component 55 – 5"
                                                transform="translate(0 0.354)">
                                                <path id="Path_304" data-name="Path 304" d="M447.5,1362.2H478.03l-6-6"
                                                    transform="translate(-447.503 -1356.195)" fill="none" stroke="#fff"
                                                    stroke-width="1" />
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="services_navigation pc-only">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //service -->

        <!-- access// -->
        <section class="access">
            <div class="access_container u-container">
                <div class="c-heading" data-texttop>
                    <h2>Access</h2>
                    <p><span>/</span>アクセス</p>
                </div>
                <div class="access_list">
                    <div class="access_items" data-fadein>
                        <picture>
                            <source media="(max-width: 1024px)" data-srcset="<?= get_template_directory_uri() ?>/assets/images/access_thumb_01.webp">
                            <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/access_thumb_01.webp" alt="目黒スタジオ / ポストプロダクション"
                                draggable="false" width="558" height="360">
                        </picture>
                        <div class="access_content">
                            <h3>目黒スタジオ / ポストプロダクション</h3>
                            <div class="access_content_group">
                                <div class="access_content_map">
                                    <p>〒 153&#8203;-0064 東京都目黒区下目黒2-24-12</p>
                                    <a href="http://" target="_blank" rel="noopener noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.89" height="15.557"
                                            viewBox="0 0 10.89 15.557" style="overflow: initial;">
                                            <g id="Group_27" data-name="Group 27" transform="translate(0 -0.001)">
                                                <path id="Path_24" data-name="Path 24"
                                                    d="M9.294,1.591A5.445,5.445,0,0,0,0,5.442C0,9.527,5.448,15.557,5.448,15.557S10.89,9.527,10.89,5.442a5.443,5.443,0,0,0-1.6-3.851m-2.052,4.6a1.977,1.977,0,0,1-.421.633,2.064,2.064,0,0,1-.633.421,1.946,1.946,0,0,1-.74.147,1.97,1.97,0,0,1-1.378-.568A1.946,1.946,0,1,1,7.388,5.442a1.972,1.972,0,0,1-.147.745"
                                                    transform="translate(0 0.001)" fill="#fff" opacity="0.503" />
                                            </g>
                                        </svg>
                                        <p>Google Map</p>
                                    </a>
                                </div>
                                <div class="access_content_tel">
                                    <p><span>TEL：<a href="tel:+0334911109">03-3491-1109</a>（スタジオ）</span><span><a
                                                href="tel:+0334911109">
                                                03-3779-0109</a>（ポスプロ）</span></p>
                                </div>
                            </div>
                            <div class="access_content_desc">
                                <p>
                                    スチル＆ムービー撮影に対応した、5面の総合大型スタジオ。<br class="pc-only" />
                                    M 1スタジオは都内最大級の白ホリゾントと高い防音性（NC値25以下）を備え、<br class="pc-only" />
                                    さまざまな撮影に対応。ポストプロダクションとオンライン送稿サービスを <br class="pc-only" />
                                    併せ持ち、撮影から納品までをワンストップでサポート。
                                </p>
                            </div>
                        </div>
                        <a href="<?= home_url(); ?>" class="access_items_link">View More</a>
                    </div>
                    <div class="access_items" data-fadein>
                        <picture>
                            <source media="(max-width: 1024px)" data-srcset="<?= get_template_directory_uri() ?>/assets/images/access_thumb_02.webp">
                            <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/access_thumb_02.webp" alt="四谷スタジオ"
                                draggable="false" width="558" height="360">
                        </picture>
                        <div class="access_content">
                            <h3>目四谷スタジオ</h3>
                            <div class="access_content_group">
                                <div class="access_content_map">
                                    <p>〒 160&#8203;-0004 東京都新宿区四谷1-16-3</p>
                                    <a href="http://" target="_blank" rel="noopener noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.89" height="15.557"
                                            viewBox="0 0 10.89 15.557" style="overflow: initial;">
                                            <g id="Group_27" data-name="Group 27" transform="translate(0 -0.001)">
                                                <path id="Path_24" data-name="Path 24"
                                                    d="M9.294,1.591A5.445,5.445,0,0,0,0,5.442C0,9.527,5.448,15.557,5.448,15.557S10.89,9.527,10.89,5.442a5.443,5.443,0,0,0-1.6-3.851m-2.052,4.6a1.977,1.977,0,0,1-.421.633,2.064,2.064,0,0,1-.633.421,1.946,1.946,0,0,1-.74.147,1.97,1.97,0,0,1-1.378-.568A1.946,1.946,0,1,1,7.388,5.442a1.972,1.972,0,0,1-.147.745"
                                                    transform="translate(0 0.001)" fill="#fff" opacity="0.503" />
                                            </g>
                                        </svg>
                                        <p>Google Map</p>
                                    </a>
                                </div>
                                <div class="access_content_tel">
                                    <p>TEL：<a href="tel:+0333535109">03-3353-5109</a></p>
                                </div>
                            </div>
                            <div class="access_content_desc">
                                <p>
                                    四ツ谷駅から徒歩3分の好立地と、充実したアメニティ環境を兼ね備え、各種<br class="pc-only" />
                                    撮影から配信イベントまで幅広く対応可能。全館ロックアウトにより、秘匿性の高<br class="pc-only" />
                                    い撮影や音出しを伴うイベントにも対応。各スタジオには独立した2本の専有<br class="pc-only" />
                                    インターネット回線を完備し、大規模なライブ配信にも最適な環境を実現。
                                </p>
                            </div>
                        </div>
                        <a href="<?= home_url(); ?>" class="access_items_link">View More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- //access -->

        <!-- news// -->
        <section class="news">
            <div class="news_container u-container">
                <div class="news_wrapper">
                    <div class="c-heading" data-texttop>
                        <h2>News</h2>
                        <p><span>/</span>お知らせ</p>
                    </div>
                    <div class="c-news">
                        <div class="c-news_list">
                            <?php 
                                $product_arg = array(
                                    'post_type'  => 'news',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 3,
                                    'order' => 'DESC',
                                    'orderby' => 'date',
                                );
                                $proall = new WP_Query($product_arg);
                                if ($proall->have_posts()) : 
                                    $i=0;
                                    while ($proall->have_posts()) :
                                        $proall->the_post();
                                        $category = get_the_terms( get_the_ID(), 'news_tax' ); 
                            ?>
                            <div class="c-news_items" data-fadein>
                                <div class="c-news_info">
                                    <p class="date"><?php echo get_the_date('Y.m.d', $post->ID); ?></p>
                                    <a class="category" href="<?= home_url(); ?>/news/<?= $category[0]->slug; ?>">・<?= $category[0]->name ?></a>
                                </div>
                                <a href="<?php the_permalink($post->ID); ?>" class="c-news_title"><?php echo get_the_title($post->ID); ?></a>
                            </div>
                            <?php   
                                    $i++;
                                    endwhile;
                                endif; 
                            ?>
                        </div>
                        <div class="data-fadein">
                            <a href="<?= home_url(); ?>/news/" class="news_more">
                                <p>More</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="49.882" height="11.039"
                                    viewBox="0 0 49.882 11.039">
                                    <g id="Component_51_1" data-name="Component 51 – 1" transform="translate(0 0.707)">
                                        <path id="Path_304" data-name="Path 304" d="M447.5,1365.527H494.97l-9.332-9.332"
                                            transform="translate(-447.503 -1356.195)" fill="none" stroke="#fff"
                                            stroke-width="2" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //news -->
    </main>
    <!-- @@main -->

<?php get_footer(); ?>