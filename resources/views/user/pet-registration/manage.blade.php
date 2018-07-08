@extends('layouts.user', ['hidePageHeader' => true])

@section('content')

<div class="card">
    <div class="card-body">
        @if(is_null($resourceData->id))
            <h4 class="card-title">Pet Registration</h4>
            {!! Form::open(['url' => MyHelper::resource('store'), 'method' => 'POST', 'files' => true, 'class' => 'ajax', 'data-next-url' => route('user.pet-registration.index')]) !!}
        @else
            <h4 class="card-title">Update Pet Registration</h4>
            {!! Form::model($resourceData, ['url' => MyHelper::resource('update', ['id' => $resourceData->id]), 'method' => 'PATCH', 'files' => true, 'class' => 'ajax', 'data-next-url' => route('user.pet-registration.index')]) !!}
        @endif

        {!! Form::textareaGroup('Reason for impounding', 'reason', null, ['rows' => 3]) !!}
        <div class="form-row">
            <div class="col-sm-5">
                {!! Form::inputGroup('text', 'Pet Name', 'pet_name') !!}
            </div>
            <div class="col-sm-3">
                {!! Form::selectGroup('Species', 'species', ['' => '*SELECT*', 'dog' => 'Dog', 'cat' => 'Cat', 'others' => 'Others']) !!}
            </div>
            <div class="col-sm-4">
                {!! Form::inputGroup('text', 'Breed', 'breed') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-3">
                {!! Form::selectGroup('Ownership', 'ownership', ['' => '*SELECT*', 'household' => 'Household', 'community' => 'Community']) !!}
            </div>
            <div class="col-sm-3">
                {!! Form::selectGroup('Habitat', 'habitat', ['' => '*SELECT*', 'caged' => 'Caged', 'leashed' => 'Leashed', 'roaming' => 'Roaming', 'house_only' => 'House Only']) !!}
            </div>
            <div class="col-sm-3">
                {!! Form::inputGroup('date', 'Birthdate', 'birthdate') !!}
            </div>
            <div class="col-sm-3">
                {!! Form::inputGroup('text', 'Color', 'color') !!}
            </div>
        </div>
        <hr>
        <div class="form-row">
            <div class="col-sm-2">
                {!! Form::selectGroup('Sex', 'sex', ['' => '*SELECT*', 'male' => 'Male', 'female' => 'Female']) !!}
            </div>
             <div class="col-sm-3">
                {!! Form::selectGroup('.. if female', 'female_sex_extra', ['' => '*SELECT*', 'intact' => 'Intact', 'spayed' => 'Spayed', 'pregnant' => 'Pregnant', 'lactating' => 'Lactating']) !!}
            </div>
            <div class="col-sm-2">
                {!! Form::inputGroup('number', '# of puppies', 'num_puppies') !!}
            </div>
        </div>
        <hr>
        <div class="form-row">
            <div class="col-sm-4">
                {!! Form::selectGroup('Contact with other animals', 'other_animal_contact', ['' => '*SELECT*', 'frequent' => 'Frequent', 'seldom' => 'Seldom', 'never' => 'Never']) !!}
            </div>
            <div class="col-sm-2">
                {!! Form::selectGroup('Tag', 'tag', ['' => '*SELECT*', 'collar' => 'Collar', 'microchip' => 'Microchip', 'tattoo_code' => 'Tattoo Code', 'others' => 'Others']) !!}
            </div>
            <div class="col-sm-4">
                {!! Form::inputGroup('text', ".. if others", 'other_tag_extra') !!}
            </div>
        </div>
        @if(auth()->user()->is('admin'))
        <hr>
        <div class="form-row">
            <div class="col-sm-3">
                {!! Form::inputGroup('date', 'Date Vaccinated', 'date_vaccinated') !!}
            </div>
            <div class="col-sm-4">
                {!! Form::inputGroup('text', 'Vaccinated by', 'vaccinated_by') !!}
            </div>
            <div class="col-sm-2">
                {!! Form::selectGroup('Vaccination Source', 'vaccination_source', ['' => '*SELECT*'] +  array_combine(['BAI', 'DARFO', 'PLGU', 'MLGU', 'DOH', 'NGO', 'OIE'], ['BAI', 'DARFO', 'PLGU', 'MLGU', 'DOH', 'NGO', 'OIE'])) !!}
            </div>
            <div class="col-sm-3">
                {!! Form::inputGroup('text', 'Vaccinate Stock #', 'vaccine_stock_number') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-3">
                {!! Form::selectGroup('Vaccination Type', 'vaccination_type', ['' => '*SELECT*', 'anti_rabies' => 'Anti Rabbies', 'others' => 'Others']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::inputGroup('text', 'Vaccination Remarks', 'vaccination_remarks') !!}
            </div>
        </div>
        {!! Form::textareaGroup('Veterinary attention given', 'veterinary_attention', null, ['rows' => 3]) !!}
        @endif
        <hr>
        <div class="form-row">
            <div class="col-sm-3">
                {!! Form::selectGroup('Routine Service Activity', 'routine_service_activity', ['' => '*SELECT*', 'castration' => 'castration', 'deworming' => 'Deworming', 'spaying' => 'Spaying', 'vitamin_injection' => 'Vitamin Injection', 'others' => 'Others']) !!}
            </div>
            <div class="col-sm-4">
                {!! Form::inputGroup('text', '.. if others', 'other_routine_service_activity_extra') !!}
            </div>
            <div class="col-sm-5">
                {!! Form::inputGroup('text', 'Remarks', 'routine_service_remarks') !!}
            </div>
        </div>
        <hr>
            <div class="form-group">
                <label class="d-block">Upload photo</label>
                <input type="file" name="photo" class="form-control border-0 p-0" />
            </div>
        <hr>
        <button type="submit" class="btn btn-success">Submit</button>
        {!! Form::close() !!}
    </div>
</div>

@endsection
