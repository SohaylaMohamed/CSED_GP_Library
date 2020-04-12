@extends('layouts.app')

@section('content')
    <div class="container" style="padding: 10px">
        <h3 style="padding-bottom: 10px">Insert new Comment</h3>
        <div style=" padding: 20px; border: 1px solid #ff7236 ;border-radius: 10px;">
            <form method="POST" action="{{route('comments/{{$id\}\}/create')}}">
                @csrf
                <label for="body">Comment content</label>
                <br>
                <br>
                <div class="container" style="margin-left:100px">
                    <textarea id="body" name= "body" style="width: 500px;height: 200px"></textarea>
                    <br>
                    <br>
                    <input type="submit">
                </div>

            </form>
        </div>

    </div>

@endsection
