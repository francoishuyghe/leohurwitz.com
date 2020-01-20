@foreach ($data['materials'] as $material)
    <div class="row">
        <div class="col-md-6">
            <h3>{{ $material['title'] }}</h3>
            <p>{{ $material['subtitle'] }}</p>
        </div>
        <div class="col-md-6">
            <a class="btn" target="_blank" href="{{ $material['file'] }}">Download</a>
        </div>
    </div>
@endforeach