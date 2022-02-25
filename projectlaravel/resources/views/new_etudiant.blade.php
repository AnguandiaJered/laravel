@extends('layouts.master')
@section('content')
<div class="container">
    @if($errors->any())
        <div class="alert alert-primary">
            @foreach ($errors->all() as $item)
                <p>{{ $item }}</p>
            @endforeach
        </div>
    @endif
   
    <form id="monForm">
       @csrf                 
            <div class="form-group">
                <label for="noms">Noms</label>
                <input type="text" name="noms" id="noms" placeholder="noms" class="form-control">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" placeholder="age" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Valider">
            </div>
    </form>
</div>
@endsection

@section('script')
    <script>
        $('#monForm').submit(function(event){

            event.preventDefault();
            
            $.ajax({
                url:'{{ route("store_etudiant")}}',
                method: 'POST',
                data: new FormData(this),
                processData:false,
                contentType:false,
                cache:false,
                headers:{'X-CSRF-Token':$('meta[name="csrf-token"]').attr('content')},
                
                success: function(data){
                    alert('insert successfully');
                    $('#monForm')[0].reset();
                }
            });
        });
    </script>
@endsection