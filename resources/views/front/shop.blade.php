@extends('layouts.home')

@section('content')
<link rel="stylesheet" href="css/shop.css">
<div id="Shop">

	<section class="section-intro" style="padding-top: 90px">
		<div class="content-intro bg-white p-t-77 p-b-133">
			<div class="container">
				<div class="header-intro">
					
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div v-for="row in gallery" class="col-md-3 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a v-bind:href="'{{route('product_detail')}}?id='+ row.id"><img v-bind:src="row.img"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a v-bind:href="'{{route('product_detail')}}?id='+ row.id"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									@{{row.title}}
								</h4></a>

								<p class="m-b-20">
									<span v-if="localStorage.lang == 'Eng'">
										@{{row.desc_eng.substring(0,50)+"..."}}
									</span>
									<span v-else>
										@{{row.desc.substring(0,50)+"..."}}
										
									</span>
								</p>
								<center>
								<a v-bind:href="'{{route('product_detail')}}?id='+ row.id" class="txt4">
									<u>More Detail</u>
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
								</center>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>


</div>
@endsection
@section('more_js')
<script>
var Shop = new Vue({
    el: '#Shop',
    data: {
        gallery:[]

    },
    methods: {
    },
    created: function () {
          axios.get("{{route('product_front')}}")
        .then(function (data) {
            Shop.gallery = data.data.data;
        });
    },
    mounted: function () {  
    },
    updated: function () {
    },
    watch: {

    }
})
</script>
@endsection

	



	
