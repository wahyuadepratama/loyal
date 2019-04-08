<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <style media="all"> .invoice-box { max-width: 800px; margin: auto; padding: 30px; border: 1px solid #eee; box-shadow: 0 0 10px rgba(0, 0, 0, .15); font-size: 16px; line-height: 24px; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; color: #555; } .invoice-box table { width: 100%; line-height: inherit; text-align: left; } .invoice-box table td { padding: 5px; vertical-align: top; } .invoice-box table tr td:nth-child(2) { text-align: right; } .invoice-box table tr.top table td { padding-bottom: 20px; } .invoice-box table tr.top table td.title { font-size: 45px; line-height: 45px; color: #333; } .invoice-box table tr.information table td { padding-bottom: 40px; } .invoice-box table tr.heading td { background: #eee; border-bottom: 1px solid #ddd; font-weight: bold; } .invoice-box table tr.details td { padding-bottom: 20px; } .invoice-box table tr.item td{ border-bottom: 1px solid #eee; } .invoice-box table tr.item.last td { border-bottom: none; } .invoice-box table tr.total td:nth-child(2) { border-top: 2px solid #eee; font-weight: bold; } @media only screen and (max-width: 600px) { .invoice-box table tr.top table td { width: 100%; display: block; text-align: center; } .invoice-box table tr.information table td { width: 100%; display: block; text-align: center; } } /** RTL **/ .rtl { direction: rtl; font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; } .rtl table { text-align: right; } .rtl table tr td:nth-child(2) { text-align: left; } </style>
  </head>
  <body onload="printDiv('printtable')">
    <div class="invoice-box" id="printtable">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="5">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="https://www.sparksuite.com/images/logo.png" style="width:100%; max-width:300px;">
                            </td>
                            <td>
                                Invoice #{{ $data->order->id }}<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="top">
                <td colspan="4">
                    <table>
                        <tr>
                            <td>
                                Loyal Family Company<br>
                                Padang City, West Sumatera
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Driver</b><br>
                                {{ $data->driver->name }}<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            @if($data->order->package->name == "Trip")

            <tr class="heading">
                <td style="width:250px">
                    Departure
                </td>

                <td colspan="4">
                    Destination
                </td>
            </tr>

            <tr class="details">
                <td>
                    {{ $data->order->package->route_start }}
                </td>
                <td colspan="4">
                    {{ $data->order->package->destination }}
                </td>
            </tr>

            @endif

            <tr class="heading">
                <td>
                    Type Order
                </td>

                <td style="text-align:center">
                  USD
                </td>

                <td style="text-align:center">
                  USG
                </td>

                <td style="text-align:center">
                  RM
                </td>

                <td style="text-align:center">
                  IDR
                </td>
            </tr>

            <tr class="item">
                <td>
                    {{ $data->order->package->name }} ({{ $data->order->ray }} Ray)
                </td>

                <td style="text-align:center">
                  @if($data->order->ray == 2)
                    <b>${{ $data->order->package->price_2_ray }}</b>
                  @else
                    <b>${{ $data->order->package->price_3_ray }}</b>
                  @endif
                </td>

                <td style="text-align:center">
                  USG 78
                </td>

                <td style="text-align:center">
                  RM 108
                </td>

                <td style="text-align:center">
                  Rp. 121.000
                </td>
            </tr>
        </table><br><br>
        <table>
          <tr>
            <td></td>
            <td>
               @php echo \Carbon\Carbon::parse($data->order->date)->format('l, d F Y'); @endphp<br>
            </td>
            <td></td>
          </tr>
        </table><br><br>
        <table>
          <tr>
            <td></td>
            <td style="text-align:right">
               Admin
            </td>
            <td></td>
          </tr>
        </table>
    </div>
    <script type="text/javascript">
      function printDiv(divName) {
         var printContents = document.getElementById(divName).innerHTML;
         var originalContents = document.body.innerHTML;
         document.body.innerHTML = printContents;
         window.print();
         document.body.innerHTML = originalContents;
      }
    </script>
  </body>
</html>
