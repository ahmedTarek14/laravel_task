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
                <td>{{$row->id}}</td>
                <td>{{$row->title}}</td>
                <td>{{$row->post_by}}</td>
                <td>{{$row->posted_at}}</td>
                <td> <a class="btn btn-primary" href="{{route("posts.show",$row->id)}}">Show</a> </td>
                <td> <buutton class="btn btn-danger" onclick="if (confirm('Are you sure you want to delete?')) {
                    document.getElementById('delete-form-{{ $row->id}}').submit();
                }">Delete</buutton> </td>

                <form id="delete-form-{{ $row->id}}" action="{{ route('posts.destroy', $row->id) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            {{-- {{dd($row)}} --}}
                <td> <a class="btn btn-info" href="{{route("posts.edit",$row->id)}}">Edit</a> </td>
            </tr>
        @endforeach
</table>
{!! $rows->withQueryString()->links('pagination::bootstrap-5') !!}
@endsection