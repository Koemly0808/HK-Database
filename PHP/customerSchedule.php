<!DOCTYPE html>
<html>
<header>
  <title>របាយការណ៍ប្រចាំថ្ងៃរបស់អតិថិជន</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="../Css/user.css">
  <link rel="stylesheet" href="../Css/style.css">
<style>
    .form-select{
        width: calc(100% - 10px);
        padding: 10px;
    }
</style>

</header>

<body>
  <ul class="topnav">
    <li><a class="active" href="#home">Home</a></li>
    <li><a href="#news">News</a></li>
    <li><a href="#contact">Contact</a></li>
    <li class="right"><a href="logout.php">Logout</a></li>
  </ul>
  <div class="testbox">
    <form action="../process_customer.php" method="POST">
      <div class="banner">
        <h2>របាយការណ៍ប្រចាំថ្ងៃប្រភេទអតិថិជនមកទទួលសេវាយានយន្តពី<br>មជ្ឈមណ្ឌលឆៀកយានយន្ត អេចខេ បឹងបៃតង សែនសុខ</h2>
      </div>
      <br />
      <fieldset>
        <legend>ប្រភេទអតិថិជន</legend>
        <div class="item">
        <label for="customer-select"></label>
        <select class="form-select" name="customer_select" id="customer">
            <option value="">ជ្រើសរើសប្រភេទអតិថិជន</option>
            <option value="ភ្ញៀវមកដោយផ្ទាល់">ភ្ញៀវមកដោយផ្ទាល់</option>
            <option value="ភ្ញៀវមកដោយខល">ភ្ញៀវមកដោយខល</option>
            <option value="ភ្ញៀវមកតាមការណែនាំ">ភ្ញៀវមកតាមការណែនាំ</option>
            <option value="ភ្ញៀវចាស់">ភ្ញៀវចាស់</option>
            <option value="ភ្ញៀវមកតាមហ្វេសប៊ុក">ភ្ញៀវមកតាមហ្វេសប៊ុក</option>
            <option value="ផ្សេងៗ">ផ្សេងៗ</option>
        </select>
        </div>
      </fieldset>
      <br />
      <fieldset>
        <legend>ប្រភេទសេវាកម្ម</legend>
       
        <div class="item">
        <label for="service-select"></label>
        <select class="form-select" name="service_select" id="service">
            <option value="">ជ្រើសរើសប្រភេទសេវាកម្ម</option>
            <option value="ឆៀកធម្មតា">ឆៀកធម្មតា</option>
            <option value="ឆៀកអាជីវកម្ម">ឆៀកអាជីវកម្ម</option>
            <option value="កាត់ឈ្មោះ">កាត់ឈ្មោះ</option>
            <option value="កាត់ឈ្មោះ">ធ្វើផ្លាកលេខ</option>
            <option value="ធ្វើបណ្ណបើកបរ">ធ្វើបណ្ណបើកបរ</option>
            <option value="ផ្សេងៗ">ផ្សេងៗ</option>
        </select>
        </div>
        <div class="item">
            <label for="date">ថ្ងៃ-ខែ-ឆ្នាំ ត្រួតពិនិត្យ<span>*</span></label>
            <input id="date" type="date" name="date" />
        </div>
          <div class="btn-block">
            <button type="cancel" href="#" style="background:red;">លុបចោល</button>
            <button type="submit" href="#">បញ្ចូលព័ត៌មាន</button>
         </div>
      </fieldset>
      </br>
     
    </form>
  </div>
</body>

</html>