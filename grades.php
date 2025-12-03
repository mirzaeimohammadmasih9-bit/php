<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌸 سیستم ناز مدیریت نمرات 🌸</title>
    
    <!-- Tailwind با تم صورتی -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'pink-primary': '#ff66a3',
                        'pink-secondary': '#ff99cc',
                        'pink-light': '#ffe6f0',
                        'pink-dark': '#ff3385',
                        'pink-love': '#ff0066',
                        'cute-purple': '#cc99ff',
                        'cute-yellow': '#fff0b3',
                        'cute-blue': '#b3e0ff',
                        'cute-green': '#b3ffcc'
                    },
                    fontFamily: {
                        'cute': ['"Comic Sans MS"', '"Baloo Bhaijaan 2"', 'cursive'],
                        'bubble': ['"Comic Sans MS"', 'cursive'],
                        'naz': ['"Vazirmatn"', '"Segoe UI Emoji"', 'sans-serif']
                    },
                    animation: {
                        'bounce-slow': 'bounce 3s infinite',
                        'pulse-slow': 'pulse 4s infinite',
                        'spin-slow': 'spin 8s linear infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'wiggle': 'wiggle 1s ease-in-out infinite',
                        'heartbeat': 'heartbeat 1.5s ease-in-out infinite',
                        'rainbow': 'rainbow 5s linear infinite',
                        'sparkle': 'sparkle 2s infinite',
                        'bounce-twice': 'bounce-twice 2s infinite',
                        'jelly': 'jelly 0.8s ease-in-out'
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' }
                        },
                        wiggle: {
                            '0%, 100%': { transform: 'rotate(-3deg)' },
                            '50%': { transform: 'rotate(3deg)' }
                        },
                        heartbeat: {
                            '0%, 100%': { transform: 'scale(1)' },
                            '14%': { transform: 'scale(1.3)' },
                            '28%': { transform: 'scale(1)' },
                            '42%': { transform: 'scale(1.3)' },
                            '70%': { transform: 'scale(1)' }
                        },
                        rainbow: {
                            '0%': { 'background-position': '0% 50%' },
                            '100%': { 'background-position': '100% 50%' }
                        },
                        sparkle: {
                            '0%, 100%': { opacity: 0.2 },
                            '50%': { opacity: 1 }
                        },
                        'bounce-twice': {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '25%': { transform: 'translateY(-20px)' },
                            '50%': { transform: 'translateY(0)' },
                            '75%': { transform: 'translateY(-10px)' }
                        },
                        jelly: {
                            '0%, 100%': { transform: 'scale(1, 1)' },
                            '25%': { transform: 'scale(0.9, 1.1)' },
                            '50%': { transform: 'scale(1.1, 0.9)' },
                            '75%': { transform: 'scale(0.95, 1.05)' }
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- آیکون‌های فونت-آوسم -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- فونت فارسی ناز -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700;800&family=Vazirmatn:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- پکیج تاریخ شمسی -->
    <script src="https://cdn.jsdelivr.net/npm/persian-date@1.1.0/dist/persian-date.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/persian-datepicker@1.2.0/dist/js/persian-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/persian-datepicker@1.2.0/dist/css/persian-datepicker.min.css">
    
    <!-- استایل‌های اضافی -->
    <style>
        /* پس‌زمینه کیوت */
        body {
            background: linear-gradient(135deg, #ffe6f0 0%, #ffccdd 25%, #ffb3d9 50%, #ff99cc 75%, #ff80bf 100%);
            background-size: 400% 400%;
            animation: rainbow 15s ease infinite;
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }
        
        /* قلب‌های شناور */
        .floating-hearts::before,
        .floating-hearts::after {
            content: "💖 💕 🎀 ✨ 🌸 🦄 🧚‍♀️ 🎇 🎈";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
            opacity: 0.1;
            font-size: 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            animation: float 8s ease-in-out infinite;
        }
        
        /* دکمه‌های ناز */
        .cute-btn {
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            transform-origin: center;
            position: relative;
            overflow: hidden;
        }
        
        .cute-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: 0.5s;
        }
        
        .cute-btn:hover::before {
            left: 100%;
        }
        
        .cute-btn:hover {
            transform: scale(1.1) rotate(5deg);
        }
        
        /* کارت‌های ناز */
        .cute-card {
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            transform-origin: center;
            border: 3px solid white;
            box-shadow: 0 10px 30px rgba(255, 102, 163, 0.3);
        }
        
        .cute-card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 20px 50px rgba(255, 102, 163, 0.5);
        }
        
        /* جدول ناز */
        .cute-table tr {
            transition: all 0.3s ease;
        }
        
        .cute-table tr:hover {
            transform: scale(1.02);
            background: rgba(255, 255, 255, 0.5) !important;
        }
        
        /* نمره با رنگ‌های کیوت */
        .grade-excellent {
            background: linear-gradient(145deg, #b3ffcc, #66ff99) !important;
            color: #006633 !important;
            border: 2px dashed #00cc66 !important;
        }
        
        .grade-good {
            background: linear-gradient(145deg, #b3e0ff, #66ccff) !important;
            color: #003366 !important;
            border: 2px dashed #0066cc !important;
        }
        
        .grade-average {
            background: linear-gradient(145deg, #fff0b3, #ffcc66) !important;
            color: #663300 !important;
            border: 2px dashed #ff9900 !important;
        }
        
        .grade-poor {
            background: linear-gradient(145deg, #ffcccc, #ff6666) !important;
            color: #660000 !important;
            border: 2px dashed #ff3333 !important;
        }
        
        /* انیمیشن ورود */
        @keyframes slideInDown {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        .animate-slideInDown {
            animation: slideInDown 0.8s ease-out;
        }
        
        /* استاره‌های درخشان */
        .sparkle-text {
            background: linear-gradient(90deg, #ff0066, #ff66a3, #ff99cc, #ff66a3, #ff0066);
            background-size: 200% auto;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: rainbow 3s linear infinite;
        }
        
        /* افکت برف صورتی */
        .pink-snow {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }
        
        .snowflake {
            position: absolute;
            background: linear-gradient(145deg, #ffb6c1, #ff99cc);
            border-radius: 50%;
            animation: fall linear infinite;
        }
        
        @keyframes fall {
            to {
                transform: translateY(100vh) rotate(360deg);
            }
        }
        
        /* مودال ناز */
        .cute-modal {
            animation: jelly 0.8s ease-out;
            border: 4px dashed #ff99cc;
            box-shadow: 0 0 50px rgba(255, 102, 163, 0.5);
        }
        
        /* فیلدهای ورودی ناز */
        .cute-input {
            transition: all 0.3s ease;
            border: 3px solid #ffccdd;
        }
        
        .cute-input:focus {
            border-color: #ff66a3;
            box-shadow: 0 0 0 4px rgba(255, 102, 163, 0.2);
            transform: translateY(-3px);
        }
        
        /* استایل‌های مخصوص برای ریسپانسیو */
        @media (max-width: 768px) {
            .cute-card {
                margin-bottom: 20px;
            }
            
            .floating-hearts::before,
            .floating-hearts::after {
                font-size: 20px;
            }
        }
    </style>
</head>
<body class="floating-hearts font-naz">
    
    <!-- برف صورتی -->
    <div class="pink-snow" id="pinkSnow"></div>
    
    <div class="max-w-7xl mx-auto p-4 relative z-10">
        
        <!-- هدر ناز و گوگولی -->
        <div class="bg-gradient-to-r from-pink-primary via-pink-dark to-pink-love text-white p-8 rounded-3xl shadow-2xl mb-8 animate-slideInDown border-4 border-white">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="text-center md:text-right mb-6 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4 font-cute animate-pulse-slow">
                        <i class="fas fa-star sparkle-text mr-3"></i>
                        سیستم ناز مدیریت نمرات
                        <i class="fas fa-heart animate-heartbeat ml-3 text-red-200"></i>
                    </h1>
                    <p class="text-xl text-pink-light animate-float">
                        <i class="fas fa-magic mr-2"></i>
                        مدیریت، فیلتر و ویرایش نمرات در بازه زمانی مشخص
                    </p>
                </div>
                <div class="bg-white/30 p-4 rounded-2xl backdrop-blur-sm animate-wiggle">
                    <div class="flex items-center space-x-4 space-x-reverse">
                        <div class="bg-white p-3 rounded-full animate-spin-slow">
                            <i class="fas fa-graduation-cap text-3xl text-pink-dark"></i>
                        </div>
                        <div class="text-white">
                            <p class="font-bold text-lg">💖 امروز:</p>
                            <p id="todayDate" class="text-xl font-bold"></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- افکت اضافی -->
            <div class="mt-6 flex justify-center space-x-4 space-x-reverse">
                <div class="bg-white/20 p-2 rounded-full animate-bounce-slow">
                    <i class="fas fa-sparkles text-yellow-300"></i>
                </div>
                <div class="bg-white/20 p-2 rounded-full animate-bounce-slow" style="animation-delay: 0.2s">
                    <i class="fas fa-crown text-yellow-300"></i>
                </div>
                <div class="bg-white/20 p-2 rounded-full animate-bounce-slow" style="animation-delay: 0.4s">
                    <i class="fas fa-gem text-cyan-300"></i>
                </div>
                <div class="bg-white/20 p-2 rounded-full animate-bounce-slow" style="animation-delay: 0.6s">
                    <i class="fas fa-heart text-red-300"></i>
                </div>
            </div>
        </div>

        <!-- فیلتر بازه زمانی ناز -->
        <div class="bg-white p-8 rounded-3xl shadow-xl mb-8 cute-card border-4 border-dashed border-pink-secondary">
            <h2 class="text-2xl font-bold text-pink-dark mb-6 flex items-center">
                <i class="fas fa-filter ml-3 text-pink-primary animate-wiggle"></i>
                <span class="sparkle-text">فیلتر بازه تاریخ ناز</span>
                <i class="fas fa-calendar-heart mr-3 text-pink-primary animate-heartbeat"></i>
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-5 gap-6 mb-6">
                <div class="md:col-span-2">
                    <label class="block text-lg font-medium text-pink-dark mb-3">
                        <i class="fas fa-calendar-plus ml-2"></i>
                        از تاریخ
                    </label>
                    <input type="text" id="startDate" 
                           class="w-full p-4 cute-input rounded-2xl text-center text-xl font-bold datepicker bg-pink-light/50"
                           placeholder="🌸 1404/05/01">
                </div>
                <div class="md:col-span-2">
                    <label class="block text-lg font-medium text-pink-dark mb-3">
                        <i class="fas fa-calendar-minus ml-2"></i>
                        تا تاریخ
                    </label>
                    <input type="text" id="endDate" 
                           class="w-full p-4 cute-input rounded-2xl text-center text-xl font-bold datepicker bg-pink-light/50"
                           placeholder="🌸 1404/05/15">
                </div>
                <div class="flex flex-col justify-end space-y-4">
                    <button onclick="applyDateFilter()" 
                            class="cute-btn w-full bg-gradient-to-r from-cute-green to-emerald-400 hover:from-emerald-400 hover:to-cute-green text-white p-4 rounded-2xl font-bold text-lg shadow-xl transition-all duration-300 animate-bounce-twice">
                        <i class="fas fa-search ml-3 animate-pulse"></i>
                        🔍 اعمال فیلتر
                    </button>
                    <button onclick="clearDateFilter()" 
                            class="cute-btn w-full bg-gradient-to-r from-cute-purple to-purple-400 hover:from-purple-400 hover:to-cute-purple text-white p-4 rounded-2xl font-bold text-lg shadow-xl transition-all duration-300">
                        <i class="fas fa-broom ml-3"></i>
                        🧹 حذف فیلتر
                    </button>
                </div>
            </div>
            
            <div class="bg-gradient-to-r from-pink-light to-white p-5 rounded-2xl border-2 border-dotted border-pink-secondary mt-6">
                <div class="flex items-center justify-between">
                    <div class="text-center">
                        <p class="text-gray-600 mb-2">🌸 تعداد فیلتر شده</p>
                        <p id="filterCount" class="text-4xl font-bold text-pink-dark animate-pulse">0</p>
                    </div>
                    <div class="text-center">
                        <p class="text-gray-600 mb-2">✨ درصد موفقیت</p>
                        <p id="successRate" class="text-4xl font-bold text-emerald-600 animate-pulse">0%</p>
                    </div>
                    <div class="text-center">
                        <p class="text-gray-600 mb-2">🎯 میانگین نمرات</p>
                        <p id="averageGrade" class="text-4xl font-bold text-blue-600 animate-pulse">0</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center text-pink-dark mt-6 text-lg">
                <i class="fas fa-heart-circle-check ml-2 animate-heartbeat"></i>
                تاریخ‌ها را به صورت شمسی وارد کنید (مثال: 1404/05/01)
                <i class="fas fa-heart-circle-check mr-2 animate-heartbeat"></i>
            </div>
        </div>

        <!-- آمار و کارت‌های کیوت -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-gradient-to-br from-pink-light to-white border-4 border-pink-secondary p-6 rounded-3xl shadow-xl cute-card">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-600 mb-3 text-lg">
                            <i class="fas fa-list-check ml-2"></i>
                            تعداد نمرات
                        </p>
                        <p id="totalGrades" class="text-5xl font-bold text-pink-dark animate-bounce-slow">0</p>
                    </div>
                    <div class="bg-gradient-to-r from-pink-primary to-pink-dark text-white p-4 rounded-full animate-spin-slow">
                        <i class="fas fa-list-ol text-3xl"></i>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <div class="w-full bg-pink-light rounded-full h-4">
                        <div id="gradeBar" class="bg-gradient-to-r from-pink-primary to-pink-dark h-4 rounded-full transition-all duration-1000" style="width: 0%"></div>
                    </div>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-cute-yellow to-white border-4 border-yellow-300 p-6 rounded-3xl shadow-xl cute-card">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-600 mb-3 text-lg">
                            <i class="fas fa-arrow-trend-down ml-2"></i>
                            کمترین نمره
                        </p>
                        <p id="minGrade" class="text-5xl font-bold text-amber-700 animate-bounce-slow" style="animation-delay: 0.2s">0</p>
                    </div>
                    <div class="bg-gradient-to-r from-amber-400 to-amber-600 text-white p-4 rounded-full animate-float">
                        <i class="fas fa-arrow-down text-3xl"></i>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-amber-600 text-sm">
                        <i class="fas fa-lightbulb ml-1"></i>
                        <span id="minGradeAdvice">نیاز به تلاش بیشتر!</span>
                    </p>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-cute-blue to-white border-4 border-blue-300 p-6 rounded-3xl shadow-xl cute-card">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-600 mb-3 text-lg">
                            <i class="fas fa-arrow-trend-up ml-2"></i>
                            بیشترین نمره
                        </p>
                        <p id="maxGrade" class="text-5xl font-bold text-blue-700 animate-bounce-slow" style="animation-delay: 0.4s">0</p>
                    </div>
                    <div class="bg-gradient-to-r from-blue-400 to-blue-600 text-white p-4 rounded-full animate-float" style="animation-delay: 0.2s">
                        <i class="fas fa-arrow-up text-3xl"></i>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-blue-600 text-sm">
                        <i class="fas fa-trophy ml-1"></i>
                        <span id="maxGradeCongrat">آفرین! عالی هستی!</span>
                    </p>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-cute-purple to-white border-4 border-purple-300 p-6 rounded-3xl shadow-xl cute-card">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-600 mb-3 text-lg">
                            <i class="fas fa-plus-circle ml-2"></i>
                            ثبت نمره جدید
                        </p>
                        <button onclick="openNewGradeModal()" 
                                class="cute-btn w-full bg-gradient-to-r from-purple-500 to-cute-purple hover:from-cute-purple hover:to-purple-500 text-white p-4 rounded-2xl font-bold text-lg shadow-xl transition-all duration-300 animate-heartbeat">
                            <i class="fas fa-magic ml-3"></i> 🎀 افزودن نمره ناز
                        </button>
                    </div>
                    <div class="bg-gradient-to-r from-purple-400 to-cute-purple text-white p-4 rounded-full animate-wiggle">
                        <i class="fas fa-wand-magic-sparkles text-3xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- جدول نمرات کیوت -->
        <div class="bg-white p-8 rounded-3xl shadow-xl border-4 border-pink-secondary">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl font-bold text-pink-dark">
                    <i class="fas fa-table ml-3 text-emerald-500 animate-wiggle"></i>
                    <span class="sparkle-text">لیست نمرات ناز</span>
                    <i class="fas fa-star mr-3 text-yellow-400 animate-sparkle"></i>
                </h2>
                <div class="bg-pink-light px-5 py-3 rounded-2xl border-2 border-dotted border-pink-primary">
                    <span id="tableInfo" class="text-pink-dark font-bold">✨ در حال بارگذاری...</span>
                </div>
            </div>
            
            <div class="overflow-x-auto rounded-2xl border-4 border-dashed border-pink-light cute-table">
                <table class="w-full">
                    <thead class="bg-gradient-to-r from-pink-light to-pink-secondary">
                        <tr class="text-lg">
                            <th class="p-5 text-right font-bold text-pink-dark border-l-4 border-white">🌸 ردیف</th>
                            <th class="p-5 text-right font-bold text-pink-dark border-l-4 border-white">📚 نام درس</th>
                            <th class="p-5 text-right font-bold text-pink-dark border-l-4 border-white">⭐ نمره</th>
                            <th class="p-5 text-right font-bold text-pink-dark border-l-4 border-white">📅 تاریخ ثبت اولیه</th>
                            <th class="p-5 text-right font-bold text-pink-dark border-l-4 border-white">✏️ تاریخ آخرین ویرایش</th>
                            <th class="p-5 text-right font-bold text-pink-dark border-l-4 border-white">🎭 وضعیت</th>
                            <th class="p-5 text-right font-bold text-pink-dark">🎪 عملیات</th>
                        </tr>
                    </thead>
                    <tbody id="gradesTableBody" class="divide-y-4 divide-pink-light">
                        <!-- نمرات در اینجا لود می‌شوند -->
                    </tbody>
                </table>
                
                <!-- حالت خالی ناز -->
                <div id="emptyState" class="hidden p-12 text-center">
                    <div class="text-pink-secondary mb-6 animate-float">
                        <i class="fas fa-cloud-rainbow text-7xl"></i>
                    </div>
                    <p class="text-pink-dark text-2xl font-bold mb-4 animate-pulse-slow">🌸 هیچ نمره‌ای یافت نشد</p>
                    <p class="text-gray-500 text-lg mb-8">با دکمه "افزودن نمره ناز" اولین نمره رو ثبت کن!</p>
                    <button onclick="openNewGradeModal()" 
                            class="cute-btn bg-gradient-to-r from-pink-primary to-pink-dark text-white px-8 py-4 rounded-2xl font-bold text-xl shadow-xl hover:shadow-2xl transition-all duration-300 animate-heartbeat">
                        <i class="fas fa-sparkles ml-3"></i> ساخت اولین نمره ناز
                    </button>
                </div>
            </div>
            
            <!-- پایین جدول -->
            <div class="mt-8 bg-gradient-to-r from-pink-light to-transparent p-5 rounded-2xl border-2 border-dotted border-pink-secondary">
                <div class="flex items-center justify-center space-x-6 space-x-reverse">
                    <div class="text-center">
                        <div class="bg-white p-3 rounded-full inline-block">
                            <i class="fas fa-heart text-2xl text-red-400 animate-heartbeat"></i>
                        </div>
                        <p class="mt-2 text-pink-dark font-bold">نمرات بالای ۱۸</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-white p-3 rounded-full inline-block">
                            <i class="fas fa-star text-2xl text-yellow-400 animate-sparkle"></i>
                        </div>
                        <p class="mt-2 text-pink-dark font-bold">نمرات متوسط</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-white p-3 rounded-full inline-block">
                            <i class="fas fa-cloud text-2xl text-blue-400 animate-float"></i>
                        </div>
                        <p class="mt-2 text-pink-dark font-bold">نیاز به تلاش</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- پایین صفحه ناز -->
        <div class="mt-8 text-center">
            <div class="bg-white/80 backdrop-blur-sm p-6 rounded-3xl border-4 border-dashed border-pink-secondary">
                <p class="text-pink-dark text-lg font-bold mb-4">
                    <i class="fas fa-crown mr-2 text-yellow-500 animate-wiggle"></i>
                    سیستم مدیریت نمرات ناز | تاریخ شمسی | طراحی شده با عشق و قلبی پر از محبت
                    <i class="fas fa-heart ml-2 text-red-400 animate-heartbeat"></i>
                </p>
                <div class="flex justify-center space-x-6 space-x-reverse">
                    <span class="text-gray-600">
                        <i class="fas fa-birthday-cake mr-2 text-pink-primary"></i>
                        همه داده‌ها در مرورگر ذخیره می‌شن
                    </span>
                    <span class="text-gray-600">
                        <i class="fas fa-cookie-bite mr-2 text-amber-600"></i>
                        شیرینی مدیریت نمرات با ما
                    </span>
                    <span class="text-gray-600">
                        <i class="fas fa-rainbow mr-2 text-purple-500"></i>
                        تجربه‌ای رنگارنگ
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- مودال ثبت/ویرایش نمره ناز -->
    <div id="gradeModal" class="hidden fixed inset-0 bg-black/70 flex items-center justify-center z-50 p-4">
        <div class="bg-gradient-to-br from-white to-pink-light rounded-3xl w-full max-w-lg cute-modal border-4 border-dashed border-pink-primary">
            <div class="p-8">
                <!-- تیتر مودال -->
                <div class="flex justify-between items-center mb-8">
                    <h3 class="text-2xl font-bold text-pink-dark" id="modalTitle">
                        <i class="fas fa-sparkles mr-3 text-yellow-500 animate-sparkle"></i>
                        ثبت نمره جدید ناز
                    </h3>
                    <button onclick="closeGradeModal()" 
                            class="cute-btn bg-pink-light text-pink-dark hover:bg-pink-secondary p-3 rounded-full">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                
                <!-- فرم ناز -->
                <div class="space-y-6">
                    <!-- نام درس -->
                    <div>
                        <label class="block text-lg font-medium text-pink-dark mb-3">
                            <i class="fas fa-book-open ml-2 text-blue-500"></i>
                            نام درس ناز
                        </label>
                        <input type="text" id="lessonName" 
                               class="w-full p-4 cute-input rounded-2xl bg-white/80 text-lg font-bold transition-all duration-300"
                               placeholder="📚 مثال: ریاضی ناز، فیزیک گوگولی، ...">
                        <div class="mt-2 flex items-center text-sm text-gray-500">
                            <i class="fas fa-lightbulb ml-2 text-yellow-500"></i>
                            اسم درس رو خیلی ناز و گوگولی انتخاب کن!
                        </div>
                    </div>
                    
                    <!-- نمره -->
                    <div>
                        <label class="block text-lg font-medium text-pink-dark mb-3">
                            <i class="fas fa-star ml-2 text-yellow-500 animate-sparkle"></i>
                            نمره (0 تا 20)
                        </label>
                        <input type="number" id="gradeValue" min="0" max="20" step="0.25"
                               class="w-full p-4 cute-input rounded-2xl bg-white/80 text-center text-2xl font-bold transition-all duration-300"
                               placeholder="⭐ مثال: 18.5">
                        <div class="mt-3 flex justify-between">
                            <div class="text-center">
                                <div class="w-16 h-16 rounded-full bg-gradient-to-r from-red-400 to-red-600 flex items-center justify-center text-white font-bold text-lg grade-circle"
                                     onclick="setGrade(10)">
                                    10
                                </div>
                                <p class="text-xs mt-2 text-gray-600">ضعیف</p>
                            </div>
                            <div class="text-center">
                                <div class="w-16 h-16 rounded-full bg-gradient-to-r from-yellow-400 to-yellow-600 flex items-center justify-center text-white font-bold text-lg grade-circle"
                                     onclick="setGrade(15)">
                                    15
                                </div>
                                <p class="text-xs mt-2 text-gray-600">متوسط</p>
                            </div>
                            <div class="text-center">
                                <div class="w-16 h-16 rounded-full bg-gradient-to-r from-green-400 to-green-600 flex items-center justify-center text-white font-bold text-lg grade-circle"
                                     onclick="setGrade(18)">
                                    18
                                </div>
                                <p class="text-xs mt-2 text-gray-600">خوب</p>
                            </div>
                            <div class="text-center">
                                <div class="w-16 h-16 rounded-full bg-gradient-to-r from-blue-400 to-blue-600 flex items-center justify-center text-white font-bold text-lg grade-circle"
                                     onclick="setGrade(20)">
                                    20
                                </div>
                                <p class="text-xs mt-2 text-gray-600">عالی</p>
                            </div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-sm text-gray-500">
                                <i class="fas fa-info-circle ml-1"></i>
                                مقدار بین 0 تا 20
                            </span>
                            <span id="gradeEmoji" class="text-2xl">😊</span>
                            <span id="gradeHint" class="text-lg font-bold text-pink-dark">خوب</span>
                        </div>
                    </div>
                    
                    <!-- تاریخ -->
                    <div id="originalDateField">
                        <label class="block text-lg font-medium text-pink-dark mb-3">
                            <i class="fas fa-calendar-heart ml-2 text-pink-primary animate-heartbeat"></i>
                            تاریخ ثبت
                        </label>
                        <input type="text" id="gradeDate" 
                               class="w-full p-4 cute-input rounded-2xl text-center text-xl font-bold datepicker bg-white/80"
                               placeholder="🌸 1404/05/15">
                    </div>
                </div>
                
                <!-- دکمه‌های پایین -->
                <div class="flex justify-between mt-10">
                    <button onclick="closeGradeModal()" 
                            class="cute-btn px-8 py-4 bg-gradient-to-r from-gray-300 to-gray-400 text-gray-700 rounded-2xl font-bold text-lg hover:shadow-xl transition-all duration-300 animate-wiggle">
                        <i class="fas fa-ban ml-3"></i>انصراف
                    </button>
                    <button onclick="saveGrade()" 
                            class="cute-btn px-8 py-4 bg-gradient-to-r from-pink-primary to-pink-dark text-white rounded-2xl font-bold text-lg hover:shadow-xl transition-all duration-300 animate-heartbeat">
                        <i class="fas fa-save ml-3"></i>💾 ذخیره نمره ناز
                    </button>
                </div>
                
                <!-- افکت پایین مودال -->
                <div class="mt-6 flex justify-center space-x-4 space-x-reverse">
                    <div class="bg-pink-primary/