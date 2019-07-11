@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   <p><a href="/posts/create" class="btn btn-primary">Create Post</a></p>
                   <h3>Your Blog Posts</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
