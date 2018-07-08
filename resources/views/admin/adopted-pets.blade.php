@extends('layouts.admin', ['hideNewEntryLink' => true])
@section('title', "List of Adopted Pets")


@section('content')
<table class="table mt-0 table-hover">
    <thead>
        <tr>
            <th>Pet</th>
            <th>Past Owner</th>
            <th>New Owner</th>
            <th>Date Adopted</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
      @forelse($data as $row)
        <tr>
          <td>
            <strong>{{ $row->pet_name }}</strong>
            <br>
            {{ ucfirst($row->species) }} ({{ ucfirst($row->breed) }})
          </td>
           <td>
            {{ data_get($row, 'owner.name') }}
          </td>
          <td>
            {{ data_get($row, 'approvedAdoptionRequest.requestor.name') }}
          </td>
          <td>
            {{ date_create(data_get($row, 'approvedAdoptionRequest.adopted_at'))->format('M d, Y h:i A') }}
          </td>
          <td>
            <a href="{{ route('admin.adopted-pets.show', ['pet' => $row->id]) }}" class="btn btn-primary btn-sm" href="#">View full details</a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="4" class="text-center text-info">No adopted pet recorded</td>
        </tr>
      @endforelse
    </tbody>
</table>
@endsection
