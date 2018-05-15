@extends('layouts.admin')

@section('title', 'Manage Adoptions')
@section('content')
<div class="row">
    <div class="col">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Sex</th>
                    <th>Date Seized</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse($resourceList as $row)
                <tr>
                    <td>
                        <img src="{{ $row->photo_filepath }}" alt="{{ $row->name }}" width="50" height="50">
                    </td>
                    <td>{{ $row->name }}</td>
                    <td>{{ ucfirst($row->animal_type) }}</td>
                    <td>{{ ucfirst($row->sex) }}</td>
                    <td>{{ date_create($row->date_seized)->format('M d, Y') }}</td>
                    <td>{{ $row->area }}</td>
                    <td>N/A</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-secondary"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center text-info">No data to show</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
