@extends('layouts.home')

@section('content')


	<!-- Slide1 -->

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" v-for="(row, index) in slideshow" :data-slide-to="row.id" v-bind:class="index==0 ? 'active' : '' "></li>
		</ol>
		<div class="carousel-inner">
			<div v-for="(row,index) in slideshow" v-bind:class="index==0 ? 'carousel-item active' : 'carousel-item' " >
				<img class="d-block full_img"  v-bind:src="row.img" alt="First slide">
			</div>			  
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		
	</div>
	<section class="section-intro">
		<div class="content-intro bg-white p-t-77 p-b-133">
			<div class="container">
				<div class="header-intro">
					<h3>
						<u>Models.</u>
					</h3>
				</div>
			</div>
			<div class="container">
				
				<div class="main-content">
				
					<div class="owl-carousel owl-theme">
						@foreach($models as $row)
							<div class="item" >
								<!-- Block1 -->
								<div class="blo1">
									<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
										<a href="{{route('models_detail')}}?id={{$row->id}}"><img src="{{asset('/public/images/models/'.$row->img)}}"></a>
									</div>

									<div class="wrap-text-blo1 p-t-35">
										<a href="{{route('models_detail')}}?id={{$row->id}}"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
											{{$row->title}}
										</h4></a>

										<p class="m-b-20">
											<!-- <span v-if="localStorage.lang == 'Eng'">
												
												{{$row->desc_eng}}
												
											</span>
											<span v-else>
												
												{{$row->desc}}
												
											</span> -->
											<span v-if="localStorage.lang == 'Eng'">
													{{substr($row->desc_eng, 0, 60) . '...'}}
												</span>
												<span v-else>

													
													{{substr($row->desc, 0, 60) . '...'}}
												</span>
										</p>
										<center>
										<a href="{{route('models_detail')}}?id={{$row->id}}" class="txt4">
											<u>More Detail</u>
											<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
										</a>
										</center>
									</div>
								</div>
							</div>
						@endforeach
					
					</div>
					<div class="owl-theme">
						<div class="owl-controls">
							<div class="custom-nav owl-nav"></div>
						</div>
					</div>
				</div>		

					

			</div>
		
		</div>
	</section>
	<div v-for="row in why_us" :class="'container-fluid'+ row.bg">
		<div class="row">
			<div class="col-md-6 ">
				<div class="container">
				<h4 class="whyimage">@{{row.title}}</h4>	
				<h2 class="c1">@{{row.title_number}}</h2>
				<h5 class="c2">@{{row.title_desc}}</h5>
				<p class="c3">
					<span v-if="localStorage.lang == 'Eng'">
						@{{row.desc_eng}}
					</span>
					<span v-else>
						@{{row.desc}}
						
					</span>
				</p>
				<p class="c4">
					<a href="#" style="color: #d2a2a2 !important;">Learn More...</a></p>
				</div>
			</div>
			<div class="col-md-6">
				<img v-bind:src="row.img" alt="" class="img-fluid">					
			</div>
			
		</div>
	</div>
		

		
	<section class="more-benefit" >
		

		<div class="content-intro bg-white p-t-77 p-b-60" style="background-color: #efe5dc!important;">
			<div class="container">
				<div class="header-intro">
					<h3>
						<u>More Benefit.</u>
					</h3>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-3 p-t-10" v-for="row in binefit">
						<!-- Block1 -->
						<div class="blo1">
							<center>
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom1">
								<a href="#"><img v-bind:src="row.img"></a>
							</div>
							</center>
							<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13" style="color:#ECB0AE;">
									@{{row.title}}
								</h4></a>
								<p class="m-b-20">
									<span v-if="localStorage.lang == 'Eng'">
										@{{row.desc_eng}}
									</span>
									<span v-else>
										@{{row.desc}}
										
									</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

		<section class="more-benefit">
			

			<div class="content-intro bg-white p-t-77 p-b-60">
				<div class="container">
					<div class="header-intro">
						<h3>
							<u>Past Project.</u>
						</h3>
					</div>
				</div>
				<div class="container">
					<div class="main-content">
						<div class="owl-carousel owl-theme">
							@foreach($project as $row)
								<div class="item" >
									<!-- Block1 -->
									<div class="blo1">
										<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
											<a href="#"><img src="{{asset('/public/images/project/'.$row->img)}}"></a>
										</div>
										<div class="wrap-text-blo1 p-t-35">
											<a href="#"><h4 class="txt51 color0-hov trans-0-4 m-b-13">
												{{$row->title}}
											</h4></a>
											<p class="m-b-20">
												<span v-if="localStorage.lang == 'Eng'">
													{{$row->desc_eng}}
												</span>
												<span v-else>
												{{$row->desc}}

												</span>
											</p>
											
										</div>
									</div>
								</div>
							@endforeach
						</div>	
						<div class="owl-theme">
							<div class="owl-controls">
								<div class="custom-nav owl-nav"></div>
							</div>
						</div>		

					</div>
				</div>
			</div>
		</section>
		

		
		

	
@endsection
@section('more_js')
<script >
var Index = new Vue({
    el: '#Index',
    data: {
        slideshow:[],
        product:[],
        why_us:[],
        binefit:[],
        project:[]

    },
    methods: {
    },
    created: function () {
        // get slideshow
        axios.get("{{ route('slideshow_front')}}")
        .then(function (data) {
            Index.slideshow = data.data.data;
        });

        axios.get("{{route('product_front')}}")
        .then(function (data) {
            Index.product = data.data.data;
        });

        axios.get("{{route('why_us_front')}}")
        .then(function (data) {
            Index.why_us = data.data.data;
        });

        axios.get("{{route('binefit_front')}}")
        .then(function (data) {
            Index.binefit = data.data.data;
        });
        axios.get("{{route('project_front')}}")
        .then(function (data) {
            Index.project = data.data.data;
        });
    },
    mounted: function () {  
    },
    updated: function () {
    },
    watch: {

    }
});


</script>
@endsection
