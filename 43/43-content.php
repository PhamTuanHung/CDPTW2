<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-test">
    <div class="row">
    <div class="col-md-3 col-sm-6 md-sm-36">
        <div class="col-column">
        <div class="text-colcolumn1 text-box text-center">
            <div class="icon-globe">
            <i class="fa fa-globe" ></i>
            </div>
            <div class="text-h5-title">
            <h5 class="h5-title-content">Animations</h5>
            <p class="p-small-text">
                Vestibulum ante ipsum primis sit amet justo elit faucibus
                orci luctus ultrices posuere cubilia Curae.
            </p>
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 md-sm-36">
        <div class="col-column">
        <div class="text-colcolumn2 text-box text-center">
            <div class="icon-globe">
            <i class="fa fa-mouse-pointer" aria-hidden="true"></i>
            </div>
            <div class="text-h5-title">
            <h5 class="h5-title-content">Icon Design</h5>
            <p class="p-small-text">
                Vestibulum ante ipsum primis sit amet justo elit faucibus
                orci luctus ultrices posuere cubilia Curae.
            </p>
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 md-sm-36">
        <div class="col-column">
        <div class="text-colcolumn1 text-box text-center">
            <div class="icon-globe">
            <i class="fa fa-circle-thin" aria-hidden="true"></i>
            </div>
            <div class="text-h5-title">
            <h5 class="h5-title-content">Voice Mail</h5>
            <p class="p-small-text">
                Vestibulum ante ipsum primis sit amet justo elit faucibus
                orci luctus ultrices posuere cubilia Curae.
            </p>
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 md-sm-36">
        <div class="col-column">
        <div class="text-colcolumn2 text-box text-center">
            <div class="icon-globe">
            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
            </div>
            <div class="text-h5-title">
            <h5 class="h5-title-content">Secure Service</h5>
            <p class="p-small-text">
                Vestibulum ante ipsum primis sit amet justo elit faucibus
                orci luctus ultrices posuere cubilia Curae.
            </p>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>