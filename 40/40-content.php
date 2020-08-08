<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-40">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="sppb-addon">
                    <div class="ce-feature">
                        <div class ="icon">
                            <i class="fa fa-clipboard"></i>
                            <h5 class="title font-weight">Fully Responsive</h5>
                        </div>
                        <div class="content">
                            Vestibulum ante ipsum primis sit amet justo elit faucibus orci luctus ultrices posuere cubilia Curae.
                        </div>
                        <a class="read-more" href="#">
                            <i class="fa fa-angle-right">
                            </i>
                            READER MORE
                        </a>
                    </div> 
                </div>      
            </div>
            <div class="col-md-4">
                <div class="sppb-addon">
                    <div class="ce-feature">
                        <div class ="icon">
                            <i class="fa fa-link"></i>
                            <h5 class="title font-weight-5">Classic Styles</h5>
                        </div>
                        <div class="content">
                            Vestibulum ante ipsum primis sit amet justo elit faucibus orci luctus ultrices posuere cubilia Curae.
                        </div>
                        <a class="read-more" href="#">
                            <i class="fa fa-angle-right">
                            </i>
                            READER MORE
                        </a>
                    </div> 
                </div>  
            </div>
            <div class="col-md-4">
                <div class="sppb-addon">
                    <div class="ce-feature">
                        <div class ="icon">
                            <i class="fa fa-bolt"></i>
                            <h5 class="title font-weight-5">Secure Services</h5>
                        </div>
                        <div class="content">
                            Vestibulum ante ipsum primis sit amet justo elit faucibus orci luctus ultrices posuere cubilia Curae.
                        </div>
                        <a class="read-more" href="#">
                        <i class="fa fa-angle-right">
                            </i>
                            READER MORE
                        </a>
                    </div> 
                </div>  
            </div>
        </div>
    </div>
</div>