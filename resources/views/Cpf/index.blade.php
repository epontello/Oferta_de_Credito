<x-layout title='Consulta CPF'>

<br><br><br>
<div class="container">
    <h2 class="text-center"></h2>
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-4 pb-5">

                    <!--Form with header-->

                    <form action="{{route('cpfs.store')}}" method="POST">
                      @csrf
                        <div class="card border-primary rounded-0" >
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3> Ofertas de Crédito</h3>
                                    <p class="m-0">Digite o CPF a ser consultado</p>
                                </div>
                            </div>

                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2" >
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF" maxlength="11"
                                        required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\.*?)\.*/g, '$1');" 
                                        style="text-align:center;">
                                    </div>
                                </div>


                                <div class="text-center">
                                    <input type="submit" value="Enviar" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->


                </div>
	</div>
</div>



</x-layout>