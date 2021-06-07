<template>
    <div class="masonry-item no-default-style col-md-6 mb-5" v-for="mainBlog in mainBlogs" :key="mainBlog.id">
    <article class="post post-large" >
        <div class="post-image">
            
            <inertia-link  :href="mainBlog.post_url" >
                <img :src="mainBlog.post_image" style="max-height:306px; width:100%;" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" :alt="mainBlog.post_title" />
            </inertia-link>
        </div>

        <div class="post-date text-1">
            <span class="day border-radius-0 text-4 text-dark">{{ mainBlog.date }}</span>
            <span class="month border-radius-0 text-1 bg-color-dark">{{mainBlog.month}}</span>
        </div>

        <div class="post-content">

            <h2 class="font-weight-semibold text-6 line-height-3 mb-3">
              <inertia-link class="text-color-dark text-color-hover-primary"  :href="mainBlog.post_url" >
                {{mainBlog.post_title}}
              </inertia-link>
              </h2>
            <p>{{mainBlog.post_content}} [...]</p>

            <div class="post-meta">
                <span><i class="far fa-user"></i> By <a href="javascript:void()">Mark Allen</a> </span>
                <span><i class="far fa-folder"></i> 
                      
                      <a href="javascript:void()" v-for="category in mainBlog.post_category" :key="category">{{ category }}</a>
                       </span>
                <span><i class="far fa-comments"></i> <a href="javascript:void()">0 Comments</a></span>
                
            </div>

        </div>
    </article>   
    </div>
</template>

<script>

export default {
  data() {
    return {
      mainBlogs:[]
    };
  },
  methods: {
    getMainBlogs(){
      axios
        .get("/api/mainBlogs")
        .then(({ data }) => {
            this.mainBlogs = data.data;                
            }
        );
    }
  },
  mounted() {},
  created() {
    //this.$Progress.start();
    this.getMainBlogs();
    //this.$Progress.finish();
  }
};
</script>
