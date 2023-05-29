<x-layout title='Lista Ofertas de Crédito'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
.demo,h4{padding:30px 0}
.pricingTable,h4{text-align:center}
body{padding:0;margin:0}
.demo{background:#FFFFFF}
h4{color:#444}
.pricingTable{background:#fff;border-radius:10px;overflow:hidden;position:relative;transition:all .3s ease 0s}
.pricingTable:hover{box-shadow:0 0 5px rgba(0,0,0,.8) inset,0 0 10px rgba(0,0,0,.8)}
.pricingTable svg{display:block;margin-left:-1px}
.pricingTable .pricing-content{padding:50px 0 30px;position:relative}
.pricingTable .title{font-size:25px;font-weight:600;color:#ae003d;text-transform:uppercase;margin:0 0 10px}
.pricingTable .pricing-content ul{padding:0;margin:0 0 30px;list-style:none}
.pricingTable .pricing-content ul li{font-size:18px;color:rgba(0,0,0,.3);line-height:40px;text-transform:capitalize}
.pricingTable .pricingTable-signup{display:inline-block;padding:8px 50px;background:#ae003d;border-radius:20px;font-size:20px;font-weight:600;color:#fff;text-transform:uppercase;position:relative;transition:all .3s ease 0s}
.pricingTable:hover .pricingTable-signup{box-shadow:0 0 10px #ae003d}
.pricingTable .pricingTable-signup:hover{color:#ae003d;background:#fff;box-shadow:0 0 10px #ae003d,0 0 10px #000 inset}
.pricingTable.blue .title{color:#005c99}
.pricingTable.blue .pricingTable-signup{background:#005c99}
.pricingTable.blue:hover .pricingTable-signup{box-shadow:0 0 10px #005c99}
.pricingTable.blue .pricingTable-signup:hover{color:#005c99;background:#fff;box-shadow:0 0 10px #005c99,0 0 10px #000 inset}
.pricingTable.red .title{color:#db2c29}
.pricingTable.red .pricingTable-signup{background:#db2c29}
.pricingTable.red:hover .pricingTable-signup{box-shadow:0 0 10px #db2c29}
.pricingTable.red .pricingTable-signup:hover{color:#db2c29;background:#fff;box-shadow:0 0 10px #db2c29,0 0 10px #000 inset}
@media only screen and (max-width:990px){.pricingTable{margin-bottom:30px}
}
</style>
        <div class="demo">
            <div class="container">
                <h4 style="padding-top:10px">Ofertas de Crédito disponíveis para o CPF: {{$cpf}}</h4>
                <div class="row">

                    <?php $i=0; foreach($matriz as $item): ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="pricingTable <?php if($i==0) echo 'red'; else echo 'blue'; ?> border border-dark">
                                <svg x="0" y="0" viewBox="0 0 360 220">
                                    <g>
                                        <?php if($i==0) 
                                                echo '<path fill="#db2c29" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                                c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                                s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                                L0.732,193.75z"></path>';                                             
                                            else echo '<path fill="#005c99" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                            c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                            s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                            L0.732,193.75z"></path>'; ?>                                       

                                    </g>
                                    <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="35"><?=$item['NOMEINST']?></text>
                                    <!-- <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                                    <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text> -->
                                </svg>
                                <div class="pricing-content">
                                    <h3 class="title"><b><?=$item['NOMEMODA']?></b></h3>
                                    <ul class="pricing-content">
                                        <li><b>Qtd.Minima de Parcelas:</b> <?=$item['QTDPARCMIN']?></li>
                                        <li><b>Qtd.Máxima de Parcelas:</b> <?=$item['QTDPARCMAX']?></li>
                                        <li><b>Valor Mínimo:</b> <?=$item['VALORMINIMO']?></li>
                                        <li><b>Valor Máximo:</b> <?=$item['VALORMAXIMO']?></li>
                                        <li><b>Juros/Mês:</b> <?=$item['JUROSMES']?></li>
                                        <li><b style="font-size: 8">Digite o Valor Desejado :</b><br> <input type="text" id="valor<?=$i?>" style="text-align: center;" onkeyup="formatarMoeda<?=$i?>()" 
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\.*?)\.*/g, '$1');" ></li>
                                        <li><b>Digite N° Parcelas :</b><br> <input type="text" id="parc<?=$i?>" onblur="calcula<?=$i?>();" style="text-align: center;"></li>
                                        <li><b>Valor a Pagar :</b><br> <input type="text" id="valorpagar<?=$i?>" style="text-align: center;"></li>

                                        <input type="hidden" id="juros<?=$i?>" value="<?=$item['JUROSMES']?>">
                                    </ul>
                                    <!-- <a href="#" class="pricingTable-signup" >Simulação</a> -->
                                    <!-- Button to Open the Modal -->
                                    <!-- <button type="button" class="pricingTable-signup" data-toggle="modal" data-target="#myModal">
                                        Fazer Simulação
                                    </button> -->
                                    <script>

                                        function calcula<?=$i?>(){
                                            var valor = document.getElementById("valor<?=$i?>").value;
                                            var parcelas = document.getElementById("parc<?=$i?>").value;
                                            var juros = document.getElementById("juros<?=$i?>").value;
                                            valor = valor.replace(/\./g,'');
                                            valor = valor.replace(",", ".");
                                            var interest = (valor * (juros * 0.01)) / parcelas;
                                            var total = ((valor / parcelas) + interest).toFixed(2);
                                            var valortotal = parseFloat(valor) + parseFloat(total);
                                            var f2 = valortotal.toLocaleString('pt-br', {minimumFractionDigits: 2});
                                            document.getElementById("valorpagar<?=$i?>").value = f2;
                                        }

                                        function formatarMoeda<?=$i?>() {
                                            var elemento = document.getElementById('valor<?=$i?>');
                                            var valor = elemento.value;
                                            valor = valor + '';
                                            valor = parseInt(valor.replace(/[\D]+/g, ''));
                                            valor = valor + '';
                                            valor = valor.replace(/([0-9]{2})$/g, ",$1");
                                            if (valor.length > 6) {
                                                valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
                                            }
                                            elemento.value = valor;
                                            if(valor == 'NaN') elemento.value = '';
                                        }
                                    </script>

                                </div>
                            </div>
                        </div>
                    <?php $i++; endforeach; ?>                    
                </div>
                <br>
                <a href="{{ 'cpfs' }}" ><button style="background: #069cc2; border-radius: 6px; padding: 15px; cursor: pointer; 
                color: #fff; border: none; font-size: 16px; border: 1px solid black;">Consultar CPF</button></a>
            </div>
        </div>

</x-layout>