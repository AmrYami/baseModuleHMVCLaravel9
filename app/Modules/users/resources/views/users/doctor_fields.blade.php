<!-- Name Field -->
<div class="row">
    <!-- Name Field (English) -->
    <div class="form-group col-md-6 col-12 mt-2">
        <!--begin::Input group-->
        <div class="form-floating">
            <input type="text" class="form-control"
                    placeholder="Name in English"
                    value="{{$user?->getTranslation('name', 'en') ?? ''}}"
                    maxlength="255" minlength="3" autocomplete="off" disabled/>
            <label for="floatingInput">Name (English)</label>
        </div>
        <!--end::Input group-->
    </div>
    <!-- Name Field (Arabic) -->
    <div class="form-group col-md-6 col-12 mt-2">
        <!--begin::Input group-->
        <div class="form-floating">
            <input type="text" class="form-control"
                    placeholder="Name in Arabic"
                    value="{{$user?->getTranslation('name', 'ar') ?? ''}}"
                    maxlength="255" minlength="3" autocomplete="off" disabled/>
            <label for="floatingInput">Name (Arabic) </label>
        </div>
        <!--end::Input group-->
    </div>
    <!--begin::Input group-->
    <!--end::Input group-->

</div>


<div id="doctorFields">
    <!-- Tabs -->
    <ul class="nav nav-tabs" id="doctorTabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab"
               aria-controls="tab1" aria-selected="true">Personal Info</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab"
               aria-controls="tab2" aria-selected="false">Experience</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab"
               aria-controls="tab3" aria-selected="false">Media</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab"
               aria-controls="tab4" aria-selected="false">Career History</a>
        </li>
    </ul>


    <div class="tab-content mt-3">
        <div class="tab-pane fade show active" id="tab1">
            <!-- Specialization Field (English) -->
            <div class="row">
                <div class="form-group col-md-6 col-12">
                    {!! html()->label('Specialization (English)')->for('specialization_en') !!}
                    @if ($errors->has('specialization.en'))
                        <small class="text-danger">{{ $errors->first('specialization.en') }}</small>
                    @endif
                    {!! html()->text('specialization[en]', $user?->getTranslation('specialization', 'en') ?? '')
                        ->class('form-control')

                        ->placeholder('Specialization in English')
                        ->attribute('maxlength', 255)

                        ->attribute('autocomplete', 'off')
                    !!}
                </div>

                <!-- Specialization Field (Arabic) -->
                <div class="form-group col-md-6 col-12">
                    {!! html()->label('Specialization (Arabic)')->for('specialization_ar') !!}
                    @if ($errors->has('specialization.ar'))
                        <small class="text-danger">{{ $errors->first('specialization.ar') }}</small>
                    @endif
                    {!! html()->text('specialization[ar]', $user?->getTranslation('specialization', 'ar') ?? '')
                        ->class('form-control')

                        ->placeholder('Specialization in Arabic')
                        ->attribute('maxlength', 255)

                        ->attribute('autocomplete', 'off')
                    !!}
                </div>
            </div>


            <!-- hospital Field (English) -->
            <div class="row">
                <div class="form-group col-md-6 col-12">
                    {!! html()->label('Hospital (English)')->for('hospital_en') !!}
                    @if ($errors->has('hospital.en'))
                        <small class="text-danger">{{ $errors->first('hospital.en') }}</small>
                    @endif
                    {!! html()->text('hospital[en]', $user?->getTranslation('hospital', 'en') ?? '')
                        ->class('form-control')

                        ->placeholder('Hospital in English')
                        ->attribute('maxlength', 255)

                        ->attribute('autocomplete', 'off')
                    !!}
                </div>

                <!-- Hospital Field (Arabic) -->
                <div class="form-group col-md-6 col-12">
                    {!! html()->label('Hospital (Arabic)')->for('hospital_ar') !!}
                    @if ($errors->has('hospital.ar'))
                        <small class="text-danger">{{ $errors->first('hospital.ar') }}</small>
                    @endif
                    {!! html()->text('hospital[ar]', $user?->getTranslation('hospital', 'ar') ?? '')
                        ->class('form-control')

                        ->placeholder('Hospital in Arabic')
                        ->attribute('maxlength', 255)

                        ->attribute('autocomplete', 'off')
                    !!}
                </div>
            </div>


            <!-- designation Field (English) -->
            <div class="row">
                <div class="form-group col-md-6 col-12">
                    {!! html()->label('Designation (English)')->for('designation_en') !!}
                    @if ($errors->has('designation.en'))
                        <small class="text-danger">{{ $errors->first('designation.en') }}</small>
                    @endif
                    {!! html()->text('designation[en]', $user?->getTranslation('designation', 'en') ?? '')
                        ->class('form-control')

                        ->placeholder('Designation in English')
                        ->attribute('maxlength', 255)

                        ->attribute('autocomplete', 'off')
                    !!}
                </div>

                <!-- Designation Field (Arabic) -->
                <div class="form-group col-md-6 col-12">
                    {!! html()->label('Designation (Arabic)')->for('designation_ar') !!}
                    @if ($errors->has('designation.ar'))
                        <small class="text-danger">{{ $errors->first('designation.ar') }}</small>
                    @endif
                    {!! html()->text('designation[ar]', $user?->getTranslation('designation', 'ar') ?? '')
                        ->class('form-control')

                        ->placeholder('Designation in Arabic')
                        ->attribute('maxlength', 255)

                        ->attribute('autocomplete', 'off')
                    !!}
                </div>
            </div>


            <!-- Specialty Field -->
            <div class="row">
                <div class="form-group col-md-6 col-12">
                    {!! html()->label('Specialty (English)')->for('specialty_en') !!}
                    @if ($errors->has('specialty.en'))
                        <small class="text-danger">{{ $errors->first('specialty.en') }}</small>
                    @endif
                    {!! html()->text('specialty[en]', $user?->getTranslation('specialty', 'en') ?? '')
                        ->class('form-control')

                        ->placeholder('Specialty in English')
                        ->attribute('maxlength', 255)

                        ->attribute('autocomplete', 'off')
                    !!}
                </div>

                <div class="form-group col-md-6 col-12">
                    {!! html()->label('Specialty (Arabic)')->for('specialty_ar') !!}
                    @if ($errors->has('specialty.ar'))
                        <small class="text-danger">{{ $errors->first('specialty.ar') }}</small>
                    @endif
                    {!! html()->text('specialty[ar]', $user?->getTranslation('specialty', 'ar') ?? '')
                        ->class('form-control')

                        ->placeholder('Specialty in Arabic')
                        ->attribute('maxlength', 255)

                        ->attribute('autocomplete', 'off')
                    !!}
                </div>
            </div>


            <!-- Languages Field -->
            <div class="row">
                <div class="form-group col-md-6 col-12">
                    {!! html()->label('Languages (English)')->for('languages_en') !!}
                    @if ($errors->has('languages.en'))
                        <small class="text-danger">{{ $errors->first('languages.en') }}</small>
                    @endif
                    {!! html()->text('languages[en]', $user?->getTranslation('languages', 'en') ?? '')
                        ->class('form-control')

                        ->placeholder('Languages in English')
                        ->attribute('maxlength', 255)

                        ->attribute('autocomplete', 'off')
                    !!}
                </div>

                <div class="form-group col-md-6 col-12">
                    {!! html()->label('Languages (Arabic)')->for('languages_ar') !!}
                    @if ($errors->has('languages.ar'))
                        <small class="text-danger">{{ $errors->first('languages.ar') }}</small>
                    @endif
                    {!! html()->text('languages[ar]', $user?->getTranslation('languages', 'ar') ?? '')
                        ->class('form-control')

                        ->placeholder('Languages in Arabic')
                        ->attribute('maxlength', 255)

                        ->attribute('autocomplete', 'off')
                    !!}
                </div>
            </div>


        </div>
        <div class="tab-pane fade" id="tab2">


            <!-- Experience Field -->
            <div class="row">
                <div class="form-group col-md-6 col-12">
                    {!! html()->label('Experience (English)')->for('experience_en') !!}
                    @if ($errors->has('experience.en'))
                        <small class="text-danger">{{ $errors->first('experience.en') }}</small>
                    @endif
                    {!! html()->text('experience[en]', $user?->getTranslation('experience', 'en') ?? '')
                        ->class('form-control')

                        ->placeholder('Experience in English')
                        ->attribute('maxlength', 255)

                        ->attribute('autocomplete', 'off')
                    !!}
                </div>

                <div class="form-group col-md-6 col-12">
                    {!! html()->label('Experience (Arabic)')->for('experience_ar') !!}
                    @if ($errors->has('experience.ar'))
                        <small class="text-danger">{{ $errors->first('experience.ar') }}</small>
                    @endif
                    {!! html()->text('experience[ar]', $user?->getTranslation('experience', 'ar') ?? '')
                        ->class('form-control')

                        ->placeholder('Experience in Arabic')
                        ->attribute('maxlength', 255)

                        ->attribute('autocomplete', 'off')
                    !!}
                </div>
            </div>


            <!-- Description Field -->
            <div class="row">
                <div class="form-group col-md-6 col-12">
                    {!! html()->label('Description (English)')->for('description_en') !!}
                    @if ($errors->has('description.en'))
                        <small class="text-danger">{{ $errors->first('description.en') }}</small>
                    @endif
                    {!! html()->textarea('description[en]', $user?->getTranslation('description', 'en') ?? '')
                        ->class('form-control')

                        ->placeholder('Description in English')
                        ->attribute('maxlength', 1000)

                        ->attribute('autocomplete', 'off')
                    !!}
                </div>

                <div class="form-group col-md-6 col-12">
                    {!! html()->label('Description (Arabic)')->for('description_ar') !!}
                    @if ($errors->has('description.ar'))
                        <small class="text-danger">{{ $errors->first('description.ar') }}</small>
                    @endif
                    {!! html()->textarea('description[ar]', $user?->getTranslation('description', 'ar') ?? '')
                        ->class('form-control')

                        ->placeholder('Description in Arabic')
                        ->attribute('maxlength', 1000)

                        ->attribute('autocomplete', 'off')
                    !!}
                </div>
            </div>

            <!-- Achievements Field -->
            <div class="row">
                <div class="form-group col-md-6 col-12">
                    {!! html()->label('Achievements (English)')->for('achievements_en') !!}
                    @if ($errors->has('achievements.en'))
                        <small class="text-danger">{{ $errors->first('achievements.en') }}</small>
                    @endif
                    {!! html()->textarea('achievements[en]', $user?->getTranslation('achievements', 'en') ?? '')
                        ->class('form-control')

                        ->placeholder('Achievements in English')
                        ->attribute('maxlength', 1000)
                        ->attribute('autocomplete', 'off')
                    !!}
                </div>

                <div class="form-group col-md-6 col-12">
                    {!! html()->label('Achievements (Arabic)')->for('achievements_ar') !!}
                    @if ($errors->has('achievements.ar'))
                        <small class="text-danger">{{ $errors->first('achievements.ar') }}</small>
                    @endif
                    {!! html()->textarea('achievements[ar]', $user?->getTranslation('achievements', 'ar') ?? '')
                        ->class('form-control')

                        ->placeholder('Achievements in Arabic')
                        ->attribute('maxlength', 1000)
                        ->attribute('autocomplete', 'off')
                    !!}
                </div>
            </div>

            <!-- Studies Field -->
            <div class="row">
                <div class="form-group col-md-6 col-12">
                    {!! html()->label('Studies (English)')->for('studies_en') !!}
                    @if ($errors->has('studies.en'))
                        <small class="text-danger">{{ $errors->first('studies.en') }}</small>
                    @endif
                    {!! html()->textarea('studies[en]', $user?->getTranslation('studies', 'en') ?? '')
                        ->class('form-control')

                        ->placeholder('Studies in English')
                        ->attribute('maxlength', 1000)
                        ->attribute('autocomplete', 'off')
                    !!}
                </div>

                <div class="form-group col-md-6 col-12">
                    {!! html()->label('Studies (Arabic)')->for('studies_ar') !!}
                    @if ($errors->has('studies.ar'))
                        <small class="text-danger">{{ $errors->first('studies.ar') }}</small>
                    @endif
                    {!! html()->textarea('studies[ar]', $user?->getTranslation('studies', 'ar') ?? '')
                        ->class('form-control')

                        ->placeholder('Studies in Arabic')
                        ->attribute('maxlength', 1000)

                        ->attribute('autocomplete', 'off')
                    !!}
                </div>
            </div>


        </div>
        <div class="tab-pane fade" id="tab3">



            <div class="row">
                <div class="form-group col-md-6 col-12">
                    {!! html()->label('avatar', 'Avatar:') !!}
                    @if($errors->first('avatar'))
                        <br>
                        <small class="text-danger">{{$errors->first('avatar')}}</small>
                    @endif
                    <div class="custom-file">
                        {!! html()->file('avatar')->class('form-control') !!}
                    </div>
                </div>


                <div class="form-group col-md-6 col-12">
                    {!! html()->label('certificates', 'Certificates:') !!}
                    @if($errors->first('certificates'))
                        <br>
                        <small class="text-danger">{{$errors->first('certificates')}}</small>
                    @endif
                    <div class="custom-file">
                        <input type="file" name='mediafile[documents][]' class="form-control" multiple>
                    </div>
                </div>
            </div>



        </div>
        <div class="tab-pane fade" id="tab4">

            <!-- Work Experience Field -->
            <div class="row">
                <div class="form-group col-md-6 col-12">
                    {!! html()->label('Work Experience (English)')->for('work_experience_en') !!}
                    @if ($errors->has('work_experience.en'))
                        <small
                            class="text-danger">{{ $errors->first('work_experience.en') }}</small>
                    @endif
                    {!! html()->textarea('work_experience[en]', $user?->getTranslation('work_experience', 'en') ?? '')
                        ->class('form-control')

                        ->placeholder('Work Experience in English')
                        ->attribute('maxlength', 1000)

                        ->attribute('autocomplete', 'off')
                    !!}
                </div>

                <div class="form-group col-md-6 col-12">
                    {!! html()->label('Work Experience (Arabic)')->for('work_experience_ar') !!}
                    @if ($errors->has('work_experience.ar'))
                        <small
                            class="text-danger">{{ $errors->first('work_experience.ar') }}</small>
                    @endif
                    {!! html()->textarea('work_experience[ar]', $user?->getTranslation('work_experience', 'ar') ?? '')
                        ->class('form-control')

                        ->placeholder('Work Experience in Arabic')
                        ->attribute('maxlength', 1000)

                        ->attribute('autocomplete', 'off')
                    !!}
                </div>
            </div>
        </div>
    </div>

    {{--    <div class="tab-pane fade" id="tab2">--}}
    {{--        <label>Years of Experience:</label>--}}
    {{--        <input type="number" class="form-control" name="experience">--}}
    {{--    </div>--}}
    {{--    <div class="tab-pane fade" id="tab3">--}}
    {{--        <label>Upload Certificates:</label>--}}
    {{--        <input type="file" class="form-control" name="certificates">--}}
    {{--    </div>--}}
    {{--    <div class="tab-pane fade" id="tab4">--}}
    {{--        <label>Career History:</label>--}}
    {{--        <textarea class="form-control" name="career_history"></textarea>--}}
    {{--    </div>--}}
</div>

