@extends('layouts.app')

@section('after_styles')
    <!--    MAIN CSSS FOR KNOWLEDGE-->
    <link rel="stylesheet" href="sass/knowledge/knowledge.css"/>
@endsection

@section('content')
    <div class="row container">
        <div class="col-md-6 editor_container">
            <meta name="csrf-token" content="{{ csrf_token() }}"/>
            <div class="form-group">
                <label for="exampleTextarea">You learn today</label>
                <div class="form-control" id="learn" name="learn" >{{ $learning_today }}</div>
            </div>
        </div>
        <div class="col-md-6">

        </div>
    </div>
@endsection
@section('after_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ace.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ext-beautify.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ext-textarea.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/theme-tomorrow_night_blue.js"></script>
    <script type="text/javascript">
        //SET ACE EDITOR
        var editor = ace.edit("learn");

        editor.setOptions({
            maxLines: 40
        });
        editor.setTheme("ace/theme/tomorrow_night_blue");
        var beautify = ace.require("ace/ext/beautify"); // get reference to extension
        beautify.beautify(editor.session);
        //--------------------------------------------------------------------------------------------------------------
        // MAIN CONFIGURATION
        $("#learn").on('change keyup paste', function() {
            update_learn();
        });

        function update_learn() {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "POST",
                url: '{{ URL::route('learn.save') }}',
                data: {
                    learn: editor.getValue(),
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
