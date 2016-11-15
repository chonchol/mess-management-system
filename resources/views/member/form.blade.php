<!-- List group -->
<ul class="list-group">
    <li class="list-group-item">
        Switch on Your Own Meal
        <div class="material-switch pull-right">
            {!! Form::checkbox('self_meal_breakfast', null, '', ['id' => 'someSwitchOptionPrimary']) !!}
           Breakfast: {!! Form::label('someSwitchOptionPrimary', ' ', ['class' => 'label-primary']) !!}

            {!! Form::checkbox('self_meal_lunch', null, '', ['id' => 'someSwitchOptionInfo']) !!}
             Lunch: {!! Form::label('someSwitchOptionInfo', ' ', ['class' => 'label-info']) !!}

            {!! Form::checkbox('self_meal_dinner', null, '', ['id' => 'someSwitchOptionSuccess']) !!}
             Dinner: {!! Form::label('someSwitchOptionSuccess', ' ', ['class' => 'label-success']) !!}
        </div>
    </li>
    <li class="list-group-item">
        Switch on Guest Meal
        <div class="material-switch pull-right">
            {!! Form::checkbox('guest_meal_breakfast', null, '', ['id' => 'someSwitchOptionGuest']) !!}
           Breakfast: {!! Form::label('someSwitchOptionGuest', ' ', ['class' => 'label-primary']) !!}

            {!! Form::checkbox('guest_meal_lunch', null, '', ['id' => 'someSwitchOptionGuestInfo']) !!}
             Lunch: {!! Form::label('someSwitchOptionGuestInfo', ' ', ['class' => 'label-info']) !!}

            {!! Form::checkbox('guest_meal_dinner', null, '', ['id' => 'someSwitchOptionGuestSuccess']) !!}
             Dinner: {!! Form::label('someSwitchOptionGuestSuccess', ' ', ['class' => 'label-success']) !!}
        </div>
    </li>
</ul>
<div class="form-group{{ $errors->has('extra_meal') ? ' has-error' : ''}}">
    {!! Form::label('extra_meal', 'Extra Meal (if needed): ', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('extra_meal', null, ['class' => 'form-control']) !!}
        {!! $errors->first('extra_meal', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<hr>
        <h2>Total Meal on This day (<?php echo date("F j,"); ?>): </h2>

