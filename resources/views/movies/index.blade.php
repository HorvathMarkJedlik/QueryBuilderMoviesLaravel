<x-layout>
    <h1 class="text-center mb-4">Movies</h1>
    <div class="row ">
        @foreach ($movies as $movie)
        <div class="col-md-3 mb-3">
            <div class="card h-100 shadow-lg">
                <div class="card-header bg-primary text-white text-center" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <h4 class="card-title">{{ $movie->title }}</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <b>Director:</b> 
                        <span class="badge bg-info text-black fs-6">{{ $movie->director }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <b>Release year:</b> 
                        <span class="badge bg-success text-white fs-6">{{ $movie->release_year }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <b>IMDB Rating:</b> 
                        <span class="badge bg-warning text-dark fs-7">{{ $movie->rating }}</span>
                    </li>
                </ul>
            </div>
        </div>        
        @endforeach
    </div>
</x-layout>
