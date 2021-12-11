<!doctype html>
<html lang="en">
 
  <body>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
<link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet"></head>

<style>
    *{
        scroll-behavior: smooth;
    }
</style>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
               <h2 style="color:#18945e">REMS</h2>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>   
            
        </div>        <div class="ui-theme-settings">
           
          
        </div>        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                  
                                <li  >
                                    <a href="#table">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Tables
                                    </a>
                                </li>
                                
                                <li class="app-sidebar__heading">Forms</li>
                                <li>
                                    <a href="./add.php">
                                        <i class="metismenu-icon pe-7s-eyedropper">
                                        </i>Add Product
                                    </a>
                                </li>
                                <li class="app-sidebar__heading" id="#chart">Analytics</li>
                                <li>
                                    <a href="#chart">
                                        <i class="metismenu-icon pe-7s-graph2">
                                        </i>Chart
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Log out</li>
                                <li>
                                    <a href="./index.php">
                                        <i class="fas fa-sign-out-alt"></i>
                                        Log out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    <div class="app-main__outer" id="dashboard">
                    <div class="app-main__inner">
                             <div class="row">
                            
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Sales</div>
                                            <div class="widget-subheading">Total Weekly Profit</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>$ 568</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Products</div>
                                            <div class="widget-subheading">Products in stock</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>121</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-premium-dark">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Products Sold</div>
                                            <div class="widget-subheading">Revenue streams</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-warning"><span>$14M</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="chart">
                            <div class="col-md-12 col-lg-6">
                                <div class="mb-3 card">
                                   <div class="card-header-tab card-header-tab-animation card-header">
                                        <div class="card-header-title">
                                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                            Sales Report
                                        </div>
                                        <ul class="nav">
                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link second-tab-toggle">Current</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                                <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                                    <div class="widget-chat-wrapper-outer">
                                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                            
                                                            <div class="income-graph" id="chartContainer" style="height: 300px; width: 100%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <div class="scroll-area-sm" style="display:none">
                                                    <div class="scrollbar-container">
                                                        <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                            <li class="list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/9.jpg" alt="">
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading">Poly Ethane</div>
                                                                
                                                                        </div>
                                                                        <div class="widget-content-right">
                                                                            <div class="font-size-xlg text-muted">
                                                                                <small class="opacity-5 pr-1">GHC</small>
                                                                                <span>129</span>
                                                                                <small class="text-danger pl-2">
                                                                                    <i class="fa fa-angle-down"></i>
                                                                                </small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/5.jpg" alt="">
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading">Methylethene</div>
                                            
                                                                        </div>
                                                                        <div class="widget-content-right">
                                                                            <div class="font-size-xlg text-muted">
                                                                                <small class="opacity-5 pr-1">GHC</small>
                                                                                <span>70</span>
                                                                                <small class="text-success pl-2">
                                                                                    <i class="fa fa-angle-up"></i>
                                                                                </small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading">Polyester</div>                                                 
                                                                        </div>
                                                                        <div class="widget-content-right">
                                                                            <div class="font-size-xlg text-muted">
                                                                                <small class="opacity-5 pr-1">GHC</small>
                                                                                <span>25</span>
                                                                                <small class="text-warning pl-2">
                                                                                    <i class="fa fa-dot-circle"></i>
                                                                                </small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading">Agri Chemicals</div>

                                                                        </div>
                                                                        <div class="widget-content-right">
                                                                            <div class="font-size-xlg text-muted">
                                                                                <small class="opacity-5 pr-1">GHC</small>
                                                                                <span>130</span>
                                                                                <small class="text-danger pl-2">
                                                                                    <i class="fa fa-angle-down"></i>
                                                                                </small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                 
                        <div id="table"  class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card" style="">
                                    <div class="card-header">Products Table</div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th class="text-center">Price</th>
                                                <th class="text-center">Qty</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                            </thead>
                                            <?php
                                                require("../controllers/product_controller.php");
                                                $allProducts= allProducts();
                                            ?>
                                            <tbody>
                                                <!-- This is where I have to do the foreach -->


                                                <?php
                
                                                    foreach($allProducts as $product){
                                                ?>
                                                    <tr>
                    
                                                            <td>
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <div class="widget-content-left">
                                                                                <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-left flex2">
                                                                            <div class="widget-heading"><?=$product['productname']?></div>
                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">GHC <?=$product['price_per_product']?></td>
                                                            <td class="text-center">
                                                                <div class="badge badge-warning"><?=$product['quantity']?></div>
                                                            </td>
                                                            <td class="text-center">
                                                            <!-- <a href="productUpdate.php?name=<?=$product['name_of_product']?>" style="color:black"><i class="fas fa-edit"></i></a> -->
                                                                <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm"><a href="updateProduct.php?name=<?=$product['productname']?>"  style="color:white;text-decoration:none;">Update</a></button>
                                                            </td>
                                                </tr>

                                                <?php } ?>

                                            
                                            




                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                          <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    </div>
    
                    <div class="app-wrapper-footer">
                       <h5 class="text-center"> Copyright &copy; REMS | 2021</h5>
                    </div>    </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
          <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>


</body>
<script>
window.onload = function () {

var options = {
	animationEnabled: true,  
	title:{
		text: "Company Revenue by Year"
	},
	axisY: {
		title: "Revenue in USD",
		valueFormatString: "#0,,.",
		suffix: "mn",
		prefix: "$"
	},
	data: [{
		type: "area",
		markerSize: 5,
		xValueFormatString: "YYYY",
		yValueFormatString: "$#,##0.##",
		dataPoints: [
			{ x: new Date(2000, 0), y: 2289000 },
			{ x: new Date(2001, 0), y: 2830000 },
			{ x: new Date(2002, 0), y: 1009000 },
			{ x: new Date(2003, 0), y: 1840000 },
			{ x: new Date(2004, 0), y: 1396000 },
			{ x: new Date(2005, 0), y: 2613000 },
			{ x: new Date(2006, 0), y: 1821000 },
			{ x: new Date(2007, 0), y: 1000000 },
			{ x: new Date(2008, 0), y: 1397000 },
			{ x: new Date(2009, 0), y: 1506000 },
			{ x: new Date(2010, 0), y: 1798000 },
			{ x: new Date(2011, 0), y: 2386000 },
			{ x: new Date(2012, 0), y: 4704000},
			{ x: new Date(2013, 0), y: 4926000 },
			{ x: new Date(2014, 0), y: 1394000 },
			{ x: new Date(2015, 0), y: 972000 },
			{ x: new Date(2016, 0), y: 1140000 }
		]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}

</script>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</html>
