<x-layout>
    <h1>Lavora con noi</h1>
    <form action="{{route('postcareer')}}" method="POST">
      
      
        {{-- @if (session('Emailfailed'))
        
        <div class="alert alert-success">
          {{(session('Emailfailed'))}}
        </div>
        
        @endif --}}
        
        @csrf

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->email}}" aria-describedby="emailHelp" name="email">
          @error('email')
          {{$message}}
          @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Messaggio di presentazione</label>
            <textarea type="text" class="form-control" id="messagge-presentation" name="text"></textarea>
        </div>
        <option selected>Scegli un ruolo</option>
        <select class="form-select"  id="role"  name="role" aria-label="Default select example">
            <option value="admin">Admin</option>
            <option value="revisor">Revisor</option>
            <option value="writer">Writer</option>
          </select>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</x-layout>