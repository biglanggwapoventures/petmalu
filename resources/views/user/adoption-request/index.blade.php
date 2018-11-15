@extends('layouts.user', ['hidePageHeader' => true])

@section('content')
<div class="card">
    <div class="card-body mb-0">
        <h4 class="card-title">Pet Adoption Requests</h4>
        <h5 class="card-subtitle mb-2 ">You have
        <span class="badge badge-secondary">{{ $resourceList->where('request_status', 'approved')->count() }} </span> approved request!</h5>
    </div>
    <div class="card-body p-0">
        <table class="table mt-0">
            <thead>
                <tr>
                    <th></th>
                    <th>Date Requested</th>
                    <th>Pet Name</th>
                    <th>Species</th>
                    <th>Breed</th>
                    <th>Purpose</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse($resourceList as $row)
                <tr>
                    <td><img src="{{ $row->pet->photo_filepath }}" style="height:60px;width:60px;"></td>
                    <td>{{ $row->created_at->format('M d, Y h:i A') }}</td>
                    <td>{{ $row->pet->pet_name }}</td>
                    <td>{{ ucfirst($row->pet->species) }}</td>
                    <td>{{ ucfirst($row->pet->breed) }}</td>
                    <td>{{ $row->adoption_purpose }}</td>
                    <td>{{ ucfirst($row->request_status) }}</td>
                    <td>
                        @if($row->is('pending'))
                        <a href="{{ route('user.adoption-request.edit', $row->id) }}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                        {!! Form::open(['url' => route('user.adoption-request.cancel'), 'method' => 'POST', 'onsubmit' => "javascript: return confirm('Are you sure?')"]) !!}
                            {!! Form::hidden('id', $row->id)!!}
                            <button  type="submit" class="btn btn-danger btn-sm mt-2">Cancel</button>
                        {!! Form::close() !!}
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="text-center text-info">No pet requests registered</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
