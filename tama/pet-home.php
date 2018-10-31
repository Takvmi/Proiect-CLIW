<!DOCTYPE html>
<html>
  <head>
    <title>Tama</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/style-voli.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  </head>
  <body id="pet-home-page">
    <header>
      <ul>
        <li>Username: Steve</li>
        <li>Level: 13</li>
        <li>Points: 42</li>
      </ul>
      <button>Sign Out</button>
      <nav>
        <a href="pet-create.php">Create Pet</a>
        <a href="pet-select.php">Select Pet</a>
      </nav>
    </header>
    <main>
      <div id="main-content">
        <div id="pet-animation">
          <img alt="Tama Bunny" src="assets/images/tama-bunny-head.svg">
          <img alt="Tama Bunny" src="assets/images/tama-bunny-arms.svg">
          <img alt="Tama Bunny" src="assets/images/tama-bunny-body.svg">
        </div>
        <h1>Tama Bunny</h1>
        <h2>11</h2>
      </div>
    </main>
    <aside id="left-side">
      <button>Feed</button>
      <button>Educate</button>
      <button>Entertain</button>
    </aside>
    <aside id="right-side">
      <div class="stats-bar-container">
        <div id="feed-stats-bar" class="stats-bar" style="width:25%">25%</div>
      </div>
      <div class="stats-bar-container">
        <div id="educate-stats-bar" class="stats-bar" style="width:50%">50%</div>
      </div>
      <div class="stats-bar-container">
        <div id="entertain-stats-bar" class="stats-bar" style="width:75%">75%</div>
      </div>
    </aside>
  </body>
</html>
