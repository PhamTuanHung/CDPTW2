<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-32">
    <div class="sppb-optin">
        <div class="sppb-optin1">
            <h2 class="sppb-addon-title">Subscribe to our Newsletter </h2>
            <p class="nd">Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus</p>
        </div>
        <div class="sppb-optin-form">
            <form class="fom">
                <input class ="email" placeholder="email"></input>
            </form>
            <button class="btn"> SUBSCRICE </button>
        </div>
    </div>
</div>

