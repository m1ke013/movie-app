
<!-- MODAL -->
<div class="modal fade" id="md-login" tabindex="-1" role="dialog" data-autodismiss="true" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 420px">
        <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title">Sign In</div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="close-Btn" aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <x-auth-session-status  :status="session('status')" />
            <div style="display: none;"></div>
            <form autocomplete="off" class="ajax" method="POST" action="{{ route('login') }}">
            @csrf
                <div class="form-group">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="form-control form-control-lg"  type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="form-group">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="form-control  form-control-lg" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                <small>
                    <a href="https://fmovies.wtf/#" data-rmodal="#md-forgot-password">Forgot your password?</a>
                </small>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember" checked="checked">
                <label class="form-check-label" for="remember">{{ __('Remember me') }}</label>
            </div>
            <div class="form-group mt-4">
                <x-primary-button  class="btn full mt-2 btn-lg btn-primary">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>

            </form>
        </div>
        <div class="modal-footer">
            <span class="text-muted">Don't have an account? </span>
            <a data-toggle="modal" data-target="#md-register">Register</a>
        </div>
        </div>
    </div>
</div>
<div class="modal fade" id="md-forgot-password" data-prevent-duplicate="true" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 420px">
        <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title">Reset Password</div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="closeBtn" aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <div style="display: none;"></div>
            <form autocomplete="off" class="ajax" data-action="ajax/user/forgot-password">
            <div class="form-group">
                <label>Your account</label>
                <input type="text" class="form-control form-control-lg" name="identifier" placeholder="Enter your username or email" required="">
            </div>
            <div class="form-group">
                <div class="row">
                <div class="col-sm-5">
                    <img class="captcha tip" data-src="https://fmovies.wtf/captcha/default?yhrie3DV" title="" style="cursor: pointer;" data-original-title="Click to reload">
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control form-control-lg" name="captcha" placeholder="Enter the captcha" required="">
                </div>
                </div>
            </div>
            <div class="form-group mt-4">
                <button type="button" class="submit btn rd full mt-2 btn-lg btn-primary">Forgot</button>
            </div>
            <div class="loader"></div>
            </form>
        </div>
        <div class="modal-footer">
            <a href="https://fmovies.wtf/#" data-rmodal="#md-login">Back to Sign In</a>
        </div>
        </div>
    </div>
</div>
<div class="modal fade" id="md-request" data-prevent-duplicate="true" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 450px">
    <div class="modal-content">
    <div class="modal-header">
        <div class="modal-title">Send Your Request</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body mb-3">
        <p class="text-muted">If your movie/shows isn't listed in our library, you can send your request here, we will try to make it available asap!</p>
        <div style="display: none;"></div>
        <form autocomplete="off" class="ajax" data-action="ajax/film/request" data-source="ajax/film/search?form=request" data-once="true">
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control form-control-lg" name="email" placeholder="Your email" required="">
        </div>
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="autocomplete form-control form-control-lg" name="title" placeholder="Enter your movie/show name" required="" autocomplete="off">
        </div>
        <div class="suggestions" style="display:none"></div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control form-control-lg" name="description" placeholder="Link IMDb if possible" required="">
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-sm-5">
                <img class="captcha tip" data-src="https://fmovies.wtf/captcha/default?KQGhWVy1" title="" style="cursor: pointer;" data-original-title="Click to reload">
            </div>
            <div class="col-sm-7">
                <input type="text" class="form-control form-control-lg" name="captcha" placeholder="Enter the captcha" required="">
            </div>
            </div>
        </div>
        <div class="form-group mt-4">
            <button type="button" class="submit btn rd full mt-2  mb-4 btn-lg btn-primary">Send Request</button>
        </div>
        <input type="hidden" name="vrf">
        <div class="loader"></div>
        </form>
    </div>
    </div>
    </div>
</div>
<div class="modal fade" id="md-register" tabindex="-1" role="dialog" data-autodismiss="true" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 420px">
        <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title">Create Account</div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="closeBtn" aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <p class="text-muted">Create an account to enjoy more features</p>
            <div style="display: none;"></div>
            <form autocomplete="off" class="ajax" data-action="ajax/user/register" data-user="true">
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control form-control-lg" name="username" placeholder="Your username" required="">
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control form-control-lg" name="email" placeholder="Your email" required="">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control form-control-lg" name="password" placeholder="Your password" required="">
            </div>
            <div class="form-group">
                <label>Password confirmation</label>
                <input type="password" class="form-control form-control-lg" name="password_confirmation" placeholder="Repeat your password" required="">
            </div>
            <div class="form-group">
                <div class="row">
                <div class="col-sm-5">
                    <img class="captcha tip" data-src="https://fmovies.wtf/captcha/default?xQm0Y8yt" title="" style="cursor: pointer;" data-original-title="Click to reload">
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control form-control-lg" name="captcha" placeholder="Enter the captcha" required="">
                </div>
                </div>
            </div>
            <div class="form-group mt-4">
                <button type="submit" class="btn rd full mt-2 btn-lg btn-primary">Register</button>
            </div>
            <div class="loader"></div>
            </form>
        </div>
        <div class="modal-footer">
            <span class="text-muted">Already have an account?</span>
            <a href="https://fmovies.wtf/#" data-rmodal="#md-login">Sign in</a>
        </div>
        </div>
    </div>
</div>
<!-- MODAL -->
  