<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style type="text/css">
        body {
            font-family: 'Arial', sans-serif;
            margin: 50;
            padding: 50;
            background-color: #f3f6fa; /* Light grey background for a modern look */
            color: #333333; /* Dark grey for text */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            width: 100%;
            max-width: 500px;
            background-color: #ffffff; /* White background for the form */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Soft shadow for an elevated look */
        }

        .form-title {
            text-align: center;
            color: #2c3e50; /* Deep blue-grey for titles */
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #2c3e50; /* Consistent deep blue-grey for labels */
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #dfe4ea; /* Light grey border */
            border-radius: 5px;
            background-color: #f9fbfc; /* Subtle off-white background for inputs */
            color: #333333; /* Dark grey text */
            font-size: 14px;
            transition: border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .form-control:focus {
            border-color: #3498db; /* Highlight border in blue on focus */
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
            outline: none;
        }

        .btn {
            background-color: #3498db; /* Bright blue button */
            color: #ffffff; /* White text */
            border: none;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            width: 100%;
        }

        .btn:hover {
            background-color: #2980b9; /* Darker blue on hover */
        }

        select.form-control {
            appearance: none;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        label[for="one"],
        label[for="two"] {
            margin-right: 15px;
            color: #333333;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #888888; /* Light grey for footer text */
        }
    </style>
</head>

<body>
    <?php include 'navigation.php'; ?>
    <div class="container">
        <h2 class="form-title">Cricket Registration</h2>
        <h4 class="form-title" style="font-size: 18px; color: #34495e;">Coach Registration</h4>
        <form action="registraction2.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name" class="label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email" class="label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="address" class="label">State:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>

            <div class="form-group">
                <label for="mobile" class="label">Mobile:</label>
                <input type="tel" class="form-control" id="mobile" name="mobile" required>
            </div>

            <div class="form-group">
                <label for="sex" class="label">Gender:</label>
                <div>
                    <label for="one">Male</label>
                    <input type="radio" id="gender" name="gender" value="Male">
                    <label for="two">Female</label>
                    <input type="radio" id="gender" name="gender" value="Female">
                </div>
            </div>

            <div class="form-group">
                <label for="nationality" class="label">Nationality:</label>
                <input type="text" class="form-control" id="nationality" name="nationality" required>
            </div>

            <div class="form-group">
                <label for="category" class="label">Type:</label>
                <select class="form-control" id="types" name="types" required>
                    <option value="">Select Coaching Type</option>
                    <option value="Head Coach">Head Coach</option>
                    <option value="Batting Coach">Batting Coach</option>
                    <option value="Pace Bowling Coach">Fast Bowling Coach</option>
                    <option value="Spin Bowling Coach">Spin Bowling Coach</option>
                    <option value="Assistant Coach">Assistant Coach</option>
                </select>
            </div>

            <div class="form-group">
                <label for="category" class="label">Experience:</label>
                <select class="form-control" id="types" name="experience" required>
                    <option value="0 - 5 Year">0 - 5 Year</option>
                    <option value="5 - 10 Year">5 - 10 Year</option>
                    <option value="10 - 15 Year">10 - 15 Year</option>
                    <option value="15+">15+ Year</option>
                </select>
            </div>

            <div class="form-group">
                <label for="board" class="label">Cricket Board:</label>
                <input type="text" class="form-control" id="board" name="board" required>
            </div>

            <div class="form-group">
                <label for="password" class="label">Set Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="confirm_password" class="label">Confirm Password:</label>
                <input type="password" class="form-control" id="confirmp" name="confirmp" required>
            </div>

            <div class="form-group">
                <button type="submit" name="submit" class="btn">Register</button>
            </div>
        </form>
    </div>
    <?php include 'footer.html'; ?>
</body>

</html>
