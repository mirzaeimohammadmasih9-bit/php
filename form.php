<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>فرم ثبت نام نانازی</title>

<style>
:root{
  --bg1:#ffb4d6;
  --bg2:#ffa7cf;
  --bg3:#ff8fcd;
  --card:#ffffff;
  --accent:#ff5fa8;
  --muted:#b05f81;
  --radius:15px;
}

html,body{
  height:100%;
  margin:0;
  font-family:"Tahoma","Segoe UI",sans-serif;
  background:linear-gradient(135deg,var(--bg1),var(--bg2),var(--bg3));
  background-size:300% 300%;
  animation:bgMove 8s ease-in-out infinite alternate;
  overflow-x:hidden;
}

/* ذرات شناور در پس‌زمینه */
body::before{
  content:"";
  position:fixed;
  inset:0;
  background:
    radial-gradient(circle at 20% 20%,rgba(255,255,255,.4) 0 2px,transparent 3px),
    radial-gradient(circle at 80% 40%,rgba(255,255,255,.4) 0 2px,transparent 3px),
    radial-gradient(circle at 60% 80%,rgba(255,255,255,.4) 0 2px,transparent 3px);
  background-size:200px 200px;
  animation:floatDots 12s linear infinite;
  pointer-events:none;
  z-index:0;
}
@keyframes floatDots{
  from{transform:translateY(0);}
  to{transform:translateY(-200px);}
}

.wrap{
  min-height:100%;
  display:flex;
  align-items:center;
  justify-content:center;
  padding:30px;
  position:relative;
  z-index:1;
}

/* کارت */
.card{
  background:var(--card);
  width:100%;
  max-width:520px;
  border-radius:var(--radius);
  box-shadow:0 10px 40px rgba(255,70,165,0.3),0 0 60px rgba(255,200,240,0.4);
  padding:30px;
  text-align:right;
  direction:rtl;
  animation:popCard .7s cubic-bezier(.42,0,.58,1);
  position:relative;
  overflow:hidden;
}
.card::after{
  content:"";
  position:absolute;
  inset:0;
  background:linear-gradient(135deg,rgba(255,90,165,0.05),rgba(255,200,240,0.1));
  z-index:-1;
}

@keyframes popCard{
  0%{transform:scale(.8) rotate(-2deg);opacity:0;}
  60%{transform:scale(1.03) rotate(1deg);opacity:1;}
  100%{transform:scale(1);rotate(0);}
}

h1{
  margin:0 0 14px 0;
  color:var(--accent);
  font-size:26px;
  text-shadow:0 2px 8px rgba(255,0,140,0.25);
  letter-spacing:.5px;
}

p.lead{
  margin:0 0 22px 0;
  color:var(--muted);
  font-size:14px;
}

/* فرم */
form .row{
  display:flex;
  gap:12px;
  margin-bottom:12px;
}
@media(max-width:520px){
  .row{flex-direction:column;}
}

label{
  display:block;
  font-size:13px;
  margin-bottom:6px;
  color:#ff4f9d;
  font-weight:bold;
}

/* ورودی‌ها */
input[type="text"],
input[type="password"],
input[type="tel"]{
  width:100%;
  padding:10px 12px;
  border:2px solid #ffd1e7;
  border-radius:10px;
  font-size:14px;
  outline:none;
  background:#fff4fa;
  transition: all .25s ease-in-out;
}
input:hover{
  transform:translateY(-2px) scale(1.02);
  box-shadow:0 0 6px rgba(255,70,165,0.2);
}
input:focus{
  border-color:#ff5fa8;
  box-shadow:0 0 14px rgba(255,70,165,0.45), 0 0 28px rgba(255,150,200,0.45);
  background:linear-gradient(135deg,#fff4fa,#ffe6f1);
}

/* دکمه‌ها */
.actions{
  display:flex;
  gap:10px;
  align-items:center;
  margin-top:20px;
}
button{
  background:var(--accent);
  color:#fff;
  border:0;
  padding:10px 18px;
  border-radius:12px;
  cursor:pointer;
  font-size:15px;
  font-weight:bold;
  letter-spacing:.5px;
  box-shadow:0 4px 15px rgba(255,70,165,0.35);
  transition:all .25s ease-in-out;
  position:relative;
  overflow:hidden;
}
button::after{
  content:"";
  position:absolute;
  top:0;left:-60%;
  width:50%;height:100%;
  background:linear-gradient(120deg,rgba(255,255,255,.3),transparent);
  transform:skewX(-25deg);
  transition:left .75s ease;
}
button:hover::after{left:110%;}
button:hover{
  transform:translateY(-3px) scale(1.03);
  box-shadow:0 6px 22px rgba(255,70,165,0.5);
}
button:active{
  transform:scale(0.97);
}

/* دکمه دوم */
button.secondary{
  background:#ffe4f2;
  color:#ff5fa8;
  border:1px solid #ff97cc;
  box-shadow:none;
}
button.secondary:hover{
  background:#ffd4ee;
}

/* انیمیشن تنفس ملایم برای دکمه اصلی */
button[type="submit"]{
  animation:pulse 3s infinite ease-in-out;
}
@keyframes pulse{
  0%,100%{box-shadow:0 0 15px rgba(255,70,165,0.4);}
  50%{box-shadow:0 0 25px rgba(255,120,200,0.7);}
}

/* یادداشت و خطاها */
.note{
  font-size:12px;
  color:#d54f90;
  margin-bottom:6px;
}
.error{
  color:#ff0033;
  font-size:13px;
  margin-top:8px;
  font-weight:bold;
  animation:blink .8s linear 2;
}
@keyframes blink{
  0%,100%{opacity:1;}
  50%{opacity:.4;}
}

</style>

</head>

<body>
  <div class="wrap">
    <div class="card" role="main">

      <h1>فرم ثبت نام</h1>
      <p class="lead">لطفاً همهٔ فیلدها را تکمیل کنید. کد ملی باید دقیقاً ۱۰ رقم باشد.</p>

      <form id="regForm" action="insert.php" method="POST" novalidate>

        <div class="row">
          <div style="flex:1">
            <label for="first_name">نام</label>
            <input id="first_name" name="first_name" type="text" required autocomplete="given-name" placeholder="مثلاً: علی">
          </div>

          <div style="flex:1">
            <label for="last_name">نام خانوادگی</label>
            <input id="last_name" name="last_name" type="text" required autocomplete="family-name" placeholder="مثلاً: رضایی">
          </div>
        </div>

        <div class="row">
          <div style="flex:1">
            <label for="father_name">اسم پدر</label>
            <input id="father_name" name="father_name" type="text" required placeholder="اسم پدر">
          </div>

          <div style="flex:1">
            <label for="national_code">کد ملی</label>
            <input id="national_code" name="national_code" type="tel" inputmode="numeric"
                   required maxlength="10" minlength="10" pattern="\d{10}"
                   placeholder="۱۰ رقم - فقط عدد"
                   title="کد ملی باید دقیقاً ۱۰ رقم عدد باشد">
          </div>
        </div>

        <div class="row">
          <div style="flex:1">
            <label for="user_name">نام کاربری</label>
            <input id="user_name" name="user_name" type="text" required autocomplete="username" placeholder="نام کاربری شما">
          </div>
          <div style="flex:1">
            <label for="pas">رمز</label>
            <input id="pas" name="pas" type="password" required minlength="6" placeholder="حداقل ۶ کاراکتر">
          </div>
        </div>

        <div class="note">با زدن ثبت نام، اطلاعات به صورت امن ارسال می‌شود.</div>

        <div class="actions">
          <button type="submit">ثبت نام</button>
          <button type="reset" class="secondary">پاک کردن</button>
        </div>

        <div id="formError" class="error" aria-live="polite" style="display:none"></div>

      </form>
    </div>
  </div>

<script>
(function(){
  const form = document.getElementById('regForm');
  const national = document.getElementById('national_code');
  const errBox = document.getElementById('formError');

  national.addEventListener('input', function(){
    this.value = this.value.replace(/[^\d]/g, '').slice(0,10);
  });

  form.addEventListener('submit', function(e){
    errBox.style.display = 'none';
    errBox.textContent = '';

    if (!form.checkValidity()) {
      e.preventDefault();

      if (!national.checkValidity()) {
        errBox.textContent = 'کد ملی باید دقیقاً ۱۰ رقم عدد باشد.';
        errBox.style.display = 'block';
        national.focus();
        return;
      }

      errBox.textContent = 'لطفاً همهٔ فیلدها را صحیح و کامل پر کنید.';
      errBox.style.display = 'block';
      return;
    }
  });
})();
</script>

</body>
</html>

<script>
(function(){

  const form = document.getElementById('regForm');
  const national = document.getElementById('national_code');
  const first = document.getElementById('first_name');
  const last = document.getElementById('last_name');
  const errBox = document.getElementById('formError');

  // فقط اجازه اعداد برای کد ملی
  national.addEventListener('input', function(){
    this.value = this.value.replace(/[^\d]/g, '').slice(0,10);
  });

  form.addEventListener('submit', function(e){
    errBox.style.display = 'none';
    errBox.textContent = '';

    // ✔ چک اجباری برای نام
    if(first.value.trim() === ""){
      e.preventDefault();
      errBox.textContent = "لطفاً نام را وارد کنید.";
      errBox.style.display = "block";
      first.focus();
      return;
    }

    // ✔ چک اجباری برای نام خانوادگی
    if(last.value.trim() === ""){
      e.preventDefault();
      errBox.textContent = "لطفاً نام خانوادگی را وارد کنید.";
      errBox.style.display = "block";
      last.focus();
      return;
    }

    // ✔ چک کد ملی
    if (!national.checkValidity()){
      e.preventDefault();
      errBox.textContent = 'کد ملی باید دقیقاً ۱۰ رقم عدد باشد.';
      errBox.style.display = 'block';
      national.focus();
      return;
    }

    // ✔ چک سایر فیلدها
    if (!form.checkValidity()){
      e.preventDefault();
      errBox.textContent = 'لطفاً همهٔ فیلدها را صحیح و کامل پر کنید.';
      errBox.style.display = 'block';
      return;
    }

  });

})();
</script>
