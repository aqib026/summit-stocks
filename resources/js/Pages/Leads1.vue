<template>
    <MainLayout>
<div>
 <h2 class="font-semibold text-xl text-gray-800 leading-tight">
  Leads
</h2>
  <div class="col-md-4" style="float: right;margin-bottom: 30px ">
  <input type="text" class="form-control" placeholder="Search">
  </div>
          <table class="table">

					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Name</th>
                    <th scope="col">City</th>
                    <th scope="col">State</th>
                    <th scope="col">Country</th>
                    <th scope="col">Postal Code</th>
                    <th scope="col">Phone No</th>
					     <!--  <th scope="col">Created At</th> -->
					      <th scope="col">Actions</th>
					    </tr>
					  </thead>
					  <tbody>
					  <tr v-for="lead in leads.data" :key="lead.id">
					  	<td>{{ lead.id }}</td>
					  	<td>{{ lead.first_name }}</td>
                        <td>{{ lead.city }}</td>
                        <td>{{ lead.state }}</td>
                        <td>{{ lead.country }}</td>
                        <td>{{ lead.postal_code }}</td>
                        <td>{{ lead.phone_no }}</td>
					  	<!-- <td>{{ lead.created_at }}</td> -->
					  	<td>
					  		<inertia-link :href="route('lead',{ id: lead.id })" class="btn btn-info">Edit</inertia-link> |
					  		<inertia-link href="" class="btn btn-danger" @click="destroy(lead.id)">Delete</inertia-link>
					  	</td>
					  </tr>
					  </tbody>
					</table>
        <pagination class="mt-6" :links="leads.links" />
        </div>
    </MainLayout>
</template>

<script>
    import MainLayout from '@/Layouts/Main'
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated'
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
            BreezeAuthenticatedLayout,
            MainLayout,
            Pagination,
        },

    props: {
         leads: Object,
    },
    watch:{
      params:{
        handler(){
          this.$inertia.get(this.route('leads'),this.params,{replace:true,preserveState:true});
        }
      }
    },

    methods:{

destroy(id) {
        // alert(id); return false;
  if (confirm('Are you sure you want to delete this Lead?')) {
    this.$inertia.delete(this.route('deletelead', id))
  }
},
// searchUnit:function(){
//      this.$inertia.replace(this.route('leads',{term:this.term}))
//       // if(this.form.search != ''){
//       //   this.form.post(this.route('leads'));
//       // }

        
//         },
    }
    }
</script>
