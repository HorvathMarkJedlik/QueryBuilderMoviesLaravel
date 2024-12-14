<x-layout>
    <h1>Movies</h1>
    <div class="row ">
        @foreach ($movies as $movie)
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $movie->director }}</li>
                        <li class="list-group-item">{{ $movie->release_year }}</li>
                        <li class="list-group-item">{{ $movie->rating }} </li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
