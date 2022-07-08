<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System Registration Page</title>
     <!-- Bootstrap css link -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body class="bg-dark">
    <h1 class="text-center text-info p-3">Voting System</h1>
 <div class="bg-info py-4">
    <h2 class="text-center">Register Account</h2>
    <div class="container text-center" >
    <form action="../actions/register.php" method="POST" 
    enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="username" placeholder="Enter your username" require="required">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="mobile" placeholder="Enter your mobile number" require="required"
                    maxLength="10" minLength="10">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="password" placeholder="Enter your password" require="required">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="cpassword" placeholder="Enter your Confirm password" require="required">
                </div> 
                <div class="mb-3">
                    <input type="file" class="form-control w-50 m-auto" name="photo"  >
                </div> 
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group" >Group</option>
                        <option value="voter" >Voter</option>

                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4" >Login
                
                </button>
                <p>Already have an account? <a href="../index.php" class="text-white"> Login here</a></p>

    </form>
 </div>   
</body>
</html>