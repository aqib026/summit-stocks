<template>
    <article class="post post-large">
        <div class="post-image">
            <a href="blog-post.html">
                <img src="theme/img/blog/wide/blog-54.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="How to Make Friends as a Grown-Up" />
            </a>
        </div>

        <div class="post-date text-1">
            <span class="day border-radius-0 text-4 text-dark">12</span>
            <span class="month border-radius-0 text-1 bg-color-dark">Jan</span>
        </div>

        <div class="post-content">

            <h2 class="font-weight-semibold text-6 line-height-3 mb-3"><a href="blog-post.html" class="text-color-dark text-color-hover-primary">How to Make Friends as a Grown-Up</a></h2>
            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>

            <div class="post-meta">
                <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Travel</a> </span>
                <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                <span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
            </div>

        </div>
    </article>   
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
