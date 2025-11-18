<x-navbar />

<div class="container py-5">

    <h2 class="mb-4">Your Cart</h2>

    @php
        $totalQty = 0;
        $totalPrice = 0;
    @endphp

    @if (count($items) === 0)
        <div class="alert alert-info">
            Your cart is empty.
        </div>
    @else

        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Product</th>
                        <th>Variant</th>
                        <th>Price (Updated)</th>
                        <th width="120">Quantity</th>
                        <th>Subtotal</th>
                        <th width="100">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($items as $key => $item)

                        @php
                            // Fetch latest variant price (runtime calculation)
                            $variant = App\Models\Variant::find($item['variant_id']);
                            $latestPrice = $variant ? $variant->price : $item['price'];

                            $subtotal = $latestPrice * $item['qty'];
                            $totalQty += $item['qty'];
                            $totalPrice += $subtotal;
                        @endphp

                        <tr>
                            <td>
                                <strong>{{ $item['name'] }}</strong>
                            </td>

                            <td>{{ $item['variant'] }}</td>

                            <td>Rs. {{ number_format($latestPrice) }}</td>
                            <td>
                                    <form action="{{ route('cart.update', $key) }}" method="get" class="d-flex align-items-center">
                                        @csrf
                                        {{-- @method('PUT') --}}

                                        <!-- Decrease button -->
                                        <button type="submit" name="action" value="decrease" class="btn btn-sm btn-secondary">-</button>

                                        <!-- Quantity display -->
                                        <input type="text" name="qty" value="{{ $item['qty'] }}" class="form-control form-control-sm mx-1 text-center" style="width: 50px;" readonly>

                                        <!-- Increase button -->
                                        <button type="submit" name="action" value="increase" class="btn btn-sm btn-secondary">+</button>
                                    </form>
                                </td>

                            <td>
                                <strong>Rs. {{ number_format($subtotal) }}</strong>
                            </td>

                            <td>
                                <form action="{{ route('cart.remove', $key) }}" method="GET">
                                    @csrf
                                    <button class="btn btn-sm btn-danger">Remove</button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Cart Totals -->
        <div class="card mt-4">
            <div class="card-body d-flex justify-content-between">
                <h5>Total Items: {{ $totalQty }}</h5>
                <h5>Total Price: Rs. {{ number_format($totalPrice) }}</h5>
            </div>
        </div>

        <!-- Checkout Button -->
        <div class="text-end mt-3">
            <a href=" " class="btn btn-success btn-lg">
                Proceed to Checkout
            </a>
        </div>

    @endif

</div>
