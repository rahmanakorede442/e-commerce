@extends ('master')
@section ('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
        <form>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
@endsection