@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<div class="admin d-flex">


            <div class="container">
                <div class="card-info mt-4">
                    <div class="row">
                        <!-- Card 1 -->
                        <div class="col-md-3">
                            <div class="card shadow-sm p-3 text-center">
                                <div class="icon bg-light-green">
                                    <i class="bi bi-cash-coin"></i>
                                </div>
                                <p class="text-muted">Doanh thu</p>
                                <h4>654.120.121đ</h4>
                                <p class="text-success"><i class="bi bi-arrow-up"></i> +16%</p>
                                <a href="#" class="details">Xem chi tiết</a>
                            </div>
                        </div>
                
                        <!-- Card 2 -->
                        <div class="col-md-3">
                            <div class="card shadow-sm p-3 text-center">
                                <div class="icon bg-light-red">
                                    <i class="bi bi-check"></i>
                                </div>
                                <p class="text-muted">Tổng đơn hàng</p>
                                <h4>129</h4>
                                <p class="text-danger"><i class="bi bi-arrow-down"></i> +80%</p>
                                <a href="#" class="details">Xem chi tiết</a>
                            </div>
                        </div>
                
                        <!-- Card 3 -->
                        <div class="col-md-3">
                            <div class="card shadow-sm p-3 text-center">
                                <div class="icon bg-light-blue">
                                    <i class="bi bi-people"></i>
                                </div>
                                <p class="text-muted">Lượt xem website</p>
                                <h4>987M</h4>
                                <p class="text-primary"><i class="bi bi-arrow-up"></i> +80%</p>
                                <a href="#" class="details">Xem chi tiết</a>
                            </div>
                        </div>
                
                        <!-- Card 4 -->
                        <div class="col-md-3">
                            <div class="card shadow-sm p-3 text-center">
                                <div class="icon bg-light-yellow">
                                    <i class="bi bi-people"></i>
                                </div>
                                <p class="text-muted">Tổng khách hàng</p>
                                <h4>808</h4>
                                <p class="text-warning"><i class="bi bi-arrow-up"></i> +13%</p>
                                <a href="#" class="details">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="oder-list mt-4">
                    <h4 class="fw-bold">DANH SÁCH ĐƠN HÀNG</h4>
                    <div class="table-responsive border-1">
                        <table class="table table-hover align-middle">
                            <thead class="bg-light">
                                <tr>
                                    <th>ID đơn hàng</th>
                                    <th>Tên Khách Hàng</th>
                                    <th>Sản phẩm</th>
                                    <th>Giá trị</th>
                                    <th>Loại sản phẩm</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1234</td>
                                    <td>
                                        <img src="{{ asset('uploads/avatar.png') }}" alt="avatar" class="avatar">
                                        Username
                                    </td>
                                    <td>
                                        Product name
                                    </td>
                                    <td>999.999 vnđ</td>
                                    <td>Kính thiên văn</td>
                                    <td><span class="badge bg-danger bg-opacity-10 text-danger p-3">Hủy</span></td>
                                </tr>
                                <tr>
                                    <td>#1234</td>
                                    <td>
                                        <img src="{{ asset('uploads/avatar.png') }}" alt="avatar" class="avatar">
                                        Username
                                    </td>
                                    <td>
                                        Product name
                                    </td>
                                    <td>999.999 vnđ</td>
                                    <td>Kính thiên văn</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success p-3">Đã giao</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#1234</td>
                                    <td>
                                        <img src="{{ asset('uploads/avatar.png') }}" alt="avatar" class="avatar">
                                        Username
                                    </td>
                                    <td>
                                        Product name
                                    </td>
                                    <td>999.999 vnđ</td>
                                    <td>Kính thiên văn</td>
                                    <td><span class="badge bg-primary bg-opacity-10 text-primary p-3">Đang giao</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#1234</td>
                                    <td>
                                        <img src="{{ asset('uploads/avatar.png') }}" alt="avatar" class="avatar">
                                        Username
                                    </td>
                                    <td>
                                        Product name
                                    </td>
                                    <td>999.999 vnđ</td>
                                    <td>Kính thiên văn</td>
                                    <td><span class="badge bg-primary bg-opacity-10 text-primary p-3">Đang giao</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="best-seller mt-4">
                    <h4 class="fw-bold">Sản phẩm bán chạy</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="product-card">
                                <img src="/assets/img/product-1.png" class="product-img img-fluid" alt="Sản phẩm">
                                <div class="product-name">Kính thiên văn Skywatcher</div>
                                <div class="product-price">31.000.000 đ</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-card">
                                <img src="/assets/img/product-2.png" class="product-img img-fluid" alt="Sản phẩm">
                                <div class="product-name">Kính thiên văn Meade</div>
                                <div class="product-price">1.500.000 đ</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-card">
                                <img src="/assets/img/product-3.png" class="product-img img-fluid" alt="Sản phẩm">
                                <div class="product-name">Kính thiên văn Polaris</div>
                                <div class="product-price">8.000.000 đ</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-card">
                                <img src="/assets/img/product-4.png" class="product-img img-fluid" alt="Sản phẩm">
                                <div class="product-name">Ống nhòm Apollo 10x50</div>
                                <div class="product-price">2.850.000 đ</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
