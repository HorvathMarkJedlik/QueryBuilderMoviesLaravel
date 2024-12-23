<x-layout>
    <div class="container mt-5">

        <h1 class="display-4 text-center mb-4 text-primary">{{$movie->title}}</h1>

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg border-info">
                    <div class="card-body">
                        <h5 class="card-title text-info">Movie Details</h5>

                        <div class="list-group mb-3">
                            <p class="list-group-item"><strong>Director:</strong> {{$movie->director}}</p>
                            <p class="list-group-item"><strong>Release Year:</strong> {{$movie->release_year}}</p>
                            <p class="list-group-item"><strong>Rating:</strong> {{$movie->rating}}</p>
                        </div>


                        <div class="d-flex justify-content-around">
                            <a href="{{route('movies.edit', $movie->id)}}" class="btn btn-warning btn-lg px-4 py-2 shadow-sm">
                                <i class="fas fa-edit"></i> Edit Movie
                            </a>

                            <form action="{{route('movies.destroy', $movie->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-lg px-4 py-2 shadow-sm">
                                    <i class="fas fa-trash"></i> Delete Movie
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
