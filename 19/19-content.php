<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-19">
    <div class="container">
        <div class="row">
            <div class= "cot">
                <div class="col-md-6">
                    <img class ="imgs" src="images/19.jpg" />
                </div>
                <div class="col-md-6">
                    <div class="sppb-addon">
                        <h5 class="sppb-addon-title">
                        What we offer for your business
                        </h5>
                        <div class="sppb-addon-content">
                            <h2 class="nd">
                            We Create awesome designs <br/>  for your Business
                            </h2>
                            <div class="ce-title-line align-left"></div>
                        </div>
                        <div class="sppb-addon-text">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo .<br/> Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In <br/> pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor.<br/> Vestibulum ante ipsum primis in faucibus orci luctus Lorem ipsum dolor sit amet, <br/> consectetuer adipiscing elit. Suspendisse et justo.
                        </div>
                        <div class="btn">
                            <button class="nut">READ MORE</button>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>