<template>
<header class="navbar navbar-light sticky-top bg-dark flex-md-nowrap p-0 shadow bg-light" style="" id="header2">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
  	<inertia-link :href="route('dashboard')">
                                   <!--  <breeze-application-logo class="block h-9 w-auto" /> -->
    <img alt="Porto" width="237" height="55" src="/theme/img/cropped-logo@2x.png">
        </inertia-link></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <ul class="navbar-nav px-3">
    <li class="nav-item">
       <breeze-responsive-nav-link :href="route('logout')" method="post" as="button">
        Log Out
       </breeze-responsive-nav-link>
     
    </li>
  </ul>

</header>
  <div class="container-fluid">
  <div class="row" style="margin-top:50px;">
  	<div class="col-md-4 col-lg-3">
    <nav id="sidebarMenu" class="d-md-block sidebar collapse">
      <div class="">
        <ul class="nav flex-column">
         <li class="nav-item">
        <a class="nav-link" :href="route('dashboard')" :active="route().current('dashboard')">
         DASHBOARD
        </a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" :href="route('leads')" :active="route().current('leads')" v-if=" $page.props.auth.user.type =='admin' ">
         LEADS
        </a>
      </li>
        </ul>
      </div>
    </nav>
   </div>
    <div class="col-md-8 col-sm-8 col-lg-8 bg-white">
    	
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
