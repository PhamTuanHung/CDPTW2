<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="MenuDark_64">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="column">
                <div class="clearfix">
                    <div class="text-left">
                        <div class="content">
                            <img src="images/64.jpg" class="img-fluid " />
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="text-left">
                        <div class="content">
                        <h2 class="title">We are digitalagency studio and design modern designs</h2>
                        <br/>
                        <div class="text-df">
                            <p>
                            Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere.
                            </p>
                            <br/>
                            <a class="read-more dark" href="#">Readmore About <i class="fa fa-long-arrow-right">&nbsp;</i> </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6">
        <div class="box-banner">
            
            <div id="accordion" class="accordion">
            <h3 class="acc-title"><i class="fa fa-chevron-right" aria-hidden="true"></i>Beautiful Color Options</h3>
            
            <h3 class="acc-title" ><i class="fa fa-chevron-right" aria-hidden="true"></i>Beautiful Homepages </h3>
            
            <h3 class="acc-title"><i class="fa fa-chevron-right" aria-hidden="true"></i>Layered Psd Files</h3>
           
            <h3 class="acc-title"><i class="fa fa-chevron-right" aria-hidden="true"></i>Layered Psd Files </h3>

            </div>
        </div>
        </div>
    </div>                
</div>
</div>

