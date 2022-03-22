<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/cffcdc6888.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  <link rel="stylesheet" href="css/team.css" />
  <title>Team Generator</title>
  <style>
    .Navbar{
      display: flexbox;
      justify-content: center;
      background-color:#0E4DA4;
      justify-self: start;
      width: 100%;
      height: 5rem;
      align-items: center;
  }
  
  #h1{
    position: absolute;
    left: 3rem;
    top:1rem;
    font-family: Inter;
    justify-content: center;
    font-size: 20px;
    color: whitesmoke;
  }
  .Navbar-container{
      margin-left: 95%;
      margin-top: -25px;
      padding-bottom: 15px;
  }
  .buttoninfo{
      transition: 0.5s;
      top:1em;
      left:37em;
      position: absolute;
  }
  .buttoninfo:hover{
      background-color: #0E4DA4;
  }
  </style>
</head>

<body>
  <div class='Navbar'>
    <a href="index.php"><h1 id="h1">Random Team Generator</h1></a>
    <div class='Navbar-Container'>
    <a href="info.php" class="buttoninfo"><i class="fa-solid fa-circle-info"></i></a>
    </div>
  </div>
  <header>
    <h1><strong></strong></h1>
  </header>

  <!-- /* ===================== INPUT ======================= */ -->
  <main>
    <section class="input">
      <h3>Insert Name</h3>
      <form action="">
        <label for="name">Member name</label>
        <input type="text" id="name"/>
        <input type="submit" class="add" value="+" /> <br />
        <div class="error" id ='error'>Please enter valid input</div>
        <label class="change" for="size">Team size</label>
        <input type="number" id="size" /> 
        <button class="retreive">Retreive</button>
      </form>
    </section>
    <!-- /* ================== CONTROLLER ===================== */ -->
    <section class="controller">
      <h3>Controller</h3>
      <form action="">
        <label>Distribution:</label>
        <select name="distribution" id="distribution">
          <option value="noalone">Team size</option>
          <option value="teamnum">Nº Teams</option>
        </select>
        <br />
        <label>Team Name:</label>

        <select name="teams-name" id="teams-name">
          <option value="number">Number</option>
          <option value="element">Elements</option>
          <option value="animal">Animals</option>
        </select>
      </form>
      <p class="inf-teams">Teams: 0</p>
      <p class="inf-memb"> Memb.: 0</p>
      <a class="start">Start</a>
      <a class="clear">Clear</a>
      <a class="save">Save</a>
    </section>
    <!-- /* ====================== LIST ======================= */ -->
    <section class="member-list">
      <h3>Member List</h3>
      <article class="list"> </article>
    </section>
    <!-- /* ===================== TEAMS ======================= */ -->
    <section class="teams">
      <h3>Generated Teams</h3>
      <h5>Click to drag members between teams</h5>
      <div class="teams-wraper"></div>
    </section>
  </main>
  <div class="saved">Saved!</div>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <script src="js/teamNames.js"></script>
  <script src="js/app.js"></script>
</body>

</html>