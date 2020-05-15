@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100 m-b-100">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Log In</h1>
                <div class="field">
                    <label for="email" class="label">Email Address</label>
                    <p class="control">
                        <input class="input" type="text" name="email" id="email" placeholder="name@example.com">
                    </p>
                </div>
                <div class="field">
                    <label for="password" class="label">Password</label>
                    <p class="control">
                        <input class="input" type="password" name="password" id="password">
                    </p>
                </div>

                <label class="checkbox">
                    <input type="checkbox">
                    Remember me
                </label>

                <button class="button is-primary is-outlined is-fullwidth m-t-30">Log In</button>
            </div>
        </div>
    </div>
</div>

@endsection
