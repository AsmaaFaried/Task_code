@extends('layouts.app')
@section('content')


<div class="cont">
<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Post</h2>

        </div>

      
    </div>

</div>

   

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

   

<form action="{{ route('posts.store') }}" method="POST">

    @csrf

  

     <div class="row">

     

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Content:</strong>

                <textarea class="form-control" style="height:150px" name="content" placeholder="Write a post..."></textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center m-3">
                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center m-3">

            <a class="btn btn-danger" href="{{ route('posts.index') }}"> Back</a>

        </div>


    </div>

   

</form>
</div>
@endsection