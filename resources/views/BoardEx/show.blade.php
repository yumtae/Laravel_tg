@extends('BoardEx.layout')

@section('content')
    <h2 class="mt-4 mb-3">boardEx View: {{$boardEx->name}}</h2>
    <p style="text-align: right" class="pt-2">{{$boardEx->created_at}}</p>

    <div class="content mt-4 rounded-3 border border-secondary">
        <div class="p-3">
            {{$boardEx->content}}
        </div>
    </div>
@endsection