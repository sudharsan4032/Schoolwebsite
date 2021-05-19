<?php
  include("headder.php");

?>
      <div class="alert alert-primary" role="alert" id="alert" style="display: none;"  ></div>

    <!-- fom control -->

    <div>
         <div class="container3">
          <div class="row">
            <div class="col">
            <img src="book.jpg" alt="school" width="350px" class="left-img">
            </div>
            <!-- coloumn 2 -->
            <div class="col">
            <form method="POST" action="mailfun.php">
                <h2 style="text-align: center;" class="addTittle">Admission Form</h2>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name of Student</label>
                <input type="text" class="form-control" id="studentName" name="studentName" placeholder="Enter Student Name" required>
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Student Date Of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Student DOB" required>
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Father's Name</label>
                <input type="text" class="form-control" id="fatherName" name="father" placeholder="Enter Father's Name" required>
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Mother's Name</label>
                <input type="text" class="form-control" id="motherName" name="mother" placeholder="Enter Mother's Name" required>
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Mobile Number</label>
                <input type="number" class="form-control" id="mobileNumber" name="mobileNumber" placeholder="Enter Number eg.1234567890" required>
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="emailClient" name="emailClient" placeholder="eg.,school@gmail.com" required>
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Permanent Address</label>
                <input type="text" class="form-control" id="addressProof" name="address" placeholder="Enter Address..." required>
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Who Sugguest you!</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="txtarea" placeholder="eg., Newspaper,Social Media, Neigebours......" rows="3"></textarea>
                </div>
                <div class="col-auto submit-btn">
                <button type="submit" id="submit-Btn" class="btn btn-primary mb-3">Submit</button>
                </div>
            </form>
            </div>
            <!-- coloumn 3 -->
            <div class="col">
            <img src="book - Copy.jpg" alt="books" width="350px" class="left-img">
            </div>
        </div>
        </div>
    </div>
    <?php include("footter.php") ?>