@extends('layouts.app')

@section('content')

    <div class="container p-10" style="width: 800px">
        {!! $output['receipt']['html_content']  !!}

    </div>
@stop
