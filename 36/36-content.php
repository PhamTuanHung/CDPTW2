<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class ="sppb-row-overlay">
    <div class ="container">
        <div class ="sppb-row">
            <div class="sppb-addon">
                <h5 class="sppb-addon-title">Get Awesome Services and many more features</h5>
                <div class="sppb-addon-content">
                    <h2 class="font-weight-6 less-mar-1 line-height-5">
                    Our Successful and Happy Clients Says <br/> We Offer Awesome Service
                    </h2>
                    <div class="ce-title-line"></div>
                </div>
            </div>
            <div class="sppb-inner">
                <div class="row">
                    <div class="col-md-3">
                        <div class=" iconbox-medium icon round">
                            <i class="fa fa-dribbble"></i>
                        </div>
                        <div class="text-box">
                            <h1 class="nd">3924</h1>
                            <h5 class="text-white">Projects</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class=" iconbox-medium icon round">
                            <i class="fa fa-align-justify"></i>
                        </div>
                        <div class="text-box">
                            <h1 class="nd">1462</h1>
                            <h5 class="text-white">Compleated</h5>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class=" iconbox-medium icon round">
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                        <div class="text-box">
                            <h1 class="nd">2547</h1>
                            <h5 class="text-white">Happy Clients</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class=" iconbox-medium icon round">
                            <i class="fa fa-trophy"></i>
                        </div>
                        <div class="text-box">
                            <h1 class="nd">1789</h1>
                            <h5 class="text-white">Awards</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>