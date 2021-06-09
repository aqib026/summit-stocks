<template>
	<MainSideBar>
		<div class="row">
		<div class="col-md-3">
			<LeftSideBar :symbol="symbol" />
		</div>
		<div class="col-md-9">

				<div class="col" v-for="pressRelease in pressReleases" :key="pressRelease.id">
					<h4>{{ pressRelease.title }} <br /><br /></h4>
					<blockquote>
						<p>{{ pressRelease.text }}</p>
						<footer>Published Date <cite title="Source Title">{{ pressRelease.date  }}</cite></footer>
					</blockquote>
					<hr class="solid my-5">
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
			pressReleases:Object,
			Profile:Object,
        },
	
        data() {
            return {

            }
        },
        computed:{

            },
        methods: {

        },
		created() {
			
		}
    }
</script>