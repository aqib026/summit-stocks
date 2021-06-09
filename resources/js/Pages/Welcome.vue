<template>



    <header-component></header-component>
    <div role="main" class="main">
     <major-indexes />   
     <section class="section border-0 m-0 pb-3">
                    <div class="container container-lg-custom">
                        <div class="row pb-1">

                            <div class="col-sm-6 col-lg-4 mb-4 pb-2" v-for="gridBlog in gridBlogs" :key="gridBlog.id">
                                <inertia-link  :href="gridBlog.post_url">
                                                                
                                    <article>
                                        <div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                            <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                                                <img  :src="gridBlog.post_image" class="img-fluid" :alt="gridBlog.post_title" style="height:300px;">
                                                <div class="thumb-info-title bg-transparent p-4">
                                                    <div class="thumb-info-type bg-color-primary px-2 mb-1">{{gridBlog.post_category}}</div>
                                                    <div class="thumb-info-inner mt-1">
                                                        <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">{{gridBlog.post_title}}</h2>
                                                    </div>
                                                    <div class="thumb-info-show-more-content">
                                                        <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">{{gridBlog.post_content}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </inertia-link>
                            </div>                            

                        </div>
                    </div>
                </section>
                  <div class="container container-lg-custom">
                    <div class="row py-5">
                        <div class="col-md-6 col-lg-4">

                            <popular-blogs></popular-blogs>

                        </div>
                        <div class="col-md-6 col-lg-4">

                            
                            <recent-blogs></recent-blogs>
                            

                        </div>
                        <div class="col-lg-4">

                            


                            <single-featured-post></single-featured-post>

                        </div>
                    </div>
                </div>
                 <section class="section bg-color-primary border-0 m-0">
                    <div class="container container-lg-custom">
                        <div class="row">
                            <div class="col text-center">                               
                                <div class="owl-carousel owl-theme nav-dark stage-margin nav-style-1 m-0" data-plugin-options="{'items': 6, 'margin': 5, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">

                                    <div class="px-3">
                                        <a href="#" class="btn btn-dark btn-block py-3 rounded-0 text-2 text-uppercase font-weight-bold">Gadgets</a>
                                    </div>

                                    <div class="px-3">
                                        <a href="#" class="btn btn-dark btn-block py-3 rounded-0 text-2 text-uppercase font-weight-bold">Photography</a>
                                    </div>

                                    <div class="px-3">
                                        <a href="#" class="btn btn-dark btn-block py-3 rounded-0 text-2 text-uppercase font-weight-bold">Lifestyle</a>
                                    </div>

                                    <div class="px-3">
                                        <a href="#" class="btn btn-dark btn-block py-3 rounded-0 text-2 text-uppercase font-weight-bold">Fashion</a>
                                    </div>

                                    <div class="px-3">
                                        <a href="#" class="btn btn-dark btn-block py-3 rounded-0 text-2 text-uppercase font-weight-bold">Recipes</a>
                                    </div>

                                    <div class="px-3">
                                        <a href="#" class="btn btn-dark btn-block py-3 rounded-0 text-2 text-uppercase font-weight-bold">Travel</a>
                                    </div>

                                    <div class="px-3">
                                        <a href="#" class="btn btn-dark btn-block py-3 rounded-0 text-2 text-uppercase font-weight-bold">Business</a>
                                    </div>

                                    <div class="px-3">
                                        <a href="#" class="btn btn-dark btn-block py-3 rounded-0 text-2 text-uppercase font-weight-bold">Architecture</a>
                                    </div>

                                    <div class="px-3">
                                        <a href="#" class="btn btn-dark btn-block py-3 rounded-0 text-2 text-uppercase font-weight-bold">Reviews</a>
                                    </div>

                                    <div class="px-3">
                                        <a href="#" class="btn btn-dark btn-block py-3 rounded-0 text-2 text-uppercase font-weight-bold">Sports</a>
                                    </div>

                                    <div class="px-3">
                                        <a href="#" class="btn btn-dark btn-block py-3 rounded-0 text-2 text-uppercase font-weight-bold">Videos</a>
                                    </div>

                                    <div class="px-3">
                                        <a href="#" class="btn btn-dark btn-block py-3 rounded-0 text-2 text-uppercase font-weight-bold">Technology</a>
                                    </div>

                                    <div class="px-3">
                                        <a href="#" class="btn btn-dark btn-block py-3 rounded-0 text-2 text-uppercase font-weight-bold">Design</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                 <div class="container container-lg-custom">

                    <div class="row mt-5 pt-3">
                        <div class="col-md-9">
                            <div id="portfolioLoadMoreWrapper" class="row masonry">

                                     <main-blogs></main-blogs>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <aside class="widget widget_banner" style="border:1px solid #1D51C7;margin-bottom:35px;color:#fff;" >
                            <h2 class="font-weight-bold text-8" style="text-align:center;width:100%;color:#F9A62F;line-height:80px;" >Summit Stocks Returns</h2>
                            <div style="display:inline-block;width:100%;line-height:20px;text-align:center;border-top:1px solid #1D51C7;" >
                                <div style="display:inline-block;width:45%;margin:2%;line-height:60px;text-align:center;border-right:1px solid #1D51C7;" >
                                <strong style="font-size:larger;" >Summit Stock</strong>
                                <p style="font-size:x-large;font-weight:900;color:green;" >599%</p>
                                </div>
                                <div style="display:inline-block;width:45%;margin:2%;line-height:60px;text-align:center;" >
                                    <strong style="font-size:larger;" >S&amp;P 500</strong>
                                    <p style="font-size:x-large;font-weight:900;color:green;" >129%</p>
                                    </div>
                                </div>
                                    <div style="display:inline-block;width:100%;line-height:20px;text-align:center;margin-top:50px;" >
                                    <p >Summit Stock Launches in 2019</p>
                                    <a href="/invest-better-with-summit-stocks" class="btn btn-modern btn-secondary mb-2" >JOIN SUMMIT STOCK</a>
                                    </div>
                            </aside>
                            <aside class="sidebar pb-4" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">
                                <h5 class="font-weight-semi-bold">Latest from Twitter</h5>
                                <div id="tweet" class="twitter mb-4" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
                                    <p>Please wait...</p>
                                </div>
                                <h5 class="font-weight-semi-bold pt-4">Photos from Instagram</h5>
                                <!-- <div class="instagram-feed" data-type="nomargins" class="mb-4 pb-1"></div> -->
                                <h5 class="font-weight-semi-bold pt-4 mb-2">Tags</h5>

                                <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="my-4 pt-3 d-block">
                                    <img alt="Porto" class="img-fluid" src="theme/img/blog/blog-ad-1-medium.jpg" />
                                </a>
                                <h5 class="font-weight-semi-bold pt-4">Find us on Facebook</h5>
                                <div class="fb-page" data-href="https://www.facebook.com/OklerThemes/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/OklerThemes/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/OklerThemes/">Okler Themes</a></blockquote></div>
                            </aside>
                        </div>
                    </div>
               </div>


               
    </div>
    
    <footer-component showTicker="true"></footer-component>

</template>

<style scoped>
    .bg-gray-100 {
        background-color: #f7fafc;background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
    }.border-gray-200 {
        border-color: #edf2f7;border-color: rgba(237, 242, 247, var(--tw-border-opacity));
    }.text-gray-400 {
        color: #cbd5e0;color: rgba(203, 213, 224, var(--tw-text-opacity));
    }.text-gray-500 {
        color: #a0aec0;color: rgba(160, 174, 192, var(--tw-text-opacity));
    }.text-gray-600 {
        color: #718096;color: rgba(113, 128, 150, var(--tw-text-opacity));
    }.text-gray-700 {
        color: #4a5568;color: rgba(74, 85, 104, var(--tw-text-opacity));
    }.text-gray-900 {
        color: #1a202c;color: rgba(26, 32, 44, var(--tw-text-opacity));
    }
    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-800 {
            background-color: #2d3748;background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
        }.dark\:bg-gray-900 {
            background-color: #1a202c;background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
        }.dark\:border-gray-700 {
            border-color: #4a5568;border-color: rgba(74, 85, 104, var(--tw-border-opacity));
        }.dark\:text-white {
            color: #fff;color: rgba(255, 255, 255, var(--tw-text-opacity));
        }.dark\:text-gray-400 {
            color: #cbd5e0;color: rgba(203, 213, 224, var(--tw-text-opacity));
        }
    }
</style>

<script>
import HeaderComponent from '../Components/Header.vue'
import FooterComponent from '../Components/Footer.vue'
import RecentBlogs from '../Components/RecentBlogs.vue'
import PopularBlogs from '../Components/PopularBlogs.vue'
import MainBlogs from '../Components/MainBlogs.vue'
import SingleFeaturedPost from '../Components/SingleFeaturedPost.vue'
import MajorIndexesVue from '@/Components/MajorIndexes.vue'


export default {
components: {
    'header-component': HeaderComponent,
    'footer-component': FooterComponent,
    'recent-blogs': RecentBlogs,
    'popular-blogs': PopularBlogs,
    'main-blogs' : MainBlogs,
    'single-featured-post' : SingleFeaturedPost,
    'major-indexes' : MajorIndexesVue,
    
  },    
  data() {
    return {
      gridBlogs: [],
    };
  },
  props: {
            auth: Object,
            canLogin: Boolean,
            canRegister: Boolean,
            errors: Object,
            laravelVersion: String,
            phpVersion: String,
        },
  methods: {
    getGridBlogs() {
      axios
        .get("/api/getGridBlogs")
        .then(({ data }) => {
            this.gridBlogs = data.data;
                
            }
        );
    }
  },
  mounted() {},
  created() {
    //this.$Progress.start();
    this.getGridBlogs();
    //this.$Progress.finish();
  }
};
</script>
