@extends('layouts.main')

@section('title', 'LOGIN')

@section('content')


<section>

    <div class="row mt-4">
        <div class="col">
            <h1 style="text-align: center;">Login</h1>
            <hr class="mt-4">
        </div>
    </div>

    <div class="row mt-0">

        <div class="col">

            <div class="card mt-2" style="width: 50%; margin-left: 25%;">
                <div class="card-body" style="background-color:rgb(226, 220, 220) ;">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <span for="email" value="{{ __('Email') }}" class="input-group-text" id="basic-addon1">@</span>
                            <input id="email" type="email" name="email" :value="old('email')" required autofocus class="form-control" placeholder="Digite seu e-mail" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1" for="password" value="{{ __('Password') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                                </svg>
                            </span>

                            <input id="password" type="password" name="password" required autocomplete="current-password" class="form-control" placeholder="Digite a senha" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <label for="remember_me" class="flex items-center text-dark">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600">{{ __('Relembre-me') }}</span>
                            </label>
                        </div>

                        <div>

                        </div>

                        <button class="btn btn-light" style="margin-left: 40%;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                            </svg>
                            {{ __('Log in') }}</button>

                    </form>

                </div>

                <div class="footer" style="background-color:rgba(226, 220, 220, 0.301) ;height: 30px;">
                    <a href="/register" class="link-success mx-3">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                        </svg>
                        Cadastre-se</a>

                    @if (Route::has('password.request'))
                    <a class=" link-secondary" href="{{ route('password.request') }}">
                        {{ __('Esqueceu a senha?') }}
                    </a>
                    @endif

                </div>
            </div>
        </div>
    </div>

</section>




@endsection