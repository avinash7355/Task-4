<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
        h2 {
            font-size: 24px;
            margin-top: 20px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #3e8e41;
        }

        .menu-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 24px;
        }
        
        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-menu a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-menu a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body>
    <h2>Welcome Admin</h2>
  
    <div class="dropdown">
        <span class="menu-icon" onclick="toggleDropdownMenu()">&#9776;</span>
   
        <div class="dropdown-menu" id="myDropdown">
            <a href="Assignchapter.php">Assign Chapter</a>
            <a href="assignsubject.php">Assign Subject</a>
            <a href="">Assign Student</a>
         
        </div>
    </div>

    <button onclick="goToSubject()">Go to Subject</button>
    <button onclick="goToChapter()">Go to Chapter section</button>
    <button onclick="goToStandard()">Go to Standard</button>

    <script>
        function goToSubject() {
            window.location.href = "subject.php";
        }
        function goToChapter() {
            window.location.href = "chapter.php";
        }
        function goToStandard() {
            window.location.href = "standard.php";
        }

        function toggleDropdownMenu() {
            var dropdownMenu = document.getElementById("myDropdown");
            dropdownMenu.style.display = dropdownMenu.style.display === "block" ? "none" : "block";
        }
    </script>
</body>
</html>
