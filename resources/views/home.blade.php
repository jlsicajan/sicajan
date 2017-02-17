@extends('layouts.app')
@section('after_styles')
    <link href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome!</div>

                <div class="panel-body">
                    <div class="col-xs-6">
                        <br><br>
                        <meta name="csrf-token" content="{{ csrf_token() }}"/>
                        <form action="#" autocomplete="off" method="POST" id="form_semester">
                            <div class="form-group">
                                <label for="semester">SEMESTER</label>
                                <input type="text" class="form-control" name="semester" id="semester" required/>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Guardar"/>
                        </form>
                    </div>
                    <div class="col-xs-6">
                        <table id="semester_datatable" class="table table-hover table-condensed">
                            <thead>
                            <tr>
                                <th>Name</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('after_scripts')
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js" charset="UTF-8"></script>
    <script>
        $(document).ready(function () {
            oTable = $('#semester_datatable').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('datatable.semesters') }}",
                "columns": [
                    {data: 'name', name: 'name'},
                ]
            });
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $('#form_semester').on('submit', function (e) {
                $.ajax({
                    type: "POST",
                    url: '{{ URL::route('save.semester.data') }}',
                    data: {
                        name: $('input#semester').val(),
                        _token: CSRF_TOKEN
                    },
                    success: function (data) {
                        alert(data['message']);
                        $('#form_semester').trigger("reset");
                        oTable.ajax.reload(null, false);
                    }
                });
                return false;
            });
        });
    </script>
@endsection