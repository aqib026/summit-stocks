<template>
	<MainSideBar>
		<div class="row">
		<div class="col-md-3">
			<LeftSideBar :symbol="symbol" />
		</div>
		<div class="col-md-9">
			<h2 id="top-heading" class="font-weight-bold text-3 mb-0 mt-4 mt-md-0">
				{{ Profile.companyName }} ( {{ Profile.symbol }} )
				<button class="wishlist-btn">Add to Watch List</button>
			</h2>
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
				<div class="tabs">
					<ul class="nav nav-tabs nav-justified flex-column flex-md-row"> <!-- nav-link active-->
						<li class="nav-item"><a id="tab1" :class="summaryClass">Summary</a></li>
						<li class="nav-item"><a id="tab2" :class="historyClass" @click="showHistoricalData()">Historical Data</a></li>
					</ul>				
					<div class="tab-content">
						<div  id="content1" :class="summaryContentClass">
							<Summary :SummaryData="SummaryData" />
						</div>
						<div id="content2" :class="historyContentClass">
							<Historical v-if="showHistory" :symbol="symbol" />
						</div>
					</div>
				</div>
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
.wishlist-btn{ background-color: transparent; border: 2px solid #5bc0de; color: #5bc0de; border-radius: 2em!important; padding: .483rem 1.0625rem;
font-size: 0.85rem; line-height: 1.42857;}
.wishlist-btn:hover{ background-color: #5bc0de; border: 2px solid #5bc0de; color: #fff;}
</style>
<script>
 	import MainSideBar from '@/Layouts/MainSideBar'
	import Summary from '@/Components/Summary'
	import Historical from '@/Components/Historical'
	import LeftSideBar from '@/Components/LeftSideBar'


    export default {
        components: {
			MainSideBar,
			Summary,
			Historical,
			LeftSideBar,
        },   
        props: {
			symbol: String,
			QuarterlyEarnings: Array,
			SummaryData: Object,
			Profile: Object,
        },
        data() {
            return {
				showHistory:false,
				summaryClass:'nav-link active',
				historyClass:'nav-link',
				summaryContentClass:'tab-pane active',
				historyContentClass:'tab-pane',
            }
        },
        computed:{

            },
        methods: {
			showHistoricalData(){
				this.summaryClass = 'nav-link';
				this.historyClass = 'nav-link active';

				this.summaryContentClass = 'tab-pane';
				this.historyContentClass = 'tab-pane active';
				this.showHistory = true;
				// axios
				// 	.get("/api/"+this.symbol+"/history")
				// 	.then(({ data }) => {
				// 		this.HistoricalData = data;		
				// 		this.showHistory = true;
				// 		}
				// 	);
			},
            RoundMe(val){
				if(val != null)
					return val.toFixed(3)
				else
					return '';
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