@include('layouts.header')
    <main class="form-signin w-100 mx-auto">
        <form name="signup" method="post" action="{{ route('user.postRegister') }}" autocomplete="off">
            @csrf
            <h1 style="color:#c98e49;text-align: left;" class="h3 mb-3 fw-normal">{{__('messages.Free Signup')}}</h1>

            <div class="form-floating">
                <input style="" type="text"
                    class="form-control" id="name" name="name" placeholder="name@example.com" value="{{ old('name')}}">
                <label for="floatingInput" style="color: #636161;">{{__('messages.Name')}}</label>
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-floating">
                <input style="" type="text"
                    class="form-control" id="surname" name="surname" placeholder="Surname" value="{{ old('surname')}}">
                <label for="floatingPassword" style="color: #636161;">
                    {{__('messages.Surname')}}
                </label>
                @if ($errors->has('surname'))
                <span class="text-danger">{{ $errors->first('surname') }}</span>
                @endif
            </div>
            <div class="form-floating">
                <div class="row">
                    <div class="col-md-2">
                        <label for="floatingInput" style="color: #636161;">{{__('messages.Phone')}}</label>
                        @if(@$prefix != null || $prefix != '')
                            <select class="form-control" name="mobilenoprefix" id="mobilenoprefix" style="">
                                @foreach($prefix as $item)
                                    <option value="{{@$item->prefix}}" style="background-color:#636161;">+{{@$item->prefix}}</option>
                                @endforeach
                            </select>
                            
                        @endif
                    </div>
                    
                    <div class="col-md-10">
                        
                        <input style="" type="text"
                            class="form-control" id="mobileno" name="mobileno" placeholder="Phone" value="{{ old('mobileno')}}">
                        {{-- <label for="floatingInput" style="color: #636161;">Phone</label> --}}
                        
                    </div>
                    @if ($errors->has('mobileno'))
                    <span class="text-danger">{{ $errors->first('mobileno') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-floating">
                <input style="" type="text"
                    class="form-control" id="email" name="email" placeholder="test@example.com" value="{{ old('email')}}">
                <label for="floatingPassword" style="color: #636161;">
                    {{__('messages.Email')}}
                </label>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-floating">
                <input style="" type="password"
                    class="form-control" id="password" name="password">
                <label for="floatingInput" style="color: #636161;">{{__('messages.Password')}}</label>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-floating">
                <input style="" type="password"
                    class="form-control" id="password" name="cpassword">
                <label for="floatingPassword" style="color: #636161;">
                    {{__('messages.Confirm Password')}}
                </label>
                {{-- @if ($errors->has('cpassword'))
                <span class="text-danger">{{ $errors->first('cpassword') }}</span>
                @endif --}}
            </div>
            <div class="form-check py-2">
                <input class="form-check-input" type="checkbox" id="marketing" name="marketing" value="1">
                <label class="form-check-label" for="marketing" style="text-align: left!important;font-size: 12px;">
                    <span class="text-white">{{__('messages.Marketing')}}</span>
                </label>
                @if ($errors->has('marketing'))
                <span class="text-danger">{{ $errors->first('marketing') }}</span>
                @endif
            </div>
            <div class="form-check py-2">
                <input class="form-check-input" type="checkbox" id="privacy" name="privacy" value="1">
                <label class="form-check-label" for="privacy" style="text-align: left!important;font-size: 12px;">
                    <span class="text-white" >{{__('messages.Terms of Use')}}</span>
                </label>
                @if ($errors->has('privacy'))
                <span class="text-danger">{{ $errors->first('privacy') }}</span>
                @endif
            </div>
            <button type="submit" style="background-color: #c98e49;border-radius:30px;" class="w-100 btn mt-5" name="submit"><b>{{__('messages.Sign up')}}</b></button>
            <p style="color: #636161;" class="mt-5 mb-3">{{__('messages.Already have an account?')}}&nbsp;<a href=""
                    style="color: #c98e49;">{{__('messages.Log in')}}</a></p>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>