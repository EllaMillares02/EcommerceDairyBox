<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="text-center mb-4">
            <h1 class="app-page-title mt-4">Delivery Today</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6"> 

                <div class="app-card app-card-stat shadow-sm p-4 bg-white rounded">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h4 class="text-primary font-weight-bold mb-1">Orders</h4>
                            <div class="stats-figure display-4 font-weight-bold text-success">{{ $delivery_orders_count }}</div>
                            <div class="stats-meta text-muted">Delivery</div>
                        </div>
                        <div class="text-right">
                            <div class="current-date font-weight-bold">
                                <span id="date"></span>
                            </div>
                            <div class="current-time font-weight-bold" id="time"></div>
                        </div>
                    </div>
                    <a class="app-card-link-mask" href="#" style="display: block; height: 100%; width: 100%; position: absolute; top: 0; left: 0; z-index: 1;"></a>
                </div><!--//app-card-->
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h1 class="app-page-title mb-4 text-center">Delivery Details</h1>

    <div class="row">
        <!-- Morning Deliveries Column -->
        <div class="col-md-6">
                <h2 class="section-title">Morning Deliveries</h2>
                @forelse ($morningDeliveries as $order)
                    <div class="delivery-box">
                        <h4 class="text-primary">Order #{{ $order->id }}</h4>
                        <p><strong>Delivery Address:</strong> {{ $order->pickup_location }}
                        <a href="https://www.google.com/maps/search/?q={{ urlencode($order->pickup_location) }}" target="_blank">
                            <button type="button" class="btn btn-secondary btn-sm" style="font-size: 12px; padding: 4px;">View on Google Maps</button>
                        </a></p><br>
                        <p><strong>Delivery Date:</strong> {{ \Carbon\Carbon::parse($order->delivery_date)->format('F d, Y') }}</p>
                        <p><strong>Status:</strong> {{ $order->delivery_status }}</p>
                        <a href="{{url('order_details',$order->id)}}" class="btn btn-primary btn-view-details">View Order Details</a>
                    <div class="arrow"></div>
                    </div>
                    @empty

                        <div class="delivery-box text-center">
                            <i class="fa fa-truck" style="font-size: 24px; color: grey;" title="No deliveries available"></i>
                            <p>No deliveries available at the moment.</p>
                        </div>

                @endforelse
            </div>

        <!-- Afternoon Deliveries Column -->
        <div class="col-md-6">
            <h2 class="section-title">Afternoon Deliveries</h2>
                @forelse ($afternoonDeliveries as $order)
                    <div class="delivery-box">
                        <h4 class="text-primary">Order #{{ $order->id }}</h4>
                        <p><strong>Delivery Address:</strong> {{ $order->pickup_location }}
                            <a href="https://www.google.com/maps/search/?q={{ urlencode($order->pickup_location) }}" target="_blank">
                                <button type="button" class="btn btn-secondary btn-sm" style="font-size: 12px; padding: 4px;">View on Google Maps</button>
                            </a></p><br>
                        <p><strong>Delivery Date:</strong> {{ \Carbon\Carbon::parse($order->delivery_date)->format('F d, Y') }}</p>
                        <p><strong>Status:</strong> {{ $order->delivery_status }}</p>
                        <a href="{{url('order_details',$order->id)}}" class="btn btn-primary btn-view-details">View Order Details</a>
                    <div class="arrow"></div>
                    </div>
                    @empty

                    <div class="delivery-box text-center">
                        <i class="fa fa-truck" style="font-size: 24px; color: grey;" title="No deliveries available"></i>
                        <p>No deliveries available at the moment.</p>
                    </div>

            @endforelse
            </div>
        </div>
    </div>
</div>