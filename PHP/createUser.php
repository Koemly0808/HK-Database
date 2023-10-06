<!DOCTYPE html>
<html>
<header>
  <title>Create User</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="../Css/user.css">
  <link rel="stylesheet" href="../Css/style.css">


</header>

<body>
  <ul class="topnav">
    <li><a class="active" href="#home">Home</a></li>
    <li><a href="#news">News</a></li>
    <li><a href="#contact">Contact</a></li>
    <li class="right"><a href="logout.php">Logout</a></li>
  </ul>
  <div class="testbox">
    <form action="../process_form.php" method="POST">
      <div class="banner">
        <h2>ព័ត៌មានភ្ញៀវត្រួតពិនិត្យលក្ខណៈបច្ចេកទេសយានយន្ត (ឆៀក)</h2>
      </div>
      <br />
      <fieldset>
        <legend>ព័ត៌មានអតិថិជន</legend>
        <div class="colums">
          <div class="item">
            <label for="customer_name">ឈ្មោះអតិថិជន<span>*</span></label>
            <input type="text" name="customer_name" />
          </div>
          <div class="item">
            <label for="date">ថ្ងៃ-ខែ-ឆ្នាំ ត្រួតពិនិត្យ<span>*</span></label>
            <input id="date" type="date" name="date" />
          </div>

      </fieldset>
      <br />
      <fieldset>
        <legend>អាសយដ្ឋាន</legend>
        <div class="colums">
          <div class="item">
            <label for="address">ឃុំ-សង្កាត់<span>*</span></label>
            <input id="address" type="text" name="address" />
          </div>
          <div class="item">
            <label for="district">ស្រុក-ខណ្ឌ<span>*</span></label>
            <input id="district" type="text" name="district" />
          </div>
          <div class="item">
            <label for="city">ខេត្ត-រាជធានី<span>*</span></label>
            <input id="city" type="text" name="city" />
          </div>
          <div class="item">
            <label for="phone">លេខទូរស័ព្ទទំនាក់ទំនង<span>*</span></label>
            <input id="phone_number" type="number" name="phone_number" />
          </div>
        </div>
      </fieldset>
      </br>
      <fieldset>
        <legend>ព័ត៌មានយានយន្ត</legend>
        <div class="colums">
          <div class="item">
            <label for="car_number">ផ្លាកលេខរថយន្ត<span>*</span></label>
            <input id="car_number" type="text" name="car_number" />
          </div>
          <div class="item">
            <label for="brandcar">ម៉ាករថយន្ត<span>*</span></label>
            <input id="brand_car" type="text" name="brand_car" />
          </div>
          <div class="item">
            <label for="brand">ប្រភេទយានយន្ត<span>*</span></label>
            <input id="brand" type="text" name="brand" />
          </div>
          <div class="item">
            <label for="engine">ប្រភេទប្រេងឥន្ធនៈ</label>
            <input id="engine" type="text" name="engine" />
          </div>

          <div class="item">
            <label for="totalchair">ចំនួនកៅអី/ទម្ងន់ឡាន</label>
            <input id="total_chair" type="text" name="total_chair" />
          </div>
          <div class="item">
            <label for="driver">អ្នកបើកបរ</label>
            <input id="driver_name" type="text" name="driver_name" />
          </div>
          <div class="item">
            <label for="caronline">ឆៀកអនឡាញ</label>
            <input id="car_online" type="text" name="car_online" />
          </div>
          <div class="item">
            <label for="year">ឆ្នាំផលិត</label>
            <input id="year" type="text" name="year" />
          </div>
          <div class="item">
            <label for="spray">បាញ់ថ្នាំតោន</label>
            <input id="spray" type="text" name="spray" />
          </div>
          <div class="item">
            <label for="fixed">កម្រិតជាប់ ឫធ្លាក់</label>
            <input id="fixed" type="text" name="fixed" />
          </div>
         
            <label for="description">មូលហេតុនៃការធ្លាក់</label>
            <textarea id="description" rows="3" name="description"></textarea>
          
            <button type="cancel" href="#" style="background:red;">លុបចោល</button>
            <button type="submit" href="#">បញ្ចូលព័ត៌មាន</button>
         
         
      </fieldset>
      
      
    </form>
  </div>
</body>

</html>