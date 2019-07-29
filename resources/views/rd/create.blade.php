@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-12">
            <h1> Create New RD</h1>
            <hr>
            <form method="post" action="/rd" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="responsible_name_id" class="col-sm-3 col-form-label">Responsible name</label>
                    <div class="col-sm-9">
                        <input name="responsible_name" type="text" class="form-control" placeholder="responsible name">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="husband_name">husband name</label>
                        <input type="text"
                        name="husband_name"
                        class="form-control" id="husband_name" placeholder="husband name">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="husband_age">husband age</label>
                        <input type="number"
                            class="form-control" name="husband_age" min="1" max="99"
                            placeholder="husband age">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="husband_mobile">husband mobile</label>
                        <input type="text" name="husband_mobile" class="form-control" placeholder="husband mobile">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="husband_age">husband national id</label>
                        <input type="number" class="form-control" name="husband_national_id" min="11111111111111"
                            max="99999999999999" placeholder="husband national id">
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="wife_name">wife name</label>
                        <input type="text"
                        name="wife_name"
                        class="form-control" id="wife_name" placeholder="wife name">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="wife_age">wife age</label>
                        <input type="number" class="form-control" name="wife_age" min="1" max="99"
                            placeholder="wife age">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="wife_mobile">wife mobile</label>
                        <input type="text" name="wife_mobile" class="form-control" placeholder="wife mobile">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="wife_age">wife national id</label>
                        <input type="number" class="form-control" name="wife_national_id" min="11111111111111"
                            max="99999999999999" placeholder="wife national id">
                    </div>
                    
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-3 col-form-label">Address</label>
                    <div class="col-sm-9">
                        <input name="address" type="text" class="form-control" placeholder="address">
                    </div>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="true" name="cp">
                    <label class="form-check-label" for="cp">
                        cp
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="true" name="ep">
                    <label class="form-check-label" for="ep">
                        ep
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="true" name="clc">
                    <label class="form-check-label" for="cl">
                        clc
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="true" name="ie">
                    <label class="form-check-label" for="ie">
                        ie
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="true" name="joined">
                    <label class="form-check-label" for="joined">
                        joined
                    </label>
                </div>
                <div class="form-group">
                    <label for="micro">Micro</label>
                    <textarea class="form-control" rows="4" name="micro" placeholder="micro"></textarea>
                </div>
                <div class="form-group">
                    <label for="sts">Sts</label>
                    <textarea class="form-control" rows="4" name="sts" placeholder="sts">
                </textarea>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="true" name="need_or_not">
                    <label class="form-check-label" for="need">
                        need
                    </label>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>expiration date</h4> 
                               <input name="expire_date" class="expiredate form-control" type="text" required="true" >
                               <!-- name="expire_date" -->
                        </div>
                    </div>
                </div>
                <hr>

                <div class="form-group row">
                    <div class="offset-sm-3 col-sm-9">
                        <button type="submit" class="btn btn-primary">Submit rd</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- <div class="col-md-4">dewewe</div> -->
    </div>
</div>
<script type="text/javascript">
            $(function () {
                $('.datepicker').datetimepicker({
            format: 'mm/dd/yyyy',
            startDate: '-3d'
        });
            });
        </script>

@endsection
