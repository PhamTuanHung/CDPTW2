<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-88">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="sppb-addon">
                    <h5 class="sppb-addon-title">
                        Classic Styles and services
                    </h5>
                    <div class="sppb-addon-content">
                        <h2 class="td">
                            Pixel Perfect Design with <br /> unlimited Features
                        </h2>
                        <div class="ce-title-line"></div>
                    </div>
                </div>
                <div class="accordion" id="accordion" role="tablist">
                    <!-- Child Question One-->
                    <div class="accordion_item">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <div class="panel-title">
                                <!-- Question -->
                                <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="false"
                                    aria-controls="collapseOne" class="accordion_item_title collapsed">
                                    Layered Psd Files
                                </a>
                            </div>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;"
                            data-parent="#accordion">
                            <!-- Answer -->
                            <p class="accordion_inner">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et
                                justo
                                consectetuer adipiscing Praesent mattis commodo augue Aliquam ornare consectetuer
                                adipiscing hendrerit augue .
                            </p>
                        </div>

                    </div>
                    <!-- End Child Question One -->

                    <!-- Child Question Two-->
                    <div class="accordion_item">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <div class="panel-title">
                                <!-- Question -->
                                <a role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo" class="accordion_item_title collapsed">
                                    Beautiful Color Options
                                </a>
                            </div>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;"
                            data-parent="#accordion">
                            <!-- Answer -->
                            <p class="accordion_inner"> Lorem ipsum dolor sit amet consectetuer adipiscing elit
                                Suspendisse et
                                justo
                                consectetuer adipiscing Praesent mattis commodo augue Aliquam ornare consectetuer
                                adipiscing hendrerit augue .
                            </p>
                        </div>
                    </div>
                    <!-- End Child Question Two -->

                    <!-- Child Question Three-->
                    <div class="accordion_item">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <div class="panel-title">
                                <!-- Question -->
                                <a role="button" data-toggle="collapse" href="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree" class="accordion_item_title collapsed">
                                    Beautiful Homepages
                                </a>
                            </div>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;"
                            data-parent="#accordion">
                            <!-- Answer -->
                            <p class="accordion_inner">
                                Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et
                                justo
                                consectetuer adipiscing Praesent mattis commodo augue Aliquam ornare consectetuer
                                adipiscing hendrerit augue .</p>
                        </div>
                    </div>
                    <!-- End Child Question Three -->
                </div>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
</div>