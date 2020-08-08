<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class ="all">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="sppb-column-addons">
                            <img  class="img-fluid" alt="Responsive image"  src="images/23.jpg" />
                            <div class="sppb-media-content">
                                <h2 class="sppb-addon-title">2560</h2>
                                <div class="sppb-addon-text">
                                    <div class="divider-line solid light-2"></div>
                                    <h6 class="subtext nopadding">Total Projects</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sppb-column-addons">
                            <img  class="img-fluid" alt="Responsive image"  src="images/24.jpg"/>
                            <div class="sppb-media-content">
                                <h2 class="sppb-addon-title">2560</h2>
                                <div class="sppb-addon-text">
                                    <div class="divider-line solid light-2"></div>
                                    <h6 class="subtext nopadding">Total Projects</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sppb-column-addons">
                            <img  class="img-fluid" alt="Responsive image"  src="images/25.jpg" />
                            <div class="sppb-media-content">
                                <h2 class="sppb-addon-title">3254</h2>
                                <div class="sppb-addon-text">
                                    <div class="divider-line solid light-2"></div>
                                    <h6 class="subtext nopadding">New Features</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sppb-column-addons">
                            <img  class="img-fluid" alt="Responsive image"  src="images/26.jpg" />
                            <div class="sppb-media-content">
                                <h2 class="sppb-addon-title">1629</h2>
                                <div class="sppb-addon-text">
                                    <div class="divider-line solid light-2"></div>
                                    <h6 class="subtext nopadding">Image Filters</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>