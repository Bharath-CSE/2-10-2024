<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Student Form</title>
    <style>
        *
        {
            margin: 0px;
            padding: 0px;
        }
        body
        {
            margin: 20px;
            padding: 20px;
        }
        .text
        {
            text-align: center;
            margin-top: 60px;
        }
        .form_align
        {
            width: 300px;
            margin: 0px auto;
        }
        .logout_button
        {
            float: right;
        }
        .list
        {
            float: left;
        }
        .error 
        {
            color: red;
            font-size: 15px;
            padding-right: 0;
        }
    </style>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>
</head>
<body style='font-family: arial;'>
    <div>
        <div class='logout_button'>
            <a href='index.php?mod=student&view=logout'><button class='btn btn-danger'>Logout</button></a>
        </div>
        <div class='list'>
            <a href='index.php?mod=student&view=studentList'><button class='btn btn-primary'>Student List</button></a>
        </div>
    </div>
    <h1 class='text'>Welcome <?php echo $_SESSION["Name"] ?></h1><br>
    <div class='container'>
        <form method='post' action='index.php?mod=student&view=studentForm' class='form_align' enctype='multipart/form-data' onsubmit='validateForm()'>
            <div class='form-group'>
                <label><b>
                        Firstname:
                    </b>
                </label><br>
                <input type='text' name='firstname' id='fname' class='form-control' placeholder='Firstname' required>
                <div class='error' id='fnameError'></div>
            </div><br>
            <div class='form-group'>
                <label><b>
                        Lastname:
                    </b>
                </label><br>
                <input type='text' name='lastname' id='lname' class='form-control' placeholder='Lastname' required>
                <div class='error' id='lnameError'></div>
            </div><br>
            <div class='form-group'>
                <label><b>
                        Dob:
                    </b>
                </label><br>
                <input type='date' name='dob' id='dob' class='form-control' required>
                <div class='error' id='dobError'></div>
            </div><br>
            <div class='form-group'>
                <label><b>
                        Email:
                    </b>
                </label><br>
                <input type='email' name='email' id='email' class='form-control' placeholder='Email' required>
                <div class='error' id='emailError'></div>
            </div><br>
            <div class='form-group'>
                <label><b>
                        Number:
                    </b>
                </label><br>
                <input type='text' name='number' class='form-control' id='number' placeholder='Number' required>
                <div class='error' id='numberError'></div>
            </div><br>
            <div class='form-group'>
                <label><b>
                        Image:
                    </b>
                </label><br>
                <input type='file' name='image' class='form-control' id='image' required>
                <div class='error' id='imageError'></div>
            </div><br>
            <div class='form-group'>
                <label><b>
                        Department:
                    </b>
                </label><br>
                <input type='text' name='department' class='form-control' id='department' placeholder='Department' required>
                <div class='error' id='departmentError'></div>
            </div><br>
            <div class='form-group'>
                <label><b>
                        Age:
                    </b>
                </label><br>
                <input type='number' name='age' class='form-control' placeholder='Age' id='age' required>
                <div class='error' id='ageError'></div>
            </div><br>
            <div class='form-group'>
                <label><b>
                        Blood Group:
                    </b>
                </label><br>
                <input type='text' name='blood_group' class='form-control' placeholder='Blood Group' id='blood_group' required>
                <div class='error' id='blood_group_Error'></div>
            </div><br>
            <div class='form-group'>
                <label><b>
                        Gender:
                    </b>
                </label><br>
                <select name='gender' class='form-control' id='gender' required>
                    <option value='' selected>Select</option>
                    <option value='Male'>Male</option>
                    <option value='Female'>Female</option>
                    <option value='Other'>Other</option>
                </select>
                <div class='error' id='genderError'></div>
            </div><br>
            <div class='form-group'>
                <label><b>
                        Passedout Year:
                    </b>
                </label><br>
                <input type='number' name='passedout_year' class='form-control' placeholder='Passedout Year' required>
            </div><br>
            <div class='form-group'>
                <label><b>
                        Location:
                    </b>
                </label><br>
                <input type='text' name='location' class='form-control' placeholder='Location' required>
            </div><br>
            <input type='submit' class='btn btn-primary' name='submit'><br>
        </form>
    </div>
    <script>
        function validateFirstName() 
        {
            const fname=document.getElementById("fname").value;
            const fnameError=document.getElementById("fnameError");
            if (fname.trim()=="" || fname.trim()==null) 
            {
                fnameError.textContent="First name must be filled out";
                return false;
            }
            else 
            {
                fnameError.textContent="";
                return true;
            }
        }

        function validateLastName() 
        {
            const lname=document.getElementById("lname").value;
            const lnameError=document.getElementById("lnameError");
            if (lname.trim()=="" || lname.trim()==null) 
            {
                lnameError.textContent="Last name must be filled out";
                return false;
            }
            else 
            {
                lnameError.textContent="";
                return true;
            }
        }

        function validateDOB() 
        {
            const dob=document.getElementById("dob").value;
            const dobError=document.getElementById("dobError");
            if (dob.trim()=="" || dob.trim()==null) 
            {
                dobError.textContent="DOB must be filled out";
                return false;
            }
            else 
            {
                dobError.textContent="";
                return true;
            }
        }

        function validateEmail() 
        {
            const email=document.getElementById("email").value;
            const emailError=document.getElementById("emailError");
            if (email.trim()=="" || email.trim()==null) 
            {
                emailError.textContent="Email must be filled out";
                return false;
            }
            else 
            {
                emailError.textContent="";
                return true;
            }
        }

        function validateNumber() 
        {
            const number=document.getElementById("number").value;
            const numberError=document.getElementById("numberError");
            if (number.trim()=="" || number.trim()==null) 
            {
                numberError.textContent="Number must be filled out";
                return false;
            }
            if((number.trim()>='a' && number.trim()<='z') || (number.trim()>='A' && number.trim()<='Z'))
            {
                numberError.textContent="Number does not contains letters";
                return false;
            }
            if((number.trim().length)!=10)
            {
                numberError.textContent="Number contains 10 digits";
                return false;
            }
            else 
            {
                numberError.textContent="";
                return true;
            }
        }

        function validateImage() 
        {
            const image=document.getElementById("image").value;
            const imageError=document.getElementById("imageError");
            if (image.trim()=="" || image.trim()==null) 
            {
                imageError.textContent="Image must be upload";
                return false;
            }
            else 
            {
                imageError.textContent="";
                return true;
            }
        }

        function validateDepartment() 
        {
            const department=document.getElementById("department").value;
            const departmentError=document.getElementById("departmentError");
            if (department.trim()=="" || department.trim()==null) 
            {
                departmentError.textContent="Department must be filled out";
                return false;
            }
            else 
            {
                departmentError.textContent="";
                return true;
            }
        }   

        function validateAge() 
        {
            const age=document.getElementById("age").value;
            const ageError=document.getElementById("ageError");
            if (age.trim()=="" || age.trim()==null) 
            {
                ageError.textContent="Age must be filled out";
                return false;
            }
            else 
            {
                ageError.textContent="";
                return true;
            }
        }

        function validateBloodGroup() 
        {
            const blood_group=document.getElementById("blood_group").value;
            const blood_group_Error=document.getElementById("blood_group_Error");
            if (blood_group.trim()=="" || blood_group.trim()==null) 
            {
                blood_group_Error.textContent="Blood Group must be filled out";
                return false;
            }
            else 
            {
                blood_group_Error.textContent="";
                return true;
            }
        }

        function validateGender() 
        {
            const gender=document.getElementById("gender").value;
            const genderError=document.getElementById("genderError");
            if (gender.trim()=="" || gender.trim()==null) 
            {
                genderError.textContent="Gender must be filled out";
                return false;
            }
            else 
            {
                genderError.textContent="";
                return true;
            }
        }

        document.addEventListener("DOMContentLoaded", function() 
        {
            document.getElementById("fname").addEventListener("focusout", validateFirstName);
            document.getElementById("lname").addEventListener("focusout", validateLastName);
            document.getElementById("dob").addEventListener("focusout", validateDOB);
            document.getElementById("email").addEventListener("focusout", validateEmail);
            document.getElementById("number").addEventListener("focusout", validateNumber);
            document.getElementById("image").addEventListener("focusout", validateImage);
            document.getElementById("department").addEventListener("focusout", validateDepartment);
            document.getElementById("age").addEventListener("focusout", validateAge);
            document.getElementById("blood_group").addEventListener("focusout", validateBloodGroup);
            document.getElementById("gender").addEventListener("focusout", validateGender);
        });

        function validateForm() 
        {
            const isFNameValid = validateFirstName();
            const isLNameValid = validateLastName();
            const isDOBValid = validateLastName();
            const isEmailValid = validateEmail();
            const isNumberValid = validateNumber();
            const isImageValid = validateImage();
            const isDepartmentValid = validateDepartment();
            const isAgeValid = validateAge();
            const isBloodGroupValid = validateBloodGroup();
            const isGenderValid = validateGender();

            if (isFNameValid && isLNameValid && isDOBValid && isEmailValid && isNumberValid && isImageValid && isDepartmentValid && isAgeValid && isBloodGroupValid && isGenderValid) 
            {
                alert("Successfully Registered");
            }
        }
    </script>
</body>
</html>