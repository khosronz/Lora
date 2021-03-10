<?php
return [

    'main' => [
        'user' => [
            'text' => ' کاربران'
        ],
        'role' => [
            'text' => ' نقش ها'
        ],
        'permission' => [
            'text' => ' دسترسی ها'
        ],
    ] ,

    'tickets' => [
        'all' => [
            'text' => 'مدیریت تیکت ها',
        ],
        'priority' => [
            'text' => 'اولویت' ,
            'low' => 'کم' ,
            'medium' => 'متوسط',
            'hight' => 'زیاد'
        ] ,
        'subject' => 'موضوع' ,
        'message' => 'پیام خود را بنویسید ...' ,
        'traking_code' => 'کد رهگیری' ,
        'replay' => 'پاسخ خود را وارد نمایید ...' ,
        'send' => 'ارسال' ,
        'messages' => [
            'changestatus' => 'تیکت با موفقیت بسته گردید .' ,
        ] ,
        'append' => 'افزودن تیکت جدید' ,
        'from_type' => [
            'text' =>  'پاسخ تیکت برای چه کسی ارسال گردد ؟' ,
            'my_role' => 'گروه من' ,
            'me' => 'من'
        ],
        'to_type' => [
            'text' => 'برای چه کسی تیکت میخواهید بفرستید ؟' ,
            'role' => 'گروه' ,
            'user' => 'کاربر'
        ] ,
        'notfound' => 'هیچ آیتمی وجود ندارد !'
    ] ,

    'profile' => [
        'name' => 'نام' ,
        'family'  => 'نام خانوادگی', 
        'firstname' => 'نام' ,
        'lastname'  => 'نام خانوادگی' ,
        'username' => 'نام کاربری' ,
        'email' => 'پست الکترونیکی' ,
        'mobile' => 'شماره موبایل' ,
        'instagram' => 'اکانت اینستاگرام' ,
        'picture' => 'تصویر' ,
        'theme' => 'پوسته داشبورد' ,
        'choose_picture' => 'انتخاب تصویر' ,
        'select_one_type' => "یک گزینه را انتخاب کنید." ,
        'password' => "گذرواژه" ,
        'password_confirmation' => 'تایید گذرواژه' ,
        'themes' => [
            'green' => 'سبز'  ,
            'blue' => 'آبی'  ,
            'yellow' => 'زرد'  ,
            'red' => 'قرمز'  ,
        ],
        'gender' => 'جنسیت' ,
        'genders' => [
            'male'  => 'آقا' ,
            'female' => 'خانم' ,
        ] ,
        'edit' => [
            'text' => 'ویرایش پروفایل' ,
            'desc' => 'پروفایل کاربری خود را ویرایش کنید.'
        ] ,
        'changepassword' => [
            'text' => 'ویرایش گذرواژه' ,
            'desc' => 'گذرواژه خود را ویرایش نمایید.'
        ] ,
        'logout' => 'خروج از پروفایل' ,
        'select_one_color' => 'یک رنگ انتخاب نمایید .' ,
        'select_one_role' => 'یک نقش کاربری انتخاب نمایید .' ,
        'role' => 'نقش کاربری' ,
        'status' => [
            'text' => 'وضعیت کاربری' ,
            'desc' => 'شما میتوانید موقت دسترسی کاربر را فعال/غیرفعال کنید.'
        ] ,
        'just_status' => "فقط وضعیت های فعال سیستم را نشانم دهید ." ,
        'credit' => 'کیف پول'
    ],

    'roles' => [
        'all' => [
            'text' => 'مدیریت نقش ها',
            'desc' => 'شما میتوانید نقش های کاربری را مدیریت ( ساخت , ویرایش و حذف  ) نمایید.'
        ],
        'create' => [
            'text' => 'ساخت نقش کاربری جدید' ,
            'desc' => 'نقش کاربری جدیدی را بسازید .'
        ] ,
        'edit' => [
            'text' => 'ویرایش نقش کاربری' ,
            'text_with_attr' => 'ویرایش نقش کاربری :attribute' ,
            'desc' => 'نقش کاربری را ویرایش نمایید .' ,
        ] ,
        'delete' => [
            'text' => 'حذف نقش کاربری' ,
            'text_with_attr' => 'حذف نقش :attribute' ,
            'desc' => 'نقش کاربری را حذف نمایید .'
        ] ,
        'just_default' => "فقط نقش های دیفالت سیستم را نشانم دهید ." ,
        'default' => [
            'text' => 'نقش اصلی' ,
            'desc' => 'نقش های اصلی قابل حذف نمیباشند آیا مطمئن هستید ؟'
        ],
        'permissions' => [
            'text' => 'انتخاب دسترسی ها' ,
            'desc' => 'دسترسی های مورد نظر را تعیین نمایید .' ,
            'without' => 'دسترسی برای نمایش وجود ندارد .'
        ]
    ],

    'permissions' => [
        'all' => [
            'text' => 'مدیریت دسترسی ها',
            'desc' => 'شما میتوانید دسترسی ها را مدیریت ( ساخت , ویرایش و حذف  ) نمایید.'
        ],
        'delete' => [
            'text' => 'حذف دسترسی' ,
            'text_with_attr' => 'حذف دسترسی :attribute' ,
            'desc' => 'دسترسی را حذف نمایید .'
        ] ,
        'create' => [
            'text' => 'ساخت دسترسی جدید' ,
            'desc' => 'دسترسی جدیدی را بسازید .'
        ] ,
        'edit' => [
            'text' => 'ویرایش دسترسی' ,
            'text_with_attr' => 'ویرایش دسترسی :attribute' ,
            'desc' => 'دسترسی را ویرایش نمایید .' ,
        ] ,
        'default' => [
            'text' => 'دسترسی اصلی' ,
            'desc' => 'دسترسی های اصلی قابل حذف نمیباشند آیا مطمئن هستید ؟'
        ],
        'just_default' => "فقط دسترسی های دیفالت سیستم را نشانم دهید ." ,
    ],

    'users' => [
        'all' => [
            'text' => 'مدیریت کاربران',
            'desc' => 'شما میتوانید کاربران را مدیریت ( ساخت , ویرایش و حذف  ) نمایید.'
        ],
        'edit' => [
            'text' => 'ویرایش کاربر' ,
            'text_with_attr' => 'ویرایش کاربر :attribute' ,
            'desc' => 'کاربر را ویرایش نمایید .' ,
        ] ,
        'delete' => [
            'text' => 'حذف کاربر' ,
            'text_with_attr' => 'حذف کاربر :attribute' ,
            'desc' => 'کاربر را حذف نمایید .'
        ] ,
        'create' => [
            'text' => 'ساخت کاربر'  ,
            'desc' => 'کاربر جدید بسازید و آن را مدیریت کنید .'
        ]
    ],

    'items' => [
        'slug' => 'نشانی کوتاه' ,
        'created_at' => 'زمان ساخت' ,
        'updated_at' => 'زمان ویرایش' ,
        'name' => 'نام' ,
        'username' => 'نام کاربری' ,
        'description' => 'توضیحات' ,
        'search' => 'جستجو ...' ,
        'search_trakingcode' => 'کد رهگیری ...' ,
        'filter' => 'فیلتر' ,
        'id' => 'آیدی' ,
        'information' => 'اطلاعات بیشتر' ,
        'sortby' => 'مرتب سازی' ,
        'users_count' => 'تعداد کاربران'  ,
        'permissions_count' => 'تعداد دسترسی ها' ,
        'create_new' => 'جدید بساز !' ,
        'create' => 'بساز' ,
        'roles_count' => 'تعداد نقش ها' ,
        'useage' => 'تعداد استفاده' ,
        'new' => 'جدید' ,
        'confrim_account' => 'تایید حساب کاربری' ,
        'deConfirm_account' => 'از تایید منصرف شدم' ,
        'update_account'  => 'ویرایش حساب کاربری' ,
        'status' => 'وضعیت' ,
        'select_one_type' => 'یک آیتم انتخاب کنید ...'
    ],

    'messages' => [

        'success' => [
            'tickets' => [
                'create' => 'تیکت با موفقیت ثبت گردید .' ,
            ],
            'profile' => [
                'update' => 'پروفایل کاربری با موفقیت ویرایش گردید.'
            ],
            'roles' => [
                'delete' => 'نقش کاربری با موفقیت حذف گردید .' ,
                'update' => 'نقش کاربری با موفقیت ویرایش گردید.' ,
                'store'  => 'نقش کاربری با موفقیت ساخته شده است .' ,
            ],
            'permissions' => [
                'delete' => 'دسترسی با موفقیت حذف گردید .' ,
                'update' => 'دسترسی با موفقیت ویرایش گردید.' ,
                'store'  => 'دسترسی با موفقیت ساخته شده است .' ,
            ] ,
            'users' => [
                'delete' => 'کاربر با موفقیت حذف گردید .' ,
                'update' => [
                    'profile' => 'پروفایل کاربر با موفقیت ویرایش گردید.' ,
                    'password' => 'گذرواژه کاربر با موفقیت ویرایش گردید.' ,
                ] ,
                'store'  => 'کاربر با موفقیت ساخته شده است .' ,
            ],
            'discounts' => [
                'create' => 'کوپن تخفیف با موفقیت ساخته شده است .' ,
                'update' => 'کوپن تخفیف با موفقیت بروزرسانی گردید .'
            ] ,
            'credit' => [
                'pay' => 'ممنون از پرداخت شما , حساب شما با موفقیت شارژ گردید .'
            ]
        ],
        'errors' => [
            'access' => 'شما امکان دسترسی و مشاهده این بخش را ندارید .' ,
            'status' => 'دسترسی ورود به سیستم از شما صلب گردید لطفا با مدیریت در ارتباط باشید.' ,
            'delete_fail' => 'شما توانایی حذف را ندارید .' ,
        ],
    ],

    'questions' => [
        'role_delete' => "آیا میخواهید این نقش را حذف کنید ؟\n با حذف این نقش تمام وابستگی ها حذف میگردد ." ,
        'permission_delete' => "آیا میخواهید این دسترسی را حذف کنید ؟\n با حذف این دسترسی تمام وابستگی ها حذف میگردد ." ,
        'user_delete' => "آیا میخواهید این کاربر را حذف کنید ؟\n با حذف این دسترسی تمام وابستگی ها حذف میگردد ." ,
    ],

    'period_time' => [
        'all'   => 'همه اطلاعات' ,
        'today' => 'امروز' ,
        'yesterday' => 'دیروز' ,
        '1week'  => 'هفته قبل' ,
        '2week' => 'دو هفته قبل' ,
        '3week' => 'سه هفته قبل'  ,
        '1month' => 'ماه قبل'  ,
        '2month' => 'دو ماه قبل'  ,
        '3month' => 'سه ماه قبل' ,
        '6month' => 'شش ماه قبل' ,
        '1year' => ' سال قبل' ,
    ],

    'order' => [
        'asc' => 'صعودی' ,
        'desc' => 'نزولی'
    ] ,

    'status' => [
        'false' => 'غیرفعال' ,
        'true' => 'فعال' ,
        '0' => 'غیرفعال' ,
        '1' => 'فعال' ,
        'payment' => [
            'INIT' => 'در حال انتظار' ,
            'SUCCEED' => 'تکمیل شده' ,
            'FAILED' => 'ناتمام'
        ]
    ],

    'sidebar' => [
        'main_menu' => 'منو اصلی' ,
        'roles' => 'نقش ها' ,
        'accesses' => 'دسترسی ها' ,
        'dashboard' => 'داشبورد' ,
        'users' => 'کاربران' ,
        'tickets' => 'تیکت ها' ,
        'discounts' => 'کوپن تخفیف' ,
        'factor' => 'فاکتور' ,
        'factor_payment' => 'پرداخت ها' ,
        "option" => [
            "text" => "تنظیمات" ,
            "menu" => "فهرست"
        ]
    ] ,

    'errors' => [
        '404' => [
            'text' => 'پُرسَپ | صفحه یافت نشد.' ,
            'desc' => ' متاسفم ! خطای 404 رخ داد و صفحه شما یافت نشد .' ,
        ]
    ] ,

    'currency' => [
        'rial' => 'ریال' ,
        'thousandrial' => 'هزار ریال' ,
        'toman' => 'تومان' ,
        'thousandtoman' => 'هزار تومان' ,
    ] ,

    'credit' => [
        'charge' => [
            'text' => 'شارژ کیف پول' ,
            'desc' => 'شما میتوانید موجودی کیف پول خود را افزایش دهید .'
        ] ,
        'price'  => 'مبلغ شارژ' ,
        'placeholder' => 'مبلغ شارژ خود را وارد نمایید ...' ,
        'Paynow' => 'همین الان پرداخت کن' ,
        'ihave_discount' => 'کد تخفیف دارم' ,
        'ihavenot_discount' => 'کد تخفیف ندارم' ,
        'enterdiscount' => 'کد تخفیف خود را وارد نمایید'

    ] ,

    'discounts' => [
        'label' => 'کوپن تخفیف' ,
        'show_label' => 'نمایش کوپن تخفیف' ,
        'show_desc'  => 'کوپن تخفیف را ویرایش نمایید یا حذف کنید .' ,
        'desc'  => 'کوپن تخفیف بسازید و یا کوپن های خودتون را مدیریت کنید .' ,
        'all'   => 'کوپن ها' ,
        'usage' => 'استفاده' ,
        'how_long' => 'انقضا' ,
        'more'  => 'اطلاعات بیشتر' ,
        'search'=> 'کوپن تخفیف رو وارد کن ..' ,
        'create'=> 'ساخت کوپن تخفیف' ,
        'number_of_use' => 'تعداد استفاده' ,
        'code'  => 'کد تخفیف' ,
        'expired_at' => 'زمان انقضا' ,
        'percent' => 'درصد تخفیف' ,
        'percent_label' => 'درصد تخفیف خود را وارد نمایید .' ,
        'amount'  => 'کسر قیمت' ,
        'amount_label'  => 'چقدر میخواهید از قیمت کل کسر شود .' ,
        'edit' => 'ویرایش کوپن تخفیف' ,
        'edit_button' => 'ویرایش'
    ] ,

    'factor' => [
        'label'  => 'فاکتور پرداخت' ,
        'amount' => 'مبلغ پرداخت شده' ,
        'created_at' => 'تاریخ پرداخت' ,
        'coupon' => 'کوپن تخفیف' ,
        'tracking_code' => 'کد رهگیری' ,
        'transaction_id' => 'شماره تراکنش' ,
        'charge' => 'مبلغ شارژ شده' ,
        'payment' => 'فاکتورهای پرداخت' ,
        'payment_label' => 'تمام فاکتورهای پرداخت را مشاهده کنید'
    ] ,

    'table' => [
        'created_at' => 'زمان ساخت' ,
        'status' => 'وضعیت' ,
        'bank' => 'بانک' ,
        'price' => 'قیمت' ,
        'transaction_id' => 'شماره تراکنش' ,
        'tracking_code'  => 'کد رهگیری' ,
        'username' => 'نام کاربری' ,
        'discount_code' => 'کد تخفیف' ,
        'filter_payments' => 'جستجو در پرداخت ها' ,
        'credit' => 'موجودی'
    ],
    'buy' => [
        'text' => 'خرید سرویس' ,
        'label'=> 'ارائه دهنده مستقیم و بدون واسطه' ,
        "category" => 'دسته بندی ها' ,
        'service' => 'سرویس ها' ,
        "notfound" => 'متاسفانه سرویسی برای ارائه خدمات فعلا وجود ندارد' ,
        'submit' => 'ثبت سفارش' ,
        'per' => 'قیمت هر 100 تا' ,
        'final_currency' => 'قیمت نهایی' ,
        'factor' => 'فاکتور' ,
        'credit' => 'موجودی من' ,
        'order' => [
            'all' => [
                'title' => 'فاکتور سرویس' ,
                'desc'  => 'نمایش تمام فاکتور های سرویس'
            ] ,
            'show' => [
                'title' => 'فاکتور : :attribute' ,
                'desc'  => 'نمایش جزییات فاکتور سرویس '
            ]
        ]
    ] ,
    "option" => [
        "title" => "تنظیمات" ,
        "desc" => "داده های سایت خود را مدیریت کنید ."
    ] ,
];