<template>
    <div class="banner-area-wrapper mb-4">
            <div class="banner-area text-center" v-bind:style="{ backgroundImage: 'url(' + img + ')' }">	
                <div class="notice-video" v-if="page.urlvideo">
					<div class="video-icon video-hover">
						<a class="image-popup" :href="img">
							<i class="fa fa-play"></i>
						</a>
					</div>
				</div>
            </div>
        </div>
</template>
<script>
export default {
    props:['page', 'img'],
    data() {
        return {
        }
    },
    ready () {
        console.log('test');
    },
    methods: {
        reload: function(){
            console.log('cambio');
        }
    },
    mounted() {
        /*------------------------------------
            Video Player
        --------------------------------------*/
        $('.video-popup').magnificPopup({
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            zoom: {
                enabled: true,
            },
           iframe: {
               patterns: {
                    youtube_short: {
                       index: 'https://youtu.be/',
                       id: 'youtu.be/',
                       src: '//www.youtube.com/embed/%id%?autoplay=1'
                    },
                    youtube: {
                       index: 'youtube.com/',
                       id: 'v=',
                       src: '//www.youtube.com/embed/%id%?autoplay=1'
                    }
               },
               srcAction: 'iframe_src',
           }
        });
        
        $('.image-popup').magnificPopup({
            type: 'image',
            gallery:{
                enabled:true
            }
        });
    },
    watch:{
        page(value) {
            this.slides = value
        }
}
}
</script>