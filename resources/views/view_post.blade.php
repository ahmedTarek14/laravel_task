@extends("app")

@section("table")
<table class="table">
<tr>
    <th>
        ID
    </th>

    <th>
        Title
    </th>

    <th>
        Post By
    </th>

    <th>
        Date
    </th>

    <th>
        Actions
    </th>
</tr>

@foreach($rows as $row )
            <tr>
                <td>{{$row->product_id}}</td>
                <td>{{$row->title}}</td>
                <td>{{$row->post_by}}</td>
                <td>{{$row->date}}</td>
                <td> <a class="btn btn-primary" href="{{route("posts.show",$row->product_id)}}">Show</a> </td>
                <td> <buutton class="btn btn-danger" onclick="if (confirm('Are you sure you want to delete?')) {
                    document.getElementById('delete-form-{{ $row->product_id}}').submit();
                }">Delete</buutton> </td>

                <form id="delete-form-{{ $row->product_id}}" action="{{ route('posts.delete', $row->product_id) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
                <td> <a class="btn btn-info" href="#">Edit</a> </td>
            </tr>
        @endforeach
</table>
@endsection