<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-86">
    <div class="row">
        <div class ="col-md-3">
            <div class ="hinh">
                <img class="img responsive "  src="images/Header23_1.jpg" />
            </div>
        </div>
        <div class="col-md-3">
            <div class="sppb-addon">
                <h5 class = "sppb-addon-title">
                Who we are
                </h5>
                <div class ="sppb-addon-content">
                    <h4>Success Story</h4>
                    <p>sectetuer adipiscing elit sit amet Suspendisse et justo Praesent mattis commodo augue Aliquam ornare .</p>
                </div>
                <a class="sppb-btn">
                    <i class="fa fa-play-circle">
                    </i>
                    READ MORE
                </a>
            </div>
        </div>
        <div class ="col-md-3">
            <div class ="hinh">
                <img class="img responsive"  src="images/Header23_2.jpg" />
            </div>
        </div>
        <div class="col-md-3">
            <div class="sppb-addon">
                <h5 class = "sppb-addon-title">
                How we started
                </h5>
                <div class ="sppb-addon-content">
                    <h4>Our Journey</h4>
                    <p>sectetuer adipiscing elit sit amet Suspendisse et justo Praesent mattis commodo augue Aliquam ornare .</p>
                </div>
                <a class="sppb-btn">
                    <i className="fa fa-play-circle">
                    </i>
                    READ MORE
                </a>
            </div>
        </div>
    </div>
</div>