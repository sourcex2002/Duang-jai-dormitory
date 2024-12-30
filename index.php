<!DOCTYPE html>
<html lang="en">
  <head>
      <?php require('../../connect/connect.php'); ?> 
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
      <link rel="stylesheet" href="renter/../assets/css/stylelogin.css">
  </head>

  <body>
      <div class="container">
        <div class="card">
          <div class="content sign">
              <h2 class="title">ยินดีต้อนรับเข้าสู่ระบบ </h2>
              <div class="fields">
                <label class="field">
                  <div class="icon">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="12" cy="12" r="4"></circle>
                      <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                    </svg>
                  </div>
                  <input type="email" class="email" placeholder="Your Username"/>
                </label>
        
                <label class="field">
                  <div class="icon">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 2C9.243 2 7 4.243 7 7v2H6c-1.103 0-2 .897-2 2v9c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-9c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v2H9V7zm9.002 13H13v-2.278c.595-.347 1-.985 1-1.722 0-1.103-.897-2-2-2s-2 .897-2 2c0 .736.405 1.375 1 1.722V20H6v-9h12l.002 9z"></path>
                    </svg>
                  </div>
                  <input type="password" class="password" placeholder="Your Password"/>
                </label>
              </div>

              <div class="submit">
                  <button type="submit" class="button-submit">เข้าสู่ระบบ</button>
              </div>
              
          </div>
          </div>
      </div>
    </div>
  </body>
</html>