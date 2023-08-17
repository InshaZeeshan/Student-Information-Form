<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <h1 style="margin-left: 605PX;">WELCOME TO REGISTRATION</h1>
    <form id="registration-form" method="POST" action="process_data.php" style="max-width: 40%; margin-left:660px;">
    <a href="view.php" class="link">
          <p style="margin-left: 105px;">
            Already registered? Click here to view.
          </p>
        </a>
    
    
    <fieldset id="page-1">
        
            <legend style="margin-left: 145px;">PERSONAL INFORMATION</legend>
            
            <div>
                    <label for="student_id">STUDENT ID :</label>
                    <input type="text" class="underline-input" name="student_id" id="student_id" placeholder="Enter your ID for Retrieval and updation, or a new ID for Submission." required>
                  </div>
              
                <div>
                    <label for="student_name">STUDENT'S NAME :</label>
                    <input type="text" class="underline-input" name="student_name" id="student_name" required>
                  </div>
                  <div class="form-container">
                  <div class="form-field">
                    <label for="student_email">EMAIL :</label>
                    <input type="text" class="underline-input" name="student_email" id="student_email" required>
                    </div>
                    <div class="form-field">
                    <label for="student_age">AGE :</label>
                    <input type="text" class="underline-input" name="student_age" id="student_age" required>
                    </div>
                  </div>
              
                  <div>
                    <label for="aadhar_number">AADHAR NUMBER :</label>
                    <input type="text" class="underline-input" name="aadhar_number" id="aadhar_number" required>
                  </div>
                  <div>
                    <label for="address">ADDRESS :</label>
                    <textarea name="address" class="underline-input" id="address" rows="1" required></textarea>
                  </div>
              
                  <div class="form-container">
                  <div class="form-field">
                    <label for="date_of_birth">DATE OF BIRTH :</label>
                    <input type="date" class="underline-input" name="date_of_birth" id="date_of_birth" required>
                  </div>
                  <div class="form-field">
                    <label for="phone_number">PHONE NUMBER :</label>
                    <input type="tel" class="underline-input" name="phone_number" id="phone_number" required>
                  </div>
                  </div>
                  <div class="form-container">
                    <div class="form-field">
                      <label for="emergency_contact">EMERGENCY CONTACT NAME</label>
                      <input type="text" class="underline-input" id="emergency_contact" name="emergency_contact">
                    </div>
                    <div class="form-field">
                      <label for="emergency_phone">EMERGENCY CONTACT NUMBER</label>
                      <input type="tel" class="underline-input" id="emergency_phone" name="emergency_phone">
                    </div>
                    </div>
                    <div>
                        <label for="relationship">RELATIONSHIP TO STUDENT :</label>
                        <select id="relationship" name="relationship" required>
                          <option value="">Select</option>
                          <option value="parent">Parent</option>
                          <option value="guardian">Guardian</option>
                          <option value="other">Other</option>
                        </select>
                      </div>
                      <div class="form-container1">
                
                      <button type="button" style="margin-left: 300px;" onclick="nextPage(2)">NEXT</button>
            </div>
          
        </fieldset>
        
        <fieldset id="page-2">
            <legend style="margin-left: 140px;">ACADEMIC INFORMATION</legend>
            
            <div>
                    <label for="student_roll">ROLL NO. :</label>
                    <input type="text" class="underline-input" name="student_roll" id="student_roll" required>
                  </div>

        <div>
            
           <label for="student_attendance">ATTENDANCE :</label>
            <input type="text" id="student_attendance" class="underline-input" name="student_attendance" required><br>
           </div>
           
           <div class="form-container">
            <div class="form-field">
            <label for="student_class">CLASS:</label>
            <select id="student_class" name="student_class" required>
                <option value="">SELECT CLASS</option>
                <option value="1">Class 1</option>
                <option value="2">Class 2</option>
                <option value="3">Class 3</option>
                <option value="4">Class 4</option>
                <option value="5">Class 5</option>
                <option value="6">Class 6</option>
                <option value="7">Class 7</option>
                <option value="8">Class 8</option>
                <option value="9">Class 9</option>
                <option value="10">Class 10</option>
                
            </select><br>
           </div>
           <div class="form-field">
           <label for="student_class">SECTION:</label>
            <select id="student_section" name="student_section" required>
                <option value="">SELECT SECTION</option>
                <option value="a">SECTION A</option>
                <option value="b">SECTION B</option>
                <option value="c">SECTION C</option>
            </select><br>
           </div>
        </div>
           <div class="form-container">
            <div class="form-field">
            <label for="maths_marks">MATH MARKS:</label>
            <input type="text" id="maths_marks" class="underline-input" name="maths_marks" required><br>
            </div>
            <div class="form-field">
            <label for="science_marks">SCIENCE MARKS:</label>
            <input type="text" id="science_marks" class="underline-input" name="science_marks" required><br>
           </div>
           <div class="form-field">
            <label for="computer_marks">COMPUTER MARKS:</label>
            <input type="text" id="computer_marks" class="underline-input" name="computer_marks" required><br>
           </div>
           </div>
           <div class="form-container">
           <div class="form-field">
            <label for="english_marks">ENGLISH MARKS:</label>
            <input type="text" id="english_marks" class="underline-input" name="english_marks" required><br>
           </div>
           <div class="form-field">
            <label for="hindi_marks">HINDI MARKS:</label>
            <input type="text" id="hindi_marks" class="underline-input" name="hindi_marks" required><br>
           </div>
            <div class="form-field">
            <label for="social_studies_marks">SOCIAL SCI. MARKS:</label>
            <input type="text" id="social_studies_marks" class="underline-input" name="social_studies_marks" required><br>
           </div>
           </div>
           <div class="form-container">
       <div class="form-field">
        <label for="total_marks">TOTAL MARKS:</label>
        <input type="text" id="total_marks" class="underline-input" name="total_marks" readonly><br>
       </div>
       <div class="form-field">
        <label for="percentage">PERCENTAGE:</label>
        <input type="text" id="percentage" class="underline-input" name="percentage" readonly><br>
       </div>
       </div>
           <div class="form-container1">
            <button type="button" onclick="prevPage(1)" style="margin-right: 60px;">PREVIOUS</button>
            
            <button type="submit" name="submit" id="submit">SUBMIT</button>
            <button type="button" id="retrieve-button" name="retrieve-button">RETRIEVE</button>

           </div>
        </fieldset>
        
    </form>
    <script src="script.js"></script>
</body>
</html>
