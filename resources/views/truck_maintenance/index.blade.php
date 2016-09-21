@extends('layouts.adminlte.master')

@section('title', 'truck Management')

@section('page_title')
    <span class="fa fa-truck fa-flip-horizontal fa-fw"></span>&nbsp;Truck
@endsection
@section('page_title_desc', '')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">@lang('truck_maintenance.index.header.title')</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th class="text-center">@lang('truck_maintenance.index.table.header.plate_number')</th>
                    <th class="text-center">@lang('truck_maintenance.index.table.header.maintenance_type')</th>
                    <th class="text-center">@lang('truck_maintenance.index.table.header.cost')</th>
                    <th class="text-center">@lang('truck_maintenance.index.table.header.odometer')</th>
                    <th class="text-center">@lang('truck_maintenance.index.table.header.remarks')</th>
                    <th class="text-center">&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($trucklist as $key => $truck)
                    <tr>
                        <td class="text-center">{{ $truck->truck->plate_number }}</td>
                        <td class="text-center">{{ $truck->maintenance_type }}</td>
                        <td>{{ $truck->cost }}</td>
                        <td>{{ $truck->odometer }}</td>
                        <td>{{ $truck->remarks }}</td>

                        <td class="text-center" width="20%">
                            <a class="btn btn-xs btn-primary" href="{{ route('db.master.truck.maintenance.edit', $truck->id) }}"><span class="fa fa-pencil fa-fw"></span></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="box-footer clearfix">
            <a class="btn btn-success" href="{{ route('db.master.truck.maintenance.create') }}"><span class="fa fa-plus fa-fw"></span>&nbsp;@lang('truck_maintenance.index.button.new_truck')</a>
            {!! $trucklist->render() !!}
        </div>
    </div>
@endsection