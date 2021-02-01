@extends('layouts.app')

@section('content')

    <h1>id = {{ $work->id }} のタスク詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $work->id }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $work->status }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $work->content }}</td>
        </tr>
    </table>
    
    {{-- メッセージ編集ページへのリンク --}}
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['task' => $work->id], ['class' => 'btn btn-light']) !!}
    
    {{-- メッセージ削除フォーム --}}
    {!! Form::model($work, ['route' => ['tasks.destroy', $work->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection