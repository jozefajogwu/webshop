@component('mail::message')
# Invoice paid

Thanks for the purchase.


here is your receipt

<table class="table">
    <thead>
        <tr>
            <th>Product name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($order->items as $item)
        <tr>
            <td>
            </td>
        </tr>
    </tbody>


</table>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
