<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="style.css">
  <link href="logo.png" rel="shortcut icon">
  <style>
    body {
      font-family: Arial;
    }

    /* Style the tab */
    .tab {
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
      font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
      background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
      display: none;
      padding: 6px 12px;
      border: 1px solid #ccc;
      border-top: none;
    }
  </style>
</head>
<?php include "common/header.php" ?>

<body>

  <div class="tab mt-5">
    <button class="tablinks" onclick="openCity(event, 'Interior')">
      Interior Design
    </button>
    <button class="tablinks" onclick="openCity(event, 'Sort')">Sort</button>
    <button class="tablinks" onclick="openCity(event, 'Design')">Design</button>
    <button class="tablinks" onclick="openCity(event, 'Cadastral')">Cadastral Works</button>
  </div>

  <div id="Interior" class="tabcontent">
    <h3 class="text-center">Interior Design</h3>
    <form method="POST" action="server/interiordesign/interiorDesignAction.php" enctype="multipart/form-data">
      <div class="form-group w-50 m-auto">
        <label for="exampleInputEmail1">Land area square meters</label>
        <input type="number" name="landarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Area Square Meters">
      </div>
      <div class="form-group w-50 m-auto">
        <label for="inputState">Service Type</label>
        <select id="inputState" name="servicetype" class="form-control">
          <option selected>Choose...</option>
          <option>Villa</option>
          <option>Duplex</option>
          <option>Commercial Building</option>
          <option>Ohter</option>
        </select>
      </div>
      <div class="form-group w-50 m-auto">
        <label for="exampleInputEmail1">Mobile Number</label>
        <input type="number" name="mobilenumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mobile Number">
      </div>
      <div class="form-group w-50 m-auto">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
      </div>
      <div class="form-group w-50 m-auto">
        <label for="exampleInputEmail1">Customer Name</label>
        <input type="text" name="customername" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">
      </div>
      <div class="form-group w-50 m-auto">
        <label for="inputState">Design Type</label>
        <select id="inputState" name="designtype" class="form-control">
          <option selected>Choose...</option>
          <option>Modern</option>
          <option>Classic</option>
        </select>
      </div>
      <div class="form-group text-center">
        <input type="file" name="file"><span>Enigineering Diagram</span>
        <br>
        <input type="file" name="file2" class="mt-2"><span>Other Attachment</span>
      </div>

      <div class="form-group text-center">
        <textarea id=" w3review" name="note" rows="5" cols="100" placeholder="Enter your note" class="text-center"></textarea>
      </div>

      <input type="submit" name="submit" class="btn btn-primary col-md-12" value="submit" />

    </form>
  </div>

  <div id="Sort" class="tabcontent">
    <h3 class="text-center">Sort</h3>
    <form method="POST" action="server/sort/sortAction.php" enctype="multipart/form-data">
      <div class="form-group w-50 m-auto">
        <label for="exampleInputEmail1">Land area square meters</label>
        <input type="text" name="landarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Area Square Meters">
      </div>
      <div class="form-group w-50 m-auto">
        <label for="inputState">Service Type</label>
        <select id="inputState" name="servicetype" class="form-control">
          <option selected>Choose...</option>
          <option>Duplex Sorting</option>
          <option>Land Sort</option>
          <option>Housing</option>
          <option>Ohter</option>
        </select>
      </div>
      <div class="form-group w-50 m-auto">
        <label for="exampleInputEmail1">Mobile Number</label>
        <input type="number" name="mobilenumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mobile Number">
      </div>
      <div class="form-group w-50 m-auto">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
      </div>
      <div class="form-group w-50 m-auto">
        <label for="exampleInputEmail1">Customer Name</label>
        <input type="text" name="customername" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">
      </div>

      <div class="form-group text-center">
        <input type="file" name="file"><span>License Photo</span>
        <br>
        <input type="file" name="file2" class="mt-2"><span>Picture of the Insrument</span>
        <br>
        <input type="file" name="file3" class="mt-2"><span>Owner ID - Commercial Register</span>
        <br>
        <input type="file" name="file4" class="mt-2"><span>Engineering Diagram</span>
      </div>


      <div class="form-group text-center">
        <textarea id=" w3review" name="note" rows="5" cols="100" placeholder="Enter your note" class="text-center"></textarea>
      </div>

      <input type="submit" name="submit" class="btn btn-primary col-md-12" value="submit" />

    </form>
  </div>

  <div id="Design" class="tabcontent">
    <h3 class="text-center">Design</h3>
    <form method="POST" action="server/design/designAction.php" enctype="multipart/form-data">
      <div class="form-group w-50 m-auto">
        <label for="exampleInputEmail1">Land area square meters</label>
        <input type="text" name="landarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Area Square Meters">
      </div>
      <div class="form-group w-50 m-auto">
        <label for="inputState">Service Type</label>
        <select id="inputState" name="servicetype" class="form-control">
          <option selected>Choose...</option>
          <option>Villa</option>
          <option>Duplex</option>
          <option>Commercial Building</option>
          <option>Storehouse</option>
          <option>Workshop</option>
          <option>Mosque</option>
          <option>School</option>
          <option>Other</option>
        </select>
      </div>
      <div class="form-group w-50 m-auto">
        <label for="exampleInputEmail1">Mobile Number</label>
        <input type="number" name="mobilenumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mobile Number">
      </div>
      <div class="form-group w-50 m-auto">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
      </div>
      <div class="form-group w-50 m-auto">
        <label for="exampleInputEmail1">Customer Name</label>
        <input type="text" name="customername" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">
      </div>

      <div class="form-group text-center">
        <input type="file" name="file" class="mt-2"><span>Engineering Diagram</span>
        <br>
        <input type="file" name="file2" class="mt-2"><span>Picture of the Insrument</span>
        <br>
        <input type="file" name="file3" class="mt-2"><span>Owner ID - Commercial Register</span>
      </div>

      <div class="form-group text-center">
        <textarea id=" w3review" name="note" rows="5" cols="100" placeholder="Enter your note" class="text-center"></textarea>
      </div>

      <input type="submit" name="submit" class="btn btn-primary col-md-12" value="submit" />
    </form>
  </div>

  <div id="Cadastral" class="tabcontent">
    <h3 class="text-center">Cadastral Works</h3>
    <form method="POST" action="server/cadastralWorks/cadastralWorksAction.php" enctype="multipart/form-data">
      <div class="form-group w-50 m-auto">
        <label for="inputState">Service Type</label>
        <select id="inputState" name="servicetype" class="form-control">
          <option selected>Choose...</option>
          <option>Raise Surveyos</option>
          <option>Instruments Update</option>
          <option>Sukuk License</option>
          <option>Judgements</option>
          <option>Development and proposed scheme</option>
          <option>Identification Certificate</option>
          <option>Other</option>
        </select>
      </div>
      <div class="form-group w-50 m-auto">
        <label for="exampleInputEmail1">Mobile Number</label>
        <input type="number" name="mobilenumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mobile Number">
      </div>
      <div class="form-group w-50 m-auto">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
      </div>
      <div class="form-group w-50 m-auto">
        <label for="exampleInputEmail1">Customer Name</label>
        <input type="text" name="customername" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">
      </div>
      <div class="form-group w-50 m-auto">
        <label for="inputState">Design Type</label>
        <select id="inputState" name="designtype" class="form-control">
          <option selected>Choose...</option>
          <option>Modern</option>
          <option>Classic</option>
        </select>
      </div>

      <div class="form-group text-center">
        <input type="file" name="file" class="mt-2"><span>Engineering Diagram</span>
        <br>
        <input type="file" name="file2" class="mt-2"><span>Picture of the Insrument</span>
        <br>
        <input type="file" name="file3" class="mt-2"><span>Owner ID - Commercial Register</span>
      </div>

      <div class="form-group text-center">
        <textarea id=" w3review" name="note" rows="5" cols="100" placeholder="Enter your note" class="text-center"></textarea>
      </div>

      <input type="submit" name="submit" class="btn btn-primary col-md-12" value="submit" />s

    </form>
  </div>

  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>
  <?php include "common/footer.php" ?>
</body>

</html>