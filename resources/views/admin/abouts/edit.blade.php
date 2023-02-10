@extends('layouts.master')

@section('title')
    About Us Edit
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">About Us - Edit Data</h4>
                    <form action="{{ url('abouts/'.$aboutus->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="modal-body">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Title:</label>
                                <input type="text" name="title" class="form-control" value="{{ $aboutus->title }}">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Sub-Title:</label>
                                <input type="text" name="subtitle" class="form-control" value="{{ $aboutus->subtitle }}">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Description:</label>
                                <textarea name="description" class="form-control" rows="6" cols="5">{{ $aboutus->description }}</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{url('abouts')}}" class="btn btn-secondary">BACK</a>
                            <button type="submit" class="btn btn-primary">UPDATE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
