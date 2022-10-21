<x-head/>
<form action="{{route('sendEmail')}}" method="POST">
@csrf
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name"></label>
            <input type="text" name="name" class="form-control" placeholder="Nombre">
        </div>
    </div>
        <div class="form-group">
            <label for="email"></label>
            <input type="text" name="email" class="form-control" placeholder="email">
        </div>
        <div class="form-group">
            <label for="message"></label>
            <input type="text" name="message" class="form-control" placeholder="message">
        </div>
        <input type="submit" value="Send Message" class="btn btn-primary">
</div>
</form>







</form>