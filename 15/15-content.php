<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-15">
    <div class="container">
        <div class="sppb-addon sppb-addon-text-block sppb-text-center ">                 
            <h5 class="sppb-addon-title"> Our Excellent Skills and Projects </h5>
            <div class="sppb-addon-content">
                <h2 class="font-weight-6 less-mar-1 line-height-5">
                    Praesent mattis commodo augue Aliquam ornare hendrerit <br/> augue Vestibulum ante ipsum primis in faucibus orci
                </h2>
                <div class="ce-title-line">&nbsp;</div>
                <h6 class="ce-sub-text raleway opacity-7">Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras <br/> tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet ligula Etiam .</h6>
            </div>
            <div class="BB">
                <button class="nut">
                    <i class="fa fa-play-circle"></i>
                    READ MORE
                </button>
            </div>
        </div>
    </div>    
</div>