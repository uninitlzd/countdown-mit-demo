@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  @if($user->exam_status == 0)
                    <a href={{ route('start-exam') }} class="btn btn-default">Start Exam</a>
                  @else
                    You're done.
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
