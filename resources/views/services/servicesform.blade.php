

                            <div class="card-body mx-4">
                                <h6 class="mask-strong" style="font-weight: 600;"> Please fill your details for detailed analysis</h6>

                                <!--Body-->
                                <div class="row">

                                    <div class="md-form mt-4 col">
                                        <input type="text" id="Form-name" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  value="name one" required>
                                        <label for="Form-name">Full Name</label>
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>


                                <div class="row">
                                    <div class="md-form col">

                                    <input type="email" id="Form-email1" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  @if(isset(auth()->user()->email))
                                    value="{{ auth()->user()->email }}" required>
                                        @endif
                                        <label for="Form-email1">Email Address</label>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>


                                    <div class="md-form col">
                                        <input type="tel" id="phone" name="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"  @if(isset(auth()->user()->phone))
                                                value="{{ auth()->user()->phone }}" required>
                                        @endif
                                        <label for="phone">Phone Number</label>
                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="md-form col">
                                        <input type="text" id="date-picker-example" name="dob" value="test" class="datepicker form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}"  value="23/12/1985" required>
                                        <label for="date-picker-example">Date Of Birth</label>
                                        @if ($errors->has('dob'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="md-form col">
                                        <input type="text" id="input_starttime" name="tob" value="test" class="timepicker form-control{{ $errors->has('tob') ? ' is-invalid' : '' }}"  value="05:36 PM" required>
                                        <label for="input_starttime">Time Of Birth</label>
                                        @if ($errors->has('tob'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('tob') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="md-form col">
                                        <input type="text" id="country" name="cob" value="test" class="form-control{{ $errors->has('cob') ? ' is-invalid' : '' }}"  value="India" required>
                                        <label for="country">Country Of Birth</label>
                                        @if ($errors->has('cob'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('cob') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="md-form col">
                                        <input type="text"  required id="city" name="pob" value="test" class="form-control{{ $errors->has('pob') ? ' is-invalid' : '' }}"  value="Hyderabad">
                                        <label for="city">City Of Birth</label>
                                        @if ($errors->has('pob'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('pob') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="mt-4  row d-flex justify-content-center">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="materialInline1" value="Male" name="gender" required>
                                        <label class="form-check-label" for="materialInline1">Male</label>
                                    </div>
                                    <!-- Material inline 2 -->
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="materialInline2" value="Female" name="gender"  required>
                                        <label class="form-check-label" for="materialInline2">Female</label>
                                    </div>
                                </div>


                                <div class="md-form">
                                    <textarea id="textarea-char-counter" class="md-textarea form-control{{ $errors->has('comments') ? ' is-invalid' : '' }}"  value="{{ old('comments') }}" name="comments" length="120" rows="3" required></textarea>
                                    <label for="textarea-char-counter">Please post your Query*</label>
                                    @if ($errors->has('comments'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('comments') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <select class="mdb-select md-form mt-5" name="reftype" id="reftype" onchange="changeFunc();" required>
                                    <option value="" disabled selected>How Did You Know About Astrolifeguide.com</option>
                                    <option value="SMM">Social Media</option>
                                    <option value="EU">Existing User</option>
                                    <option value="PM">Print Media</option>
                                    <option value="WOM">Friend Or Relative</option>
                                </select>

                                <div class="md-form ">
                                    <textarea id="refdetails" class="form-control md-textarea" name="refdetails" id="refdetails" style="display:none;" length="50" rows="1"></textarea>
                                    <label style="display:none;" for="refdetails">Referred By Details</label>
                                </div>

