<form method="POST" action="includes/processor.php">
    <div class="container">
      <p class="header"> Complete personalisation of your account </p>
      <p>Address</p>
      <!-- tick box to say if there address is the same as there shipping address -->
      <div class="squaredThree">
        <input type="checkbox" value="None" id="squaredThree" name="check">
        <label for="squaredThree"></label>
      </div> Same as billing address<br>
      <input class="textbox border margin" type="text" name="address" placeholder="Address"><br>
      <input class="textbox border" type="text" name="address" placeholder="Address details">
      <!-- drop down menu to select the users country -->
      <p>Country</p>
      <select  class="border" name="country">
        <?php
            include 'form-countries.php';
        ?>
      </select>
      <p> Postal Code </p>
      <input class="border home inline" type="text"> 
      <p> City </p>
      <input class="border home" type="text" contenteditable="true" spellcheck="true">
      <p> Start date </p>
      <input class="textbox border" type="date" name="quantity" placeholder="dd/mm/yyyy">
      <p> End date </p>
      <input class="textbox border" type="date" name="quantity" placeholder="dd/mm/yyyy">
      <p> Set Default Loctaion </p>
      <input class="border textbox" class="textbox" type="text"><br>
      <br>
      <!-- Radio buttons to select the users gender -->
      Gender: <input type="radio" name="sex" value="male" checked >Male
      <input type="radio" name="sex" value="female" >Female<br>
      <br>
      <!-- Drop down to select the usersd title -->
      <p>Title</p>
      <select  class="border" name="title">
        <option value="" disabled selected>Title...</option>
        <option value="Mr">Mr</option>
        <option value="Mrs">Mrs</option>
        <option value="Ms">Ms</option>
      </select>
      <br></br>
      <p>First name</p>
      <input class="border textbox" type="text" name="firstname">
      <br></br>
      <p>Surname</p>
      <input class="border textbox" type="text" name="surname">
      <br></br>
      <p>Card Number</p>
        <label>format = xxxxxxxxxxxxxxxx</label>
        <input class="border textbox" type="text" name="card_number">
      <br></br>
      <!-- Drop down menu's for the user to input the expiry date of there card -->
      <p>Expiry date</p>
      <select  class="border" name="Ep_date">
        <option value="" disabled selected>Month...</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select>
      <br></br>
      <select  class="border" name="Ep_date">
        <option value="" disabled selected>Year...</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
        <option value="2025">2025</option>
        <option value="2026">2026</option>
      </select>
      <br></br>
      <p>CVC number</p>
        <input class="border textbox" type="text" maxlength="3" name="cvc_number">
      <br></br>
      <input type="radio" name="sex" value="male" checked>I agree to your terms and conditions.
      <br></br>
      <!-- Submitting registeration form -->
      <button class="submit border" type="submit" name="submit" href="#">save account details</button><br>
      <br>
    </div>
      <!-- Button which allows users to skip the registration process -->
      <button class="skip border" type="submit" name="skip" href="#"> X Skip This Section</button>
  </form>