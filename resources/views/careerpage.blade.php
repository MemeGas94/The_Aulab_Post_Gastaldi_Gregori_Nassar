<x-layout>
    <h1>Lavora con noi</h1>
    <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" disabled aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Messaggio di presentazione</label>
            <textarea type="text" class="form-control" id="messagge-presentation" name="messagge-presentation"></textarea>
          </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Admin</label>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Revisor</label>
          </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Writer</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</x-layout>