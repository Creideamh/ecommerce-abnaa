<div>
    <style>
        nav svg {
            height: 20px;
        }
        nav .hidden {
            display: block !important;
        }
    </style>
	<div class="page-top-info">
		<div class="container">
			<h4>Categories</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="{{ route('admin.categories') }}">All Categories</a>
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
                            <h3 class="header-title pull-left">Categories</h3>
                            <a href="{{ route('admin.add.category') }}"  class="pull-right"><i class="flaticon-add"></i></a>
                        </div>
                        <div class="card-body">
                            @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">
                                        {{ Session::get('message') }}
                                </div>
                            @endif
                            <table class="table-striped col-md-12">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category) 
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->description }}</td>
                                            <td>
                                                <a href="#" wire:click.prevent="deleteCategory({{ $category->id }})" ><i class="flaticon-garbage text-danger"></i></a>
                                                <a href="{{ route('admin.edit.category', ['category_id' => $category->id ]) }}"><i class="flaticon-file text-success"></i></a>
                                                <a href="#"><i class="flaticon-info"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{  $categories->links() }}
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
	</section>
	<!-- Contact section end -->
	<!-- Related product section --></div>
