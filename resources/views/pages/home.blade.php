@extends('layouts.main-layout')

@section('content')
    
    <h1>People</h1>

    <ul>
        @foreach ($people as $person)
            <li>
                {{ $person -> name }} - {{ $person -> mail }}

                @if ($person -> posts -> count() > 0)
                    <h3>Posts: {{ $person -> posts -> count() }}</h3>
                    <ul>
                        @foreach ($person -> posts as $post)
                            <li>
                                <b>{{ $post -> title}}</b>
                                <div>
                                    {{ $post -> body }}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>

@endsection