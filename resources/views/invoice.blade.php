<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice {{ $id }}</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>

<body>
    <h1>Invoce</h1>
    <p>Invoice No: {{ $id }}</p>
    <p>Invoice Name: {{ $customerName }}</p>


    <table>
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>

        @foreach($items as $item)
        <tr>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['quantity'] }}</td>
            <td>{{ $item['price'] }}</td>
        </tr>
        @endforeach     

    </table>

    <div>
        <p>Total: ${{$total}}</p>
    </div>

    <div>
        <img style="width: 100px;" src="{{ asset('qr.png') }}" alt="QR Code">
    </div>


</body>

</html>