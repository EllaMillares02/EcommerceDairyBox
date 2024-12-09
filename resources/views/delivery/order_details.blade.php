<!DOCTYPE html>
<html lang="en"> 
<head>
    <base href="/public">
    <title>Delivery Dashboard</title>
   
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="admin/favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="admin/assets/plugins/fontawesome/js/all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="admin/assets/css/portal.css">
    <link id="theme-style" rel="stylesheet" href="admin/assets/css/delivery.css">

    <style>
        .img_design{
            width: 100px;
            height: auto;
        }
    </style>
</head> 

<body class="app">   	

    @include('sweetalert::alert')
            
            @if (session('swal'))
                <script>
                    Swal.fire({
                        title: "{{ session('swal')['title'] }}",
                        text: "{{ session('swal')['text'] }}",
                        icon: "{{ session('swal')['icon'] }}",
                        confirmButtonText: 'OK'
                    });
                </script>
            @endif

    <header class="app-header fixed-top">	   	            
        <div class="app-header-inner">  
            <div class="container-fluid py-2">
                <div class="app-header-content"> 
                    <div class="row justify-content-between align-items-center">
                    
                    <div class="col-auto">
                        <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
                        </a>
                    </div><!--//col-->
                   
                    
                    <div class="app-utilities col-auto">
                        <div class="app-utility-item app-notifications-dropdown dropdown">    
                            <a  href="{{ url('/chatify') }}"  title="Messages">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 2a2 2 0 0 0-2 2v9.586l2.293-2.293A1 1 0 0 1 3 11h9a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm0 1h10a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H3.414l-1.707 1.707A1 1 0 0 1 1 10.586V4a1 1 0 0 1 1-1z"/>
                                  </svg>
                                  <span class="icon-badge"> 1</span>
                                  
                            </a><!--//dropdown-toggle-->
                            
                                                        
                        </div><!--//app-utility-item-->
                        
                        <div class="app-utility-item app-user-dropdown dropdown">
                            <x-app-layout>
    
                            </x-app-layout>
                        </div><!--//app-user-dropdown--> 
                    </div><!--//app-utilities-->

                </div><!--//row-->
                </div><!--//app-header-content-->
            </div><!--//container-fluid-->
        </div><!--//app-header-inner-->
        
        <div id="app-sidepanel" class="app-sidepanel"> 
            <div id="sidepanel-drop" class="sidepanel-drop"></div>
            <div class="sidepanel-inner d-flex flex-column">
                <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
                <div class="app-branding d-flex align-items-center">
                    <a class="app-logo d-flex align-items-center" href="{{ url('redirect') }}">
                        <img class="logo-icon me-2" src="img/logoPabuy.png" alt="logo">
                        <span class="logo-text">DASHBOARD</span>
                    </a>
                </div><!--//app-branding-->  
                
                <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
                    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link {{ request()->is('redirect') ? 'active' : '' }}" href="{{url('redirect')}}">
                                <span class="nav-icon">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
          <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
        </svg>
                                 </span>
                                 <span class="nav-link-text">Overview</span>
                            </a><!--//nav-link-->
                        </li><!--//nav-item-->
        
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link {{ request()->is('deliveries') ? 'active' : '' }}" href="{{url('deliveries')}}">
                                <span class="nav-icon">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z"/>
        <path fill-rule="evenodd" d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z"/>
        </svg>
                                 </span>
                                 <span class="nav-link-text">Delivery</span>
                            </a><!--//nav-link-->
                        </li><!--//nav-item-->
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="{{ url('/chatify') }}">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 2a2 2 0 0 0-2 2v9.586l2.293-2.293A1 1 0 0 1 3 11h9a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm0 1h10a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H3.414l-1.707 1.707A1 1 0 0 1 1 10.586V4a1 1 0 0 1 1-1z"/>
                                      </svg>                                    
                                    
                                 </span>
                                 <span class="nav-link-text">Messages</span>
                            </a><!--//nav-link-->
                        </li><!--//nav-item-->
                    
               
            </div><!--//sidepanel-inner-->
        </div><!--//app-sidepanel-->

    </header><!--//app-header-->

    <div class="app-wrapper">
	    
        <div class="container mt-4">
            <h1 class="app-page-title mb-4 text-center">Order Details</h1>
        
            <div class="order-details">
                <h2 class="section-title">User Information</h2>
                <p><strong>User Name:</strong> {{ $orders->name }}</p>
                <p><strong>Email:</strong> {{ $orders->email }}</p>
                <p><strong>Phone Number:</strong> {{ $orders->phone }}</p>
                <p><strong>User Address:</strong> {{ $orders->address }}</p>
        
                <h2 class="section-title">Ordered Products</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th></th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $orders->product_title }}</td>
                            <td><img class="img_design" src="{{$orders->image}}" alt="" style="margin-right: 10px;"></td>
                            <td>{{ $orders->quantity }}</td>
                            <td>{{ $orders->price }}</td>
                            
                        </tr>
                    </tbody>
                </table>
        
                <h2 class="section-title">Order Information</h2>
                <p><strong>Order#:</strong> {{ $orders->id }}</p>
                <p><strong>Status:</strong> {{ $orders->delivery_status }}</p>
                <p><strong>Order Date:</strong> {{ \Carbon\Carbon::parse($orders->created_at)->format('F d, Y') }}</p>
                <p><strong>Delivery Date:</strong> {{ \Carbon\Carbon::parse($orders->delivery_date)->format('F d, Y') }}</p>
                <p><strong>Meetup Location:</strong> {{ $orders->pickup_location }}</p>
        
                <h2 class="section-title">Upload Proof of Delivery</h2>
                @if(session()->has('message'))

                <div class="alert alert-success">

                    {{session()->get('message')}}

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    
                </div>
                    
                @endif
                <div class="text-center">
                    <form action="{{ url('/uploadProof', $orders->id) }}" method="POST" enctype="multipart/form-data" onsubmit="return validateProofOfDelivery();">
                        @csrf  <!-- Include CSRF token for security -->
                        
                        <input type="hidden" name="delivery_status" value="{{ $orders->delivery_status }}">
                        
                        <button type="button" class="btn btn-success mt-3 text-white" onclick="document.getElementById('fileInput').click();">
                            Proof of Delivery
                        </button>
                        <input type="file" id="fileInput" name="image" accept="image/*" style="display: none;" capture="camera" onchange="previewImage();">
                        
                        <!-- Image preview area -->
                        <div id="imagePreviewContainer" class="d-flex justify-content-center" style="margin-top: 15px;">
                            <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 25%; height: auto; border: 2px solid #ddd; padding: 5px; border-radius: 5px;">
                        </div>
                    
                        <a id="cancelButton" class="btn btn-danger text-white" href="#" data-bs-toggle="modal" data-bs-target="#cancelModal"
                        data-order-id="{{ $orders->id }}" onclick="openCancelModal(this)">Cancel Order</a>
                    
                        <input type="submit" class="btn btn-primary text-white uploadbtn" name="submit" value="Upload Now">
                    </form>
                    
                </div>
            </div>
        </div>

        <div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="cancelModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="cancelModalLabel">Cancel Order</h5>
				  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
				  <form id="cancelOrderForm" action="{{ route('order_details.cancel', 'placeholder') }}" method="POST">
		
					@csrf
					<!-- Reason to cancel -->
					<div class="mb-3">
					  <label for="cancelReason" class="form-label">Reason for Cancellation</label>
					  <select class="form-select" id="cancelReason" name="cancel_reason" required>
						<option value="">Select a reason</option>
                        <option value="unable_to_locate_address">Unable to Locate Address</option>
                        <option value="customer_unavailable">Customer Unavailable</option>
                        <option value="safety_concerns">Safety Concerns</option>
                        <option value="vehicle_issues">Vehicle Issues</option>
                        <option value="restricted_delivery_zone">Restricted Delivery Zone</option>
                        <option value="order_damage">Order Damaged in Transit</option>
                        <option value="health_concerns">Health Concerns</option>
					  </select>
					</div>
					<!-- Other reason text input -->
					<div class="mb-3" id="otherReasonDiv"> <!-- d-none hides the element initially -->
						<label for="otherReason" class="form-label">State your Reason</label>
						<input type="text" class="form-control" id="otherReason" name="other_reason" placeholder="Please specify your reason" required>
					  </div>
				  </form>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				  <button type="submit" form="cancelOrderForm" class="btn btn-danger text-white">Submit</button>
				</div>
			  </div>
			</div>
		  </div>

	    <footer class="app-footer">
		    <div class="container text-center py-3">
		       
		    </div>
	    </footer><!--//app-footer-->
	    
    </div><!--//app-wrapper-->    
    
 
    <!-- Javascript -->          
    <script src="admin/assets/plugins/popper.min.js"></script>
    <script src="admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>  

    <!-- Charts JS -->
    <script src="admin/assets/plugins/chart.js/chart.min.js"></script> 
    <script src="admin/assets/js/index-charts.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


        
    <!-- Page Specific JS -->
    <script src="admin/assets/js/app.js"></script> 
    <script>
        function previewImage() {
        const fileInput = document.getElementById('fileInput');
        const imagePreview = document.getElementById('imagePreview');
        const imagePreviewContainer = document.getElementById('imagePreviewContainer');

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }

    function openCancelModal(buttonElement) {
		// Retrieve the order ID from the data attribute
		const orderId = buttonElement.getAttribute('data-order-id');
		
		// Log the order ID to the console (for testing)
		console.log('Order ID:', orderId);

		// Set the order ID in the form action
		const form = document.getElementById('cancelOrderForm');
		form.action = `/order_details/cancel/${orderId}`; 

		// Optionally, display the order ID in the modal
		document.getElementById('orderIdDisplay').innerText = `Order ID: ${orderId}`;

		// Show the modal
		const modal = new bootstrap.Modal(document.getElementById('cancelModal'));
		modal.show();
}

function validateProofOfDelivery() {
    const fileInput = document.getElementById('fileInput');
    if (!fileInput.value) {
        // Use SweetAlert for the required message
        Swal.fire({
            icon: 'warning',
            title: 'Image Required',
            text: 'Please upload a picture for proof of delivery.',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
        });
        return false; // Prevent form submission
    }
    return true; // Allow form submission
}


    </script>

</body>
</html> 

