@extends('layouts.app')

@section ('title', 'Movies | Home')

@section ('main')

<main>
    <div class="row">
    @foreach ($movies as $item)

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $item['title']}}</h4>
                <p class="card-text">Original Title: {{$item['original_title']}}</p>
                <p class="card-text">Nationality: {{$item['nationality']}}</p>
                <p class="card-text">Date: {{$item['date']}}</p>
                <p class="card-text">Vote: {{$item['vote']}}</p>
            </div>
        </div>

    @endforeach
    </div>
</main>
@endsection