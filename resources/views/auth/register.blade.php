@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container is-max-desktop">
    <!-- This container has a <code>max-width</code> of <code>$desktop - $container-offset</code> on widescreen and fullhd. -->
    <form class="box" action="{{route('register')}}" method="post">
        @csrf
        <h1 class="text-center is-size-1">Welcome to Ooda</h1>
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" name="name" type="text" placeholder="Tech Bishop" required>
                    @error('name')
                        <span role="alert">
                            <strong class="has-text-danger">{{ $message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                <input class="input" name="email" type="email" placeholder="e.g. alex@example.com" required>
                    @error('email')
                        <span role="alert">
                            <strong class="has-text-danger">{{ $message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
    
            <div class="field">
                <label class="label">Password</label>
                <div class="control">
                <input class="input" type="password" name="password" placeholder="********" required>
                    @error('password')
                        <span role="alert">
                            <strong class="has-text-danger">{{ $message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label">Confirm Password</label>
                <div class="control">
                <input class="input" type="password" name="password_confirmation" placeholder="********" required>
                    @error('password_confirmation')
                        <span role="alert">
                            <strong class="has-text-danger">{{ $message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label">Account Type</label>
                    <div class="select">
                        <select name="accountType" id="accountType" required>
                            <option value="" active>Select account type</option>
                            <option value="user">User</option>
                            <option value="merchant">Merchant</option>
                        </select>
                    </div>
            </div>
            <div class="field">
            <label class="checkbox">
                <input type="checkbox" required>
                I agree to the <a href="#">terms and conditions</a>
            </label>
            </div>
    
      <button class="button is-primary is-medium is-outlined">Sign Up</button>
    </form>
</div>
@endsection
