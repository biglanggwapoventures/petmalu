@extends('layouts.admin')
@section('title', 'Impound Request List')

@section('content')
@if($error = session('deletionError'))
<div class="alert alert-danger">
    {{ $error }}
</div>
@endif
<form class="form-inline">
  <div class="form-group mx-sm-3 mb-2">
    <label for="" class="mr-1">Show only</label>
    {!! Form::plainSelect(
        'registration_status',
        ['' => '*ALL*', 'pending' => 'Pending Requests', 'approved' => 'Approved Requests', 'rejected' => 'Rejected Requests'],
        request()->registration_status,
        ['class' => 'custom-select']) !!}
  </div>
  <button type="submit" class="btn btn-info mb-2"><i class="fa fa-search"></i> Filter</button>
</form>
<table class="table mt-0 table-hover">
    <thead>
        <tr>
            <th>Pet Name</th>
            <th>Species</th>
            <th>Breed</th>
            <th>Date Registered</th>
            <th>Owner</th>
            <th class="text-center">Notes</th>
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
            <td class="text-uppercase text-center">
                <span class="badge badge-primary">{{ $row->notes }}</span>
            </td>
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
            <td colspan="8" class="text-center text-info">
                {{ request()->registration_status ? 'No data matched with filter' : 'No pets registered' }}
            </td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection
