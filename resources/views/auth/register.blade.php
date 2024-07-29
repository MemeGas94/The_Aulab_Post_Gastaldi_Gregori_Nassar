<x-layout>


    <form method="POST" action="{{route('register')}}">
        @csrf
        <div class="mb-3">
            <label for="Nickname" class="form-label">Nickname</label>
            <input type="text" name="name" class="form-control" id="Nickname">

        </div>

        <div class="mb-3">
            <label for="Email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="Email">

        </div>

        <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="Password">
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Password Confirmation</label>
            <input type="password" name="password_confirmation" class="form-control" id="PasswordConfirmation">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>











</x-layout>
