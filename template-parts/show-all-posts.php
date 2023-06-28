
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


<!---- this is a shortcode styles are in the tempalte-part/recent-posts.php---->

<div class="container-fluid">
<div class="row">

<div class="col-md-12 ajax-load-more">
<!----------- begin row repeater ---->
<?php
$args = array(
   // 'post_type' => 'news_post',
    'posts_per_page' => -1,
    'order' => 'DESC',
    'orderby' => 'date',
);

$query = new WP_Query($args);
?>
<?php
        if ($query->have_posts()) {
            $counter = 0; // Counter to track the current post

            while ($query->have_posts()) {
                $query->the_post();
               
        
        ?>
    <div class="row padding_bottom border_bottom" >

      <div class="col-md-9">
        <div class="card-posts">
            <div class="p-content-wrapp">
            <h5><?php the_title();?> | <?php echo get_the_date(); ?></h5>
            <?php the_excerpt();?>
            <br>
            </div>
            <a href="<?php the_permalink();?>"  class="p-buttons">VIEW ARTICLE <i aria-hidden="true" class="hm hm-arrow-right1"></i> </a>
        
        </div>
      </div>

      <div class="col-md-3">
      <?php if ( has_post_thumbnail() ) { ?>
            <?php $image_id = get_post_thumbnail_id();
            $image_url = wp_get_attachment_image_src($image_id,'blog', true); ?>
            <div class="image-card" style="background-image: url('<?php echo $image_url[0]; ?>')">
        <?php } else { ?>
            <div class="image-card" style="background-image:url ('/wp-content/uploads/2023/05/Mask-Group-90-1.png')">
        <?php } ?> 
             </div>     
      </div>

 

  </div>
        <!----------- end  row repeater ---->
        <?php         

            }
        } else {
            echo 'No recent posts found.';
        }
        wp_reset_postdata();
        ?>

</div>
    </div><!--- end main row ---->
  </div>

     

  <style>



.image-card {
    height: 103px;
    background-color: gray;
    background-size: cover;
    background-position: top center;
}

@media only screen and (max-width: 1050px) {


}

@media only screen and (max-width: 764px) {


}



</style>
       

                 




