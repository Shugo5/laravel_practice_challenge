@extends('layouts.app')

@section('content')

@include('common.errors')


{{--
{{ $answers->count() }}現在のページのアイテム数
{{ $answers->currentPage() }}現在のページ数
{{ $answers->firstItem() }}現在ページの最初のアイテムが何番目か取得
{{ $answers->lastItem() }}現在ページの最後のアイテムが何番目か取得
{{ $answers->total() }}データ領域にある、条件に一致するアイテムの総数
--}}

{{ $answers->firstItem() }}〜{{ $answers->lastItem() }}件/全{{ $answers->total() }}件中
{{ $answers->links() }}

@if (count($answers) > 0)

    {{-- 上の条件を満たせば、以下を表示する --}}
    <div class="container-fuild">
        <div class="row bg-info">
            <div class="col-sm-2">ID</div>
            <div class="col-sm-2">名前</div>
            <div class="col-sm-2">性別</div>
            <div class="col-sm-2">年代</div>
            <div class="col-sm-3">内容</div>
            <div class="col-sm-1"></div>
        </div>
        @foreach ($answers as $answer)
        <div class="row">
            <div class="col-sm-2">{{ $answer->id }}</div>
            <div class="col-sm-2">{{ $answer->fullname }}</div>
            <div class="col-sm-2">
            @switch($answer->gender)
                @case(1)
                    男性
                    @break
                @case(2)
                    女性
                    @break
                @default
                    どっち？
            @endswitch
            </div>
            <div class="col-sm-2">
                @switch($answer->age_id)
                    @case(1)
                        10代以下
                        @break
                    @case(2)
                        20代
                        @break
                    @case(3)
                        30代
                        @break
                    @case(4)
                        40代
                        @break
                    @case(5)
                        50代
                        @break
                    @case(6)
                        60代
                        @break
                    @default
                        どれ？
                @endswitch
            </div>
            <div class="col-sm-3">
            <?php
                $text = $answer->feedback;
                $limit = 20;

                if(mb_strlen($text) > $limit) {
                $title = mb_substr($text,0,$limit);
                echo $title.'･･･' ;
                } else {
                echo $text;
                } ?>
            </div>
            <div class="col-sm-1"><button>詳細</button></div>
        </div>
        @endforeach
    </div>
@endif

@endsection
