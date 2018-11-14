@extends('layouts.admin')
@section('title', 'Available Animals')
@push('css')
<style type="text/css">
    .table td{
        vertical-align:middle!important;
    }
</style>
@endpush
@section('content')
@if($error = session('deletionError'))
<div class="alert alert-danger">
    {{ $error }}
</div>
@endif
@include('partials.search-bar')
<table class="table mt-0 table-hover">
    <thead>
        <tr>
            <th></th>
            <th>Pet Name</th>
            <th>Species</th>
            <th>Breed</th>
            <th>Date Registered</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @forelse($resourceList as $row)
        <tr>
            <td><img src="{{ $row->photo_filepath }}" class="rounded" style="height:60px;width:60px;"></td>
            <td>

                {{ $row->pet_name }}
            </td>
            <td>{{ ucfirst($row->species) }}</td>
            <td>{{ $row->breed ?: '-' }}</td>
            <td>{{ $row->created_at->format('m/d/Y h:i A') }}</td>
            <td>
                <a href="{{ route('admin.pet-registration.edit', $row->id) }}" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i> Edit</a>
                <a class="trash-row btn btn-sm btn-danger" href="#">
                    <i class="fa fa-trash"></i> Trash
                    {!! Form::open(['url'=> MyHelper::resource('destroy', $row->id), 'method'=> 'DELETE','class'=> 'hidden']) !!}
                    {!! Form::close()!!}
                </a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center text-info">
                {{ request()->registration_status ? 'No data matched with filter' : 'No pets registered' }}
            </td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection


@include('partials.profile-peek')
