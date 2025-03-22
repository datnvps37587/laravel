@extends('layouts.app')

@section('content')
<div class="admin d-flex">
        <!-- Nội dung chính -->
        <div class="content w-100">
            <!-- Navbar Top -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom px-4 py-2">
                <div class="container-fluid">
                    <!-- Ô tìm kiếm -->
                    <div class="position-relative">
                        <input class="form-control search-box" type="search" placeholder="Search">
                        <i class="bi bi-search search-icon"></i>
                    </div>

                    <!-- Các icon chức năng -->
                    <div class="d-flex align-items-center ms-auto">
                        <i class="bi bi-moon me-3"></i>
                        <i class="bi bi-fullscreen me-3"></i>
                        <i class="bi bi-chat-dots me-3 position-relative">
                            <span
                                class="position-absolute top-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle"></span>
                        </i>
                        <i class="bi bi-bell position-relative me-3">
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">4</span>
                        </i>

                        <!-- Avatar với dropdown -->
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button"
                                data-bs-toggle="dropdown">
                                <img src="/assets/img/avatar.png" alt="Avatar" class="rounded-circle me-2" width="40"
                                    height="40">
                                <div>
                                    <span class="fw-bold">Anthony</span>
                                    <small class="d-block text-muted">USA</small>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Đổi mật khẩu</a></li>
                                <li><a class="dropdown-item text-danger" href="#">Đăng xuất</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Nội dung chính của trang sẽ nằm ở đây -->
            <div class="container">
                <div class="review-section">
                    <h2>Quản lý đánh giá</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Người dùng</th>
                                <th>Sản phẩm</th>
                                <th>Đánh giá</th>
                                <th>Nội dung</th>
                                <th>Thời gian</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nguyễn Văn A</td>
                                <td>iPhone 15 Pro</td>
                                <td class="star-rating">⭐⭐⭐⭐⭐</td>
                                <td>Rất hài lòng, sản phẩm chất lượng tốt!</td>
                                <td>12/03/2025</td>
                                <td>
                                    <button class="btn-approve">Duyệt</button>
                                    <button class="btn-delete">Xóa</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Trần Thị B</td>
                                <td>Samsung Galaxy S24</td>
                                <td class="star-rating">⭐⭐⭐⭐</td>
                                <td>Điện thoại đẹp nhưng pin hơi yếu.</td>
                                <td>10/03/2025</td>
                                <td>
                                    <button class="btn-approve">Duyệt</button>
                                    <button class="btn-delete">Xóa</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
@endsection
