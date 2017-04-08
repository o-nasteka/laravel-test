@if (count($errors) > 0)
        <!-- List form errors -->
<div class="alert alert-danger">
    <strong>Some error!</strong>

    <br><br>

    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
