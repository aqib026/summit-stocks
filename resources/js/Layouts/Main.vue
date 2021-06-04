<template>
<header class="navbar navbar-light sticky-top bg-dark flex-md-nowrap p-0 shadow bg-light" style="" id="header2">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
  	<inertia-link :href="route('dashboard')">
                                   <!--  <breeze-application-logo class="block h-9 w-auto" /> -->
    <img alt="Porto" width="237" height="55" src="/theme/img/cropped-logo@2x.png">
        </inertia-link></a>
 <!--  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <ul class="navbar-nav px-3">
    <!-- <li class="nav-item"> -->
<breeze-dropdown align="right" width="48">
<template #trigger>
    <span class="inline-flex rounded-md">
        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
            {{ $page.props.auth.user.name }}

            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
    </span>
</template>

<template #content>
    <breeze-dropdown-link :href="route('logout')" method="post" as="button">
        Log Out
    </breeze-dropdown-link>
</template>
</breeze-dropdown>
</ul>

</header>
  <div class="container-fluid">
  <div class="row" style="margin-top:50px;">
  	<div class="col-md-3 col-lg-3 col-sm-3 col-xl-3">
    <nav id="sidebarMenu" class="d-md-block sidebar">
      <div class="">
        <ul class="nav flex-column">
         <li class="nav-item">
        <a class="nav-link" :href="route('dashboard')" :class="{active_dashboard: route().current('dashboard')}" :active="route().current('dashboard')">
         DASHBOARD
        </a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" :href="route('leads')" :class="{active: route().current('leads')}"  :active="route().current('leads')" v-if=" $page.props.auth.user.type =='admin' ">
         LEADS
        </a>
      </li>
        </ul>
      </div>
    </nav>
   </div>
    <div class="col-md-9 col-sm-9 col-lg-9 bg-white">
    	
     <slot />
    </div>
   <!--  </main> -->
</div>
</div>
</template>

<script>
    // import BreezeAuthenticatedLayout from '@/Layouts/Authenticated'
    import BreezeApplicationLogo from '@/Components/ApplicationLogo'
    import BreezeDropdown from '@/Components/Dropdown'
    import BreezeDropdownLink from '@/Components/DropdownLink'
    import BreezeNavLink from '@/Components/NavLink'
    import BreezeResponsiveNavLink from '@/Components/ResponsiveNavLink'

    export default {
        // components: {
        //     BreezeAuthenticatedLayout,
        // },
        components: {
            BreezeApplicationLogo,
            BreezeDropdown,
            BreezeDropdownLink,
            BreezeNavLink,
            BreezeResponsiveNavLink,
        },

        props: {
            auth: Object,
            errors: Object,
        },
    }
</script>
