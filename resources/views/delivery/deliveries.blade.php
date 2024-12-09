<!DOCTYPE html>
<html lang="en"> 
<head>
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
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="admin/assets/css/portal.css">
    <link id="theme-style" rel="stylesheet" href="admin/assets/css/delivery.css">

</head> 

<body class="app">   	

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
	    
        <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">

                <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
                    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">
                        To Deliver
                        <span class="badge bg-danger rounded-circle" style="position: relative; top: -8px; left: -5px;">{{ $delivery_orders_count }}</span>
                    </a>
                </nav>
                
                <div class="tab-content" id="orders-table-tab-content">
                    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                        <div class="app-card app-card-orders-table shadow-sm mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Name</th>
                                                <th class="cell">Email</th>
                                                <th class="cell">Phone</th>
                                                <th class="cell">Address</th>
                                                <th class="cell">Product</th>
                                                <th class="cell">Total</th>
                                                <th class="cell">Order Date</th>
                                                <th class="cell">Delivery</th>
                                                <th class="cell">Meetup</th>
                                                <th class="cell">Status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orderItems as $order)

                                            <tr>
                                                <td class="cell">{{$order->name}}</td>
                                                <td class="cell"><span class="truncate">{{$order->email}}</span></td>
                                                <td class="cell">{{$order->phone}}</td>
                                                <td class="cell">{{$order->address}}</td>
                                                @php
                                                    $productTitles = explode(', ', $order->product_title); 
                                                    $quantities = explode(', ', $order->quantity); 
                                                @endphp
                                                    <td class="cell">
                                                        @for ($i = 0; $i < count($productTitles); $i++)
                                                            <span style="display: inline-block; vertical-align: middle; margin-right: 15px;">
                                                                {{ $productTitles[$i] }}<span style="margin: 0 10px;">x</span>{{ $quantities[$i] }} 
                                                            </span>
                                                        @endfor
                                                    </td>
                                                <td class="cell">₱{{$order->price}}</td>
                                                <td class="cell"><span>{{ $order->created_at->format('m-d-Y') }}</span><span class="note">{{ $order->created_at->format('h:i:s A') }}</span></td>
                                                <td class="cell">
                                                    <span>{{ \Carbon\Carbon::parse($order->delivery_date)->format('m-d-Y') }}</span>
                                                    <span class="note">{{ \Carbon\Carbon::parse($order->delivery_date)->format('h:i:s A') }}</span>
                                                </td>
                                                <td class="cell">{{ $order->pickup_location }}</td>
                                                <td class="cell"><span class="badge {{ $order->delivery_status== 'for delivery' ? 'bg-warning' : 'bg-success' }}">{{$order->delivery_status}}</span></td>
                                                
                                            </tr>
                                            
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div><!--//table-responsive-->
                            
                            </div><!--//app-card-body-->		
                        </div><!--//app-card-->
                        <nav class="app-pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav><!--//app-pagination-->
                        
                    </div><!--//tab-pane-->
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

    </script>

</body>
</html> 

