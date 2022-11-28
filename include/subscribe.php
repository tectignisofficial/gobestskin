<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
$url = "https://";   
else  
$url = "http://";   
$url.= $_SERVER['HTTP_HOST'];   

$url.= $_SERVER['REQUEST_URI'];    
?>
<section id="appointment" class="appointment section-bg">
    <div class="container" data-aos="fade-up">
        <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 subscribe-newsletter">
                    <div class="container">
                            <div id="text-7" class="widget widget_text">
                                <div class="textwidget">
                                    <div>
                                        <form action="api.php" method="post" class="form_subscription">
                                            <h3>Subscribe to Newsletter</h3>
                                            <p>Expert guide to flawless skin and nourished hair from our dermatologists!
                                            </p>
                                            <div class="Newsletter-input">
                                                <div class="your-email">
                                                    <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                                                            type="email" name="your-email" value="" size="40"
                                                            class=""
                                                            placeholder="Type email address here" required="">
                                                            <input type="hidden" value="<?= $url; ?>" name="url">
                                                            <button class="button_news" type="submit" name="subscribe_send"><i class="fa fa-send-o"></i></button>
                                                </div>
                                            </div>
                                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
        </div>
    </div>
</section>