@extends('layouts.master')

@section('content')

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <span class="font-weight-bold">{{Auth()->user()->name}}</span><span class="text-black-50">{{Auth()->user()->email}}</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Настройки профиля</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Имя</label><input type="text" class="form-control" placeholder="Имя" value=""></div>
                        <div class="col-md-6"><label class="labels">Фамилия</label><input type="text" class="form-control" value="" placeholder="Фамилия"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Номер телефона</label><input type="text" class="form-control" placeholder="введите номер телефона" value=""></div>
                        <div class="col-md-12"><label class="labels"></label>Должность<input type="text" class="form-control" placeholder="Должность" value=""></div>
                        <div class="col-md-12"><label class="labels">Часы работы</label><input type="text" class="form-control" placeholder="Часы работы по договору" value=""></div>
                        <div class="col-md-12"><label class="labels">Место работы</label><input type="text" class="form-control" placeholder="Филлиал" value=""></div>
                        <div class="col-md-12"><label class="labels">Время и дни работы</label><input type="text" class="form-control" placeholder="Время и дни работы" value=""></div>
                    </div>
                    @foreach($users as $user)
                        <tr>
                            <td>
                                {{ $user->id }}
                            </td>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                {{ $user->phone }}
                            </td>
                            <td>
                                {{ $user->course }}
                            </td>
                            <td>
                                {{ $user->time }}
                            </td>
                            <td>
                                <a href="/employ/{{ $user->id }}" class="btn btn-success">EDIT</a>
                            </td>
                            <td>
                                <form action="/employ/{{ $user->id }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                </form>
                            </td>
                        </tr>

                    @endforeach


            </div>
    </div>
@endsection
