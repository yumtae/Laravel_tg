@include('user._layouts.common_css')
<!DOCTYPE html>
<html>
<head>
    <meta name="_token" content="{{csrf_token()}}"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h4 class="pt-4">Laravel Image Archive</h4>


    <div class="container" class="pt-4">
        <div class="row">
            <div class="col-12">
                <table class="table table-image">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Created At</th>
                        <th scope="col">
                            <a href="{{route('image.create')}}">
                                <button class="btn btn-primary btn-xs">Create</button>
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                         $number = ($lists->currentPage() -1) * $lists->perPage()
                    @endphp
                    @foreach($lists as $key => $list)
                        <tr>
                            <td scope="row">{{$key + 1 + $number }}</td>
                            <td>{{$list->origin_name}}</td>
                            <td class="w-25">
                                <img src="{{asset($list->path)}}" class="img-fluid img-thumbnail"
                                     alt="{{$list->origin_name}}">
                            </td>
                            <td>{{$list->created_at}}</td>
                            <td>
                                <form action="{{route('image.destroy',$list->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="page" value="{{$lists->currentPage()}}">
                                    <input onclick="return confirm('정말로 삭제하겠습니까?')" type="submit" value="delete"/>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $lists->links() !!}
            </div>
        </div>
    </div>
</body>
</html>