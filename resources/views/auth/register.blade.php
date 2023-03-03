<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
    
        <!-- Name -->
        <div class="form-group">
            <label for="name">Name</label>
            <<input class="form-control" type="text" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}" required autofocus autocomplete="name" />
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    
        <!-- Email Address -->
        <div class="form-group">
            <label for="email">Email Address</label>
            <input class="form-control" type="email" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required autocomplete="username" />
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    
        <!-- Password -->
        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password" required autocomplete="new-password" />
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    
        <!-- Confirm Password -->
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" required autocomplete="new-password" />
            @error('password_confirmation')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    
        <!-- Terms and Conditions -->
        <div class="form-group">
            <div class="custom-control custom-checkbox checkbox-success">
                <input type="checkbox" class="custom-control-input" id="checkbox-signup" name="terms" required>
                <label class="custom-control-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                @error('terms')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    
        <div class="form-group mb-0 text-center">
            <button class="btn btn-gradient btn-block" type="submit">Sign Up Free</button>
        </div>
    
        <div class="row mt-4">
            <div class="col-sm-12 text-center">
                <p class="text-muted mb-0">Already have an account? <a href="{{ route('login') }}" class="text-dark ml-1"><b>Sign In</b></a></p>
            </div>
        </div>
    </form>
    
</x-guest-layout>
