<div class="form-group">
    <label>How did you come to know about CEBU CITY POUND</label> 
    <div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
        <input name="how_do_you_know_the_pound" type="checkbox" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->how_do_you_know_the_pound) ? 'checked' : '' }}>
                A friend
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="magazine" type="checkbox" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->magazine) ? 'checked' : '' }}>
                Magazine/Newspaper
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="television" type="checkbox" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->television) ? 'checked' : '' }}>
                Television
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="internet" type="checkbox" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->internet) ? 'checked' : '' }}>
                Internet
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="others" type="checkbox" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->others) ? 'checked' : '' }}>
                Others
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Please check any of the following reasons for adopting a pet:</label> 
    <div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="watchdog" type="checkbox" required="required" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->watchdog) ? 'checked' : '' }}>
                Watchdog
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="companion" type="checkbox" required="required" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->companion) ? 'checked' : '' }}>
                Companion
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="barn_mouser_cat" type="checkbox" required="required" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->barn_mouser_cat) ? 'checked' : '' }}>
                Barn/Mouser Cat
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="breeding" type="checkbox" required="required" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->breeding) ? 'checked' : '' }}>
                Breeding
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="hunting" type="checkbox" required="required" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->hunting) ? 'checked' : '' }}>
                Hunting
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="famly_pet" type="checkbox" required="required" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->family_pet) ? 'checked' : '' }}>
                Family Pet
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="guard_dog" type="checkbox" required="required" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->guard_dog) ? 'checked' : '' }}>
                Guard Dog Business
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="childs_pet" type="checkbox" required="required" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->childs_pet) ? 'checked' : '' }}>
                Child's Pet
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="gift" type="checkbox" required="required" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->gift) ? 'checked' : '' }}>
                Gift
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="others" type="checkbox" required="required" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->others) ? 'checked' : '' }}>
                Others
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="text1">Number of people in the household:</label> 
    <input id="no_of_people_in_the_household" name="text1" type="number" required="required" class="form-control here" value="{{ $resourceData->adoption_form->text1 ?? null }}">
  </div>
  <div class="form-group">
    <label for="text2">If children are present, please state their ages:</label> 
    <input id="children_present" name="text2" type="text" required="required" class="form-control here" value="{{ $resourceData->adoption_form->text2 ?? null }}">
  </div>
  <div class="form-group">
    <label>Do all members of your family agree to adopt a new pet?</label> 
    <div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="agree_to_adopt_pet" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->agree_to_adopt_pet) ? 'checked' : '' }} required="required">
                Yes
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="agree_to_adopt_pet" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->agree_to_adopt_pet) ? 'checked' : '' }} required="required">
                No
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Are you or any member of your family allergic to pets:</label> 
    <div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="pet_alergy" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->pet_alergy) ? 'checked' : '' }} required="required">
                Yes
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="pet_alergy" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->pet_alergy) ? 'checked' : '' }} required="required">
                No
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Type of residence:</label> 
    <div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="type_of_residence" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->type_of_residence) ? 'checked' : '' }} required="required">
                House
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="type_of_residence" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->type_of_residence) ? 'checked' : '' }} required="required">
                Apartment
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="type_of_residence" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->type_of_residence) ? 'checked' : '' }} required="required">
                Condo
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="type_of_residence" type="radio" required="required" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->type_of_residence) ? 'checked' : '' }}>
                Mobile Home
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="type_of_residence" type="radio" required="required" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->type_of_residence) ? 'checked' : '' }}>
                Farm/Barn
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>If rental, are pets allowed?</label> 
    <div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="pet_is_allowed" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->pet_is_allowed) ? 'checked' : '' }} required="required">
                Yes
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="pet_is_allowed" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->pet_is_allowed) ? 'checked' : '' }} required="required">
                No
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="text">Complex name/address</label> 
    <input id="text" name="name_address" type="text" class="form-control here" required="required" value="1" {{ $resourceData->adoption_form->name_address ?? null }}>
  </div>
  <div class="form-group">
    <label>Where will pet/s live?</label> 
    <div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="pets_address" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->pets_address) ? 'checked' : '' }} required="required">
                Indoors
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="pets_address" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->pets_address)  ? 'checked' : '' }} required="required">
                Both Indoors &amp; Outdoors
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="pets_address" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->pets_adress)  ? 'checked' : '' }} required="required">
                Outdoors
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="text3">Will you take your dog for walk?</label> 
    <input id="text3" name="text3" type="text" class="form-control here" required="required" value="{{ $resourceData->adoption_form->text3 ?? null }}">
  </div>
  <div class="form-group">
    <label>What will you use when you walk the dog?</label> 
    <div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="use_when_you_walk_you_dog" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->use_when_you_walk_you_dog) ? 'checked' : '' }} required="required">
                Harness/Leash
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="use_when_you_walk_you_dog" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->use_when_you_walk_you_dog) ? 'checked' : '' }} required="required">
                Nothing(free)
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="use_when_you_walk_you_dog" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->use_when_you_walk_you_dog)  ? 'checked' : '' }} required="required">
                Lead
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="use_when_you_walk_you_dog" type="radio" required="required" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->use_when_you_walk_you_dog)  ? 'checked' : '' }}>
                Others
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Where will the dog/cat spend nights?</label> 
    <div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="where_to_spend_nights" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->where_to_spend_nights)  ? 'checked' : '' }} required="required">
                Inside
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="where_to_spend_nights" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->where_to_spend_nights)  ? 'checked' : '' }} required="required">
                Outside
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Do you have a fenced yard?</label> 
    <div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="is_fenced" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->is_fenced) ? 'checked' : '' }} required="required">
                Yes
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label"></label>
          <input name="is_fenced" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->is_fenced)  ? 'checked' : '' }} required="required">
                No
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="text4">How many hours per day will your pet be alone?</label> 
    <input id="text4" name="how_many_hours" type="text" class="form-control here" required="required" value="{{ $resourceData->adoption_form->how_many_hours ?? null }}">
  </div>
  <div class="form-group">
    <label for="text5">When you go on vacation or outings, who will care for the pet?</label> 
    <input id="text5" name="vation_address" type="text" class="form-control here" required="required" value="{{ $resourceData->adoption_form->vation_address ?? null }}">
  </div>
  <div class="form-group">
    <label>Do you know the difference between a Rabies vaccination for a dog/cat and annual vaccination?</label> 
    <div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="vaccination" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->vaccination)  ? 'checked' : '' }} required="required">
                Yes
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="vaccination" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->vaccination)  ? 'checked' : '' }} required="required">
                No
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Do you know about Heartworm in dogs, the necessary preventative medicine and costs?</label> 
    <div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="heartworm" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->heartworm) ? 'checked' : '' }} required="required">
                Yes
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="heartworm" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->heartworm)  ? 'checked' : '' }} required="required">
                No
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Are you willing to take responsibility if this pet aquires an illness?</label> 
    <div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="take_responsibility" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->take_responsibility)  ? 'checked' : '' }} required="required">
                Yes
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="take_responsibility" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->take_responsibility)  ? 'checked' : '' }} required="required">
                No
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Are you willing and able to take pay the veterinary costs of caring for your nre pet?</label> 
    <div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="pay_veterinary" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->pay_veterinary)  ? 'checked' : '' }} required="required">
                Yes
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="pay_veterinary" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->pay_veterinary)  ? 'checked' : '' }} required="required">
                No
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Are you willing to take the time to work with a dog on housebreaking or chewing, if such problems arise?</label> 
    <div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="work_with_dog" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->work_with_dog)  ? 'checked' : '' }} required="required">
                Yes
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="work_with_dog" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->work_with_dog)  ? 'checked' : '' }} required="required">
                No
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Are you aware that a dog is a large and lifelong commitment?</label> 
    <div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="commitment" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->commitment)  ? 'checked' : '' }} required="required">
                Yes
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="commitment" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->commitment)  ? 'checked' : '' }} required="required">
                No
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Have you had pets in the last five years?</label> 
    <div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="had_pets_before" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->had_pets_before)  ? 'checked' : '' }} required="required">
                Yes
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="had_pets_before" type="radio" class="form-check-input" value="1" {{ isset($resourceData->adoption_form->had_pets_before)  ? 'checked' : '' }} required="required">
                No
        </label>
      </div>
    </div>
  </div> 
  <div class="form-group">
    <label for="text7">Have you had a dog or cat die on your premises of disterape, parvo, feline, panieukemia, or unknown causes within the last 3 months? If yes, this illness are highly contagious and may still be in active state at your residence for a period of time, even after the loss of pet - YOU NEED TO BE AWARE OF THIS!!</label> 
    <input id="died_pet" name="text7" type="text" required="required" class="form-control here" value="{{ $resourceData->adoption_form->text7 ?? null }}">
  </div> 