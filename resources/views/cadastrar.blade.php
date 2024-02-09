@extends('padrao')
@section('content')

<div class="container">
    <form class="row g-3" Method="Post" action="{{route('cadastrar-contato')}}">
        @csrf 
        <div class="col-md-8">
            <label for="inputNome" class="form-label">Name</label>
            <input type="text" class="form-control" name='nomeContato' id="inputNome">
        </div>

        <div class="col-md-4">
            <label for="inputFone" class="form-label">CPF</label>
            <input type="text" class="form-control" name='foneContato' id="inputFone">
        </div>

        <div class="col-md-4">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="e-mail" class="form-control" name='emailContato' id="inputEmail">
        </div>

        <div class="col-md-4">
            <label for="inputSala" class="form-label">Sala</label>
            <input type="sala" class="form-control" name='salaContato' id="inputSala">
        </div>
    
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>

<div class="container">
<div class="card mb-3">
    <img src="../images/bannerHospital.jpg" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">Hospital Brasil</h5>
      <p class="card-text">O Hospital e Maternidade Brasil foi inaugurado em 1970 em Santo André, por um grupo de médicos cujo objetivo foi oferecer, às famílias da região do ABC Paulista, serviços de saúde de alto padrão. </p>
      <p class="card-text"><small class="text-body-secondary">Atualizado a poucos minutos atras</small></p>
    </div>
  </div>
</div>


@endSection
