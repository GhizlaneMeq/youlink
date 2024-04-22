@extends('layouts.book')

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="card">
                    <div class="card-header bg-dark text-white">Create Found Item</div>

                    <div class="card-body bg-dark text-white">
                        <form method="POST" action="{{ route('user.storeFoundItem') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input id="title" type="text"
                                    class="form-control @error('title') is-invalid @enderror" name="title" required
                                    autofocus>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="picture">Picture</label>
                                <input id="picture" type="file"
                                    class="form-control-file @error('picture') is-invalid @enderror" name="picture"
                                    required>
                                @error('picture')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required></textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="category">Category</label>
                                <input id="category" type="text"
                                    class="form-control @error('category') is-invalid @enderror" name="category">
                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="location">Location</label>
                                <input id="location" type="text"
                                    class="form-control @error('location') is-invalid @enderror" name="location" required>
                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="dateFound">Date Found</label>
                                <input id="dateFound" type="date"
                                    class="form-control @error('dateFound') is-invalid @enderror" name="dateFound" required>
                                @error('dateFound')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Create Found Item</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
