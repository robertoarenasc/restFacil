@extends('welcome')
@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h3 class="page-title">Basic Box</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Box Cards</li>
								<li class="breadcrumb-item active" aria-current="page">Basic Box</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-body">
					<p>Basic Box without header</p>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-body">
					  <h4 class="box-title">Box Title</h4>
					<p><code>h4.box-title</code></p>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-body">
					<h4 class="box-title">Box Title <strong>size</strong></h4>
					<p><code>h1.box-title</code>
					<code>h2.box-title</code>
					<code>h3.box-title</code>
					<code>h4.box-title</code>
					<code>h5.box-title</code></p>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">			  
				  <div class="box-header with-border">
					<h4 class="box-title">Box Title in <strong>header</strong></h4>
				  </div>
				  <div class="box-body">
					<p><code>.box-header &gt; .box-title</code></p>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-header without-border">
					<h4 class="box-title">Box Header without<strong> divider</strong></h4>
				  </div>
				  <div class="box-body">
					<p><code>.box-header  .without-border</code></p>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui..</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title box-title-bold">Bold Title</h4>
				  </div>
				  <div class="box-body">
					<p><code>.box-title-bold</code></p>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">Title and <strong>description</strong> <small>More description</small></h4>
				  </div>
				  <div class="box-body">
					<p><code>.box-title  &lt;small&gt;description&lt;/small&gt;</code></p>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">Title and <strong>sidetitle</strong> <small class="sidetitle">More description</small></h4>
				  </div>
				  <div class="box-body">
					<p><code>.sidetitle</code></p>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">Title and <strong>subtitle</strong> <small class="subtitle">More description below the box title</small></h4>
				  </div>
				  <div class="box-body">
					<p><code>.subtitle</code></p>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box box-bordered border-primary">
				  <div class="box-header with-border">
					<h4 class="box-title"><strong>Bordered</strong> box</h4>
				  </div>
				  <div class="box-body">
					<p><code>.box-bordered</code></p>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box box-shadowed">
				  <div class="box-header with-border">
					<h4 class="box-title"><strong>Shadowed</strong> box</h4>
				  </div>
				  <div class="box-body">
					<p><code>.box-shadowed</code></p>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box box-hover-shadow no-shadow">
				  <div class="box-header with-border">
					<h4 class="box-title"><strong>Shadow</strong> on hover box</h4>
				  </div>
				  <div class="box-body">
					<p><code>.box-hover-shadow</code></p>
					<p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box box-transparent no-shadow">
				  <div class="box-header with-border">
					<h4 class="box-title"><strong>Transparent</strong> box</h4>
				  </div>
				  <div class="box-body">
					<p><code>.box-transparent</code></p>
					<p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">Box <strong>footer</strong></h4>
				  </div>
				  <div class="box-body">
					<p><code>div.box-footer</code></p>
					<p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
				  </div>
				  <div class="box-footer">
					<p>A footer for more content inside</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">Box <strong>footer</strong></h4>
				  </div>
				  <div class="box-body">
					<p><code>div.box-footer</code></p>
					<p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
				  </div>
				  <div class="box-footer">
					<button class="btn btn-primary">Submit</button>
					<button class="btn btn-secondary">Cancel</button>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">Box <strong>footer</strong></h4>
				  </div>
				  <div class="box-body">
					<p><code>div.box-footer</code></p>
					<p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
				  </div>
				  <div class="box-footer text-end">
					<button class="btn btn-primary">Submit</button>
					<button class="btn btn-secondary">Cancel</button>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">Box <strong>footer</strong></h4>
				  </div>
				  <div class="box-body">
					<p><code>div.box-footer</code></p>
					<p>Atque corrupti quos dolores et quas molestias excepturi sint occaecati.</p>
				  </div>
				  <div class="box-footer text-end p-0">
					<button class="btn btn-primary"><i class="ti-check"></i></button>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">Box <strong>footer</strong></h4>
				  </div>
				  <div class="box-body">
					<p><code>div.box-footer</code></p>
					<p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
				  </div>
				  <div class="box-footer flexbox">					 
					  <input type="checkbox" id="basic_checkbox_1">
					  <label for="basic_checkbox_1">Save as draft</label>
					<div class="text-end flex-grow">
					  <button class="btn btn-sm btn-primary">Submit</button>
					  <button class="btn btn-sm btn-secondary">Cancel</button>
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