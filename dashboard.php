<?php include('include/header.php'); ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
<!-- <link rel="stylesheet" href="style.css" /> -->
<style>
  /* --Header Section-- */
  nav {
    position: relative;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    margin-top: 20px;
  }

  nav span {
    position: absolute;
    left: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .search-bar {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 80%;
    margin-left: -130px;
  }

  nav ul {
    padding: 0.8rem;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-template-rows: 1fr;
    list-style: none;
    position: absolute;
    right: 5px;
  }

  nav img {
    width: 30px;
  }

  #search-icon {
    position: relative;
    top: 5px;
    left: 40px;
    opacity: 0.3;
  }

  #search-bar {
    border: 1px solid #d1d1d1;
    border-radius: 30px;
    padding: 1em;
    width: 90%;
  }

  #search-bar:hover {
    box-shadow: 2px 2px 4px rgba(34, 34, 34, 0.1),
      -2px -2px 4px rgba(34, 34, 34, 0.1);
  }

  /* --Main Section-- */
  main {
    position: relative;
  }

  .user-profile {
    margin: 30px;
    text-align: center;
  }

  #user-img {
    width: 40px;
    border-radius: 50%;
  }

  #profile-photo {
    width: 200px;
    border-radius: 50%;
  }

  .mood-board {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 60px;
  }

  .mood-board img {
    border-radius: 20px;
    height: 200px;
    width: 260px;
    padding: 8px;
  }

  .random-btn {
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: repeat(2, 1fr);
    position: absolute;
    right: 60px;
    bottom: 80px;
  }

  #add-btn,
  #question-btn {
    background-color: #f5f5f5;
    border-radius: 50%;
    border: none;
    box-shadow: 0 2px 5px 0 #494949;
    color: #222;
    cursor: pointer;
    font-weight: bold;
    outline: none;
    margin-top: 10px;
    width: 45px;
    height: 40px;
  }
</style>
<title>Pinterest | User Profile Dashboard</title>
</head>

<body>
  <header>
    <nav class="nav-bar">
      <span>
        <img id="logo" src="./img/pinterest-logo.png" alt="Pinterest logo" />
        <p class="logo-wordmark">Home</p>
      </span>

      <div class="search-bar">
        <img id="search-icon" src="./img/search-icon.png" alt="search icon" />
        <input type="search" name="Search your pins" placeholder="Search your pins" id="search-bar" />
      </div>

      <ul>
        <li>
          <a href="#"><img src="./img/notification-icon.png" alt="notification-icon" /></a>
        </li>
        <li>
          <a href="#"><img src="./img/message-icon.png" alt="message-icon" /></a>
        </li>
        <li>
          <a href="#"><img id="user-img" src="./img/profile-photo.jpg" alt="profile-photo" /></a>
        </li>
        <li><a href="#">></a></li>
      </ul>
    </nav>
  </header>
  <main>
    <div class="user-profile">
      <img id="profile-photo" src="./img/profile-photo.jpg" alt="" />
      <h1>Franklin U.O. Ohaegbulam</h1>
      <p>
        <strong> frankiefab.disha.page</strong>

        <span>~ @frankiefab100 ~ Frontend Developer</span>
      </p>
      <h4>3 followers ~ 84 following</h4>
    </div>

    <div>
      <img src="" alt="pen icon" />
      <img src="" alt="upload icon" />
      <img src="" alt="settings icon" />
      <img src="" alt="add icon" />
    </div>
    <div class="mood-board">
      <div>
        <img id="board1" src="./img/img1.jpg" alt="" />
        <h3>Untitled</h3>
        <p>1 Pin <span>14w</span></p>
      </div>
      <div>
        <img id="board2" src="./img/img2.jpg" alt="" />
        <h3>Flyers</h3>
        <p>23 Pins <span>2y</span></p>
      </div>
      <div>
        <img id="board3" src="./img/img3.jpg" alt="" />
        <h3>Illustrations</h3>
        <p>7 Pins <span>5w</span></p>
      </div>
      <div>
        <img id="board4" src="./img/img4.jpg" alt="" />
        <h3>UI Designs</h3>
        <p>16 Pins <span>4d</span></p>
      </div>
      <div>
        <img id="board5" src="./img/img5.jpg" alt="" />
        <h3>Mobile App Designs</h3>
        <p>43 Pins <span>20w</span></p>
      </div>
    </div>

    <div class="random-btn">
      <button id="add-btn">+</button>
      <button id="question-btn">?</button>
    </div>
  </main>
</body>

</html>