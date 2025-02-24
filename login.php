<?php
session_start();
include('includes/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $name = $_POST['fullname'];
    $title = $_POST['title'];

    $stmt = $conn->prepare("INSERT INTO users (name, email, phone) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $phone);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $_SESSION['user'] = ['name' => $name, 'email' => $email, 'phone' => $phone];
        header("Location: index.php");
        exit;
    }

    $stmt->close();
    $conn->close();
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radhe Krishna - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
            z-index: 1;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 2;
            display: flex;
            justify-content: center;
            align-items: center;
        }

    .login-modal {
    position: relative;  /* Added to properly position the close button */
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
    max-width: 400px;
    width: 100%;
    padding: 30px;
    text-align: center;
}

.close-btn {
    position: absolute;
    top: 15px;
    right: 15px;
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    color: #722F37;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    border-radius: 50%;
    transition: all 0.3s ease;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.close-btn:hover {
    background-color: rgba(114, 47, 55, 0.1);
    color: #722F37;
    transform: scale(1.1);
}

/* Ensure the close button doesn't interfere with the form content */
.login-modal form {
    margin-top: 10px;
}

        h1 {
            color: #722F37;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #666;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        select, input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        .phone-group {
            display: flex;
            gap: 10px;
        }

        .phone-code {
            width: 80px;
        }

        .continue-btn {
            width: 100%;
            padding: 12px;
            background: #722F37;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .terms {
            font-size: 12px;
            color: #666;
            margin-top: 15px;
        }

        .terms a {
            color: #722F37;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <iframe src="index.php"></iframe>

    <div class="overlay" id="loginModal">
    <div class="login-modal">
    <!-- Close button inside the card -->
    <button class="close-btn" onclick="closeModal()">×</button>
    
    <h1>Almost d there!</h1>
    <p class="subtitle">Welcome back, Please fill the missing fields.</p>
    
    <form method="POST" action="">
        
        <div class="form-group">
            <input type="text" name="fullname" placeholder="Enter Full Name" required>
        </div>
        
        <div class="form-group phone-group">
            <select class="phone-code" name="countryCode">
                <option value="+91">+91</option>
            </select>
            <input type="tel" name="phone" placeholder="Enter Mobile Number" pattern="[0-9]{10}" required>
        </div>
        
        <div class="form-group">
            <input type="email" name="email" placeholder="Enter Email ID" required>
        </div>
        
        <p class="terms">
            By continuing, I agree to <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a>
        </p>
        <button type="submit" class="continue-btn">Continue</button>
    </form>
</div>


    </div>

    <script>
        function closeModal() {
            document.getElementById('loginModal').style.display = 'none';
           
    window.location.href = 'index.php';
}
    
    </script>
</body>
</html>
