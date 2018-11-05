<html>
<head>
  <title>nae</title>
</head>
<body>
  <div class="ui segment">
      <div class="ui card container">
          <div class="content">
              <form class="ui form">
                <h4 class="ui dividing header">สามเหลี่ยมอะไร ?</h4>
                  <div class="inline field">
                      <label for="side1"> เลขบัตรประชาชน </label>
                      <input type="text" name="side1" id="side1" min="1" required  maxlength="4">
                  </div>

                  <div class="inline field">
                      <label for="side2"> ชื่อ </label>
                      <input type="text" name="side2" id="side2" min="1" required  maxlength="4" >
                  </div>

                  <div class="inline field">
                      <label for="side2"> นามสกุล </label>
                      <input type="text" name="side2" id="side2" min="1" required  maxlength="4" >
                  </div>

                  <div class="inline field">
                      <label for="side2"> ชื่อร้าน </label>
                      <input type="text" name="side2" id="side2" min="1" required  maxlength="4" >
                  </div>

                  <div class="inline field">
                      <label for="side2"> เบอร์โทรศัพท์ </label>
                      <input type="text" name="side2" id="side2" min="1" required  maxlength="4" >
                  </div>

                  <div class="inline field">
                      <label for="side2"> เลขของร้าน </label>
                      <input type="text" name="side2" id="side2" min="1" required  maxlength="4" >
                  </div>

                  </div>
                  <div class="inline field">
                      <input id="submit" type=button value="Submit"/>
                      <input type="reset" name="reset" value=" Reset "/>
                      <input type='button' onClick="closeWindow()" value='Close'/>
                  </div>
              </form>
          </div>
      </div>
  </div>
</body>
</html>
