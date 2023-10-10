@extends('app')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 CRUD (Create, Read, Update and Delete) with Image Upload</h2>
            </div>
            <br><br>
            <h3>Recomendo que trabalhe ou use apenas um Id para nao ter problemas nas paginas de noticias</h3>
            <br><br>
            <div class="pull-right" style="margin-bottom:50px;">
           <!-- <a class="btn btn-success" href="{{ url('create2') }}"> Create New Product</a> -->
            </div>
        </div>
    </div>
     
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Details</th>
            <th width="300px">Action</th>
        </tr>
        @foreach ($product2s as $product2)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/images/{{ $product2->image }}" width="100px"></td>
            <td>{{ $product2->name }}</td>
            <td>{{ $product2->detail }}</td>
            <td>
                <form action="{{ route('destroy2',$product2->id) }}" method="POST">
      
                    <a class="btn btn-info" href="{{ route('show2',$product2->id) }}">Show</a>
       
                    <a class="btn btn-primary" href="{{ route('edit2',$product2->id) }}">Edit</a>
      
                    @csrf
                    @method('DELETE')
         
                    <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                </form>
            </td>
        </tr>
        @endforeach
    </table>
     
    {!! $product2s->links() !!}
 
@endsection