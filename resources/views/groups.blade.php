@extends('layouts.master')

@section('title')
@endsection

@section('content')

    <table class="table mt-lg-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Time</th>
            <th scope="col">Room</th>
            <th scope="col">Teacher</th>
            <th scope="col">total<br /> students</th>
        </tr>
        </thead>
        <tbody>
         @foreach($group as $group)
             <tr>
                 <td>{{$group->id}}</td>
                 <td>{{$group->time}}</td>
                 <td>{{$group->room}}</td>
                 <td>{{$group->id}}</td>
                 <td>{{}}</td>
             </tr>
        </tbody>
        @endforeach
    </table>

@endsection
