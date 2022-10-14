<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Registration Page</title>

    <style>
        html,
        body {
            height: 100%;
            width: 70vw;
            margin: 0 auto;
        }


        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            border: 3px solid #f1f1f1;
        }

        input:focus,
        input:valid {
            outline: none;
        }

        input[type=text],
        input[type=password],
        input[type=number],
        input[type=email],
        input[type=date] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type=radio] {
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .signupbtn {
            width: 100%;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            background-color: #4a34f4;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        h2 {
            text-align: center;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.password {
                display: block;
                float: none;
            }
        }
    </style>
</head>

<body>

    <form action="/user_data.php">
        <div class="imgcontainer">
            <img src="https://res.cloudinary.com/http-startng/image/upload/zuriboard/tenant-logo/jmhas4pjasmwfmmlzqcn.png" alt="Avatar" class="avatar">
        </div>
        <div class="container">
            <label for="fname"><b>Name</b></label>
            <input type="text" placeholder="Enter Your Name" name="name" required>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>

            <label for="date_of_birth"><b>Date of Birth</b></label>
            <input type="date" placeholder="Date of Birth" name="date_of_birth" required>

            <label for="gender"><b>Gender</b></label><br>
            <input type="radio" name="gender" value="Male" required> Male
            <input type="radio" name="gender" value="Male" required> Female
            <br>
            <br>

            <label for="country"><b>Country</b></label>
            <input type="text" placeholder="Enter Your Country" name="country" required>

            <button type="submit">Submit</button>

        </div>
    </form>
</body>

</html>