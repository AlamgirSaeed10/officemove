<!doctype html>
<html class="no-js" lang="zxx">

<head>
<?php include('linked-files/head-links.php');?>
</head>

<body>
   
   
      <!-- header-start -->
      <?php include('linked-files/header.php');?>
    <!-- header-end -->
    
        <!-- bradcam_area  -->
        <div class="bradcam_area bradcam_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h3>blog</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ bradcam_area  -->


    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5 mt-30 mb-lg-12">
                    <div class="blog_left_sidebar">
                    <?php
                                    $title = "";
                                    $link = "";
                                    $description ="";
                                    $category ="";
                                    $pubDate = "";
                                    $image = "";
                                    
                                    $map_url = "https://www.realwire.com/rss/?id=662&row=&view=Synopsis"; 
                                    if (($response_xml_data = file_get_contents($map_url))===false){
                                        echo "Error fetching XML\n";
                                    } else {
                                    libxml_use_internal_errors(true);
                                    $data = simplexml_load_string($response_xml_data);
                                    if (!$data) {
                                        echo "Error loading XML\n";
                                        foreach(libxml_get_errors() as $error) {
                                            echo "\t", $error->message;
                                        }
                                    } else {
                                        $category  =  $data->channel->category;
                                        foreach($data->channel->item as $item)
                                        {
                                            $link =  (string)$item->link;
                                            $title = (string)$item->title;
                                            $pubDate = (string)$item->pubDate;
                                            $description = (string)$item->description;
                                            $image =  $item->enclosure['url'];
                                        ?>  
                                <article class="blog_item">
                                    <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="<?php echo $image;?>" title="<?php echo "Image for ".$title?>" alt="<?php echo "Image for ".$title?>">
                                    </div>
                                    <div class="blog_details">
                                            <h2><?php echo $title;?></h2>
                                        <p><?php echo $description;?></p>
                                        <ul class="blog-info-link">
                                            <li><a href="#"><i class="fa fa-user"></i> <?php echo $category;?></a></li>
                                            <li><a href="#"><i class="fa fa-calendar"></i> <?php echo $pubDate;?></a></li>
                                            <li><a href="<?php echo $link;?>">Read more</a></li>
                                        </ul>
                                    </div>
                                </article>
                            <?php } } }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

     <!-- footer start -->
     <?php include('linked-files/footer.php')?>
    <!--/ footer end  -->
    <?php include('linked-files/jsScripts.php')?>
</body>
</html>