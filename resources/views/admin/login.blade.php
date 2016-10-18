<form  role="form" action="{{route('admin.submit')}}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <div class="col-md-8">
        <div class="row">
            <div class="col-sm-6 form-group">
                <input class="form-control" id="name" name="name" placeholder="name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
                <input class="form-control" id="pass" name="pass" placeholder="pass" type="password" required>
            </div>
        </div>
        <br>
        <div class="col-md-12 form-group">
            <button class="btn pull-right" type="submit">Login</button>
        </div>
    </div>
</form>