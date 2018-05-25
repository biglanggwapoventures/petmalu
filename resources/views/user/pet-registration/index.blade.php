@extends('layouts.user', ['hidePageHeader' => true])

@section('content')

<div class="card">
    <div class="card-body mb-0">
        <h4 class="card-title">Pet Registration History</h4>
    </div>
    <div class="card-body p-0">
        <table class="table mt-0">
            <thead>
                <tr>
                    <th>Pet Name</th>
                    <th>Species</th>
                    <th>Breed</th>
                    <th>Date Registered</th>
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
                    <td>{{ ucfirst($row->registration_status) }}</td>
                    <td>
                        <a href="{{ route('user.pet-registration.edit', $row->id) }}" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center text-info">No pet registered</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
