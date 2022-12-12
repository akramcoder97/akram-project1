

<div class="row my4">
    <div class="col-md-4">
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{$errors}}
        </div>
        @endforeach
    </div>
</div>