@extends('layouts.app')
@section('content')
<div class="content">
    <div class="title m-b-md">
        List all salles
    </div>
    <table class="table table-bordered table-sm">
        <thead class="thead-light">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Postions</th>
            <th scope="col">Statu</th>
            <th scope="col">Delete</th>
            <th scope="col">Update</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($salle as $value)
             <tr>
                <td>{{ $salle->name}}</td>
                <td>
                    @foreach ($salle->name as $name)
                        
                    @endforeach
                </td>
                <td>                
                    @foreach ($salle->position as $position)
                        {{ $salle->position }}</br>           
                    @endforeach
            </td>
                <td>{{ $salle->statu}}</td>
                <td>
                    <form class="" action="/deleteserie" method="post">
                    @csrf
                        <div class="form-group">
                            <input type="hidden" class="btn"  name="id" value="{{ $salle->id }}">
                            <input type="submit" class="btn  btn-danger" name="" value="X">
                     </form>
                </td>
                <td>
                    <form class="" action="/update" method="post">
                    @csrf
                        <div class="form-group">
                            <input type="hidden" class="btn"  name="id" value="{{ $salle->id }}">
                            <input type="submit" class="btn  btn-info" name="" value="U">
                     </form>
                </td>
            @endforeach
        </tr>
    </tbody>
    </table>
</div>
@endsection