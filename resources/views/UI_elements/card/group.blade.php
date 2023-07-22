@extends('welcome')
@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h3 class="page-title">Group Box</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Box Cards</li>
								<li class="breadcrumb-item active" aria-current="page">Group Box</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">	

			  <div class="col-12">			
				<div class="card">
				  <div class="card-header">
					<h4 class="card-title">Grid cards</h4>
				  </div>
				</div>
			  </div>	

			<!--card deck!-->
			<div class="col-12 mb-20">
				<div class="row row-cols-1 row-cols-lg-3 g-4">
					<div class="col">
						<div class="card h-p100">
							<img class="card-img-top" src="../images/gallery/thumb/4.jpg" alt="card image cap">
							<div class="card-body">
							  <h4 class="card-title b-0 px-0">Card title</h4>
							  <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							</div>
						    <div class="card-footer justify-content-between d-flex">
								<span class="text-muted">Last updated 3 mins ago</span>
								<span>
									<i class="fa fa-star text-warning"></i>
									<i class="fa fa-star text-warning"></i>
									<i class="fa fa-star text-warning"></i>
									<i class="fa fa-star text-warning"></i>
									<i class="fa fa-star-half text-warning"></i>
									<span class="text-muted ms-2">(12)</span>
								</span>
						    </div>
						</div>
					</div>
					<div class="col">
						<div class="card h-p100">
							<img class="card-img-top" src="../images/gallery/thumb/5.jpg" alt="card image cap">
							<div class="card-body">
							  <h4 class="card-title b-0 px-0">Card title</h4>
							  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
							</div>
						    <div class="card-footer justify-content-between d-flex">
								<span class="text-muted">Last updated 3 mins ago</span>
								<span>
									<i class="fa fa-star text-warning"></i>
									<i class="fa fa-star text-warning"></i>
									<i class="fa fa-star text-warning"></i>
									<i class="fa fa-star text-warning"></i>
									<i class="fa fa-star-half text-warning"></i>
									<span class="text-muted ms-2">(12)</span>
								</span>
						    </div>
					    </div>
					</div>
					<div class="col">
						<div class="card h-p100">
							<img class="card-img-top" src="../images/gallery/thumb/6.jpg" alt="card image cap">
							<div class="card-body">
							  <h4 class="card-title b-0 px-0">Card title</h4>
							  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
							</div>
						    <div class="card-footer justify-content-between d-flex">
								<span class="text-muted">Last updated 3 mins ago</span>
								<span>
									<i class="fa fa-star text-warning"></i>
									<i class="fa fa-star text-warning"></i>
									<i class="fa fa-star text-warning"></i>
									<i class="fa fa-star text-warning"></i>
									<i class="fa fa-star-half text-warning"></i>
									<span class="text-muted ms-2">(12)</span>
								</span>
						    </div>
						</div>
					</div>
				</div>
			</div>

			  <div class="col-12">		
				<div class="card">
				  <div class="card-header">
					<h4 class="card-title">Group
						<p class="subtitle fs-14 mb-0">Use card groups to render cards as a single, attached element with equal width and height columns.</p>
					</h4>
				  </div>
				</div>
			  </div>

			<!--card group!-->
			<div class="col-12">
				<div class="card-group">
				  <div class="card">
					<img class="card-img-top" src="../images/gallery/thumb/1.jpg" alt="card image cap">
					<div class="card-body">
					  <h4 class="card-title b-0 px-0">Card title</h4>
					  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					</div>
					  <div class="card-footer justify-content-between d-flex">
						<span class="text-muted">Last updated 3 mins ago</span>
						<span>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star-half text-warning"></i>
							<span class="text-muted ms-2">(12)</span>
						</span>
					  </div>
				  </div>

				  <div class="card">
					<img class="card-img-top" src="../images/gallery/thumb/2.jpg" alt="card image cap">
					<div class="card-body">
					  <h4 class="card-title b-0 px-0">Card title</h4>
					  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					</div>
					  <div class="card-footer justify-content-between d-flex">
						<span class="text-muted">Last updated 3 mins ago</span>
						<span>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star-half text-warning"></i>
							<span class="text-muted ms-2">(12)</span>
						</span>
					  </div>
				  </div>

				  <div class="card">
					<img class="card-img-top" src="../images/gallery/thumb/3.jpg" alt="card image cap">
					<div class="card-body">
					  <h4 class="card-title b-0 px-0">Card title</h4>
					  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					</div>
					  <div class="card-footer justify-content-between d-flex">
						<span class="text-muted">Last updated 3 mins ago</span>
						<span>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star-half text-warning"></i>
							<span class="text-muted ms-2">(12)</span>
						</span>
					  </div>
				  </div>
				</div>	
			</div>


			  <div class="col-12">	
				<div class="card">
				  <div class="card-header">
					<h4 class="card-title">Columns
						<p class="subtitle fs-14 mb-0">ards can be organized into Masonry-like columns with just CSS by wrapping them in <code>.card-columns</code>. cards are ordered from top to bottom and left to right when wrapped in <code>.card-columns</code>.</p>
					</h4>
				  </div>
				</div>
			  </div>	
			<!--card columns!-->
			<div class="col-12">
				<div class="card-columns">
				  <div class="card">
					<img class="card-img-top" src="../images/gallery/thumb/7.jpg" alt="card image cap">
					<div class="card-body">
					  <h4 class="card-title b-0 px-0">card title that wraps to a new line, but not in the large screens</h4>
					  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					</div>
					  <div class="card-footer justify-content-between d-flex">
						<span class="text-muted">Last updated 3 mins ago</span>
						<span>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star-half text-warning"></i>
							<span class="text-muted ms-2">(12)</span>
						</span>
					  </div>
				  </div>

				  <div class="card card-body">
					<blockquote class="card-bodyquote">
					  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					  <footer class="text-muted">
						  Someone famous in <cite title="Source Title">Source Title</cite>
					  </footer>
					</blockquote>
				  </div>

				  <div class="card">
					<div class="card-body text-center">
					  <h4 class="card-title b-0 px-0">Card title</h4>
					  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					</div>
					<img class="card-img" src="../images/gallery/thumb/8.jpg" alt="card image cap">
				  <div class="card-footer d-flex justify-content-between">
					<span class="fs-14 text-muted">Nov 12, 11:25 am</span>
					<span class="fs-14  text-muted">Due in 12 days</span>
				  </div>
				  </div>

				  <div class="card card-body card-inverse card-primary text-center">
					<blockquote class="card-bodyquote">
					  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					  <footer>
						<small>
						  Someone famous in <cite title="Source Title">Source Title</cite>
						</small>
					  </footer>
					</blockquote>
				  </div>

				  <div class="card">
					<img class="card-img" src="../images/gallery/thumb/9.jpg" alt="card image">
					  <div class="card-footer">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Add comment...">
							<button class="btn bg-info btn-sm" type="button"><i class="fa fa-send-o"></i></button>
						</div>
					  </div>
				  </div>

				  <div class="card card-body text-end">
					<blockquote class="card-bodyquote">
					  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					  <footer>
						<small>
						  Someone famous in <cite title="Source Title">Source Title</cite>
						</small>
					  </footer>
					</blockquote>
				  </div>

				  <div class="card">
					<div class="card-body">
					<h4 class="card-title b-0 px-0 pt-0">card title</h4>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				  </div>
					<div class="card-footer d-flex justify-content-between">
						<a href="#" class="text-default"><i class="fa fa-commenting-o"></i> Comment</a>
						<span class="text-muted"><i class="fa fa-eye"></i> 673</span>
					</div>
				  </div>
				</div>	
			  </div>	
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
@endsection