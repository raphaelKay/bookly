<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="antialiased">
    	<!-- header -->
    	<div class="">
    		<header class="wrapper flex items-center justify-between">
    			<a href="{{ route('home') }}" class="py-2 font-medium text-xl uppercase">{{ config('app.name', 'Bookly') }}</a>
				@if (Route::has('login'))
				<nav class="text-sm flex items-center justify-end gap-4">
					@auth
					<a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
					<form method="POST" action="{{ route('logout') }}">
					    @csrf
					    <button type="submit">
					        {{ __('Log Out') }}
					    </button>
					</form>
					@else
					<a href="{{ route('login') }}" class="">Sign In</a>

	                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="">Get Started</a>
	                @endif
					@endauth
				</nav>
				@endif
    		</header>
    	</div>

    	<!-- search for bookmark -->
    	<!-- add a new bookmark -->

    	{{ $slot }}

    	<div class="">
    		<footer class="wrapper text-sm flex items-center justify-between py-4">
    			<div class="">
    				<p class="text-sm">&copy; {{ date('Y') }} {{ config('app.name', 'Bookly') }}. All Rights Reserved.</p>
    			</div>

    			<div class="flex items-center gap-4">
    				<a href="">Privacy</a>
    				<a href="">Terms</a>
    				<a href="">Contact</a>
    			</div>
    		</footer>
    	</div>

        @persist('toast')
            <flux:toast.group>
                <flux:toast />
            </flux:toast.group>
        @endpersist

        @fluxScripts
    </body>
</html>