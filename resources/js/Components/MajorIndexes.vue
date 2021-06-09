<template>
    <section class="section bg-color-primary border-0 m-0">
      <div class="container container-lg-custom">
        <div class="row">
          <div class="col-md-12">
              <ul>
                <li class="major-index-box" v-for="(mi,index) in majorIndexes" :key="index">
                  <p class="title">{{mi.name}}</p>
                  <p class="price">{{ mi.price }} 
                    <span :class="{ red: mi.change < 0 , green: mi.change >= 0}">&nbsp;&nbsp;&nbsp;( {{ mi.change }} )</span>                    
                  </p>
                </li>
              </ul>
          </div>
        </div>
      </div>
    </section>  
</template>
<style scoped>
  .section{ padding :10px;}
  .major-index-box{ background-color: #fff; display: block; float: left; width: 200px; height: 80px; margin: 0px 5px; text-align: center;
                    border-radius: 5px;}
  .title{ color:#0088CD; font-weight: 700; font-size: 18px;margin-top: 2px;}
  .price{ color:#000; font-weight: 700; font-size: 18px;margin-top: 2px; display: block;}
  .red{ color: red;} .green{color:green}
</style>
<script>
import HeaderComponent from '../Components/Header.vue'

export default {
  data() {
    return {
      majorIndexes:[]
    };
  },
  methods: {
    getMajorIndexes(){
      axios
        .get("/api/major-indexes")
        .then(({ data }) => {
            this.majorIndexes = data;     
            console.log(this.majorIndexes);           
            }
        );
    },
    RoundMe(val){
      if(val != null)
        return val.toFixed(3)
      else
        return '';
    }
  },
  mounted() {},
  created() {
    this.getMajorIndexes();
  }
};
</script>
