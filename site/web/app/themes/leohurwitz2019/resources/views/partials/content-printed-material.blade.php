<div class="row">
@foreach ($data['materials'] as $material)
        <div class="col-md-4">
            <h2>{{ $material['title'] }}</h2>
            <p>{{ $material['subtitle'] }}</p>
            <a class="btn" target="_blank" href="{{ $material['file'] }}">Download</a>
        </div>
        @endforeach
</div>