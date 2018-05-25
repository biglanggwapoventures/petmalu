@extends('layouts.admin', ['hideNewEntryLink' => true])
@section('title', 'Adoption Requests')
@section('content')

<table class="table mt-0">
        <thead>
            <tr>
                <th>Date Requested</th>
                <th>Requested By</th>
                <th>Pet Name</th>
                <th>Species</th>
                <th>Breed</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse($resourceList as $row)
            <tr>
                <td>{{ $row->created_at->format('m/d/Y h:i a') }}</td>
                <td>{{ $row->requestor->name }}</td>
                <td>{{ $row->pet->pet_name }}</td>
                <td>{{ ucfirst($row->pet->species) }}</td>
                <td>{{ ucfirst($row->pet->breed) }}</td>
                <td>{{ ucfirst($row->request_status) }}</td>
                <td>
                    <a href="{{ route('admin.adoption-request.show', $row->id) }}" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" class="text-center text-info">No pet requests registered</td>
            </tr>
            @endforelse
        </tbody>
    </table>

@endsection
