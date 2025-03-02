<div class="row">
    <div class="form-group col-md-6 col-12">
        <x-layout.mt.forms.select2
            :name="'role'"
            :options='$roles'
            :label="'Role'"
            :required="true"
        />

        @if($errors->first('role'))
            <br>
            <small class="text-danger">{{$errors->first('role')}}</small>
        @endif
    </div>
</div>
