@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('fail'))
                    <div class="alert alert-danger">
                        {{ session('fail') }}
                    </div>
                @endif

                <div class="panel-heading">Setting</div>

                <div class="panel-body">
                    {!! Form::open(['action' => 'SettingController@update']) !!}
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Selected</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i=1; $i <= App\Setting::TOTAL_TEMPLATE; $i++)
                                    <tr>
                                        <td>
                                            {{ $i }}
                                        </td>
                                        <td>
                                            {{ Form::radio('template_number', $i, !empty($setting) && $setting->template_number == $i) }}
                                        </td>
                                        <td>
                                            Login {{ $i }}
                                        </td>
                                        <td>
                                            {{ link_to_action('SettingController@preview', 'preview', [$i], ['class' => 'btn btn-success']) }}
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>

                        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
