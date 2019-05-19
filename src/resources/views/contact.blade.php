<link href="{{asset('vendor/contact/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
<link href="{{asset('vendor/contact/css/style.css')}}" rel="stylesheet">
<script src="{{asset('vendor/contact/js/jquery.min.js')}}"></script>
<script src="{{asset('vendor/contact/js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/contact/js/contact.js')}}"></script>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well well-sm">
                <form class="form-horizontal" id="form-contact" action="" method="post">
                    @csrf
                    <fieldset>
                        <legend class="text-center">Contact us</legend>

                        @if(session('ok'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ session('ok') }}
                            </div>
                        @endif

                        <!-- Name input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Name</label>
                            <div class="col-md-9 @error('name') has-error @enderror">
                                <input id="name" name="name" type="text" placeholder="Your name" class="form-control" value="{{old('name')}}">
                                @error('name')
                                <span class="help-block" role="alert">
                                  {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="email">Your E-mail</label>
                            <div class="col-md-9 @error('email') has-error @enderror">
                                <input id="email" name="email" type="text" placeholder="Your email" class="form-control" value="{{old('email')}}">
                                @error('email')
                                <span class="help-block" role="alert">
                                  {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Message body -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="message">Your message</label>
                            <div class="col-md-9 @error('message') has-error @enderror">
                                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5">{{old('message')}}</textarea>
                                @error('message')
                                <span class="help-block" role="alert">
                                  {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary btn-lg submit-contact">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>