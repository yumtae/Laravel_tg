@extends('BoardEx.layout')


{{-- 아래 html 을 @yield('content')로 보냄 --}}
@section('content')

<h2 class="mt-4 mb-3">Board List</h2>

<a href="{{route("BoardEx.create")}}">
    <button type="button" class="btn btn-dark" style="float: right;">Create</button>
</a>


<table class="table table-striped table-hover">
    <colgroup>
        <col width="15%"/>
        <col width="55%"/>
        <col width="15%"/>
        <col width="15%"/>
    </colgroup>
    <thead>
    <tr>
        <th scope="col">Number</th>
        <th scope="col">Name</th>
        <th scope="col">Created At</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    {{-- blade 에서는 아래 방식으로 반복문을 처리합니다. --}}
    {{-- Product Controller의 index에서 넘긴 $BoardEx(product 데이터 리스트)를 출력해줍니다. --}}



        @foreach ($BoardList as $key => $BoardVal)
            <tr>
                <th scope="row">{{$BoardVal->id}}</th>
                <td><a href="{{route("BoardEx.show", $BoardVal->id)}}">{{$BoardVal->name}}</a></td>
                <td>{{$BoardVal->created_at}}</td>
                <td>  <a href="{{route("BoardEx.edit", $BoardVal)}}">Edit</a>
                        / <a href="{{route("BoardEx.destroy", $BoardVal)}}"> Delete</a></td>
            </tr>
        @endforeach


    </tbody>
</table>

{{-- 라라벨 기본 지원 페이지네이션 --}}
{!! $BoardList->links() !!}


@endsection



