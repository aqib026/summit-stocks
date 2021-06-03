<template>
    <breeze-authenticated-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                    	<!-- <a :href="route('Createlead')" class="btn btn-primary">Create New</a> -->
                        <div class="col-md-4" style="float: right">
                          <input type="text" v-model="term" @keyup="searchUnit" placeholder="Search"  class="form-control form-control-sm">
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
					  		<a :href="route('lead',{ id: lead.id })" class="btn btn-info">Edit</a> |
					  		<a href="" class="btn btn-danger" @click="destroy(lead.id)">Delete</a>
					  	</td>
					  	
					  </tr>
					  </tbody>
					</table>
                    <pagination class="mt-6" :links="leads.links" />

                    </div>
                </div>
            </div>
        </div>
    </breeze-authenticated-layout>
</template>

<script>
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated'
    import Pagination from '@/Components/Pagination'

    export default {
        data() {
        return {
            units: {},
            term: '',
            form: this.$inertia.form({
                    search: ''
                })
        }
    },
        components: {
            BreezeAuthenticatedLayout,
            Pagination,
        },

         props: {
         leads: Object,
    },
    methods:{

destroy(id) {
        // alert(id); return false;
  if (confirm('Are you sure you want to delete this Lead?')) {
    this.$inertia.delete(this.route('deletelead', id))
  }
},
searchUnit:function(){
     this.$inertia.replace(this.route('leads',{term:this.term}))
      // if(this.form.search != ''){
      //   this.form.post(this.route('leads'));
      // }

        
        },
    }
    }
</script>
