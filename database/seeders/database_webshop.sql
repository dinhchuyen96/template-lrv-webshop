
CREATE DATABASE IF NOT EXISTS`webshopv2` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
use webshopv2;

-- bảng danh mục sản phẩm
CREATE TABLE IF NOT EXISTS `categories` (
  id int primary key auto_increment,
  name varchar(255) NOT NULL UNIQUE,
  status tinyint(1) NOT NULL DEFAULT '1',
  created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  update_at date,
  delete_at date
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- bảng sản phẩm
CREATE TABLE IF NOT EXISTS `products` (
  id int primary key auto_increment,
  name varchar(255) NOT NULL UNIQUE,
  price float NOT NULL,
  sale_price float NOT NULL,
  image varchar(255) NOT NULL,
  description text,
  status tinyint(1) NOT NULL DEFAULT '1',
  category_id int(11) NOT NULL,
  created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  update_at date,
  
    FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- bảng khách hàng
CREATE TABLE IF NOT EXISTS `customers` (
  id int(11) primary key auto_increment,
  name varchar(255) not null,
  email varchar(255) not null unique,
  phone varchar(255) not null,
  address varchar(255) not null,
  password varchar(255) not null,
  status tinyint DEFAULT '1',
  created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  update_at date
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- bảng quản trị viên
CREATE TABLE IF NOT EXISTS `admin` (
  id int primary key auto_increment,
  name varchar(255) not null,
  email varchar(255) not null unique,
  password varchar(255) not null,
  status tinyint DEFAULT '1',
  created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  update_at date
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- bảng đơn hàng
CREATE TABLE IF NOT EXISTS `orders` (
  id int(11) primary key auto_increment,
  account_id int(11) not null,
  email varchar(255) not null,
  phone varchar(255) not null,
  address varchar(255) not null,
  order_note varchar(255) not null,
  payment_method varchar(255) not null,
  shipping_method varchar(255) not null,
  total_price float not null,
  status tinyint(1) default '1',
  created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  update_at date,
  FOREIGN KEY (`account_id`) REFERENCES `customers`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- bảng chi tiết đơn hàng
CREATE TABLE IF NOT EXISTS `order_detail` (
  order_id int(11) not null,
  product_id int(11) not null,
  quantity int(11) not null,
  price float not null,
  created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  update_at date,
  PRIMARY KEY (`order_id`, `product_id`),
  FOREIGN KEY (`product_id`) REFERENCES `products`(`id`),
  FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- bảng blog
use webshopv2;
CREATE TABLE IF NOT EXISTS `blogs` (
  id int(11) primary key auto_increment,
  name varchar(255) not null,
  image varchar(255) not null,
  description varchar(255) not null,
  status tinyint(1) default '1',
  prioty tinyint(1) default '0',
  created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  update_at date
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
