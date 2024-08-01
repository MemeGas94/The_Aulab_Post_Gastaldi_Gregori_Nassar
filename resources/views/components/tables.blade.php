<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
      </tr>
    </thead>
    
    <tbody>
        @foreach ($roleRequests as $user)
            
        
        <tr>
          <th scope="row">{{$user->id}}</th>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>
            <button class="btn btn-primary">Accetta {{$role}}</button>
        </td>

        </tr>



        @endforeach
      
      
    </tbody>
  </table>