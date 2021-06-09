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
							<th>Period Ending:</th>
							<th>{{ Financials[0].date }}</th>
							<th>{{ Financials[1].date }}</th>	
							<th>{{ Financials[2].date }}</th>	
							<th>{{ Financials[3].date }}</th>	
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>Total Revenue</td>
								<td>{{ formatPrice(Financials[0].revenue) }}</td>
								<td>{{ formatPrice(Financials[1].revenue) }}</td>
								<td>{{ formatPrice(Financials[2].revenue) }}</td>
								<td>{{ formatPrice(Financials[3].revenue) }}</td>
							</tr>
							<tr>
								<td>Cost of Revenue	</td>
								<td>{{ formatPrice(Financials[0].costOfRevenue) }}</td>
								<td>{{ formatPrice(Financials[1].costOfRevenue) }}</td>
								<td>{{ formatPrice(Financials[2].costOfRevenue) }}</td>
								<td>{{ formatPrice(Financials[3].costOfRevenue) }}</td>
							</tr>
							<tr>
								<td><strong>Gross Profit</strong></td>
								<td>{{ formatPrice(Financials[0].grossProfit) }}</td>
								<td>{{ formatPrice(Financials[1].grossProfit) }}</td>
								<td>{{ formatPrice(Financials[2].grossProfit) }}</td>
								<td>{{ formatPrice(Financials[3].grossProfit) }}</td>
							</tr>
							<tr>
								<td colspan="5"><strong>Operating Expenses</strong></td>
							</tr>
							<tr>
								<td>Research and Development</td>
								<td>{{ formatPrice(Financials[0].researchAndDevelopmentExpenses) }}</td>
								<td>{{ formatPrice(Financials[1].researchAndDevelopmentExpenses) }}</td>
								<td>{{ formatPrice(Financials[2].researchAndDevelopmentExpenses) }}</td>
								<td>{{ formatPrice(Financials[3].researchAndDevelopmentExpenses) }}</td>
							</tr>
							<tr>
								<td>Sales, General and Admin.</td>
								<td>{{ formatPrice(Financials[0].generalAndAdministrativeExpenses) }}</td>
								<td>{{ formatPrice(Financials[1].generalAndAdministrativeExpenses) }}</td>
								<td>{{ formatPrice(Financials[2].generalAndAdministrativeExpenses) }}</td>
								<td>{{ formatPrice(Financials[3].generalAndAdministrativeExpenses) }}</td>
							</tr>
							<tr>
								<td colspan="5"><strong>Operating Income</strong></td>
							</tr>
							<tr>
								<td>Operating Income</td>
								<td>{{ formatPrice(Financials[0].operatingIncome) }}</td>
								<td>{{ formatPrice(Financials[1].operatingIncome) }}</td>
								<td>{{ formatPrice(Financials[2].operatingIncome) }}</td>
								<td>{{ formatPrice(Financials[3].operatingIncome) }}</td>
							</tr>
							<tr>
								<td>Earnings Before Interest and Tax</td>
								<td>{{ formatPrice(Financials[0].incomeBeforeTax) }}</td>
								<td>{{ formatPrice(Financials[1].incomeBeforeTax) }}</td>
								<td>{{ formatPrice(Financials[2].incomeBeforeTax) }}</td>
								<td>{{ formatPrice(Financials[3].incomeBeforeTax) }}</td>
							</tr>
							<tr>
								<td>Income Tax</td>
								<td>{{ formatPrice(Financials[0].incomeTaxExpense) }}</td>
								<td>{{ formatPrice(Financials[1].incomeTaxExpense) }}</td>
								<td>{{ formatPrice(Financials[2].incomeTaxExpense) }}</td>
								<td>{{ formatPrice(Financials[3].incomeTaxExpense) }}</td>
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
			Financials:Object,
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
			formatPrice(value) {
					if(value == null ) return '';
					
					let val = (value/1).toFixed(2).replace('.', ',')
					return '$' + val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
				}			
        },
		created() {
			console.log(this.dividendHistory);
		}
    }
</script>