
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


<!---- this is a shortcode styles are in the tempalte-part/recent-posts.php---->


<div class="container-fluid">
<div class="row">

<?php
$args = array(
    //'post_type' => 'post_tipe_name_here',
    'posts_per_page' => 3,
    'order' => 'DESC',
    'orderby' => 'date',
);

$custom_query = new WP_Query($args);

if ($custom_query->have_posts()) {
    while ($custom_query->have_posts()) {
        $custom_query->the_post(); ?> 


<div class="col-md-4">

<div class="card-posts-main">

<?php if ( has_post_thumbnail() ) { ?>
            <?php $image_id = get_post_thumbnail_id();
            $image_url = wp_get_attachment_image_src($image_id,'blog', true); ?>
            <div class="image-card" style="background-image: url('<?php echo $image_url[0]; ?>')">
        <?php } else { ?>
            <div class="image-card" style="background-image: url('/wp-content/uploads/2023/05/Mask-Group-90-1.png')">
        <?php } ?> 
             </div>     


            <div class="p-content-wrapp">
            <h5><?php the_title();?> | <?php echo get_the_date(); ?></h5>
            <?php //the_content();?>
            <br>
            </div>
            <a  href="<?php the_permalink();?>" class="p-buttons">VIEW ARTICLE <i aria-hidden="true" class="hm hm-arrow-right1"></i> </a>
        
      
      </div>

      
      </div>


  <?php  }  wp_reset_postdata(); // Reset the post data to the main query
}
?>



    </div><!--- end main row ---->
</div>
     

  



