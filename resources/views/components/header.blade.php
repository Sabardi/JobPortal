@foreach ($locations as $location)
    <li><a class="text-decoration-none" href="{{ route('get.job.location', [$location, $location->name]) }}">{{ $location->name }}</a></li>
@endforeach
