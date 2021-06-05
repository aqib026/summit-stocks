<template>



    <header-component></header-component>
    <div role="main" class="main">
     <section class="section border-0 m-0 pb-3">
                    <div class="container container-lg-custom">
                        <div class="row pb-1">

                            <div class="col-sm-6 col-lg-4 mb-4 pb-2" v-for="gridBlog in gridBlogs" :key="gridBlog.id">
                                <a href="blog-post.html">
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
                                </a>
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

                            <h3 class="font-weight-bold text-3 mt-4 mt-md-0">Featured Posts</h3>

                            <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10, 'loop': true, 'nav': false, 'dots': false, 'autoplay': true, 'autoplayTimeout': 5000}">

                                <div>
                                    <a href="blog-post.html">
                                        <article>
                                            <div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                                <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                                                    <img src="theme/img/blog/wide/blog-65.jpg" class="img-fluid" alt="Main Reasons To Stop Texting And Driving">
                                                    <div class="thumb-info-title bg-transparent p-4">
                                                        <div class="thumb-info-type bg-color-primary px-2 mb-1">Technology</div>
                                                        <div class="thumb-info-inner mt-1">
                                                            <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">Main Reasons To Stop Texting And Driving</h2>
                                                        </div>
                                                        <div class="thumb-info-show-more-content">
                                                            <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">Lorem ipsum dolor sit amet, consectetur adip...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </div>

                                <div>
                                    <a href="blog-post.html">
                                        <article>
                                            <div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                                <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                                                    <img src="theme/img/blog/wide/blog-66.jpg" class="img-fluid" alt="Tips to Help You Quickly Prepare your Lunch">
                                                    <div class="thumb-info-title bg-transparent p-4">
                                                        <div class="thumb-info-type bg-color-primary px-2 mb-1">Recipes</div>
                                                        <div class="thumb-info-inner mt-1">
                                                            <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">Tips to Help You Quickly Prepare your Lunch</h2>
                                                        </div>
                                                        <div class="thumb-info-show-more-content">
                                                            <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">Lorem ipsum dolor sit amet, consectetur adip...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </div>

                                <div>
                                    <a href="blog-post.html">
                                        <article>
                                            <div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                                <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                                                    <img src="theme/img/blog/wide/blog-67.jpg" class="img-fluid" alt="Why should I buy a smartwatch?">
                                                    <div class="thumb-info-title bg-transparent p-4">
                                                        <div class="thumb-info-type bg-color-primary px-2 mb-1">Gadgets</div>
                                                        <div class="thumb-info-inner mt-1">
                                                            <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">Why should I buy a smartwatch?</h2>
                                                        </div>
                                                        <div class="thumb-info-show-more-content">
                                                            <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">Lorem ipsum dolor sit amet, consectetur adip...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </div>

                            </div>

                            <h3 class="font-weight-bold text-3 mt-4 pt-2 mb-2 mt-4 mt-md-0">Featured Author</h3>

                            <div class="post-block post-author pt-2">
                                <div class="img-thumbnail img-thumbnail-no-borders d-block pb-3">
                                    <a href="blog-post.html">
                                        <img class="border-radius-0" src="theme/img/avatars/avatar.jpg" alt="The post author image" style="height: 112px; max-height: 112px; width: auto; max-width: 100%;">
                                    </a>
                                </div>
                                <p><strong class="name"><a href="#" class="text-4 pb-2 pt-2 d-block text-dark">John Doe</a></strong></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pelle, consectetur adipiscing elit. </p>
                            </div>

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
                            <div class="blog-posts">

                                     <main-blogs></main-blogs>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <aside class="sidebar pb-4" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">
                                <h5 class="font-weight-semi-bold">Latest from Twitter</h5>
                                <div id="tweet" class="twitter mb-4" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
                                    <p>Please wait...</p>
                                </div>
                                <h5 class="font-weight-semi-bold pt-4">Photos from Instagram</h5>
                                <!-- <div class="instagram-feed" data-type="nomargins" class="mb-4 pb-1"></div> -->
                                <h5 class="font-weight-semi-bold pt-4 mb-2">Tags</h5>
                                <!-- <div class="mb-3 pb-1">
                                    <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">design</span></a>
                                    <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">brands</span></a>
                                    <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">video</span></a>
                                    <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">business</span></a>
                                    <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">travel</span></a>
                                </div> -->

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
    <footer id="footer">
                <div class="container container-lg-custom">
                    <div class="footer-ribbon">
                        <span>Get in Touch</span>
                    </div>
                    <div class="row py-5 my-4">
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                            <h5 class="text-3 mb-3">ABOUT THE BLOG</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna semper scelerisque.</p>
                            <p class="mb-0">Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis ptent taciti sociosqu ad litora...</p>
                            <p class="mb-0"><a href="#" class="btn-flat btn-xs text-color-light p-relative top-5"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                            <h5 class="text-3 mb-3">RECENT POSTS</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="media mb-3 pb-1">
                                    <article class="d-flex">
                                        <a href="#">
                                            <img class="mr-3 rounded-circle" src="{{ asset('theme/img/office/our-office-4-square.jpg') }}" alt="" style="max-width: 70px;">
                                        </a>
                                        <div class="media-body">
                                            <a href="#">
                                                <h6 class="text-3 text-color-light opacity-8 ls-0 mb-1">Lorem ipsum dolor sit, consectetur adipiscing elit.</h6>
                                                <p class="text-2 mb-0">12:53 AM Dec 19th</p>
                                            </a>
                                        </div>
                                    </article>
                                </li>
                                <li class="media">
                                    <article class="d-flex">
                                        <a href="#">
                                            <img class="mr-3 rounded-circle" src="{{ asset('img/office/our-office-5-square.jpg') }}" alt="" style="max-width: 70px;">
                                        </a>
                                        <div class="media-body">
                                            <a href="#">
                                                <h6 class="text-3 text-color-light opacity-8 ls-0 mb-1">Lorem ipsum dolor sit, consectetur adipiscing elit.</h6>
                                                <p class="text-2 mb-0">12:53 AM Dec 19th</p>
                                            </a>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-5 mb-md-0">
                            <h5 class="text-3 mb-3">RECENT COMMENTS</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3 pb-1">
                                    <a href="#">
                                        <p class="text-3 text-color-light opacity-8 mb-1"><i class="fas fa-angle-right text-color-primary"></i><strong class="ml-2">John Doe</strong> commented on <strong class="text-color-primary">lorem ipsum dolor sit amet.</strong></p>
                                        <p class="text-2 mb-0">12:55 AM Dec 19th</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p class="text-3 text-color-light opacity-8 mb-1"><i class="fas fa-angle-right text-color-primary"></i><strong class="ml-2">John Doe</strong> commented on <strong class="text-color-primary">lorem ipsum dolor sit amet.</strong></p>
                                        <p class="text-2 mb-0">12:55 AM Dec 19th</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <h5 class="text-3 mb-3">CATEGORIES</h5>
                            <p>
                                <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Gadgets</span></a>
                                <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Photography</span></a>
                                <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Lifestyle</span></a>
                                <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Fashion</span></a>
                                <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Recipes</span></a>
                                <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Travel</span></a>
                                <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Business</span></a>
                                <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Architecture</span></a>
                                <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Reviews</span></a>
                                <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Sports</span></a>
                                <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Videos</span></a>
                                <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Technology</span></a>
                                <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Design</span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container container-lg-custom py-2">
                        <div class="row py-4">
                            <div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                                <a href="index.html" class="logo pr-0 pr-lg-3">
                                    <img alt="Porto Website Template" src='theme/img/logo-footer.png' class="opacity-5" height="32">
                                </a>
                            </div>
                            <div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                                <p>© Copyright 2021. All Rights Reserved.</p>
                            </div>
                            <div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
                                <nav id="sub-menu">
                                    <ul>
                                        <li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="ml-1 text-decoration-none"> FAQ's</a></li>
                                        <li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="ml-1 text-decoration-none"> Sitemap</a></li>
                                        <li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="ml-1 text-decoration-none"> Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </footer> 
</template>

<style scoped>
    .bg-gray-100 {
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
    }

    .border-gray-200 {
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--tw-border-opacity));
    }

    .text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }

    .text-gray-500 {
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--tw-text-opacity));
    }

    .text-gray-600 {
        color: #718096;
        color: rgba(113, 128, 150, var(--tw-text-opacity));
    }

    .text-gray-700 {
        color: #4a5568;
        color: rgba(74, 85, 104, var(--tw-text-opacity));
    }

    .text-gray-900 {
        color: #1a202c;
        color: rgba(26, 32, 44, var(--tw-text-opacity));
    }

    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-800 {
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
        }

        .dark\:bg-gray-900 {
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
        }

        .dark\:border-gray-700 {
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--tw-border-opacity));
        }

        .dark\:text-white {
            color: #fff;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .dark\:text-gray-400 {
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--tw-text-opacity));
        }
    }
</style>

<script>
import HeaderComponent from '../Components/Header.vue'
import RecentBlogs from '../Components/RecentBlogs.vue'
import PopularBlogs from '../Components/PopularBlogs.vue'
import MainBlogs from '../Components/MainBlogs.vue'


export default {
components: {
    'header-component': HeaderComponent,
    'recent-blogs': RecentBlogs,
    'popular-blogs': PopularBlogs,
    'main-blogs' : MainBlogs
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
