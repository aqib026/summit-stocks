<template>
      <div class="row">
				<div class="col-md-6">
					<table class="table table-striped">
						<tr>
							<td>Previous Close</td>
							<td><strong>{{ SummaryData.previousClose}}</strong></td>
						</tr>
						<tr>
							<td>Open</td>
							<td><strong>{{ SummaryData.open}}</strong></td>
						</tr>
						<tr>
							<td>Day's Range</td>
							<td><strong>{{ SummaryData.dayLow}} - {{ SummaryData.dayHigh}}</strong></td>
						</tr>
						<tr>
							<td>52 Week Range</td>
							<td><strong>{{ SummaryData.yearLow}} - {{ SummaryData.yearHigh}}</strong></td>
						</tr>
						<tr>
							<td>Volume</td>
							<td><strong>{{ SummaryData.volume }}</strong></td>
						</tr>
						<tr>
							<td>Avg. Volume</td>
							<td><strong>{{ SummaryData.avgVolume}}</strong></td>
						</tr>
					</table>
				</div>
				<div class="col-md-6">
					<table class="table table-striped">
						<tr>
							<td>Market Cap</td>
							<td><strong>{{ SummaryData.marketCap}}</strong></td>
						</tr>
						<tr>
							<td>EPS (TTM)</td>
							<td><strong>{{ RoundMe(SummaryData.eps) }}</strong></td>
						</tr>
						<tr>
							<td>PE Ratio (TTM)</td>
							<td><strong>{{ RoundMe(SummaryData.pe) }}</strong></td>
						</tr>
						<tr>
							<td>Avg. Volume</td>
							<td><strong>{{ SummaryData.avgVolume}}</strong></td>
						</tr>
					</table>
				</div>
      </div>
  </template>

<script>

export default {
  props: {
			SummaryData: Object,
  },
  data() {
    return {
    };
  },
  methods: {
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
  mounted() {},
};
</script>
