@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Knowledge</div>

                    <div class="panel-body">
                        <meta name="csrf-token" content="{{ csrf_token() }}"/>
                        <form>
                            <div class="form-group">
                                <label for="exampleTextarea">You learn today</label>
                                <textarea class="form-control" id="learn" name="learn" rows="20">{{ $learning_today }}</textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('after_scripts')
    <script type="text/javascript">
        $("#learn").on('change keyup paste', function() {
            update_learn();
        });

        function update_learn() {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "POST",
                url: '{{ URL::route('learn.save') }}',
                data: {
                    learn: $('textarea#learn').val(),
                    _token: CSRF_TOKEN
                },
                success: function (data, status)
                {
                    console.warn('success');
                },
                error: function (xhr, desc, err)
                {
                    console.log("error");
                }
            });
        }
    </script>
@endsection
