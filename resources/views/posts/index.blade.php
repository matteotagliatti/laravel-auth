@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Text</th>
                    <th scope="col">Created</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        {{-- @dd($post) --}}
                        <td><a href="#">{{ $post->title }}</a></td>
                        <td>{{ $post->author }}</td>
                        <td>{{ Str::of($post->text)->limit(40, '...') }}</td>
                        <td>{{ $post->created_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No posts to show</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection