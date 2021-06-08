<template>
	<MainSideBar>
		<div class="row">
		<div class="col-md-3">&nbsp;</div>
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
				<div class="col-md-6">
					<table class="table table-striped">
						<tr>
							<td>Previous Close</td>
							<td><strong>{{ Summary.previousClose}}</strong></td>
						</tr>
						<tr>
							<td>Open</td>
							<td><strong>{{ Summary.open}}</strong></td>
						</tr>
						<tr>
							<td>Day's Range</td>
							<td><strong>{{ Summary.dayLow}} - {{ Summary.dayHigh}}</strong></td>
						</tr>
						<tr>
							<td>52 Week Range</td>
							<td><strong>{{ Summary.yearLow}} - {{ Summary.yearHigh}}</strong></td>
						</tr>
						<tr>
							<td>Volume</td>
							<td><strong>{{ Summary.volume }}</strong></td>
						</tr>
						<tr>
							<td>Avg. Volume</td>
							<td><strong>{{ Summary.avgVolume}}</strong></td>
						</tr>
					</table>
				</div>
				<div class="col-md-6">
					<table class="table table-striped">
						<tr>
							<td>Market Cap</td>
							<td><strong>{{ Summary.marketCap}}</strong></td>
						</tr>
						<tr>
							<td>EPS (TTM)</td>
							<td><strong>{{ RoundMe(Summary.eps) }}</strong></td>
						</tr>
						<tr>
							<td>PE Ratio (TTM)</td>
							<td><strong>{{ RoundMe(Summary.pe) }}</strong></td>
						</tr>
						<tr>
							<td>Avg. Volume</td>
							<td><strong>{{ Summary.avgVolume}}</strong></td>
						</tr>
					</table>
				</div>
			</div>

			<!--- Yearly -->
			<h2 id="top-heading" class="font-weight-bold text-3 mb-5 mt-4 mt-md-0">Quarterly Earnings Surprise Amount</h2>
			<table class="table table-striped">
			<thead>
				<tr>
					<th>&nbsp;</th>
					<th>Fiscal Quarter End</th>
					<th>Date Reported</th>
					<th>Earnings Per Share*</th>
					<th>Consensus EPS* Forecast</th>
					<th>% Surprise</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="(qe,index) in QuarterlyEarnings" :key="index">
					<td></td>
					<td></td>
					<td>{{ qe.date }}</td>
					<td>{{ RoundMe(qe.eps) }}</td>
					<td>{{ RoundMe(qe.epsEstimated) }}</td>
					<td>{{ Surprise(qe.eps,qe.epsEstimated)}}</td>
					<td></td>
					<td></td>
					</tr>
				</tbody>
			</table>
			<!--- Yearly -->


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

    export default {
        components: {
			MainSideBar,
        },   
         props: {
			symbol: String,
			QuarterlyEarnings: Array,
			Summary: Object,
			Profile: Object,
        },
        data() {
            return {
                 
            }
        },
        computed: {
            },
        methods: {
            RoundMe(val){
				return  val.toFixed(2);
			},
            Surprise(a,b){
				return  (((a / b) * 100) - 100).toFixed(2);
			},
        },
		created() {
			console.log(this.Summary);
		}
    }
</script>