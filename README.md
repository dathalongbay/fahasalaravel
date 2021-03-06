# fahasalaravel
### Mô tả các cấu trúc file trong Backend
#### app/Http/Controller/Backend/AuthorController.php
* quản lý tác giả trong admin
* model : app/Models/AuthorModel.php
* view : resources/views/backend/contents/authors
> * index.blade.php ( hiển thị danh sách bản ghi và phân trang)
> * create.blade.php ( form thêm mới )
> * edit.blade.php ( form sửa thông tin )
* CSDL : database/migrations/2020_06_18_130517_create_authors_table.php

#### app/Http/Controller/Backend/BlogController.php
* quản lý các bài viết trong admin
* model : app/Models/BlogModel.php 
* view : resources/views/backend/contents/blogs
> * index.blade.php ( hiển thị danh sách bản ghi và phân trang)
> * create.blade.php ( form thêm mới )
> * edit.blade.php ( form sửa thông tin )
* CSDL : database/migrations/2020_06_18_133404_create_blogs_table.php

#### app/Http/Controller/Backend/CategoryBlogController.php
* quản lý danh mục bài viết trong admin
* model : app/Models/BlogCategoryModel.php
* view : resources/views/backend/contents/blogcategories
> * index.blade.php ( hiển thị danh sách bản ghi và phân trang)
> * create.blade.php ( form thêm mới )
> * edit.blade.php ( form sửa thông tin )
* CSDL : database/migrations/2020_06_18_133431_create_blogs_category_table.php

#### app/Http/Controller/Backend/CategoryProductController.php
* quản lý danh mục sản phẩm trong admin
* model : app/Models/CategoryProductModel.php
* view : resources/views/backend/contents/productcategories
> * index.blade.php ( hiển thị danh sách bản ghi và phân trang)
> * create.blade.php ( form thêm mới )
> * edit.blade.php ( form sửa thông tin )
* CSDL : database/migrations/2020_06_18_131115_create_products_category_table.php

#### app/Http/Controller/Backend/ProductController.php
* quản lý sản phẩm trong admin
* model : app/Models/ProductModel.php
* view : resources/views/backend/contents/products
> * index.blade.php ( hiển thị danh sách bản ghi và phân trang)
> * create.blade.php ( form thêm mới )
> * edit.blade.php ( form sửa thông tin )
* CSDL : database/migrations/2020_06_18_130728_create_products_table.php

### app/Http/Controller/Backend/ChatController.php
* quản lý chat support trong admin
* model : app/Models/ChatModel.php
* view : resources/views/backend/contents/chats
> * index.blade.php ( hiển thị danh sách bản ghi và phân trang)
> * create.blade.php ( form thêm mới )
> * edit.blade.php ( form sửa thông tin )
* CSDL : database/migrations/2020_06_18_133728_create_chats_table.php

### app/Http/Controller/Backend/ConfigController.php
* quản lý cấu hình trang web trong admin ( thay ảnh logo , nhập địa chỉ ...)
* model : app/Models/ConfigModel.php
* view : resources/views/backend/contents/configs
> * index.blade.php ( hiển thị danh sách bản ghi và phân trang)
> * create.blade.php ( form thêm mới )
> * edit.blade.php ( form sửa thông tin )
> * config.blade.php ( global config thay đổi tất cả các cấu hình trang web )
* CSDL : database/migrations/2020_06_18_133747_create_configs_table.php

### app/Http/Controller/Backend/ContactController.php
* quản lý liên hệ trong admin
* model : app/Models/ContactModel.php
* view : resources/views/backend/contents/contacts
> * index.blade.php ( hiển thị danh sách bản ghi và phân trang)
> * create.blade.php ( form thêm mới )
> * edit.blade.php ( form sửa thông tin )
* CSDL : database/migrations/2020_06_18_133837_create_contacts_table.php

### app/Http/Controller/Backend/CustomerController.php
* quản lý khách hàng trong admin
* model : app/Models/CustomerModel.php
* view : resources/views/backend/contents/customers
> * index.blade.php ( hiển thị danh sách bản ghi và phân trang)
> * create.blade.php ( form thêm mới )
> * edit.blade.php ( form sửa thông tin )
* CSDL : database/migrations/2020_06_18_131139_create_customers_table.php

### app/Http/Controller/Backend/DashboardController.php
* quản lý trang thống kê tổng quan trong admin
* model : app/Models/DashboardModel.php
* view : resources/views/backend/contents/dashboard.blade.php
> * index.blade.php ( hiển thị danh sách bản ghi và phân trang)
> * create.blade.php ( form thêm mới )
> * edit.blade.php ( form sửa thông tin )
* CSDL : không cần vì đây là chức năng thống kê

### app/Http/Controller/Backend/ProductOrderController.php
* quản lý đơn hàng trong admin
* model : 2 model ORM bên dưới
* app/Models/OrderModel.php ( đơn hàng tổng )
* app/Models/ProductOrderModel.php ( đơn hàng chi tiết theo sản phẩm )
* view : resources/views/backend/contents/orders
> * index.blade.php ( hiển thị danh sách bản ghi và phân trang)
> * create.blade.php ( form thêm mới )
> * edit.blade.php ( form sửa thông tin )
* CSDL gồm 2 bảng :
* Bảng đơn hàng tổng : database/migrations/2020_06_18_131155_create_orders_table.php
* Bảng đơn hàng theo sản phẩm chi tiết : database/migrations/2020_06_18_131234_create_order_items_table.php

### app/Http/Controller/Backend/PublisherController.php
* quản lý nhà xuất bản trong admin
* model : app/Models/PublisherModel.php
* view :resources/views/backend/contents/publishers
> * index.blade.php ( hiển thị danh sách bản ghi và phân trang)
> * create.blade.php ( form thêm mới )
> * edit.blade.php ( form sửa thông tin )
* CSDL : database/migrations/2020_06_18_134036_create_publishers_table.php

### app/Http/Controller/Backend/ReviewController.php
* quản lý đánh giá sản phẩm của khách trong admin
* model : app/Models/ReviewModel.php
* view : resources/views/backend/contents/reviews
> * index.blade.php ( hiển thị danh sách bản ghi và phân trang)
> * create.blade.php ( form thêm mới )
> * edit.blade.php ( form sửa thông tin )
* CSDL : database/migrations/2020_06_18_134045_create_reviews_table.php

### app/Http/Controller/Backend/PageController.php
* quản lý trang tĩnh trong admin
* model : app/Models/PageModel.php
* view : resources/views/backend/contents/pages
> * index.blade.php ( hiển thị danh sách bản ghi và phân trang)
> * create.blade.php ( form thêm mới )
> * edit.blade.php ( form sửa thông tin )
* CSDL : database/migrations/2020_06_18_131128_create_pages_table.php

### app/Http/Controllers/Backend/AdminController.php
* quản lý danh sách quản trị viên admin của website trong backend
* model : app/User.php
* view : resources/views/backend/contents/admins
* CSDL : database/migrations/2014_10_12_000000_create_users_table.php

### Mô tả các cấu trúc trong Frontend

#### app/Http/Controller/Frontend/BlogController.php
* trang hiển thị 1 bài viết tin tức bên ngoài frontend
* model : app/Models/BlogModel.php
* view : resources/views/frontend/contents/blog.blade.php
* CSDL : database/migrations/2020_06_18_133404_create_blogs_table.php

#### app/Http/Controller/Frontend/CartController.php
* trang giỏ hàng frontend
* model : app/Models/CartModel.php
* view : resources/views/frontend/contents/cart.blade.php
* CSDL : không cần giỏ hàng sẽ lưu bằng session

#### app/Http/Controller/Frontend/CategoryBlogController.php
* trang hiển thị danh sách các bài viết trong 1 danh mục tin tức
* model : app/Models/BlogCategoryModel.php
* view : resources/views/frontend/contents/blog-list.blade.php
* CSDL : database/migrations/2020_06_18_133431_create_blogs_category_table.php

#### app/Http/Controller/Frontend/CategoryProductController.php
* trang hiển thị danh sách các sản phẩm trong 1 danh mục 
* model : app/Models/CategoryProductModel.php
* view : resources/views/frontend/contents/product-list.blade.php
* CSDL : database/migrations/2020_06_18_131115_create_products_category_table.php

#### app/Http/Controller/Frontend/ChatController.php
* Trang hỗ trợ khách hàng chat support
* model : app/Models/ChatModel.php
* view : resources/views/frontend/contents/chat.blade.php
* CSDL : database/migrations/2020_06_18_133728_create_chats_table.php

#### app/Http/Controller/Frontend/CheckoutController.php
* Trang thanh toán
* model : app/Models/ProductOrderModel.php
* view : resources/views/frontend/contents/checkout.blade.php
* CSDL : thanh toán 
> * 1 - database/migrations/2020_06_18_131155_create_orders_table.php
> * 2 - database/migrations/2020_06_18_131234_create_order_items_table.php

#### app/Http/Controller/Frontend/ContactController.php
* Trang gửi liên hệ yêu cầu từ khách hàng
* model : app/Models/ContactModel.php
* view : resources/views/frontend/contents/contact.blade.php
* CSDL : database/migrations/2020_06_18_133837_create_contacts_table.php

#### app/Http/Controller/Frontend/IndexController.php
* Trang chủ của trang web frontend
* model : app/Models/IndexModel.php
* view : resources/views/frontend/contents/homepage.blade.php
* CSDL : trang chủ nên sẽ truy cập nhiều table để
hiển thị dữ liệu 

#### app/Http/Controller/Frontend/LoginController.php
* Trang đăng nhập bên ngoài FE
* model : app/Models/CustomerModel.php
* view : resources/views/frontend/contents/login.blade.php
* CSDL : database/migrations/2020_06_18_131139_create_customers_table.php

#### app/Http/Controller/Frontend/ProductController.php
* Trang hiển thi chi tiết 1 sản phẩm
* model : app/Models/ProductModel.php
* view : resources/views/frontend/contents/product.blade.php
* CSDL : database/migrations/2020_06_18_130728_create_products_table.php

#### app/Http/Controller/Frontend/RegisterController.php
* Trang đăng ký cho 1 khách hàng mới
* model : app/Models/CustomerModel.php
* view : resources/views/frontend/contents/register.blade.php
* CSDL : database/migrations/2020_06_18_131139_create_customers_table.php

### app/Http/Controller/Backend/PageController.php
* quản lý trang tĩnh bên ngoài trang FE
* model : app/Models/PageModel.php
* view : resources/views/frontend/contents/page.blade.php
* CSDL : database/migrations/2020_06_18_131128_create_pages_table.php 











