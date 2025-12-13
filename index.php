<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>مدیریت منو و مالی</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2> مدیریت غذا و قهوه</h2>
    <div class="tabs">
        <button class="tab-btn" data-type="order">ثبت فاکتور</button>
        <button class="tab-btn tab-active" data-type="food">غذاها</button>
        <button class="tab-btn" data-type="coffee">قهوه‌ها</button>
        <button class="tab-btn" data-type="ingredients">مدیریت مواد اولیه</button>
        <button class="tab-btn" data-type="menu_food">منوی غذا</button>
        <button class="tab-btn" data-type="menu_coffee">منوی قهوه</button>
    </div>
    <div id="mainTabContent"></div>
  <!-- Modal مدیریت مواد اولیه -->
    <div id="ingredientsModal" class="modal-bg" style="display:none">
        <div class="modal-content">
            <h4>مدیریت مواد اولیه</h4>
            <form onsubmit="return saveIngredient()">
                <input type="hidden" id="ingId">
                <input id="ingName" placeholder="نام ماده اولیه" required>
                <input type="number" id="ingPrice" min="0" step="any" placeholder="قیمت به ازای واحد" required>
                <select id="ingUnit">
                    <option value="kg">کیلوگرم</option>
                    <option value="g">گرم</option>
                    <option value="num">عدد</option>
                </select>
                <select id="ingCategory">
                    <option value="food">غذا</option>
                    <option value="coffee">قهوه</option>
                </select>
                <button type="submit">ثبت / ویرایش</button>
                <button type="button" onclick="resetIngForm()">جدید</button>
                <button type="button" onclick="closeIngMgr()">بستن</button>
            </form>
            <div id="ingredientsList"></div>
        </div>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>
