<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Stock Report Pdf</title>
	<link rel="stylesheet" href="{{asset('public/backend')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<link rel="stylesheet" href="">
</head>
<body>

    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<table width="100%">
    				<tbody>
    					<tr>
    						<td width="25%"></td>
    						<td>
    							<span style="font-size: 20px; background: #1781BF; padding:3px 10px 3px 10px; color:#fff;">Ashik Shopping Mall</span><br>
									Uttar-badda,dhaka
    						</td>
    						<td>
    							<span>Showroom No : 01225458952 <br>
									Owner No : 01950322989
    							</span></td>
    					</tr>
    				</tbody>
    			</table>
    		</div>
    	</div>

    	<div class="row">
    		<div class="col-md-12">
    			<hr style="margin-bottom: 0px;">
    			<table>
    				<tbody>
    					<tr>
    						<td width="70%"></td>
    						<td><u><strong><span style="font-size: 15px">Stock Report</span></strong></u></td>
    						<td></td>
    					</tr>
    				</tbody>
    			</table>
    		</div>
    	</div>
      <div class="row">
        <div class="col-md-12">
          <table border="1" width="100%">
                  <thead>
                    <tr>
                      <th>SL.</th>
                      <th>Supplier Name</th>
                      <th>Category</th>
                      <th>Product Name</th>
                      <th>In.Qty</th>
                      <th>Out.Qty</th>
                      <th>Stock</th>
                      <th>Unit</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($allData as $key => $product)
                    @php
                      $buying_total = App\Model\Purchase::where('category_id',$product->category_id)->where('product_id',$product->id)->where('status','1')->sum('buying_qty');
                      $selling_total = App\Model\InvoiceDetail::where('category_id',$product->category_id)->where('product_id',$product->id)->where('status','1')->sum('selling_qty');
                    @endphp
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$product['supplier']['name']}}</td>
                      <td>{{$product['category']['name']}}</td>
                      <td>{{$product->name}}</td>
                      <td>{{$buying_total}}</td>
                      <td>{{$selling_total}}</td>
                      <td>{{$product->quantity}}</td>
                      <td>{{$product['unit']['name']}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
        </div>
      </div>
    	<div class="row">
    		<div class="col-md-12">
    			<table border="0" width="100%">
    				<tbody>
    					<tr>
    						<td style="width: 40%;">
    						</td>
    						<td style="width:20%;"></td>
    						<td style="width:40%; text-align: center;">
    							<p style="text-align: center; border-bottom:1px solid #000">Owner Signature</p>
    						</td>
    					</tr>
    				</tbody>
    			</table>
    		</div>
    	</div>
    </div>
</body>
</html>