
<!---- splide beta cdn --->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>



<div class="splide">
  <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">Slide 01</li>
            <li class="splide__slide">Slide 02</li>
            <li class="splide__slide">Slide 03</li>
        </ul>
  </div>
</div>


<?php if( have_rows('slides') ): ?>
    <?php while( have_rows('slides') ): the_row(); 
        $image = get_sub_field('image');
        ?>
            <?php echo wp_get_attachment_image( $image, 'full' ); ?>
            <?php the_sub_field('caption'); ?>
      
    <?php endwhile; ?>
<?php endif; ?>



<script>
    // initiates splide + settings  
    // OPTIONS: https://splidejs.com/guides/options/
    // ARROWS: https://splidejs.com/guides/arrows/
    // PAGINATION: https://splidejs.com/guides/pagination/
    
document.addEventListener('DOMContentLoaded', function() {
    var splide = new Splide('#hero-slider', {
         type         : 'loop',
         perPage      : 1,
         rewind : true,
         autoplay     : true,
         interval     : 15000,
        //  start: 1,
        // autoWidth: true,
         //focus: 'center',
        // padding: {
        //     right: '10rem',
        //     left: '10rem',
        // },
        'arrowPath': 'm15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4     14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z',

    }).mount();
});
</script>
