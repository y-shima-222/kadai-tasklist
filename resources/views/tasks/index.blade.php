@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    
        @if (count($works) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>ステータス</th>
                        <th>タスク</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($works as $work)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $work->id, ['task' => $work->id]) !!}</td>
                        <td>{{ $work->status }}</td>
                        <td>{{ $work->content }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        
        {{-- メッセージ作成ページへのリンク --}}
        {!! link_to_route('tasks.create', '新規タスクの投稿', [], ['class' => 'btn btn-primary']) !!}

@endsection