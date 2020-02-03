<div class="form-group">
    <div class="form-row">
        <div class="col">
            <input value="{{ $users->first_name ?? old('name') }}" type="text" class="form-control" placeholder="First name">
        </div>
        <div class="col">
            <input value="{{ $users->last_name ?? old('lname') }}" type="text" class="form-control" placeholder="First name">
        </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input value="{{ $users->email ?? old('email') }}" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">envoyer</button>
    </div>
</div>

