<template>
    <h3 class="font-weight-bold text-3 mb-0 mt-4 mt-md-0">Popular Posts</h3>

    <ul class="simple-post-list">
        <li v-for="popularBlog in popularBlogs" :key="popularBlog.id">
            <div class="post-image">
                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                    <inertia-link  :href="popularBlog.post_url">
                        <img :src="popularBlog.post_image" class="border-radius-0" style="height:50px !important;width:50px !important;" width="50" height="50" :alt="popularBlog.post_title">
                    </inertia-link>
                </div>
            </div>
            <div class="post-info">
                <h4 class="font-weight-normal text-3 line-height-4 mb-0">
                  <inertia-link  :href="popularBlog.post_url" class="text-dark">
                  {{ popularBlog.post_title }}
                  </inertia-link>
                  </h4>
                <div class="post-meta">
                    {{popularBlog.pubDate}}
                </div>
            </div>
        </li>
    </ul>    
</template>

<script>

export default {
  data() {
    return {
      popularBlogs:[]
    };
  },
  methods: {
    getPoplularBlogs(){
      axios
        .get("/api/popularBlogs")
        .then(({ data }) => {
            this.popularBlogs = data.data;                
            }
        );
    }
  },
  mounted() {},
  created() {
    //this.$Progress.start();
    this.getPoplularBlogs();
    //this.$Progress.finish();
  }
};
</script>
