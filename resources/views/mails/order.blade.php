<html>

<body style="background-color:#e2e1e0;font-family: Open Sans, sans-serif;font-size:100%;font-weight:400;line-height:1.4;color:#000;">
<table style="max-width:670px;margin:50px auto 10px;background-color:#fff;padding:50px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-moz-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24); border-top: solid 10px #4da2fd;">
    <thead>
    <tr>
        <th style="text-align:left;"><img style="max-width: 150px;" src="https://scontent-dfw5-1.xx.fbcdn.net/v/t1.0-9/119474675_1051425875271764_1054117552613951314_o.jpg?_nc_cat=110&_nc_sid=730e14&_nc_eui2=AeGdESjhpNH-zUZRIOe5nBZ38Srv1Yn_mt3xKu_Vif-a3V6Ykb0bV78yrQCG2F1dFrMF33joQQMoTncPoKaSKVIe&_nc_ohc=0Z2GIu-wH4AAX8PVM6I&_nc_ht=scontent-dfw5-1.xx&oh=f772941a1e500a275ebd7a48e3ab30bd&oe=5F85FF48" width="120px" height="120px" alt="bachana tours"></th>
        <th style="text-align:right;font-weight:400;">{{NOW()->format('d-m-Y')}}</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="height:35px;"></td>
    </tr>
    <tr>
        <td colspan="2" style="border: solid 1px #ddd; padding:10px 20px;">
            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:150px">
                    Estatus de orden
                </span>
                <b style="color:green;font-weight:normal;margin:0">Pagada</b></p>
            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Transaccion ID</span> {{$order['transaction']->transaccion_codigo}}</p>
            <p style="font-size:14px;margin:0 0 0 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Total: </span>$ {{number_format($order['order']->total,2,',','.')}}</p>
        </td>
    </tr>
    <tr>
        <td style="height:35px;"></td>
    </tr>
    <tr>
        <td style="width:50%;padding:20px;vertical-align:top">
            <p style="margin:0 0 10px 0;padding:0;font-size:14px;">
                <span style="display:block;font-weight:bold;font-size:13px">Nombre</span>
                {{$order['user']->nombre}} {{$order['user']->apellido}}
            </p>
            <p style="margin:0 0 10px 0;padding:0;font-size:14px;">
                <span style="display:block;font-weight:bold;font-size:13px;">Email</span>
                {{$order['user']->email}}
            </p>
            <p style="margin:0 0 10px 0;padding:0;font-size:14px;">
                <span style="display:block;font-weight:bold;font-size:13px;">Telefono</span>
                {{$order['user']->telefono}}
            </p>
        </td>
        <td style="width:50%;padding:20px;vertical-align:top">
            <p style="margin:0 0 10px 0;padding:0;font-size:14px;">
                <span style="display:block;font-weight:bold;font-size:13px;">Dirección de envio</span>
                Calle {{$order['ubication']->calle}}
                N° {{$order['ubication']->n_exterior}}
                y N° Interior {{$order['ubication']->n_interior}}
                Colonia {{$order['ubication']->colonia}}
                {{$order['ubication']->municipio}} ,
                {{$order['ubication']->estado}} ,
                {{$order['ubication']->codigo_postal}}
                <br>
                <strong>Rerefencias: </strong>  {{$order['ubication']->referencias}}
            </p>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="font-size:20px;padding:30px 15px 0 15px;">Productos</td>
    </tr>
    <tr>
        <td colspan="2" style="padding:15px;">
            @foreach($order['products'] as $product)
                <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                    <span style="display:block;font-size:13px;font-weight:normal;">{{$product->product_name}} ({{$product->amount}})</span> ${{number_format($product->subtotal,2,'.',',')}} <b style="font-size:12px;font-weight:300;"></b>
                </p>
            @endforeach
        </td>
    </tr>
    </tbody>
    <tfooter>
        <tr>
            <td colspan="2" style="font-size:14px;padding:50px 15px 0 15px;">
                <strong style="display:block;margin:0 0 10px 0;">Cancelaciones</strong>
                Para poder cancelar una orden es necesario comunicarte con el soporte de MyDibuMedical:
                <br>
                <b>Telefono:</b> 55 6011 1766<br>
                <b>Email:</b> mydibumedical@gmail.com <br>
                <b>No olvides dar tu codigo de orden para cancelaciones:  {{$order['transaction']->transaccion_codigo}}</b>
            </td>
        </tr>
    </tfooter>
</table>
</body>

</html>
