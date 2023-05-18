<div>
    <div class="page-top-info">
		<div class="container">
			<h4>Categories</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Edit Category</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- Contact section -->
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 contact-info">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="header-title pull-left">Create Category</h3>
                            <a href="{{ route('admin.categories') }}" class="pull-right">All Catories</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    @if (Session::has('message'))
                                        <div class="alert alert-success">
                                            {{ Session::get('message') }}
                                        </div>
                                    @endif
                                    <form wire:submit.prevent="updateCategory" method="post" class="form-horizontal">
                                        @csrf
                                        <div class="form-group">
                                            <label for="Name" class="col-md-4 control-label">Name</label>
                                            <div class="col-md-12">
                                                <input type="text" wire:model="name" id="category_name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="category_description" class="col-md-6 control-label">Category Description</label>
                                            <div class="col-md-12">
                                                <textarea  id="description" wire:model="description"  wire:keyup="generateDescription" cols="30" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <button class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
                {{-- <div class="col-lg-6 contact-info">
                    <img src="{{ asset('assets/img/reg_image.jpg') }}" alt="">
                </div> --}}
			</div>
		</div>
        <section class="related-product-section spad">

        </section>
	</section></div>
