@extends('layouts.admin')
@section('title', 'Impound Request List')

@section('content')
@if($error = session('deletionError'))
<div class="alert alert-danger">
    {{ $error }}
</div>
@endif
<table class="table mt-0 table-hover">
    <thead>
        <tr>
            <th>Pet Name</th>
            <th>Species</th>
            <th>Breed</th>
            <th>Date Registered</th>
            <th>Owner</th>
            <th>Notes</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @forelse($resourceList as $row)
        <tr>
            <td>{{ $row->pet_name }}</td>
            <td>{{ ucfirst($row->species) }}</td>
            <td>{{ $row->breed ?: '-' }}</td>
            <td>{{ $row->created_at->format('m/d/Y h:i A') }}</td>
            <td>{{ $row->owner->name }}</td>
            <td>{!! $row->service_type === 'pickup' ? '<span class="badge badge-warning">Pick up at location</span>' : '<span class="badge badge-success">To be surrendered</span>' !!}</td>
            <td>{{ ucfirst($row->registration_status) }}</td>
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
            <td colspan="6" class="text-center text-info">No pet registered</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection
