@extends('layouts.hotel')

@section('body')
    <table>
        <th>お名前</th><th>ご住所</th><th>電話番号</th>
        @foreach ($guests as $guest)
            <tr>
                <td>{{$guest->name}}</td>
                <td>{{$guest->address}}</td>
                <td>{{$guest->tel}}</td>
            </tr>
        @endforeach
    </table>
@endsection

<style>
    
</style>