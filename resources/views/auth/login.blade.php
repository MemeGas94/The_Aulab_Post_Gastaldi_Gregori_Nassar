<x-layout>

    <form method="POST" action="{{route('login')}}">

        @csrf
        
        <div class="mb-3">
            <label for="Email" class="form-label">Email address</label>
            <input type="email" name='Email' class="form-control" id="Email">

        </div>
        
        <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" name="Password" class="form-control" id="Password">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


















</x-layout>




