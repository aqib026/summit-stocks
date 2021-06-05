<template>
<header-component></header-component>
<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
					<div class="container" style="margin-top:210px !important; ">
						<div class="row">

							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="text-dark font-weight-bold text-8">{{ post.post_title}}</h1>
                                <span class="sub-title text-dark">Check out our Latest News!</span>
							</div>

							<div class="col-md-12 align-self-center order-1">


								<ul class="breadcrumb d-block text-center">
									<li><a href="#">Home</a></li>
									<li class="active">Blog</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-4">

					<div class="row">
						<div class="col">
							<div class="blog-posts single-post">

							<article class="post post-large blog-single-post border-0 m-0 p-0">
                                    <div class="post-image ml-0">
										<a href="javascript:void(0)">
											<img :src="post.post_image" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="post.post_title" />
										</a>
									</div>

									<div class="post-date ml-0">
										<span class="day">10</span>
										<span class="month">Jan</span>
									</div>

									<div class="post-content ml-0">

										<h2 class="font-weight-semi-bold"><a href="javascript:void(0)">{{ post.post_title}}</a></h2>

										<div class="post-meta">
											<span><i class="far fa-user"></i> By <a href="javascript:void(0)">Mark Allen</a> </span>
											<span><i class="far fa-folder"></i>
                                            <span v-html="categories"></span> 
                                            </span>
											<span><i class="far fa-comments"></i> <a href="javascript:void(0)">0 Comments</a></span>
										</div>

                                        <div v-html="post.post_content"></div>


										<div class="post-block mt-5 post-share">
											<h4 class="mb-3">Share this Post</h4>

											<!-- AddThis Button BEGIN -->
											<div class="addthis_toolbox addthis_default_style ">
												<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
												<a class="addthis_button_tweet"></a>
												<a class="addthis_button_pinterest_pinit"></a>
												<a class="addthis_counter addthis_pill_style"></a>
											</div>
											

										</div>										

									</div>
								</article>	

							</div>
						</div>
					</div>

				</div>

			</div>			
            <footer-component></footer-component>
</template>

<script>
import HeaderComponent from '../Components/Header.vue'
import FooterComponent from '../Components/Footer.vue'
    export default {
        components: {
        'header-component': HeaderComponent,
        'footer-component': FooterComponent,    
        },   
         props: {
            errors: Object,
            post: Object,
        },
        data() {
            return {
                 
            }
        },
        computed: {
                // a computed getter
                categories: function () {
                    let str = '';
                    let cat = this.post.post_category.split(',');
                    for (var i = 0; i < cat.length; i++) {
                        str += '<a href="javascript:void(0)">'+cat[i]+'</a> , ';
                    }
                    return str;
                }
            },
        methods: {
            

        }
    }
</script>
<style scoped>
    p{
        padding: 8px;
    }
    .wp-block-image figure img{
        display: inline-block;
        max-width: 60%;
    }
</style>
