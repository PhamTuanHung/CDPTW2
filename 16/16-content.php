<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-16">
    <div class="row">
        <div class="cot">
            <div class="col-md-6">
                <img class="imgs" src="images/16.png" />
            </div>
            <div class="col-md-6">
                <div class="sppb-addon">
                    <h5 class="sppb-addon-title">
                        Pixel Perfect Design with Classy
                    </h5>
                    <div class="sppb-addon-content">
                        <h2 class="nd">
                            Beautifully Crafted Design with Classic Graphic Styles
                        </h2>
                        <div class="ce-title-line align-left"></div>
                    </div>
                    <div class="sppb-addon-text">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis.
                    </div>
                    <div class="check">
                        <div class="row">
                            <div class="col-md-6 nopadding">
                                <ul class="list">
                                    <li>
                                        Duis dictum auctor augue
                                    </li>
                                    <li>
                                        Suspendisse sit amet velit in dui.
                                    </li>
                                    <li>
                                        Phasellus a metus nec augue justo.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 nopadding">
                                <ul class="list">
                                    <li>
                                        Duis dictum auctor augue
                                    </li>
                                    <li>
                                        Suspendisse sit amet velit in dui.
                                    </li>
                                    <li>
                                        Phasellus a metus nec augue justo.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="btn">
                        <button class="nut">READ MORE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>