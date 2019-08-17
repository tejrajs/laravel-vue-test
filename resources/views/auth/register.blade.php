@extends('layouts.app') @section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<form method="POST" action="{{ route('register') }}">
						@csrf

						<!-- <div class="form-group row">
							<label for="name" class="col-form-label text-md-right">{{
								__('Name') }}</label> <input id="name" type="text"
								class="form-control @error('name') is-invalid @enderror"
								name="name" value="{{ old('name') }}" required
								autocomplete="name" autofocus> @error('name') <span
								class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
							</span> @enderror
						</div> -->
						<input type="hidden" name="name" value="test">
						<div class="form-group row">
							<label for="email" class="col-form-label text-md-right">{{
								__('Username') }}</label> <input id="email" type="email"
								class="form-control @error('email') is-invalid @enderror"
								name="email" value="{{ old('email') }}" required
								autocomplete="email"> @error('email') <span
								class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
							</span> @enderror
						</div>

						<div class="form-group row">
							<label for="password"
								class="col-form-label text-md-right">{{ __('Password')
								}}</label> <input id="password" type="password"
								class="form-control @error('password') is-invalid @enderror"
								name="password" required autocomplete="new-password">

							@error('password') <span class="invalid-feedback" role="alert"> <strong>{{
									$message }}</strong>
							</span> @enderror
						</div>

						<div class="form-group row">
							<label for="password-confirm"
								class="col-form-label text-md-right">{{ __('Confirm
								Password') }}</label> <input id="password-confirm"
								type="password" class="form-control"
								name="password_confirmation" required
								autocomplete="new-password">
						</div>

						<div class="form-group row mb-0">
							<button type="submit" class="btn btn-primary btn-block">{{ __('Register')
								}}</button>
						</div>
						<br>
						<div class="form-group row mb-0">
							<a href="{{url('/redirect')}}" class="btn btn-primary btn-block">Login with
								Facebook</a>
						</div>
						
						<div class="form-group row mb-0">
							Already have an account? <a href="{{url('/login')}}" >Sign In</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
