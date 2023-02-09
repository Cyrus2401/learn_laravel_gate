@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    @can('isAdmin')
                        <h4 class="text-center">Hello Admin !</h4>
                    @endcan

                    @can('isUser')
                        <h4 class="text-center">Hello User !</h4>
                    @endcan

                    @can('isEditor')
                        <h4 class="text-center">Hello Editor !</h4>
                    @endcan

                    <h1>Posts</h1>
                    <a href="{{ route('post.index') }}" class="btn btn-success">See Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection