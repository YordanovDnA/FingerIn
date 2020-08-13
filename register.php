 <?php include_once('register_function.php'); ?>    
<div class="shadow-lg text-dark rounded shadow-lg m-4 p-4 rg-lg-form mx-auto">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']),'?page=signup' ?>" method="post">
        <h5 class="text-center">Sign Up</h5>
        <div id="registerFirstStep" class="form-group">
            <label for="username form-inline">Username:</label>
            <input class="form-control" name="username" placeholder="Username" type="text" required>
            <label for="password">Password:</label>
            <input class="form-control" type="password" name="password" placeholder="Password" id="password" required>
            <label for="repassword">Repeat password:</label>
            <input class="form-control" type="password" name="repassword" placeholder="Repeat password" id="repassword" required>
            <div id="passwordAlert" class="alert-danger d-none"></div>
            <p>Already have an account? <a href="?page=signin">Sign In</a></p>
            <div id="next" class="btn btn-sm btn-success mt-2">Next</div>
        </div>
        <div id="registerSecondStep" class="form-group d-none">
            <div id="info-Accounts" class="alert alert-info alert-dismissible fade show" style="display:none; position: absolute">
                <button type="button" onclick="hide('info-Accounts')" class="close">&times;</button>
                <strong>Personal account:</strong> for personal use or solo traders. <br>
                <strong>Company account:</strong> for companies only.

            </div>
            <label for="account">Select account type<i onclick="show('info-Accounts')" class="fas fa-info-circle ml-1" style="cursor: pointer"></i></label>
            <select class="form-control bg-info text-white" name="account" id="accountType">
                <option onclick="selectedAccount('personal')" value="personal" selected>Personal</option>
                <option onclick="selectedAccount('company')" value="company">Company</option>
            </select>
            <div id="personalAccount" class="form-group">
                <h6 class="text-center mt-3">Personal information:</h6>
                <label for="firstName">First name:</label>
                <input class="form-control" type="text" name="firstName" placeholder="First name" id="firstName" required>
                <label for="lastname">Last name:</label>
                <input class="form-control" type="text" name="lastName" placeholder="Last name" id="lastName" required>
                <label for="personalEmail">Email:</label>
                <input class="form-control" type="email" name="personalEmai" placeholder="Email" id="personalEmail" required>
                <label for="personalPhone">Phone number: (optional)</label>
                <input class="form-control" type="text" name="personalPhone" placeholder="Phone number" id="personalPhone">
                <input class="btn btn-sm btn-success" type="submit" value="Submit">
            </div>
            <div id="companyAccount" class="form-group d-none">
                <h6 class="text-center mt-3">Company detiles</h6>
                <label for="companyName">CompanyName</label>
                <input class="form-control" type="text" name="companyName" placeholder="Company name" id="companyName">
                <label for="companyEmail">Email:</label>
                <input class="form-control" type="email" name="companyEmail" placeholder="Email" id="companyEmail">
                <label for="companyPhone">Phone number:</label>
                <input class="form-control" type="text" name="companyPhone" placeholder="Phone" id="companyPhone">
                <label for="address">Address:</label>
                <input class="form-control" type="text" name="firstAddress"  id="firstAddress" placeholder="First line" >
                <input class="form-control mt-1" type="text" name="secondAddress"  id="secondAddress" placeholder="Second line" >
                <input class="form-control mt-1" type="text" name="postecode"  id="postecode" placeholder="Postcode" >
                <input class="form-control mt-1" type="text" name="city"  id="city" placeholder="City" >
                <input class="form-control mt-1" type="text" name="country"  id="country" placeholder="Country" >
                <input class="btn btn-sm btn-success" type="submit" value="Submit">
            </div>
        </div>
    </form>
</div>
