<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles1.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            
            <a href="#" class="logo1"> <i class="fas fa-shopping-basket"></i> Grocery </a>
            <!-- <a href="#" class="logo1"> <i class="fas fa-shopping-basket" style="color: #ff7800;"></i> Grocery </a> -->
        </div>
        <ul>
            <li><img src="dashboard_1828791.png" style="height:2.5rem; width: 2.5rem;" alt="">&nbsp; <span>Dashboard</span> </li>
            <li><img src="salesIcon.png" style="height:2.5rem; width: 2.5rem;" alt="">&nbsp;<span>Sales</span> </li>
            <li><img src="products.png" style="height:2.5rem; width: 2.5rem;" alt="">&nbsp;<span>Products</span> </li>
            <li><img src="orders.png" style="height:2.5rem; width: 2.5rem;" alt="">&nbsp;<span>Orders</span> </li>
            <li><img src="customers.png" style="height:2.5rem; width: 2.5rem;" alt="">&nbsp;<span>Customers</span> </li>
            <li><img src="question_471664.png" style="height:2.5rem; width: 2.5rem;" alt="">&nbsp; <span>Help</span></li>
            <li><img src="setting_2040504.png" style="height:2.5rem; width: 2.5rem;" alt="">&nbsp;<span>Settings</span> </li>
        </ul> 
    </div> 
    <div class="container">
        <div class="header">
            <div class="nav">
                <!-- <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                </div> -->
                <div class="user">
                    <a class="user-inner btn" href="#">ADD NEW</a>
                    <img class="user-inner" src="notifications.png" alt="">
                    <div class="user-inner" class="img-case">
                        <img src="user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>2194</h1>
                        <h3>Sales</h3>
                    </div>
                    <div class="icon-case">
                        <img src="salesIcon.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>53</h1>
                        <h3>Products</h3>
                    </div>
                    <div class="icon-case">
                        <img src="products.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Orders</h3>
                    </div>
                    <div class="icon-case">
                        <img src="orders.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>350000</h1>
                        <h3>Customers</h3>
                    </div>
                    <div class="icon-case">
                        <img src="customers.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Orders</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>User ID</th>
                            <th>User Name</th>
                            <th>Total Amount/Quantity</th>
                            <th>Detailed View</th>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Ritik prasad</td>
                            <td>&#8377;38 / 5pck.</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <!-- <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr> -->
                        <!-- <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr> -->
                    </table>
                </div>
                <?php
                
                ?>
                <div class="new-students">
                    <div class="title">
                        <h2>NEW JOINED CUSTOMERS</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <!-- <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>option</th>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr> -->

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>