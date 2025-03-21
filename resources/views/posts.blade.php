@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Posts</div>

                    <div class="card-body">
                        <div id="notification"></div>
                        @if (!auth()->user()->is_admin)
                            <form class="mb-3" method="POST" action="{{ route('posts.store') }}">
                                @csrf
                                <div class="mt-2">
                                    <label for="">Title:</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                                <div class="mt-2">
                                    <label for="">Body:</label>
                                    <textarea name="body" class="form-control"></textarea>
                                </div>
                                <div class="mt-2">
                                    <button class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Body</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->body }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @if (auth()->user()->is_admin)
        <script type="module">
            window.Echo.channel('posts').
            listen('.create', (e) => {
                console.log(e);
                var d1 = document.getElementById('notification');
                d1.insertAdjacentHTML('beforeend', '<div class="alert alert-success">' + e.message + '</div>')
            });
        </script>
    @endif
@endsection
