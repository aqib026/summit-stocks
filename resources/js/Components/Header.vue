<template>
        <header id="header" style="height:235px" >
                <div class="header-body border-0">


                    <!-- header header header header header -->
                    <div class="header-top header-top-default border-bottom-0 bg-color-primary">
							
					</div>

                    <!-- header header header header header -->
                    <div class="header-container container container-lg-custom" style="min-height: 122px;">
                        <div class="header-row py-3">
                            <div class="header-column justify-content-start">
                                <div class="header-row">
                                    <h1 class="header-logo">
                                        <inertia-link href="/">
                                            <img alt="Porto" width="237" height="55" src="/theme/img/cropped-logo@2x.png">
                                           <!--  <span class="hide-text">Porto - Demo Blog 1</span> -->
                                        </inertia-link>
                                    </h1>
                                </div>
                            </div>
                            <div class="header-column justify-content-end w-75">
                                <div class="header-row">
                                    <a href="invest-better-with-summit-stocks" target="_blank" >
                                        <img alt="Porto" class="img-fluid pl-3" src="/theme/img/blog/blog-ad-2.jpg" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-nav-bar header-nav-bar-top-border bg-light">
                        <div class="header-container container container-lg-custom" >
                            <div class="header-row">
                                <div class="header-column">
                                    <div class="header-row justify-content-end justify-content-lg-start">
                                        <div class="header-nav p-0">
                                            <div class="header-nav header-nav-links header-nav-spaced header-nav-first-item-no-padding justify-content-start">
                                                <div class="header-nav-main header-nav-main-square header-nav-main-font-lg-upper header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                                    <nav class="collapse">
                                                        <ul class="nav nav-pills flex-column flex-lg-row" id="mainNav">
                                                            <li class="dropdown ml-0">
                                                                <a class="dropdown-item dropdown-toggle" href="index.html">
                                                                    Latest Stock Picks
                                                                </a>   
                                                            </li>  
                                                             <li class="dropdown ml-0">
                                                                <a class="dropdown-item dropdown-toggle" href="index.html">
                                                                    Research/Reports
                                                                </a>   
                                                            </li>   
                                                            <li class="dropdown ml-0">
                                                                <inertia-link class="dropdown-item dropdown-toggle" href="/contact-customer-service">
                                                                    Contact Us
                                                                </inertia-link>   
                                                            </li>   
                                                            <li class="dropdown ml-0">
                                                                <a class="dropdown-item dropdown-toggle" href="index.html">
                                                                    About
                                                                </a>   
                                                            </li> 

                                                            <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                                            <inertia-link v-if="$page.props.auth.user" href="/dashboard" class="text-sm text-gray-700 underline">
                                                            Dashboard
                                                            </inertia-link>

                                                            <template v-else>
                                                            <inertia-link :href="route('login')" class="text-sm text-gray-700 underline">
                                                            Log in
                                                            </inertia-link>

                                                            <inertia-link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">
                                                            Register
                                                            </inertia-link>
                                                            </template>
                                                            </div> 


                                                            </ul>
                                                    </nav>
                                                </div>
                                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                                    <i class="fas fa-bars"></i>
                                                </button>
                                            </div>
                                            <div class="header-nav-features">
                                                <div class="header-nav-features-search-reveal-container">
                                                    <div class="header-nav-feature header-nav-features-search header-nav-features-search-reveal d-inline-flex">
                                                        <a href="#" class="header-nav-features-search-show-icon d-inline-flex text-decoration-none"><i class="fas fa-search header-nav-top-icon"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-nav-features header-nav-features-no-border p-static">
                    <div class="header-nav-feature header-nav-features-search header-nav-features-search-reveal header-nav-features-search-reveal-big-search header-nav-features-search-reveal-big-search-full">
                        <div class="container">
                            <div class="row h-100 d-flex">
                                <div class="col h-100 d-flex">
                                    <form role="search" class="d-flex h-100 w-100" action="page-search-results.html" method="get">
                                        <div class="big-search-header input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Type and hit enter...">
                                            <a href="#" class="header-nav-features-search-hide-icon"><i class="fas fa-times header-nav-top-icon"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
</template>

<script>
    export default {
        props: ['href', 'active'],

        computed: {
            classes() {
                return this.active
                            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
                            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out'
            }
        }
    }
</script>
