<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    {!! Form::label($label, null, ['class' => "control-label col-md-$size[0]"]) !!}

    <div class="col-md-{{ $size[1] }}">
        {!! Form::select($name, $value, $selected, array_merge(['class' => 'form-control'], $attributes)) !!}

        @if ($errors->has($name))
            <span class="help-block">
                <strong>{{ $errors->first($name) }}</strong>
            </span>
        @endif
    </div>
</div>