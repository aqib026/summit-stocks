<template>
    <h3 class="font-weight-bold text-3 mb-0 mt-4 mt-md-0">Recent Posts</h3>

    <ul class="simple-post-list">
        <li v-for="recentBlog in recentBlogs" :key="recentBlog.id">
            <div class="post-image">
                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                    <a href="blog-post.html">
                        <img :src="recentBlog.post_image" class="border-radius-0" style="height:50px !important;width:50px !important;" width="50" height="50" :alt="recentBlog.post_title">
                    </a>
                </div>
            </div>
            <div class="post-info">
                <h4 class="font-weight-normal text-3 line-height-4 mb-0"><a href="blog-post.html" class="text-dark">{{ recentBlog.post_title }}</a></h4>
                <div class="post-meta">
                    {{recentBlog.pubDate}}
                </div>
            </div>
        </li>
    </ul>    
</template>

<script>
import HeaderComponent from '../Components/Header.vue'

export default {
  data() {
    return {
      recentBlogs:[]
    };
  },
  methods: {
    getRecentBlogs(){
      axios
        .get("/api/recentBlogs")
        .then(({ data }) => {
            this.recentBlogs = data.data;                
            }
        );
    }
  },
  mounted() {},
  created() {
    //this.$Progress.start();
    this.getRecentBlogs();
    //this.$Progress.finish();
  }
};
</script>
