<?php
session_start();
if(!isset($_SESSION['user_login'])){
    $_SESSION['error'] ='กรุณาเข้าสู่ระบบ';
    header('location: user.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <!-- Bootstrap 5 -->
    <!-- media query -->
    <style>
        .icon {
            width: 50% !important;
            height: 50% !important;
        }

        @media screen and (max-width: 800px) {

            .txt-search,
            .mySlides {
                width: 100% !important;
            }

            .table-master {
                min-width: 1000px;
            }
        }
    </style>
    <!-- media query -->

</head>

<body>
    <nav class="w-100 p-3 shadow mb-5">
        <div class="container d-flex justify-content-between" ">
                <h2 class=" mb-0">Welcome</h2>
            <div>
                <div class="btn btn-outline-primary"><a href="./signin.php" style="text-decoration: none;">ออกจากระบบ</a></div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3">
                <div class="row">
                    <div>
                        <div class="list-group mb-3" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active " id="list-home-list"
                                data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Home</a>
                            <a class="list-group-item list-group-item-action " id="list-product-list"
                                data-bs-toggle="list" href="#list-product" role="tab"
                                aria-controls="list-product">Product</a>
                            <a class="list-group-item list-group-item-action" id="list-about-list" data-bs-toggle="list"
                                href="#list-about" role="tab" aria-controls="list-about">About</a>
                            <a class="list-group-item list-group-item-action" id="list-contact-list"
                                data-bs-toggle="list" href="#list-contact" role="tab"
                                aria-controls="list-contact">Contact</a>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-12 col-sm-9 tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <h2 class="mb-2">Home</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ullam et atque quos
                        cupiditate, architecto consequatur! Autem voluptatibus molestiae neque nihil id quidem deserunt
                        nesciunt, numquam eaque quibusdam tenetur. Numquam!</p>
                </div>
                <div class="tab-pane fade " id="list-product" role="tabpanel" aria-labelledby="list-product-list">
                    <div class="d-flex justify-content-between">
                        <h2 class="mb-0">Product</h2>
                        <div class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#md_addproduct">Add
                            Product
                        </div>
                    </div>
                    <input type=" search" class="txt-search mt-3 mb-3 w-25 form-control" placeholder="Search">
                    <div class="card" style="overflow: scroll;">
                        <table class="table-master table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">SKU</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr>
                                    <td><img src="https://images.unsplash.com/photo-1611186871348-b1ce696e52c9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                            alt="Macbook" class="rounded"
                                            style="width: 70px; height: 35px; object-fit: cover;"></td>
                                    <td>Macbook</td>
                                    <td>A0001B</td>
                                    <td>24,990 THB</td>
                                    <td class="text-danger">50</td>
                                    <td>
                                        <span class="btn-sm btn-danger">InActive</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="https://images.unsplash.com/photo-1543069190-f687504216a1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                                            alt="Ipad" class="rounded"
                                            style="width: 70px; height: 35px; object-fit: cover;"></td>
                                    <td>IPad</td>
                                    <td>A0002B</td>
                                    <td>17,590 THB</td>
                                    <td class="text-success">100</td>
                                    <td>
                                        <span class="btn-sm btn-success">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="https://images.unsplash.com/photo-1652721367098-0ecad4cc0370?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                                            alt="Iphone13" class="rounded"
                                            style="width: 70px; height: 35px; object-fit: cover;"></td>
                                    <td>Iphone</td>
                                    <td>A0003C</td>
                                    <td>24,900 THB</td>
                                    <td class="text-success">90</td>
                                    <td>
                                        <span class="btn-sm btn-success">Active</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="list-about" role="tabpanel" aria-labelledby="list-about-list">
                    <h2 class="mb-0">About</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ullam et atque quos
                        cupiditate, architecto consequatur! Autem voluptatibus molestiae neque nihil id quidem deserunt
                        nesciunt, numquam eaque quibusdam tenetur. Numquam!</p>
                </div>
                <div class="tab-pane fade" id="list-contact" role="tabpanel" aria-labelledby="list-contact-list">
                    <h2 class="mb-0">Contact</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ullam et atque quos
                        cupiditate, architecto consequatur! Autem voluptatibus molestiae neque nihil id quidem deserunt
                        nesciunt, numquam eaque quibusdam tenetur. Numquam!</p>
                    <div class="icon">
                        <a href="https://www.facebook.com/profile.php?id=100020524924486" target="_blank"><i
                                class="bi bi-facebook" style="font-size: 50px; color: #000"></i></a>
                        <a href="https://www.instagram.com/chanachai_benmat/?theme=dark" target="_blank"><i
                                class="bi bi-instagram" style="font-size: 50px; color: #000;"></i></a>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="modal" id="md_addproduct" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <span>Product Name</span>
                        <input type="text" class="form-control" placeholder="Insert Name">
                    </div>
                    <div class="mb-3">
                        <span>SKU</span>
                        <input type="text" class="form-control" placeholder="Insert SKU">
                    </div>
                    <div class="mb-3">
                        <span>Price</span>
                        <input type="number" class="form-control" placeholder="Insert Price">
                    </div>
                    <div class="mb-3">
                        <span>Stock</span>
                        <input type="number" class="form-control" placeholder="Insert Stock">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Insert Image</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>

    </div>


    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>


</body>

</html>