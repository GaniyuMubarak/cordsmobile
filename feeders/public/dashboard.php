<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Cords Mobile (PG)</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- Auth JS -->
    <!-- <script src="analytics.js" type="module"></script> -->

    <!-- Firebase UI -->
    <!-- <script src="https://www.gstatic.com/firebasejs/ui/6.0.1/firebase-ui-auth.js"></script>
    <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/6.0.1/firebase-ui-auth.css" /> -->

  </head>
  <body>
    <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left">
        </div>
        <div class="header-right">
          <span class="material-icons-outlined">account_circle</span>
        </div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined">inventory</span> Cords Mobile Update
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="#">
              <span class="material-icons-outlined">refresh</span> Reload Site
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="index.html" target="_blank">
              <span class="material-icons-outlined">logout</span> Sign Out
            </a>
          </li>
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">CMU DASHBOARD</p>
        </div>

        <div class="main-cards">

          <!-- <div class="card">
            <div class="card-inner">
              <p class="text-primary">FEEDER</p>
              <span class="material-icons-outlined text-blue">source</span>
            </div>
            <span class="text-primary font-weight-bold" aria-readonly="true">1</span>

          </div> -->
          <form action="" method="post">
            <div class="form-group">
              <label for="">Start Time</label>
              <input type="time" class="form-control"> 
            </div><br><br>
            <div class="form-group">
              <label for="">End Time</label>
              <input type="time" class="form-control">
            </div><br><br>
            <div class="form-group">
              <label for="">Message</label><br><br>
              <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
            </div><br><br>
            <div class="form-group">
              <label for="">Transformers</label>
              <select name="" id=""></select>
            </div>

          </form>
          <br>

          <table class="datatable">
            <tr class="datahead">
              <th class="head">Date</th>
              <th class="head">Start Time</th>
              <th class="head">  End Time</th>
              <th class="head">Update Info</th>
              <th class="head">Transformers </th>
            </tr>


            <tr>
              <td><span class="text-primary font-weight-bold"><input type="date" value="2023-04-05" required  id="date"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="time" required  id="starttime"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="time" required  id="endtime"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="text" required id="update"></span></td>
              <td>
              <div class="transformers-list" id="transformer-list">
                <h5 class="choose material-icons-outlined text-black">touch_app</h5>  Tap Icon
                <ul class="items">
                  <br>
                  <li><input type="checkbox" name="" id="">TVA-1</li>
                  <li><input type="checkbox" name="" id="">TVA-2</li>
                  <li><input type="checkbox" name="" id="">TVA-3</li>
                  <li><input type="checkbox" name="" id="">TVA-4</li>
                  <li><input type="checkbox" name="" id="">TVA-5</li>
                  <li><input type="checkbox" name="" id="">TVA-6</li>
                  <li><input type="checkbox" name="" id="">TVA-7</li>
                  <li><input type="checkbox" name="" id="">TVA-8</li>
                  <li><input type="checkbox" name="" id="">TVA-9</li>
                  <li><input type="checkbox" name="" id="">TVA-10</li>
                  <li><input type="checkbox" name="" id="">TVA-11</li>
                  <li><input type="checkbox" name="" id="">TVA-12</li>
                  <li><input type="checkbox" name="" id="">TVA-13</li>
                  <li><input type="checkbox" name="" id="">TVA-14</li>
                  <li><input type="checkbox" name="" id="">TVA-15</li>
                  <li><input type="checkbox" name="" id="">TVA-16</li>
                  <li><input type="checkbox" name="" id="">TVA-17</li>
                  <li><input type="checkbox" name="" id="">TVA-18</li>
                  <br>
                </ul>
              </div>
                
              </td>
            </tr>

            <tr>
              <td><span class="text-primary font-weight-bold"><input type="date" value="2023-04-05" required  id="date"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="time" required  id="starttime"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="time" required  id="endtime"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="text" required id="update"></span></td>
              <td>
              <div class="transformers-list" id="transformer-list">
                <h5 class="choose material-icons-outlined text-black">touch_app</h5>  Tap Icon
                <ul class="items">
                  <br>
                  <li><input type="checkbox" name="" id="">TVA-1</li>
                  <li><input type="checkbox" name="" id="">TVA-2</li>
                  <li><input type="checkbox" name="" id="">TVA-3</li>
                  <li><input type="checkbox" name="" id="">TVA-4</li>
                  <li><input type="checkbox" name="" id="">TVA-5</li>
                  <li><input type="checkbox" name="" id="">TVA-6</li>
                  <li><input type="checkbox" name="" id="">TVA-7</li>
                  <li><input type="checkbox" name="" id="">TVA-8</li>
                  <li><input type="checkbox" name="" id="">TVA-9</li>
                  <li><input type="checkbox" name="" id="">TVA-10</li>
                  <li><input type="checkbox" name="" id="">TVA-11</li>
                  <li><input type="checkbox" name="" id="">TVA-12</li>
                  <li><input type="checkbox" name="" id="">TVA-13</li>
                  <li><input type="checkbox" name="" id="">TVA-14</li>
                  <li><input type="checkbox" name="" id="">TVA-15</li>
                  <li><input type="checkbox" name="" id="">TVA-16</li>
                  <li><input type="checkbox" name="" id="">TVA-17</li>
                  <li><input type="checkbox" name="" id="">TVA-18</li>
                  <br>
                </ul>
              </div>
                
              </td>
            </tr>

            <tr>
              <td><span class="text-primary font-weight-bold"><input type="date" value="2023-04-05" required  id="date"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="time" required  id="starttime"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="time" required  id="endtime"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="text" required id="update"></span></td>
              <td>
              <div class="transformers-list" id="transformer-list">
                <h5 class="choose material-icons-outlined text-black">touch_app</h5>  Tap Icon
                <ul class="items">
                  <br>
                  <li><input type="checkbox" name="" id="">TVA-1</li>
                  <li><input type="checkbox" name="" id="">TVA-2</li>
                  <li><input type="checkbox" name="" id="">TVA-3</li>
                  <li><input type="checkbox" name="" id="">TVA-4</li>
                  <li><input type="checkbox" name="" id="">TVA-5</li>
                  <li><input type="checkbox" name="" id="">TVA-6</li>
                  <li><input type="checkbox" name="" id="">TVA-7</li>
                  <li><input type="checkbox" name="" id="">TVA-8</li>
                  <li><input type="checkbox" name="" id="">TVA-9</li>
                  <li><input type="checkbox" name="" id="">TVA-10</li>
                  <li><input type="checkbox" name="" id="">TVA-11</li>
                  <li><input type="checkbox" name="" id="">TVA-12</li>
                  <li><input type="checkbox" name="" id="">TVA-13</li>
                  <li><input type="checkbox" name="" id="">TVA-14</li>
                  <li><input type="checkbox" name="" id="">TVA-15</li>
                  <li><input type="checkbox" name="" id="">TVA-16</li>
                  <li><input type="checkbox" name="" id="">TVA-17</li>
                  <li><input type="checkbox" name="" id="">TVA-18</li>
                  <br>
                </ul>
              </div>
                
              </td>
            </tr>

            <tr>
              <td><span class="text-primary font-weight-bold"><input type="date" value="2023-04-05" required  id="date"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="time" required  id="starttime"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="time" required  id="endtime"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="text" required id="update"></span></td>
              <td>
              <div class="transformers-list" id="transformer-list">
                <h5 class="choose material-icons-outlined text-black">touch_app</h5>  Tap Icon
                <ul class="items">
                  <br>
                  <li><input type="checkbox" name="" id="">TVA-1</li>
                  <li><input type="checkbox" name="" id="">TVA-2</li>
                  <li><input type="checkbox" name="" id="">TVA-3</li>
                  <li><input type="checkbox" name="" id="">TVA-4</li>
                  <li><input type="checkbox" name="" id="">TVA-5</li>
                  <li><input type="checkbox" name="" id="">TVA-6</li>
                  <li><input type="checkbox" name="" id="">TVA-7</li>
                  <li><input type="checkbox" name="" id="">TVA-8</li>
                  <li><input type="checkbox" name="" id="">TVA-9</li>
                  <li><input type="checkbox" name="" id="">TVA-10</li>
                  <li><input type="checkbox" name="" id="">TVA-11</li>
                  <li><input type="checkbox" name="" id="">TVA-12</li>
                  <li><input type="checkbox" name="" id="">TVA-13</li>
                  <li><input type="checkbox" name="" id="">TVA-14</li>
                  <li><input type="checkbox" name="" id="">TVA-15</li>
                  <li><input type="checkbox" name="" id="">TVA-16</li>
                  <li><input type="checkbox" name="" id="">TVA-17</li>
                  <li><input type="checkbox" name="" id="">TVA-18</li>
                  <br>
                </ul>
              </div>
                
              </td>
            </tr>

            <tr>
              <td><span class="text-primary font-weight-bold"><input type="date" value="2023-04-05" required  id="date"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="time" required  id="starttime"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="time" required  id="endtime"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="text" required id="update"></span></td>
              <td>
              <div class="transformers-list" id="transformer-list">
                <h5 class="choose material-icons-outlined text-black">touch_app</h5>  Tap Icon
                <ul class="items">
                  <br>
                  <li><input type="checkbox" name="" id="">TVA-1</li>
                  <li><input type="checkbox" name="" id="">TVA-2</li>
                  <li><input type="checkbox" name="" id="">TVA-3</li>
                  <li><input type="checkbox" name="" id="">TVA-4</li>
                  <li><input type="checkbox" name="" id="">TVA-5</li>
                  <li><input type="checkbox" name="" id="">TVA-6</li>
                  <li><input type="checkbox" name="" id="">TVA-7</li>
                  <li><input type="checkbox" name="" id="">TVA-8</li>
                  <li><input type="checkbox" name="" id="">TVA-9</li>
                  <li><input type="checkbox" name="" id="">TVA-10</li>
                  <li><input type="checkbox" name="" id="">TVA-11</li>
                  <li><input type="checkbox" name="" id="">TVA-12</li>
                  <li><input type="checkbox" name="" id="">TVA-13</li>
                  <li><input type="checkbox" name="" id="">TVA-14</li>
                  <li><input type="checkbox" name="" id="">TVA-15</li>
                  <li><input type="checkbox" name="" id="">TVA-16</li>
                  <li><input type="checkbox" name="" id="">TVA-17</li>
                  <li><input type="checkbox" name="" id="">TVA-18</li>
                  <br>
                </ul>
              </div>
                
              </td>
            </tr>

            <tr>
              <td><span class="text-primary font-weight-bold"><input type="date" value="2023-04-05" required  id="date"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="time" required  id="starttime"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="time" required  id="endtime"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="text" required id="update"></span></td>
              <td>
              <div class="transformers-list" id="transformer-list">
                <h5 class="choose material-icons-outlined text-black">touch_app</h5>  Tap Icon
                <ul class="items">
                  <br>
                  <li><input type="checkbox" name="" id="">TVA-1</li>
                  <li><input type="checkbox" name="" id="">TVA-2</li>
                  <li><input type="checkbox" name="" id="">TVA-3</li>
                  <li><input type="checkbox" name="" id="">TVA-4</li>
                  <li><input type="checkbox" name="" id="">TVA-5</li>
                  <li><input type="checkbox" name="" id="">TVA-6</li>
                  <li><input type="checkbox" name="" id="">TVA-7</li>
                  <li><input type="checkbox" name="" id="">TVA-8</li>
                  <li><input type="checkbox" name="" id="">TVA-9</li>
                  <li><input type="checkbox" name="" id="">TVA-10</li>
                  <li><input type="checkbox" name="" id="">TVA-11</li>
                  <li><input type="checkbox" name="" id="">TVA-12</li>
                  <li><input type="checkbox" name="" id="">TVA-13</li>
                  <li><input type="checkbox" name="" id="">TVA-14</li>
                  <li><input type="checkbox" name="" id="">TVA-15</li>
                  <li><input type="checkbox" name="" id="">TVA-16</li>
                  <li><input type="checkbox" name="" id="">TVA-17</li>
                  <li><input type="checkbox" name="" id="">TVA-18</li>
                  <br>
                </ul>
              </div>
                
              </td>
            </tr>

            <tr>
              <td><span class="text-primary font-weight-bold"><input type="date" value="2023-04-05" required  id="date"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="time" required  id="starttime"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="time" required  id="endtime"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="text" required id="update"></span></td>
              <td>
              <div class="transformers-list" id="transformer-list">
                <h5 class="choose material-icons-outlined text-black">touch_app</h5>  Tap Icon
                <ul class="items">
                  <br>
                  <li><input type="checkbox" name="" id="">TVA-1</li>
                  <li><input type="checkbox" name="" id="">TVA-2</li>
                  <li><input type="checkbox" name="" id="">TVA-3</li>
                  <li><input type="checkbox" name="" id="">TVA-4</li>
                  <li><input type="checkbox" name="" id="">TVA-5</li>
                  <li><input type="checkbox" name="" id="">TVA-6</li>
                  <li><input type="checkbox" name="" id="">TVA-7</li>
                  <li><input type="checkbox" name="" id="">TVA-8</li>
                  <li><input type="checkbox" name="" id="">TVA-9</li>
                  <li><input type="checkbox" name="" id="">TVA-10</li>
                  <li><input type="checkbox" name="" id="">TVA-11</li>
                  <li><input type="checkbox" name="" id="">TVA-12</li>
                  <li><input type="checkbox" name="" id="">TVA-13</li>
                  <li><input type="checkbox" name="" id="">TVA-14</li>
                  <li><input type="checkbox" name="" id="">TVA-15</li>
                  <li><input type="checkbox" name="" id="">TVA-16</li>
                  <li><input type="checkbox" name="" id="">TVA-17</li>
                  <li><input type="checkbox" name="" id="">TVA-18</li>
                  <br>
                </ul>
              </div>
                
              </td>
            </tr>

            <tr>
              <td><span class="text-primary font-weight-bold"><input type="date" value="2023-04-05" required  id="date"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="time" required  id="starttime"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="time" required  id="endtime"></span></td>
              <td><span class="text-primary font-weight-bold"><input type="text" required id="update"></span></td>
              <td>
              <div class="transformers-list" id="transformer-list">
                <h5 class="choose material-icons-outlined text-black">touch_app</h5>  Tap Icon
                <ul class="items">
                  <br>
                  <li><input type="checkbox" name="" id="">TVA-1</li>
                  <li><input type="checkbox" name="" id="">TVA-2</li>
                  <li><input type="checkbox" name="" id="">TVA-3</li>
                  <li><input type="checkbox" name="" id="">TVA-4</li>
                  <li><input type="checkbox" name="" id="">TVA-5</li>
                  <li><input type="checkbox" name="" id="">TVA-6</li>
                  <li><input type="checkbox" name="" id="">TVA-7</li>
                  <li><input type="checkbox" name="" id="">TVA-8</li>
                  <li><input type="checkbox" name="" id="">TVA-9</li>
                  <li><input type="checkbox" name="" id="">TVA-10</li>
                  <li><input type="checkbox" name="" id="">TVA-11</li>
                  <li><input type="checkbox" name="" id="">TVA-12</li>
                  <li><input type="checkbox" name="" id="">TVA-13</li>
                  <li><input type="checkbox" name="" id="">TVA-14</li>
                  <li><input type="checkbox" name="" id="">TVA-15</li>
                  <li><input type="checkbox" name="" id="">TVA-16</li>
                  <li><input type="checkbox" name="" id="">TVA-17</li>
                  <li><input type="checkbox" name="" id="">TVA-18</li>
                  <br>
                </ul>
              </div>
                
              </td>
            </tr>

          </table>
          



                 
          </div>
        
              
          </div>

        </div>

      </main>
      <!-- End Main -->

    </div>
    
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>
  </body>
</html>