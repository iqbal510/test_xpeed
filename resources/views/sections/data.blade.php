@if(count($data))
<h2>Total data</h2>
<table class="table table-bordered table-striped table-condensed">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Amount</th>
      <th scope="col">Buyer</th>
      <th scope="col">Receipt id</th>
      <th scope="col">Items</th>
      <th scope="col">Buyer email</th>
      <th scope="col">Buyer ip</th>
      <th scope="col">Note</th>
      <th scope="col">City</th>
      <th scope="col">Phone</th>
      <th scope="col">Entry at</th>
      <th scope="col">Entry by</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($data as $key => $singel_form)

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$singel_form->amount}}</td>
      <td>{{$singel_form->buyer}}</td>
      <td>{{$singel_form->receipt_id}}</td>
      <td>
        @foreach(json_decode($singel_form->items) as $key=>$item)
          Item {{$key+1}}. {{$item}}<br>
        @endforeach
      </td>
      <td>{{$singel_form->buyer_email}}</td>
      <td>{{$singel_form->buyer_ip}}</td>
      <td>{{$singel_form->note}}</td>
      <td>{{$singel_form->city}}</td>
      <td>{{$singel_form->phone}}</td>
      <td>{{$singel_form->entry_at}}</td>
      <td>{{$singel_form->entry_by}}</td>
    </tr>
    @endforeach

  </tbody>
</table>
@else
<p>No data found</p>
@endif