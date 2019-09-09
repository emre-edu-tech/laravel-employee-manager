@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    User Profile
                </div>
                <div class="card-body d-flex">
                    <img class="profile-image-page mr-md-3" src="{{ (isset(Auth::user()->github_id)) ? (Auth::user()->avatar) : (asset('images/avatars/' . Auth::user()->avatar)) }}" alt="{{ Auth::user()->name}}">
                    <table class="table">
                        <tr>
                            <td>Name</td>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <td>Created Date</td>
                            <td>{{ Auth::user()->created_at->format('m/d/Y') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
