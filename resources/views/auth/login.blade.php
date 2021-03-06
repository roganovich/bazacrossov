@extends('layouts.app')

@section('content')
    <section class="hero is-light is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">{{ __('auth.login.submit') }}</h3>
                    <div class="box">
                        <form id="login" method="POST" action="{{ route('auth.login.post') }}">
                            @include('partials.admin.errors')
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" value="{{ old('email') ?? '' }}" type="email" name="email" placeholder="{{ __('auth.login.email') }}" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="password" name="password" placeholder="{{ __('auth.login.password') }}">
                                </div>
                            </div>
                            <div class="field">
                                <label class="checkbox">
                                    <input type="checkbox" name="remember" value="1" checked> {{ __('auth.login.remember') }}
                                </label>
                            </div>
                            <div class="control">
                                <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
                                <button type="submit" class="button is-info is-fullwidth is-large">{{ __('auth.login.submit') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

