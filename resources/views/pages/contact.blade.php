@extends('main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Contact me</h1>
            <hr>
            <form>
                <div class="form-group">
                    <label name="email">Email:</label>
                    <input id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label name="subject">Subject:</label>
                    <input id="subject" name="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label name="message">Message:</label>
                    <textarea id="message" name="message" class="form-control">Ayy...</textarea>
                </div>
                <input type="submit" value="Send" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection