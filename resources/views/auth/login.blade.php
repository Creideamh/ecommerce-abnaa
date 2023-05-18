{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}

<x-guest-layout>

    	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Login</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Login</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- Contact section -->
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 contact-info">
					<h3>Join Us</h3>
					<p><a href="{{ route('password.request') }}">Forgotten Password</a></p>
					<div class="contact-social">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
                    <x-validation-errors class="mb-4 text-red-600" />
					<form class="contact-form" method="POST" action="{{  route('login') }}">
                        @csrf
						<input type="text" placeholder="Your e-mail" name="email" :value="old('email')">
						<input type="text" placeholder="**************" name="password" >
						<button type="submit" class="site-btn">LOGIN NOW</button>                       
                    </form>
				</div>
                <div class="col-lg-6 contact-info">
                    <img src="{{ asset('assets/img/reg_image.jpg') }}" alt="">
                </div>
			</div>
		</div>
        <section class="related-product-section spad">

        </section>
	</section>
	<!-- Contact section end -->
	<!-- Related product section -->

	<!-- Related product section end -->
</x-guest-layout>