<?php

return [
    'plural' => 'المستخدمين',
    'trashedplural' => 'المستخدمين المحذوفين',
    'singular' => 'المستخدم',
    'empty' => 'لا يوجد مستخدمين',
    'select' => 'اختر المستخدم',
    'perPage' => 'عدد النتائج في الصفحة',
    'filter' => 'ابحث عن مستخدم',
    'my_profile' => 'ملفي الشخصي',
    'actions' => [
        'list' => 'كل المستخدمين',
        'show' => 'عرض',
        'create' => 'إضافة مستخدم جديد',
        'new' => 'إضافة',
        'edit' => 'تعديل  المستخدم',
        'delete' => 'حذف المستخدم',
        'save' => 'حفظ',
        'filter' => 'بحث',
        'block' => 'حظر المستخدم',
        'unblock' => 'الغاء حظر المستخدم',
        'trashed' => 'قائمة المستخدمين المحذوفين',
        'restore' => 'استعادة المستخدم',
        'force' => 'حذف المستخدم نهائيا',
    ],
    'messages' => [
        'created' => 'تم إضافة المستخدم بنجاح .',
        'updated' => 'تم تعديل المستخدم بنجاح .',
        'deleted' => 'تم حذف المستخدم بنجاح .',
        'blocked' => 'تم حظر المستخدم بنجاح .',
        'unblocked' => 'تم الغاء حظر المستخدم بنجاح .',
        'images_note' => 'الملفات المدعومة: jpeg ، png ، jpg | الحد الأقصى لحجم الملف: 10 ميجا بايت',
        'restored' => 'تم استعادة المستخدم بنجاح.',
        'fdeleted' => 'تم حذف المستخدم بنجاح بشكل نهائي.',
    ],
    'attributes' => [
        'name' => 'الاسم',
        'username' => 'اسم االمستخدم',
        'phone' => 'رقم الهاتف',
        'email' => 'البريد الالكترونى',
        'created_at' => 'تاريخ الإنضمام',
        'old_password' => 'كلمة المرور القديمة',
        'password' => 'كلمة المرور',
        'password_confirmation' => 'تأكيد كلمة المرور',
        'type' => 'نوع المستخدم',
        'avatar' => 'الصورة الشخصية',
        'verified' => 'تم التحقق',
        'verified_at' => 'تم التحقق منه في',
        'can_access' => 'يمكن تسجيل الدخول إلى النظام؟'
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'تحذير !',
            'info' => 'هل أنت متأكد انك تريد حذف هذا المستخدم ?',
            'confirm' => 'حذف',
            'cancel' => 'إلغاء',
        ],
        'force' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد حذف المستخدم نهائيا ؟',
            'confirm' => 'حذف',
            'cancel' => 'الغاء',
        ],
        "restore" => [
            'title' => 'انتباه !',
            'info' => 'هل أنت متأكد من أنك تريد استعادة المستخدم؟',
            'confirm' => 'أستعادة',
            'cancel' => 'الغاء',
        ],        'block' => [
            'title' => 'تحذير !',
            'info' => 'هل أنت متأكد انك تريد حظر هذا المستخدم ?',
            'confirm' => 'حظر',
            'cancel' => 'إلغاء',
        ],
        'unblock' => [
            'title' => 'تحذير !',
            'info' => 'هل أنت متأكد انك تريد الغاء حظر هذا المستخدم ?',
            'confirm' => 'الغاء حظر',
            'cancel' => 'إلغاء',
        ],
    ],
];
