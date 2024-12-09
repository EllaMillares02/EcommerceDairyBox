<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Admin Dashboard</title>
    
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

    <style>
        .card-header{
            background-color: #edfdf6; 
            color: #51b37f; 
            font-weight: bold;
        }
                h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-bottom: 50px;
            font-size: 0.7rem;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #dee2e6;
        }

        th {
            background-color: #51b37f;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e2e2e2;
        }
        
    </style>

</head> 

<body class="app">   	

    @include('admin.header')


    <div class="app-wrapper">
	    
        <div class="app-content pt-3 p-md-3 p-lg-4">

            <h1 class="app-page-title text-center ">Inventory Management</h1>

            <div class="card mb-4">
                <div class="card-header">Inventory</div>
                <div class="card-body">

                <div class="container" style="overflow-y: auto; max-height: 500px;">
                    <div class="d-flex justify-content-between align-items-center mb-4"> <!-- Flexbox for row -->
                        <div class="d-flex align-items-center">
                            <h4>Daily Report</h4>
                            
                        </div>
            
                        <button class="btn btn-success text-white" onclick="printInventory()">Print Inventory</button> <!-- Print button -->
                    </div>
                    <table id="inventoryTable">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Flavor</th>
                                <th>Sizes</th>
                                <th>Initial Inventory</th>
                                <th>Product Avail.</th>
                                <th>Qty Sold</th>
                                <th>End Inventory</th>
                                <th>Unit Price</th>
                                <th>Sale Price</th> 
                                <th>Discount Percentage</th>
                                <th>Total Sales</th>
                                <th>Expiry Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            @foreach ($product->flavors as $flavor)
                            @php
                                $sale = DB::table('sales')->where('product_id', $product->id)->first();
                                $quantitySold = $product->delivery_qty - $product->quantity; // Calculate quantity sold
                                // Determine sale price after discount
                                if ($sale) {
                                    $salePrice = $product->price - ($product->price * ($sale->discount / 100));
                                    $discountPercentage = $sale->discount;
                                } else {
                                    $salePrice = $product->discount_price;
                                    $discountPercentage = $product->discount_price ? (($product->price - $product->discount_price) / $product->price) * 100 : 0;
                                }
                                // Calculate total sales
                                $totalSales = $quantitySold * $salePrice; // Calculate total sales
                            @endphp
                            <tr>
                                <td>{{ $product->title }}</td>
                                <td>{{ $flavor->name }}</td>
                                <td>
                                    @foreach ($product->sizes as $size)
                                                @if ($size->flavor_id == $flavor->id)
                                                        {{ $size->size }}<br>
                                                @endif
                                            @endforeach
                                </td>
                                <td>{{ number_format($product->delivery_qty) }}</td>
                                <td>{{ number_format($product->quantity) }}</td>
                                <td>{{ number_format($quantitySold) }}</td>
                                <td>{{ number_format($product->delivery_qty - $product->quantity) }}</td>
                                <td>@foreach ($product->sizes as $size)
                                    @if ($size->flavor_id == $flavor->id)
                                    ₱{{ $size->price }}
                                    @endif
                                @endforeach</td>
                                <td>₱{{ number_format($salePrice, 2) }}</td>
                                <td>{{ number_format($discountPercentage, 2) }}%</td>
                                <td>₱{{ number_format($totalSales, 2) }}</td> <!-- Display total sales -->
                                <td>{{ $product->expiry_date }}</td>
                            </tr>
                        @endforeach
                        @endforeach
                        </tbody>
                    </table>

                </div>

                </div>
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
    
    <!-- Page Specific JS -->
    <script src="admin/assets/js/app.js"></script> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.full.min.js"></script>

<script>
    
    function printInventory() {
        const table = document.getElementById('inventoryTable');

        // Get current date for the title and file name
        const currentDate = new Date();
        const formattedDate = currentDate.toLocaleDateString('en-GB'); // Format as 'dd/mm/yyyy'

        // Initialize a new workbook
        const workbook = XLSX.utils.book_new();

        // Create title row with merged cells
        const title = [['Inventory Report - ' + formattedDate]]; // Array to hold the title
        const worksheet = XLSX.utils.table_to_sheet(table, { raw: true });

        // Get the range of the table to determine the number of columns
        const range = worksheet['!ref']; // Get the range of the table
        const rows = range.split(':'); 
        const lastColumn = rows[1].match(/[A-Z]+/)[0]; // Get the last column (e.g., 'J')

        // Remove the first row (headers) from the worksheet data to avoid duplication
        const data = XLSX.utils.sheet_to_json(worksheet, { header: 1, range: 1 }); // Get data without the headers

        // Add title at A1 and merge cells from A1 to the last column (e.g., J1)
        XLSX.utils.sheet_add_aoa(worksheet, title, { origin: 'A1' });
        const titleRange = `A1:${lastColumn}1`; // Merge A1 to last column (e.g., A1:J1)
        if (!worksheet['!merges']) worksheet['!merges'] = []; // Initialize merge array if not present
        worksheet['!merges'].push({ s: { r: 0, c: 0 }, e: { r: 0, c: data[0].length - 1 } });

        // Add the headers at A2
        XLSX.utils.sheet_add_aoa(worksheet, [
            ['Product', 'Initial Inventory', 'Product Avail.', 'Qty Sold', 'End Inventory', 
            'Unit Price', 'Sale Price', 'Discount Percentage', 'Total Sales', 'Expiry Date']
        ], { origin: 'A2' });

        // Insert data starting at A3
        XLSX.utils.sheet_add_json(worksheet, data, { origin: 'A3', skipHeader: true });

        // Update worksheet reference to reflect new content positions
        worksheet['!ref'] = `A1:${lastColumn}${data.length + 3}`; // Update range to include title, headers, and data

        // Append the sheet to the workbook
        XLSX.utils.book_append_sheet(workbook, worksheet, 'Inventory');

        // Write and download the Excel file with the current date in the file name
        XLSX.writeFile(workbook, `Inventory_Report_${formattedDate}.xlsx`);
    }
</script>

</body>
</html> 

