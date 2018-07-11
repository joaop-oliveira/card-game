@extends('layouts.app')

@section('content')

        {{--     <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div> --}}
            <div class="row">
                @foreach($subjects as $subject)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h3>{{ $subject->name }}</h3>
                                <hr/>
                                <a href="/subject/{{ $subject->id }}" class="btn btn-primary">Show me this Deck!!</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
