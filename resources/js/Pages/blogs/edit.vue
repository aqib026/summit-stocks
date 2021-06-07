<template>
    <MainLayout>
      <div>
    
    <section>
      <div class="container">
        <div class="stock-subscription-form">
            <form @submit.prevent="submit">
          
            <div class="order-form">
              <h5>{{ form.post_title }}</h5>
              <div class="row">
                <div class="col-md-6 offset-md-2">
                  <div class="form-group">
                    <input name="post_title" id="post_title" type="text" class="form-control" placeholder="Post Title Name" v-model="form.post_title" required />
                  </div>
                </div>
                <div class="col-md-10 offset-md-2">
                  <div class="form-group">
                     <Editor
                        api-key="hx4hzcjw0ap8hrbz29eh0nypxqnkqw0h8pxp9pmou5mmifaz"
                        :init="{
                            height: 500,
                            menubar: false,
                            plugins: [
                            'advlist autolink lists link image charmap print preview anchor',
                            'searchreplace visualblocks code fullscreen',
                            'insertdatetime media table paste code help wordcount'
                            ],
                            toolbar:
                            'undo redo | bold italic underline strikethrough | alignleft aligncenter alignright  | blockquote | formatselect | spellchecker |  \
                            cut copy paste removeformat | searchreplace | bullist numlist | outdent indent | hr | link unlink anchor image code | inserttime |  \
                            table | subscript superscript | charmap | visualchars visualblocks nonbreaking | template | helloworld'
                        }"
                        v-model="form.post_content"
                        />   
                        </div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-2">
                    <div class="form-group">
                    <input type="file" @input="form.post_image = $event.target.files[0]" />    
                    <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                        {{ form.progress.percentage }}%
                    </progress>
                    </div>
                </div>


            </div>

          
            <div class="order-button text-center">
              <input type="submit" value="Update" class="btn btn-danger" />
            </div>
           
          </form>
        </div>
      </div>
    </section>
    
          
      </div>
 
    </MainLayout>
</template>

<script>
    import MainLayout from '@/Layouts/Main'
    import Editor from '@tinymce/tinymce-vue'

    export default {
        components: {
            MainLayout,
            Editor
        },
         props: {
            errors: Object,
            post: Object,
        },
    data() {
            return {
                form: this.$inertia.form({
                    post_title: this.post.post_title,
                    post_content: this.post.post_content,
                    post_status: this.post.post_status,
                    post_category: this.post.post_category,
                    post_image: this.post.post_image,
                    id:this.post.id
                }),
                currentYear: new Date().getFullYear(),
                Years : [],
            }
        },
        computed : {
            years () {
              const year = new Date().getFullYear()
              return Array.from({length: year - 2000}, (value, index) => year + index)
            }
          },
    methods: {
            submit() {
                this.form.post(this.route('blog_update'))
                // this.form.post(this.route('Createlead'), {
                //     onFinish: () => this.form.reset(),
                // })
            },
            updatePhotoPreview() {
                const reader = new FileReader();
                reader.onload = (e) => {
                    this.preview = e.target.result;
                };
                reader.readAsDataURL(this.$refs.photo.files[0]);
            },
            storePhoto() {
                if (this.$refs.photo) {
                    this.form.post_image = this.$refs.photo.files[0]
                }
                this.form.post(route('photo.store'), {
                    preserveScroll: true
                });
            },     

        }
    }
</script>
