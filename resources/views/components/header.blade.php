@foreach ($locations as $location)
    <li><a href="{{ route('get.job.location', [$location, $location->name]) }}">{{ $location->name }}</a></li>
@endforeach
