@extends('layouts.app')
@section('content')
<div class="content">
        <div class="title m-b-md">
            update
        </div>
            <form class="" action="/updateinsertaction" method="post">
                @csrf
                 <input type="hidden" class="btn"  name="id" value="{{ $salles->id }}">
                <div class="form-group">
                    <label for="exampleInputSerie1">Name salles</label>
                    <input required type="text" class="form-control" name="title" value="{{ $salles->name}}">
                </div>
                <div class="input-group mb-3">
                </div>
                 <div class="input-group mb-3">
                <button type="submit" class="btn btn-primary" name="" value="Insert">insert</button>
                </div>
            </form>
</div>
