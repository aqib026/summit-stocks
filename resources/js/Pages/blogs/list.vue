<template>
    <MainLayout>
<div>
 <h2 class="font-semibold text-xl text-gray-800 leading-tight">
  Blog Posts
</h2>
  <div class="col-md-4" style="float: right;margin-bottom: 30px ">
  <input type="text" class="form-control" placeholder="Search">
  </div>
          <table class="table">

					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Post Title</th>
                          <th scope="col">Post Category</th>
                          <th scope="col">Post Status</th>
					      <th scope="col">Actions</th>
					    </tr>
					  </thead>
					  <tbody>
					  <tr v-for="post in posts.data" :key="post.id">
					  	<td>{{ post.id }}</td>
					  	<td><a :href="blog_url(post.post_url)" target="_blank">{{ post.post_title }}</a></td>
                        <td>{{ post.post_category }}</td>
                        <td>{{ post.post_status }}</td>
					  	<td>
					  		<inertia-link :href="route('blog_edit',{ id: post.id })" class="btn btn-info">Edit</inertia-link>
					  		<!-- <inertia-link href="" class="btn btn-danger" @click="destroy(post.id)">Delete</inertia-link> -->
					  	</td>
					  </tr>
					  </tbody>
					</table>
        <pagination class="mt-6" :links="posts.links" />
        </div>
    </MainLayout>
</template>

<script>
    import MainLayout from '@/Layouts/Main'
    import Pagination from '@/Components/Pagination'

    export default {
        data() {
        return {
                    units: {},
                    term: '',
                    form: this.$inertia.form({
                            search: ''
                        }),
                    params:{
                    search:null,
                    },
                }
            },
          components: {
            MainLayout,
            Pagination,
        },
        props: {
            posts: Object,
        },
        watch:{
            params:{
                handler(){
                this.$inertia.get(this.route('blogs_list'),this.params,{replace:true,preserveState:true});
                }
            }
        },
        computed:{
            
        },
        methods:{
            destroy(id) {
                if (confirm('Are you sure you want to delete this post?')) {
                    this.$inertia.delete(this.route('deletelead', id))
                }
            },
            blog_url(url){
                return '/'+url;
            }
        }
    }
</script>
