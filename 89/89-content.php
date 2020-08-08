<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-39">
    <section class="sppb-section">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="sp">
                        <div class="sp1">
                            <div class="container">
                                <div class="nd">
                                    <p class="nd1">
                                    AWESOME SHOP PAGES AND MORE
                                    </p>
                                    <h2 class="nd2">Get Unlimited Shop</h2>
                                    <h2 class="nd3">Design Sections</h2>
                                    <button class="btn">GET STARTED NOW!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sp">
                        <div class="sp2">
                            <div class="container">
                                <div class="nd">
                                    <p class="nd1">
                                    BEAUTIFULLY CRAFTED LAYOUTS
                                    </p>
                                    <h2 class="nd2">Excellent Design</h2>
                                    <h2 class="nd3">Styles and Concepts</h2>
                                    <button class="btn">GET STARTED NOW!</button>
                                </div>
                            </div>    
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>