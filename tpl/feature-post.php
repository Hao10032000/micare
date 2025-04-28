<?php
$feature_post = '';
global $themesflat_thumbnail;

$archive_month = get_the_time('m'); 
$archive_day   = get_the_time('d'); 

switch ( get_post_format() ) {	
	case 'gallery':
				$size = 'themesflat-blog';
		$images = themesflat_decode( themesflat_meta( 'gallery_images' ) );

		if ( empty( $images ) ) {
			break;
		}
		?>
        <div class="featured-post">
            <div class="customizable-carousel owl-carousel" data-loop="true" data-items="1" data-md-items="1" data-sm-items="1"
                 data-xs-items="1" data-space="15" data-autoplay="true" data-autospeed="4000" data-nav-dots="false"
                 data-nav-arrows="true">
				<?php
				if ( ! empty( $images ) && is_array( $images ) ) {
					foreach ( $images as $image ) { ?>
                        <div class="item-gallery">
							<?php echo wp_get_attachment_image( $image, $themesflat_thumbnail ); ?>
                        </div>
					<?php }
				}
				?>
            </div>
        </div><!-- /.feature-post -->
		<?php
		break;
	break;
	case 'video':	
		$video = themesflat_meta('video_url');
		if ( !$video ) 
			break;
		global $_wp_additional_image_sizes;	
		$video_size = array( 
			'height' => $_wp_additional_image_sizes[$themesflat_thumbnail]['height'],
			'width' => $_wp_additional_image_sizes[$themesflat_thumbnail]['width']
			);
		$end = "";
		if ( has_post_thumbnail() ){
			$feature_post .= '<div class="themesflat_video_embed">';
			$feature_post .= get_the_post_thumbnail(null,$themesflat_thumbnail).'
			<div class="video-video-box-overlay">
				<div class="video-video-box-button-sm video-box-button-lg">					
					<a href="'.esc_url($video).'" class="btn-video video-video-play-icon">
						<i class="icon-micare-Play"></i>
					</a>
				</div>					
			</div>';
			$end = '</div>';
		}
		$feature_post .= $end;
	break;

	case 'audio':
		$audio_url = themesflat_meta('audio_url');
		echo '<div class="themesflat_audio">'.$audio_url.'</div>';
	break;

	case 'quote':
		$quote_text = themesflat_meta('quote_text');
		echo '<div class="featured-post"> <p class="quote-image">'.esc_html($quote_text).'</p> ' . get_the_post_thumbnail(null,$themesflat_thumbnail) . '<div class="overlay"></div></div>';
	break;

	default:

		$size = is_single() ? 'themesflat-blog' : $themesflat_thumbnail;
		
		$thumb = get_the_post_thumbnail( get_the_ID(), $size );
		if ( empty( $thumb ) )
			return;

		$feature_post .= get_the_post_thumbnail( get_the_ID(), $size );
}

if ( $feature_post ) {
    $time = get_the_time( 'j' );
    $time2 = get_the_time( 'F' );
    echo '<div class="featured-post">' . $feature_post . 
         '<div class="post-date">' . $time . '<span>' . $time2 . '</span></div></div>';
}
?>
