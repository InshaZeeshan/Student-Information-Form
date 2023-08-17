
  
    
let currentPage = 1;
const form = document.getElementById('registration-form');
const fieldsets = form.getElementsByTagName('fieldset');

function showPage(page) {
    for (let i = 0; i < fieldsets.length; i++) {
        fieldsets[i].style.display = i + 1 === page ? 'block' : 'none';
    }
}

function nextPage(page) {
    if (validatePage(currentPage)) { 
        currentPage = page;
        showPage(currentPage);
    }
}

function prevPage(page) {
    currentPage = page;
    showPage(currentPage);
}

function validatePage(page) {
   
    return true;
}

showPage(currentPage);


document.addEventListener("DOMContentLoaded", function () {
    const calculateTotalAndPercentage = () => {
      const mathsMarks = parseInt(document.getElementById("maths_marks").value) || 0;
      const scienceMarks = parseInt(document.getElementById("science_marks").value) || 0;
      const computerMarks = parseInt(document.getElementById("computer_marks").value) || 0;
      const englishMarks = parseInt(document.getElementById("english_marks").value) || 0;
      const hindiMarks = parseInt(document.getElementById("hindi_marks").value) || 0;
      const socialStudiesMarks = parseInt(document.getElementById("social_studies_marks").value) || 0;
  
      const totalMarks = mathsMarks + scienceMarks + computerMarks + englishMarks + hindiMarks + socialStudiesMarks;
      const totalSubjects = 6; 
      const maxMarksPerSubject = 100; 
      const totalMaxMarks = totalSubjects * maxMarksPerSubject;
      const percentage = (totalMarks / totalMaxMarks) * 100;
  
      document.getElementById("total_marks").value = totalMarks;
      document.getElementById("percentage").value = percentage.toFixed(2); 
    };
  

    const inputFields = document.querySelectorAll(".underline-input");
    inputFields.forEach((field) => {
      field.addEventListener("input", calculateTotalAndPercentage);
    });
  
    
    calculateTotalAndPercentage();
  });

  




document.getElementById('registration-form').addEventListener('submit', function(event) {
    event.preventDefault();

    // Collect form data
    const formData = new FormData(this);

    // Send form data to server
    fetch('process_data.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        // Handle response from the server
        // You can display a success message or perform other actions here
        console.log(data);
        // Reset the form
        document.getElementById('registration-form').reset();
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle error if the submission fails
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("registration-form");
    const retrieveButton = document.getElementById("retrieve-button");

    retrieveButton.addEventListener("click", function () {
        const studentId = document.getElementById("student_id").value;
        if (studentId !== "") {
            retrieveData(studentId);
        } else {
            alert("Please enter a student ID.");
        }
    });

    function retrieveData(studentId) {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", `retrieve.php?student_id=${studentId}`, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const data = JSON.parse(xhr.responseText);
                if (data !== null) {
                    populateForm(data);
                } else {
                    alert("No data found for the provided student ID.");
                }
            }
        };
        xhr.send();
    }

    function populateForm(data) {
        // Personal Information
        document.getElementById("student_name").value = data.student_name;
        document.getElementById("student_email").value = data.student_email;
        document.getElementById("student_age").value = data.student_age;
        document.getElementById("aadhar_number").value = data.aadhar_number;
        document.getElementById("address").value = data.address;
        document.getElementById("date_of_birth").value = data.date_of_birth;
        document.getElementById("phone_number").value = data.phone_number;
        document.getElementById("emergency_contact").value = data.emergency_contact;
        document.getElementById("emergency_phone").value = data.emergency_phone;
        document.getElementById("relationship").value = data.relationship;

        // Academic Information
        document.getElementById("student_roll").value = data.student_roll;
        document.getElementById("student_attendance").value = data.student_attendance;
        document.getElementById("student_class").value = data.student_class;
        document.getElementById("student_section").value = data.student_section;
        document.getElementById("maths_marks").value = data.maths_marks;
        document.getElementById("science_marks").value = data.science_marks;
        document.getElementById("computer_marks").value = data.computer_marks;
        document.getElementById("english_marks").value = data.english_marks;
        document.getElementById("hindi_marks").value = data.hindi_marks;
        document.getElementById("social_studies_marks").value = data.social_studies_marks;

        calculateTotalAndPercentage(); // Recalculate total marks and percentage
    }

    // Rest of your code...
});
