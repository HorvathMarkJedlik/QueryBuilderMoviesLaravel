<x-layout>
    <h1 class="text-center">Add new movie</h1>
    <form action="{{route('movies.update', $movie->id)}}" method="POST">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label class="form-label" for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter movie title" value="{{$movie->title}}">
            @error('title')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label class="form-label" for="director">Director</label>
            <input type="text" class="form-control @error('director') is-invalid @enderror" id="director" name="director" placeholder="Enter director's name" value="{{$movie->director}}">
            @error('director')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label class="form-label" for="release_year">Release Year</label>
            <input type="number" class="form-control @error('release_year') is-invalid @enderror" id="release_year" name="release_year" placeholder="Enter release year" value="{{$movie->release_year}}">
            @error('release_year')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label class="form-label" for="rating">Rating</label>
            <input type="number" step="0.1" class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating" placeholder="Enter movie rating (0-10)" value="{{$movie->rating}}">
            @error('rating')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
    
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg px-5">Submit</button>
        </div>
    </form>
    
</x-layout>