@extends('layouts.app')

@section('content')
        <div class="row">
                @foreach($decks as $deck)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h3>{{ $deck->name }}</h3>
                                <hr/>
                                <a href="/deck/{{ $deck->id }}" class="btn btn-primary">Show me this Deck!!</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

@endsection
