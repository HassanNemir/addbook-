@extends('layouts.addBook')
@section('sub')Records
    @endsection
@section('content')
<table id="views" >
    <thead>
    <tr>
        <td>
Name        </td>

        <td>
Phone        </td>

        <td>
Address
        </td>

        <td>
            Modify
        </td>

        <td>
Delete        </td>


    </tr>
    </thead>
    <tbody>
@foreach($record as $rec)

    <tr>
        <td>
            {{$rec->name}}
        </td>

        <td>
             {{$rec->number}}
        </td>

        <td>
            {{$rec->address}}
        </td>

        <td>
            <a href="/modify/{{$rec->id}}">Modify</a>
        </td>

        <td>
            <a href="/delete/{{$rec->id}}">Delete</a>
        </td>
    </tr>

    @endforeach
    </tbody>
</table>
@endsection