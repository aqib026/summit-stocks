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
                    	<a :href="route('Createlead')" class="btn btn-primary">Create New</a>
                       <table class="table">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Name</th>
					      <th scope="col">Created At</th>
					      <th scope="col">Actions</th>
					    </tr>
					  </thead>
					  <tbody>
					  <tr v-for="lead in leads">
					  	<td>{{ lead.id }}</td>
					  	<td>{{ lead.name }}</td>
					  	<td>{{ lead.created_at }}</td>
					  	<td>
					  		<a :href="route('lead',{ id: lead.id })" class="btn btn-info">Edit</a> |
					  		<a href="" class="btn btn-danger" @click="destroy(lead.id)">Delete</a>
					  	</td>
					  	
					  </tr>
					  </tbody>
					</table>

                    </div>
                </div>
            </div>
        </div>
    </breeze-authenticated-layout>
</template>

<script>
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated'

    export default {
        components: {
            BreezeAuthenticatedLayout,
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
    }
    }
</script>
