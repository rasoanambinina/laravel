@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Personnel</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('personnels.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('personnels.update',$personnel->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Reference:</strong>
                         <input type="text" name="referencePersonnel" value="{{ $personnel->referencePersonnel }}" class="form-control" placeholder="Reference Personnel">
                     </div>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Nom:</strong>
                         <input type="text" class="form-control"  value="{{ $personnel->nom }}" name="nom" placeholder="Nom Personnel">
                     </div>
                 </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Prénom:</strong>
                     <input type="text" class="form-control"  value="{{ $personnel->prenom }}" name="prenom" placeholder="Prenom Personnel">
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Numéro CIN:</strong>
                     <input type="text" class="form-control"  value="{{ $personnel->numCIN }}" name="numCIN" placeholder="Numéro CIN Personnel">
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Téléphone:</strong>
                     <input type="text" class="form-control"  value="{{ $personnel->telephone }}" name="telephone" placeholder="Téléphone Personnel">
                 </div>
             </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Adresse:</strong>
                         <input type="text" class="form-control" value="{{ $personnel->adresse }}" name="adresse" placeholder="Adresse Personnel">
                     </div>
                 </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Fonction:</strong>
                     <input type="text" class="form-control" value="{{ $personnel->fonction }}"  name="fonction" placeholder="Fonction Personnel">
                 </div>
             </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection