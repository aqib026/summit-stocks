<template>
	<MainSideBar>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>&nbsp;</th>
					<th>Symbol</th>
					<th>Company Name</th>
					<th>Market Cap</th>
					<th>Industry</th>
					<th>Consensus EPS* Forecast</th>
					<th># of Ests</th>
					<th>Last Year's Report Date</th>
					<th>Last year's EPS*</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="(sc,index) in stock_list" :key="index">
					<td><img :src="sc.image" style="width:80px"></td>
					<td><inertia-link :href="route('market-earning-activity-details',{ symbol: sc.symbol })" class="btn btn-info">{{ sc.symbol }}</inertia-link></td>
					<td>{{ sc.companyName }}</td>
					<td>{{ sc.mktCap }}</td>
					<td>{{ sc.industry }}</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</MainSideBar>
</template>
<script>
 	import MainSideBar from '@/Layouts/MainSideBar'
    export default {
        components: {
			MainSideBar,
        },   
         props: {
            stock_list: Array,
        },
        data() {
            return {
                 
            }
        },
        computed: {
            },
        methods: {
            

        },
		created() {
			console.log(this.stock_list);
		}
    }
</script>