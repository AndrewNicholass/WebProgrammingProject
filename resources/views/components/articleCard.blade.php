<div class="d-flex flex-row gap-5">
    @foreach ($articles as $item)
        <div class="d-flex flex-column" style="width: 18rem;">
            <img src="{{ asset('images/'.$item->photo) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $item->title }}</h5>
                {{ date('d M Y', strtotime($item->posted_date)) }} | by : {{ strstr($item->author->name, ' ', true )}}
                <p class="card-text">{{ substr($item->description, 0, 150) }}</p>
                <a href="{{ route('articleDetailPage', $item->id) }}" class="btn btn-primary">Read More...</a>
            </div>
        </div>
    @endforeach

</div>
