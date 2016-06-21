@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">
            <div class="cd-wrapper text-center">
              <div id="countdown">

              </div>
            </div>
            <div class="panel panel-default page-1" data-page=1>
                <div class="panel-heading text-center">Question 1</div>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                <div class="panel-body text-center text-left">

                </div>
            </div>
            <div class="panel panel-default page-2" style="display: none" data-page=2>
                <div class="panel-heading text-center">Question 2</div>

                <div class="panel-body text-center text-left">

                </div>
            </div>
            <div class="panel panel-default page-3" style="display: none" data-page=3>
                <div class="panel-heading text-center">Question 3</div>

                <div class="panel-body text-center text-left">

                </div>
            </div>
            <div class="panel panel-default page-4" style="display: none" data-page=3>
                <div class="panel-heading text-center">Question 4</div>

                <div class="panel-body text-center text-left">

                </div>
            </div>
            <div class="panel panel-default page-5" style="display: none" data-page=3>
                <div class="panel-heading text-center">Question 5</div>

                <div class="panel-body text-center text-left">

                </div>
            </div>
            <div class="panel panel-default page-6" style="display: none" data-page=3>
                <div class="panel-heading text-center">Question 6</div>

                <div class="panel-body text-center text-left">

                </div>
            </div>
            <div class="panel panel-default page-7" style="display: none" data-page=3>
                <div class="panel-heading text-center">Question 7</div>

                <div class="panel-body text-center text-left">

                </div>
            </div>
            <div class="panel panel-default page-8" style="display: none" data-page=3>
                <div class="panel-heading text-center">Question 8</div>

                <div class="panel-body text-center text-left">

                </div>
            </div>
            <div class="panel panel-default page-9" style="display: none" data-page=3>
                <div class="panel-heading text-center">Question 9</div>

                <div class="panel-body text-center text-left">

                </div>
            </div>

            <div class="btn-group" role="group" aria-label="...">
              <button type="button" id="prev-button" class="btn btn-default">Previous</button>
              <button type="button" id="next-button" class="btn btn-default">Next</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js-more')
<script type="text/javascript" src="{{ asset('js/jquery.countdown.min.js') }}">
</script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}">
</script>
<script type="text/javascript" src={{ asset('js/store.min.js') }}>
</script>
<script type="text/javascript" src={{ asset('js/main.js') }}>
</script>
@endsection
