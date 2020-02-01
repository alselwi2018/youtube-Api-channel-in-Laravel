@extends("welcome")
@section('content')
<div class="col-sm-12 text-center p-6"> show youtube channel
</div>
<div class="p-4">
    {!! Form::open(['class'=>['action'=>'#','method'=>'post']]) !!}
    {!! Form::text('youtube', '', ['class'=>'form-control','id'=>'search','placeholder'=>'search for a video']) !!}
    <div class="text-center pt-4">
    {!! Form::submit('Search', ['class'=>'btn btn-primary p-2']) !!}
    </div>
    {!! Form::close() !!}
</div>

<div id="res" class="pt-3"></div>
@endsection
