<template>
	<MainSideBar>
		<div class="row">
		<div class="col-md-3">
			<LeftSideBar :symbol="symbol" />
		</div>
		<div class="col-md-9">

			<div class="row pb-1">
				<div class="col-sm-6 col-lg-4 mb-4 pb-2" v-for="gridBlog in News" :key="gridBlog.id">
					<a :href="gridBlog.url">													
						<article>
							<div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
								<div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
									<img  :src="gridBlog.image" class="img-fluid" :alt="gridBlog.title" style="height:300px;">
									<div class="thumb-info-title bg-transparent p-4">
										<div class="thumb-info-type bg-color-primary px-2 mb-1">{{gridBlog.symbol}}</div>
										<div class="thumb-info-inner mt-1">
											<h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">{{gridBlog.title}}</h2>
										</div>
										<div class="thumb-info-show-more-content">
											<p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">{{gridBlog.text}}</p>
										</div>
									</div>
								</div>
							</div>
						</article>
					</a>
				</div>                            
			</div>

		</div>
		</div>
	</MainSideBar>
</template>
<style scoped>
#top-heading{ font-size: 32px !important;} #topPrice{ font-size: 36px !important;}
#topGreen{ color: #00873c !important; font-size: 28px !important;}
</style>
<script>
 	import MainSideBar from '@/Layouts/MainSideBar'
	import LeftSideBar from '@/Components/LeftSideBar'

    export default {
        components: {
			MainSideBar,
			LeftSideBar,
        },   
        props: {
			symbol: String,
			News:Object,
			Profile:Object,
        },
	
        data() {
            return {

            }
        },
        computed:{

            },
        methods: {

        },
		created() {
			
		}
    }
</script>