@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>taxi2</h2>
            </div>
            <div class="pull-right" style="margin-bottom:10px;"><a class="btn btn-success" href="{{ url('create') }}">create new car</a></div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-borderd">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Version</th>
            <th>category</th>
            <th>Details</th>
            <th>Price</th>
            <th>Available</th>
            <th width="280px">Action</th>

        </tr>
        @foreach($cars as $car)
        <tr>
            <td>{{++$i}}</td>
            <td><img src="/images/{{$car->image}}" width="100px"></td>
            <td>{{$car->name}}</td>
            <td>{{$car->version}}</td>
            <td>{{$car->category}}</td>
            <td>{{$car->detail}}</td>
            <td>{{$car->price}}</td>
            <td>{{$car->availablecheck}}</td>
            <td>
            <form action="{{ route('destroy',$car->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('show',$car->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('edit',$car->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $cars->links() !!}
@endsection
