<!DOCTYPE html>
<html>
  <head>
    <title>Tama</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/style-voli.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  </head>
  <body id="pet-create-page">
    <header>
      <a href="pet-home.php">Back</a>
      <div class="available-points">Points: 42</div>
      <button>Sign Out</button>
    </header>
    <main>
      <div id="main-content">
        <img alt="Tama Bunny" src="assets/images/tama-bunny-body.svg">
        <input type="text" id="pet-name" name="pet-name" placeholder="Enter Pet Name">
      </div>
    </main>
    <aside id="left-side">
      <div id="select-buttons">
        <button>H</button>
        <button>B</button>
        <button>T</button>
      </div>
      <div id="body-parts-container">
        <div class="body-part">
          <img alt="Tama Bunny Head" src="assets/images/tama-bunny-head-preview.svg">
          <span>5</span>
        </div>
        <div class="body-part">
          <img alt="Tama Cat Head" src="assets/images/tama-cat-head-preview.svg">
          <span>14</span>
        </div>
        <div class="body-part">
          <img alt="Tama Skeleton Head" src="assets/images/tama-skeleton-head-preview.svg">
          <span>14</span>
        </div>
        <div class="body-part">
          <img alt="Tama Bunny Body" src="assets/images/tama-bunny-body-preview.svg">
          <span>10</span>
        </div>
        <div class="body-part">
          <img alt="Tama Cat Body" src="assets/images/tama-cat-body-preview.svg">
          <span>5</span>
        </div>
        <div class="body-part">
          <img alt="Tama Skeleton Body" src="assets/images/tama-skeleton-body-preview.svg">
          <span>14</span>
        </div>
        <div class="body-part">
          <img alt="Tama Bunny Toy" src="assets/images/toy-bunny.svg">
          <span>10</span>
        </div>
        <div class="body-part">
          <img alt="Tama Cat Toy" src="assets/images/toy-yarn.svg">
          <span>5</span>
        </div>
        <div class="body-part">
          <img alt="Tama Skeleton Toy" src="assets/images/toy-pumpkin.svg">
          <span>14</span>
        </div>
      </div>
    </aside>
    <aside id="right-side">
      <table>
        <tbody>
          <tr>
            <th>Hunger</th>
            <th>:</th>
            <th>19</th>
          </tr>
          <tr>
            <th>Education</th>
            <th>:</th>
            <th>5</th>
          </tr>
          <tr>
            <th>Fun</th>
            <th>:</th>
            <th>0</th>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>Cost</th>
            <th>:</th>
            <th>24</th>
          </tr>
        </tfoot>
      </table>
      <button>Create</button>
    </aside>
  </body>
</html>
