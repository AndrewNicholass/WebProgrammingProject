<div class="d-flex flex-row gap-5">
    @foreach ($authors as $item)
        <div class="d-flex flex-column" style="width: 18rem;">
            <a href="{{ route('writerDetailPage', $item->id) }}">
                <img src="{{ asset('images/'.$item->photo) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    {{-- {{ date('d M Y', strtotime($item->posted_date)) }} | by : {{ strstr($item->author->name, ' ', true )}} --}}
                    <p class="card-text">{{ $item->specialist }}</p>
                    {{-- <a href="#" class="btn btn-primary">Read More...</a> --}}
                </div>
            </a>
        </div>
    @endforeach

</div>


