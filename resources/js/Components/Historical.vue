<template>
      <div class="row">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Date</th>
              <th>Open</th>
              <th>High</th>	
              <th>Low</th>	
              <th>Close*</th>	
              <th>Adj Close**</th> 
              <th>Volume</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(hd,index) in HistoricalFetchedData.historical" :key="index">
              <td>{{ hd.date}}</td>
              <td>{{ hd.open}}</td>
              <td>{{ hd.high}}</td>
              <td>{{ hd.low}}</td>
              <td>{{ hd.close}}</td>
              <td>{{ hd.adjClose}}</td>
              <td>{{ hd.volume}}</td>
            </tr>
          </tbody>
        </table>
	    </div>
  </template>
<script>

export default {
  props:{
    symbol:String,
  },
  data() {
    return {
      HistoricalFetchedData:Object,
    };
  },
  methods: {
  },
  mounted() {
				axios
					.get("/api/"+this.symbol+"/history")
					.then(({ data }) => {
						this.HistoricalFetchedData = data;		
						
						}
					);

  },
};
</script>
