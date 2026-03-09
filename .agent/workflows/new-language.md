---
description: Add a new language to the lang folder (vnx-whmcs-v3 template)
---

# Cấu trúc folder `lang/`

```
lang/
├── english.php           # File ngôn ngữ chính (English) — gồm include + override WHMCS mặc định
├── vietnamese.php        # File ngôn ngữ chính (Tiếng Việt) — gồm include + override WHMCS mặc định
├── vnxlangs/             # Các chuỗi tuỳ chỉnh của VNX (không phải WHMCS gốc)
│   ├── english.php
│   ├── english2.php
│   ├── english3.php
│   ├── vietnamese.php
│   ├── vietnamese2.php
│   ├── vietnamese3.php
│   └── orderform/        # Chuỗi riêng của order form
├── overrides/            # Ghi đè các chuỗi WHMCS mặc định
│   ├── english.php
│   └── vietnamese.php
```

## Quy tắc phân tách file

- **`lang/{locale}.php`** — File gốc: include các file `vnxlangs/`, set `locale`, `isocode`, và ghi đè nhỏ trực tiếp.
- **`lang/vnxlangs/{locale}.php`** — Chuỗi mới hoàn toàn của VNX (không có trong WHMCS mặc định).
- **`lang/overrides/{locale}.php`** — Ghi đè chuỗi WHMCS gốc (thay thế giá trị mặc định của WHMCS).

## Quy tắc bắt buộc

> [!IMPORTANT]
> **Chỉ được thêm chuỗi ngôn ngữ mới vào:**
> - `lang/vnxlangs/vietnamese3.php` — cho tiếng Việt
> - `lang/vnxlangs/english3.php` — cho tiếng Anh
>
> Không thêm vào các file `vietnamese.php`, `vietnamese2.php`, `english.php`, `english2.php` hay bất kỳ file nào khác.

## Cách thêm chuỗi ngôn ngữ mới

### 1. Thêm vào `lang/vnxlangs/vietnamese3.php`

```php
/*
 ***********
 * [Tên section]
 *
 */
$_LANG['myFeature']['title'] = "Tiêu đề tính năng";
$_LANG['myFeature']['description'] = "Mô tả tính năng";
```

### 2. Thêm chuỗi tương ứng vào `lang/vnxlangs/english3.php`

```php
/*
 ***********
 * [Section Name]
 *
 */
$_LANG['myFeature']['title'] = "Feature Title";
$_LANG['myFeature']['description'] = "Feature description";
```

### 3. Sử dụng trong template (Smarty)

```smarty
{$LANG.myFeature.title}
```

Hoặc trong PHP:

```php
$_LANG['myFeature']['title']
```

### 4. Kiểm tra

- Chuyển sang tiếng Việt → kiểm tra chuỗi trong `vietnamese3.php`.
- Chuyển sang tiếng Anh → kiểm tra chuỗi trong `english3.php`.

## Lưu ý

- **Không sửa** `lang/english.php` trực tiếp vì WHMCS sẽ ghi đè khi update. Dùng `overrides/` thay thế.
- Chuỗi trong `vnxlangs/` là của riêng VNX template, không bị WHMCS ghi đè.
- Nếu một chuỗi xuất hiện ở cả `lang/{locale}.php` lẫn `overrides/{locale}.php`, thứ tự load trong WHMCS quyết định cái nào thắng (overrides được load sau, nên thắng).
