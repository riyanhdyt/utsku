@extends('template_blog.content')
	
@section('isi')
<div class="col-md-8 hot-post-left">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{ asset('public/frontend/img/blog1.jpg')}}" alt="" style = "width: 890px"></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Gaya Hidup</a>
							</div>
							<h3 class="post-title title-lg"><a href="blog-post.html">if silence is gold.</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">Rayn</a></li>
								<li>2020 November 25</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{ asset('public/frontend/img/blog-2.jpg')}}" alt="" style="width: 410px"></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Gaya Hidup</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">nothing is completely white.</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">rynhdyt</a></li>
								<li>2020 August 02</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{ asset('public/frontend/img/blogg3.jpg')}}" alt="" style="width: 430px"></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Gaya Hidup</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">life about you and the time that continues to be.</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">Fatimah</a></li>
								<li>2020 August 26</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
	
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">New Post</h2>
							</div>
						</div>
						<!-- post -->
						@foreach($data as $post_terbaru)
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{ route('blog.isi', $post_terbaru->slug ) }}"><img src="{{ $post_terbaru->gambar }}" alt="" style="height: 200px"></a>
								<div class="post-body">
									<div class="post-category">
										<a href="#">{{ $post_terbaru->category->name }}</a>
									</div>
									<h3 class="post-title"><a href="#">{{ $post_terbaru->judul }}</a></h3>
									<ul class="post-meta">
										<li><a href="#">{{ $post_terbaru->users->name }}</a></li>
										<li>{{ $post_terbaru->created_at->diffForHumans() }}</li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
			
					</div>
					<!-- /row -->

	
				</div>
				
		
		
			<!-- /row -->
@endsection




