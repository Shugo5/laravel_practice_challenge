@extends('layouts.app')

@section('content')

@include('common.errors')

{{-- ページネーションを一旦保留。
<div class="container">
    @foreach ($answers as $answer)
        {{ $answer->fullname }}
    @endforeach
</div>

{{ $answers->links() }}  --}}

@if (count($answers) > 0)
    {{-- 上の条件を満たせば、以下を表示する --}}
    <div class="container-fuild">
        <div class="row bg-info">
            <div class="col-sm-2">施設名</div>
            <div class="col-sm-3">開始時刻</div>
            <div class="col-sm-3">終了時刻</div>
            <div class="col-sm-1">人数:大人</div>
        </div>
    @foreach ($answers as $answer)
        <div class="row space">
            <div class="col-sm-2">{{ $answer->fullname }}</div>
            <div class="col-sm-3">{{ $answer->gender }}</div>
            <div class="col-sm-3">{{ $answer->age_id }}</div>
            <div class="col-sm-1">{{ $answer->email }}</div>
        </div>
    @endforeach
    </div>
@endif

@endsection
