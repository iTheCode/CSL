@if($type == 2)
<style type="text/css">
    table { vertical-align: top; }
    tr    { vertical-align: top; }
    td    { vertical-align: top; }
    .midnight-blue{
        background:#3bc0c3;
        padding: 4px 4px 4px;
        color:white;
        font-weight:bold;
        font-size:12px;
    }
    .silver{
        background:white;
        padding: 3px 4px 3px;
    }
    .clouds{
        background:#ecf0f1;
        padding: 3px 4px 3px;
    }
    .border-top{
        border-top: solid 1px #bdc3c7;
        
    }
    .border-left{
        border-left: solid 1px #bdc3c7;
    }
    .border-right{
        border-right: solid 1px #bdc3c7;
    }
    .border-bottom{
        border-bottom: solid 1px #bdc3c7;
    }
    table.page_footer {width: 100%; border: none; background-color: white; padding: 2mm;border-collapse:collapse; border: none;}
    }
    </style>
        <table cellspacing="0" style="width: 100%;">
            <tr>
                <td style="width: 25%; color: #444444;">
                    <img width="200px" src="data:image/<?=pathinfo(public_path('/assets/images/logo.png'), PATHINFO_EXTENSION);?>;base64,<?=base64_encode(file_get_contents(public_path('/assets/images/logo.png')));?>" alt="Logo"><br>
                    
                </td>
                <td style="width: 40%; color: #34495e;font-size:12px;text-align:center">Av. San Martín. N° 536 , Ica Ica<br> 
                    Citas: (056) 216166<br>
                    Email: info@clinicaluren.com.pe            </td>
                    <br>
                <td style="width: 40%; border: 1px solid #3bc0c3;border-radius: 10px;text-align: center;padding-top: 10px;">
                <?=strtoupper($input->pay_document_type->name);?> ELECTRONICA<br><p style="text-align:center">RUC: 20494306043 <br><br>{{ $input->serie }}-{{ $input->code }}</p><p style="text-align:center"></p>
                </td>
            </tr>
        </table>
        
        <table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;">
            <tr>
               <td style="width:50%;" class='midnight-blue'>CLIENTE</td>
            </tr>
            <tr>
               <td style="width:50%;" >
                {{ $input->rznSocialUsuario }}<br>{{ $input->numDocUsuario }}<br>{{ $input->direccionUsuario }}          
               </td>
                <td style="width: 50%">
               
           </td>
            </tr>
            
       
        </table>
        
        <br>
        
                       <br> 
           <table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;">
            <tr>
               <td style="width:50%;" class='midnight-blue'>DESCRIPCION</td>
            </tr>
            <tr>
               <td style="width:50%;" >
                Fecha: <?=ucfirst(strftime("%B %d, %G, %H:%M ",strtotime($input->emission_date)));?><br></td>
                 <td style="width: 50%">
               
           </td>
            </tr>
            
       
        </table>
      <br><br>
        <table cellspacing="0" style="width: 100%; text-align: left; font-size: 10pt;">
            <tr>
                <th style="width: 10%;text-align:center" class='midnight-blue'>CANT.</th>
                <th style="width: 60%" class='midnight-blue'>DESCRIPCION</th>
                <th style="width: 15%;text-align: right" class='midnight-blue'>PRECIO UNIT.</th>
                <th style="width: 15%;text-align: right" class='midnight-blue'>PRECIO TOTAL</th>
                
            </tr>
<?php
$nums = 1;
$descuento = 0;
$igv = 0;
$opgravada = 0;
$opnogravada = 0;
$opexonerada = 0;
$subtotal = 0;
$final_amount = 0;
?>
            @if(isset($input->insuredservice))
                @foreach($input->insuredservice->purchasecoverageservices as $item)
                <?php if ($nums%2==0){$clase="clouds";} else {$clase="silver";}?>
            <tr>
                <td class='{{ $clase }}' style="width: 10%; text-align: center">{{ $item->quantity }}</td>
                <td class='{{ $clase }}' style="width: 60%; text-align: left">{{ $item->service->name }}</td>
                <td class='{{ $clase }}' style="width: 15%; text-align: right">{{ Helpers::number_format_sunat($item->initial_amount/$item->quantity,2) }}</td>
                <td class='{{ $clase }}' style="width: 15%; text-align: right">{{ Helpers::number_format_sunat($item->initial_amount,2) }}</td>
                
            </tr>

                <?php 
                    $descuento += Helpers::number_format_sunat($item->initial_amount-$item->final_amount+$item->igv,2);
                    $final_amount += $item->initial_amount;
                    
                    if($item->igv != 0){
                        $opgravada += $item->final_amount-$item->igv;
                    }else{
                        $opnogravada += $item->final_amount-$item->igv;
                    }
                    $nums++;
                ?>
                @endforeach

                @foreach($input->insuredservice->purchaseinsuredservices as $item)
                <?php if ($nums%2==0){$clase="clouds";} else {$clase="silver";}?>
            <tr>
                <td class='{{ $clase }}' style="width: 10%; text-align: center">{{ $item->quantity }}</td>
                <td class='{{ $clase }}' style="width: 60%; text-align: left">{{ $item->service->name }}</td>
                <td class='{{ $clase }}' style="width: 15%; text-align: right">{{ Helpers::number_format_sunat($item->initial_amount/$item->quantity,2) }}</td>
                <td class='{{ $clase }}' style="width: 15%; text-align: right">{{ Helpers::number_format_sunat($item->initial_amount,2) }}</td>
                
            </tr>

                <?php 
                    $descuento += Helpers::number_format_sunat($item->initial_amount-$item->final_amount+$item->igv,2);
                    $final_amount += $item->initial_amount;
                    
                    if($item->igv != 0){
                        $opgravada += $item->final_amount-$item->igv;
                    }else{
                        $opnogravada += $item->final_amount-$item->igv;
                    }
                    $nums++;
                ?>
                @endforeach
            @endif

            @if(isset($input->particularservice))
                @foreach($input->particularservice->purchaseparticularservices as $item)
                <?php if ($nums%2==0){$clase="clouds";} else {$clase="silver";}?>
            <tr>
                <td class='{{ $clase }}' style="width: 10%; text-align: center">{{ $item->quantity }}</td>
                <td class='{{ $clase }}' style="width: 60%; text-align: left">{{ $item->service->name }}</td>
                <td class='{{ $clase }}' style="width: 15%; text-align: right">{{ Helpers::number_format_sunat($item->initial_amount/$item->quantity,2) }}</td>
                <td class='{{ $clase }}' style="width: 15%; text-align: right">{{ Helpers::number_format_sunat($item->initial_amount,2) }}</td>
                
            </tr>


                <?php 
                    $descuento += Helpers::number_format_sunat($item->initial_amount-$item->final_amount+$item->igv,2);
                    $final_amount += $item->initial_amount;
                    if($item->igv != 0){
                        $opgravada += $item->final_amount-$item->igv;
                    }else{
                        $opnogravada += $item->final_amount-$item->igv;
                    }
                    $nums++;
                ?>
                @endforeach
            @endif
<?php
$subtotal = Helpers::number_format_sunat($opgravada+$opnogravada,2);
$igv = Helpers::number_format_sunat($opgravada*0.18,2);
$total = Helpers::number_format_sunat($subtotal+$igv,2);
$descuentoP = Helpers::number_format_sunat((100*$descuento)/$final_amount,0);
?>
            <tr>
                <td><br></td>
                <td><br></td>
            </tr>
            <tr>
                <td colspan="3" style="widtd: 85%; text-align: right;">DESCUENTO S./ </td>
                <td style="widtd: 15%; text-align: right;"> {{ Helpers::number_format_sunat($descuento,2) }}</td>
            </tr>
            <tr>
                <td colspan="3" style="widtd: 85%; text-align: right;">OP. GRAVADA S./ </td>
                <td style="widtd: 15%; text-align: right;"> {{ Helpers::number_format_sunat($opgravada,2) }}</td>
            </tr>
            <tr>
                <td colspan="3" style="widtd: 85%; text-align: right;">OP. NO GRAVADA S./ </td>
                <td style="widtd: 15%; text-align: right;"> {{ Helpers::number_format_sunat($opnogravada,2) }}</td>
            </tr>
            <tr>
                <td colspan="3" style="widtd: 85%; text-align: right;">OP. EXONERADA S./ </td>
                <td style="widtd: 15%; text-align: right;"> 0.00</td>
            </tr>
            <tr>
                <td colspan="3" style="widtd: 85%; text-align: right;">IGV (18)% S./ </td>
                <td style="widtd: 15%; text-align: right;"> {{ Helpers::number_format_sunat($igv,2) }}</td>
            </tr><tr>
                <td colspan="3" style="widtd: 85%; text-align: right;">TOTAL S./ </td>
                <td style="widtd: 15%; text-align: right;"> {{ Helpers::number_format_sunat($total,2) }}</td>
            </tr>
        </table>
        
        
          
        <table cellspacing="0" style="width: 100%; text-align: left; font-size: 10pt;">
            <tr>
                <td colspan="" rowspan="0" style="text-align: left;"><br>SON: </td>
                <td style="padding-right: 200px;text-align: left;"><br> {{ Helpers::numtoletras($total) }} </td>
            </tr>
            </table>


@else
<style type="text/css" media="screen">
    .items tr > *{
        padding: 8px 100px 8px 2px;
    }
</style>
<div style="padding-left: -30px; padding-top: -40px; width: 10em">
        <table cellspacing="0" style="width: 17em;">
           
            <tr>
                <td style="margin:0 auto;font-size:0.8em;text-align:center;font-weight: bold;">
                     Clínica Señor de Luren S.A.C.
                </td>
                 
            </tr>
            <tr>
                <td style="margin:0 auto;font-size:0.7em;text-align:center;">
                     Av. San Martín. N° 536 , Ica Ica  
                </td>
                 
            </tr>
            <tr> 
                <td style="margin:0 auto;font-size:0.7em;text-align:center;">
                     
                    Mail: info@clinicaluren.com.pe   
                </td>
            </tr>
            <tr> 
                <td style="margin:0 auto;font-size:0.7em;text-align:center;">
                      RUC: 20494306043     
                </td>
            </tr>
            <tr>
                <td style="margin:0 auto;font-size:0.7em;text-align:center;">
                     Citas: (056) 216166
                           
                </td>
                
            </tr>
            <tr>
                <td style="margin:0 auto;font-size:0.7em;text-align:center;">
                <br><?=strtoupper($input->pay_document_type->name);?> ELECTRONICA<p style="text-align:center;font-size:1em">{{ $input->serie }}-{{ $input->code }}  </p>
                </td>
            </tr>
        </table>
        </table>

        <table  style="width: 14em">
            <tr>
                
                <td>--------------------------------------------------</td>
                <td><br></td>
                
            </tr>
            <tr>
                <td  COLSPAN=2 style="width:4em;font-size:0.7em;" >
                    Cliente: {{ $input->rznSocialUsuario }}    
                </td>
                
            </tr>
            <tr>
               <td COLSPAN=2 style="width:4em;font-size:0.7em;" >
                    DNI/RUC: {{ $input->numDocUsuario }}    
                </td>
                
            </tr>
            <tr>
                <td COLSPAN=2 style="width:8em;font-size:0.7em;" >
                    Dirección: {{ $input->direccionUsuario }}    
                </td>
                
            </tr>
            <tr>
                <td  COLSPAN=2 style="width:4em;font-size:0.7em;" >
                Fecha: <?=ucfirst(strftime("%B %d, %G, %H:%M ",strtotime($input->emission_date)));?><br>     
                </td>
                
            </tr>
            
            <tr>
                <td  COLSPAN=2 style="width:4em;font-size:0.7em;" >
                Atención: {{ $input->employee->name }}
                </td>
                
            </tr>
        </table>
        
        <label style="width: 10em">--------------------------------------------------</label>
       
<?php
$descuento = 0;
$igv = 0;
$opgravada = 0;
$opnogravada = 0;
$opexonerada = 0;
$subtotal = 0;
$final_amount = 0;
?>     
      
        <table width="16.5em">
                <tr>
                    <th style="vertical-align:text-top; text-align: center; font-size: 0.7em" >CANT.</th>
                    <th style="vertical-align:text-top; text-align: center; font-size: 0.7em" >DESCRIPCION</th>
                    <th style="vertical-align:middle; text-align: center; font-size: 0.7em" >PRECIO. U.</th>
                    <th style="vertical-align:middle; text-align: center; font-size: 0.7em" >PRECIO. T.</th>
                    
                </tr>
            @if(isset($input->insuredservice))
                @foreach($input->insuredservice->purchasecoverageservices as $item)
                <tr>
                    <td  style="text-align: center; font-size:0.7em" >1</td>
                    <td  style="text-align: left; font-size:0.7em" >{{ $item->service->name }}</td>
                    <td  style="text-align: right; font-size:0.7em" > {{ Helpers::number_format_sunat($item->final_amount,2) }}</td>
                    <td  style="text-align: right; font-size:0.7em" >{{ Helpers::number_format_sunat($item->final_amount,2) }}</td>
                </tr>
                <?php 
                    $descuento += 0;
                    $final_amount += $item->final_amount;
                    
                    if($item->igv != 0){
                        $opgravada += $item->final_amount-$item->igv;
                    }else{
                        $opnogravada += $item->final_amount-$item->igv;
                    }
                    
                ?>
                @endforeach

                @foreach($input->insuredservice->purchaseinsuredservices as $item)
                <tr>
                    <td  style="text-align: center; font-size:0.7em" >{{ $item->quantity }}</td>
                    <td  style="text-align: left; font-size:0.7em" >{{ $item->service->name }}</td>
                    <td  style="text-align: right; font-size:0.7em" > {{ Helpers::number_format_sunat($item->initial_amount/$item->quantity,2) }}</td>
                    <td  style="text-align: right; font-size:0.7em" >{{ Helpers::number_format_sunat($item->initial_amount,2) }}</td>
                    
                </tr>
                <?php 
                    $descuento += Helpers::number_format_sunat($item->initial_amount-$item->final_amount+$item->igv,2);
                    $final_amount += $item->initial_amount;
                    
                    if($item->igv != 0){
                        $opgravada += $item->final_amount-$item->igv;
                    }else{
                        $opnogravada += $item->final_amount-$item->igv;
                    }
                ?>
                @endforeach
            @endif


            @if(isset($input->particularservice))
                @foreach($input->particularservice->purchaseparticularservices as $item)
                <tr>
                    <td  style="text-align: center; font-size:0.7em" >{{ $item->quantity }}</td>
                    <td  style="text-align: left; font-size:0.7em" >{{ $item->service->name }}</td>
                    <td  style="text-align: right; font-size:0.7em" > {{ Helpers::number_format_sunat($item->initial_amount/$item->quantity,2) }}</td>
                    <td  style="text-align: right; font-size:0.7em" >{{ Helpers::number_format_sunat($item->initial_amount,2) }}</td>
                    
                </tr>

                <?php 
                    $descuento += Helpers::number_format_sunat($item->initial_amount-$item->final_amount+$item->igv,2);
                    $final_amount += $item->initial_amount;
                    if($item->igv != 0){
                        $opgravada += $item->final_amount-$item->igv;
                    }else{
                        $opnogravada += $item->final_amount-$item->igv;
                    }
                ?>
                @endforeach
            @endif
<?php
$subtotal = Helpers::number_format_sunat($opgravada+$opnogravada,2);
$igv = Helpers::number_format_sunat($opgravada*0.18,2);
$total = Helpers::number_format_sunat($subtotal+$igv,2);
$descuentoP = Helpers::number_format_sunat((100*$descuento)/$final_amount,0);
?>
        </table><br><br>
        <table style="padding-right: -10px;width:16em;">

            <tr>
                <td colspan="3" style="font-size:0.7em; text-align: right;">Descuento S./ </td>
                <td style="font-size:0.7em; text-align: right;"> {{ Helpers::number_format_sunat($descuento,2) }}</td>
            </tr>
            <tr>
                <td colspan="3" style="font-size:0.7em; text-align: right;">Op Gravada S./ </td>
                <td style="font-size:0.7em; text-align: right;"> {{ Helpers::number_format_sunat($opgravada,2) }}</td>
            </tr>
            <tr>
                <td colspan="3" style="font-size:0.7em; text-align: right;">Op No Gravada S./ </td>
                <td style="font-size:0.7em; text-align: right;"> {{ Helpers::number_format_sunat($opnogravada,2) }}</td>
            </tr>
            <tr>
                <td colspan="3" style="font-size:0.7em; text-align: right;">Op Exonerada S./ </td>
                <td style="font-size:0.7em; text-align: right;"> 0.00</td>
            </tr>
            <tr>
                <td colspan="3" style="font-size:0.7em; text-align: right;">SUBTOTAL S./ </td>
                <td style="font-size:0.7em; text-align: right;"> {{ Helpers::number_format_sunat($subtotal,2) }}</td>
            </tr>
            <tr>
                <td colspan="3" style="font-size:0.7em; text-align: right;">IGV (18)% S./ </td>
                <td style="font-size:0.7em; text-align: right;"> {{ Helpers::number_format_sunat($igv,2) }}</td>
            </tr><tr>
                <td colspan="3" style="font-size:0.7em; text-align: right;">TOTAL S./ </td>
                <td style="font-size:0.7em; text-align: right;"> {{ Helpers::number_format_sunat($total,2) }}</td>
            </tr>
            <tr>
                <td><br></td>
                
            </tr>
              <tr>
                <td  style="vertical-align:text-top;font-size:0.6em;"><br>SON:</td>
                <td COLSPAN=0 style="font-size:0.6em;"> <br>{{ Helpers::numtoletras($total) }}</td>
            </tr>
            
        </table>
        
        
          
        
          
            
        <label style="width: 8em">--------------------------------------------------</label>
        <table cellspacing="0" style="width: 8em;">
            <tr>
                <td style=" padding-right: -60px ;font-size:0.7em;text-align:right;">
                    Autorización SUNAT:      
                </td>
            </tr>
            <tr>
                <td style=" padding-right: -60px ;font-size:0.7em;text-align:right;">
                    Gracias por su preferencia!         
                </td>
            </tr>
        </table>

</div>

@endif