<template>
	<MainSideBar>
		<div class="row">
		<div class="col-md-3">
			<LeftSideBar :symbol="symbol" />
		</div>
		<div class="col-md-9">
			<h2 id="top-heading" class="font-weight-bold text-3 mb-0 mt-4 mt-md-0">{{ Profile.companyName }} ( {{ Profile.symbol }} )</h2>
			<p class="mb-4">
				{{ Profile.exchangeShortName }} : {{ Profile.exchange }} -
				<small> Real Time Price</small> -
				Currency in USD
			</p>
			<div class="col-md-12 mb-4">
				<span id="topPrice" class="font-weight-bold text-3 mb-0 mr-4 mt-4 mt-md-0">{{ Profile.price }}</span>
				<span id="topGreen" class="font-weight-bold text-3 mb-0 mt-4 mt-md-0">{{ Profile.changes }}</span>
			</div>


			<div class="row mb-5">
				<div class="col-md-12">

						<table class="table table-striped">
						<thead>
							<tr>
							<th>Date</th>
							<th>Close/Last</th>
							<th>Volume</th>	
							<th>Open</th>	
							<th>High</th>	
							<th>Low</th> 
							</tr>
						</thead>

						<tbody>
							<tr v-for="(hd,index) in HistoricalData.historical" :key="index">
							<td>{{ hd.date}}</td>
							<td>{{ hd.close}}</td>
							<td>{{ hd.volume }}</td>
							<td>{{ hd.open}}</td>
							<td>{{ hd.high}}</td>
							<td>{{ hd.low}}</td>
							</tr>
						</tbody>
						</table>
				</div>
			</div>

		</div>
		</div>
	</MainSideBar>
</template>
<style scoped>
#top-heading{ font-size: 32px !important;} #topPrice{ font-size: 36px !important;}
#topGreen{ color: #00873c !important; font-size: 28px !important;}
</style>
<script>
 	import MainSideBar from '@/Layouts/MainSideBar'
	import LeftSideBar from '@/Components/LeftSideBar'


    export default {
        components: {
			MainSideBar,
			LeftSideBar,
        },   
        props: {
			symbol: String,
			HistoricalData:Object,
			Profile:Object,
        },
	
        data() {
            return {
				showHistory:false,
            }
        },
        computed:{

            },
        methods: {

        },
		created() {
			console.log(this.dividendHistory);
		}
    }
</script>