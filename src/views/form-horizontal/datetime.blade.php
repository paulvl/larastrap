<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    {!! Form::label($label, null, ['class' => "control-label col-md-$size[0]"]) !!}

    <div class="col-md-{{ $size[1] }}">
        <div class='input-group date' id='{{ $id }}'>
            {!! Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) !!}
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>

        @if ($errors->has($name))
            <span class="help-block">
                <strong>{{ $errors->first($name) }}</strong>
            </span>
        @endif
    </div>
</div>