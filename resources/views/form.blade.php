@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Employment Record - Employment Details</strong>
                        <span>To be completed and retained for each employee</span>
                    </div>

                    <div class="panel-body">
                        <form id="employee_form">
                            <strong class="title">Employer details</strong>
                            <div class="form-group">
                                <label for="registered">Registered</label>
                                <input type="text" class="form-control" id="registered" name="registered"
                                       aria-describedby="registered">
                            </div>
                            <div class="form-group">
                                <label for="trading_name">Trading name (if)</label>
                                <input type="text" class="form-control" id="trading_name" name="trading_name">
                            </div>
                            <div class="form-group">
                                <label for="abn">ABN</label>
                                <input type="text" class="form-control" id="abn" name="abn">
                            </div>
                            <strong class="title">Employee details</strong>
                            <div class="form-group">
                                <label for="full_name">Full name</label>
                                <input type="text" class="form-control" id="full_name" name="full_name">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="full_name">Date of birth* </label>
                                        <input type="text" class="form-control" id="full_name" name="full_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="full_name">Phone numbers</label>
                                        <input type="text" class="form-control" id="full_name" name="full_name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address">Address* </label>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tax_file">Tax file </label>
                                        <input type="text" class="form-control" id="tax_file" name="tax_file">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_employment">Date employment</label>
                                        <input type="text" class="form-control" id="date_employment"
                                               name="date_employment">
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <label for="date_employment">Employment status</label>
                                Ongoing <input type="checkbox" class="form-check-input" value="ongoing"
                                               name="employment_status">
                                Temporary <input type="checkbox" class="form-check-input" value="temporary"
                                                 name="employment_status">
                                Ohter <input type="checkbox" class="form-check-input" value="other"
                                             name="employment_status">
                                <input type="text" class="form-control" id="employment_status" name="employment_status">
                            </div>
                            <div class="form-group">
                                <label for="ordinary_work_hours">Ordinary hours of work* (for part-time or full time
                                    employee) </label>
                                <input type="number" class="form-control" id="ordinary_work_hours"
                                       name="ordinary_work_hours" placeholder="hours">
                            </div>
                            <button type="button" class="btn btn-primary" id="save_data">Save data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $('#save_data').on('click', function(){
            var data = {};
            $("form#employee_form :input").each(function(){
                var input = $(this);
                console.log(input);
            });
            alert("Saving data please wait (here I'll put a spinner)");
        });
    </script>
@endsection
