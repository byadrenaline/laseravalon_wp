
<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'full'); ?>

<section class="hero hero--blog" style="background-image: url('<?php if( has_post_thumbnail() ){ echo $thumb[0]; }else{ header_image(); }?>');">
</section>