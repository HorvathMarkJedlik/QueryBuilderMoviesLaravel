<x-layout>
    <div class="container mt-5">
        <h1 class="display-4 text-center mb-4">Search Movies</h1>
        
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Find Your Favorite Movie</h5>
                        <form method="POST" action="{{ route('movies.process.search') }}">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="title" class="form-label">Movie Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter movie title" value="{{ old('title') }}">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
