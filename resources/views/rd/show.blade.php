@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-12">
            <h1> Create New RD</h1>
            <hr>
                <div class="form-group row">
                    <label for="responsible_name_id" class="col-sm-3 col-form-label">Responsible name</label>
                    <div class="col-sm-9">
                       <p> {{$rd->responsible_name}}</p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="husband_name">husband name</label>
                        <p> {{$rd->husband_name}}</p>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="husband_age">husband age</label>
                        <p> {{$rd->husband_age}}</p>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="husband_mobile">husband mobile</label>
                        <p> {{$rd->husband_mobile}}</p>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="husband_national_id">husband national id</label>
                        <p> {{$rd->husband_national_id}}</p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="wife_name">wife name</label>
                        <p> {{$rd->wife_name}}</p>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="wife_age">wife age</label>
                        <p> {{$rd->wife_age}}</p>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="wife_mobile">wife mobile</label>
                        <p> {{$rd->wife_mobile}}</p>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="wife_age">wife national id</label>
                        <p> {{$rd->wife_age}}</p>
                    </div>
                </div>

                <div class="form-check form-check-inline">
                @if($rd->cp !== 0)
                    <input class="form-check-input" type="checkbox" disabled="disabled" checked="checked" value="true" name="cp">
                @else
                    <input class="form-check-input" type="checkbox" disabled="disabled" value="false" name="cp">
                @endif
                    <label class="form-check-label" for="cp">
                        cp
                    </label>
                </div>

                <div class="form-check form-check-inline">
                @if($rd->ep !== 0)
                    <input class="form-check-input" type="checkbox" disabled="disabled" checked="checked" value="true" name="ep">
                @else
                    <input class="form-check-input" type="checkbox" disabled="disabled" value="false" name="ep">
                @endif
                    <label class="form-check-label" for="ep">
                    ep
                    </label>
                </div>

                <div class="form-check form-check-inline">
                @if($rd->ie !== 0)
                    <input class="form-check-input" type="checkbox" disabled="disabled" checked="checked" value="true" name="ie">
                @else
                    <input class="form-check-input" type="checkbox" disabled="disabled" value="false" name="ie">
                @endif
                    <label class="form-check-label" for="ie">
                    ie
                    </label>
                </div>

                <div class="form-check form-check-inline">
                @if($rd->clc !== 0)
                    <input class="form-check-input" type="checkbox" disabled="disabled" checked="checked" value="true" name="clc">
                @else
                    <input class="form-check-input" type="checkbox" disabled="disabled" value="false" name="clc">
                @endif
                    <label class="form-check-label" for="clc">
                    clc
                    </label>
                </div>

                <div class="form-check form-check-inline">
                @if($rd->joined !== 0)
                    <input class="form-check-input" type="checkbox" disabled="disabled" checked="checked" value="true" name="joined">
                @else
                    <input class="form-check-input" type="checkbox" disabled="disabled" value="false" name="joined">
                @endif
                    <label class="form-check-label" for="joined">
                    joined
                    </label>
                </div>

                <div class="form-group">
                    <label for="micro">Micro</label>
                    <textarea class="form-control" rows="4" name="micro" placeholder="micro">{{$rd->micro}}</textarea>
                </div>
                <div class="form-group">
                    <label for="sts">Sts</label>
                    <textarea class="form-control" rows="4" name="sts" placeholder="sts">
                    {{$rd->sts}}
                </textarea>
                </div>

                <div class="form-check form-check-inline">
                @if($rd->need_or_not !== null)
                    <input class="form-check-input" type="checkbox" disabled="disabled" checked="checked" value="true" name="need_or_not">
                @else
                    <input class="form-check-input" type="checkbox" disabled="disabled" value="false" name="need_or_not">
                @endif
                    <label class="form-check-label" for="need_or_not">
                    need
                    </label>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>expiration date</h4>
                            <input class="date form-control" type="text" name="expire_date">
                        </div>
                    </div>
                </div>
                <hr>

                <div class="form-group row">
                    <div class="offset-sm-3 col-sm-9">
                        <button type="submit" class="btn btn-primary">Submit rd</button>
                    </div>
                </div>
        </div>
        <!-- <div class="col-md-4">dewewe</div> -->
    </div>
</div>
@endsection
