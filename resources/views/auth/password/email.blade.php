@extends('layouts.app')
    <div class="login-form">
        <form method="POST" action="/forget-password">
            @csrf
            <div class="text-center">
                <a href="index.html" aria-label="Space">
                    <img class="mb-3 logo-image" src="assets/style_login/image/Ahmed.jpeg" alt="Logo" width="60" height="60">
                </a>
            </div>
            <div class="text-center mb-4">
                <h1 class="h3 mb-0">Recover account</h1>
                <p>Enter your email address and an email with instructions will be sent to you.</p>
            </div>

            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif

            <div class="js-form-message mb-3">
                <div class="js-focus-state input-group form">
                <div class="input-group-prepend form__prepend">
                    <span class="input-group-text form__text">
                    <i class="fa fa-user form__text-inner"></i>
                    </span>
                </div>
                <input type="email" class="form-control form__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="Email" autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>

            <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary login-btn btn-block">Recover account</button>
            </div>

            <div class="text-center mb-3">
                <p class="text-muted">Have an account? <a href="{{route('register')}}">Signin</a></p>
            </div>
            <p class="small text-center text-muted mb-0">All rights reserved. © Space. 2020 soengsouy.com.</p>
        </form>
    </div>