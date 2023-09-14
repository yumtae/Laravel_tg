@extends('BoardEx.layout')
@section('content')
    <h2 class="mt-4 mb-3">boardEx Edit</h2>

    {{-- 유효성 검사에 걸렸을 경우 --}}
    @if ($errors->any())
        <div class="alert alert-warning" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('BoardEx.update',$boardEx)}}" method="post">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" autocomplete="off" value="{{$boardEx->name}}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea rows="10" cols="40" name="content" class="form-control" id="name" autocomplete="off">{{$boardEx->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{route("BoardEx.index")}}">
            <button type="button" class="btn btn-primary">Cancel</button>
        </a>
    </form>
@endsection