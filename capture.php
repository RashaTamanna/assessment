<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Profile Screen</title>
    <style>
        body {
            margin: 0;
            background-color: #000;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            margin-bottom: 30px;
            font-size: 2rem;
        }

        .profiles {
            display: flex;
            gap: 20px;
        }

        .profile {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .profile img {
            width: 100px;
            height: 100px;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .profile .name {
            font-size: 1rem;
        }

        .add-profile {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100px;
            height: 100px;
            border: 2px solid gray;
            border-radius: 10px;
            color: gray;
            font-size: 2rem;
            font-weight: bold;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .manage-profiles {
            margin-top: 30px;
            background-color: transparent;
            border: 1px solid gray;
            padding: 10px 20px;
            border-radius: 5px;
            color: gray;
            cursor: pointer;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <h1>Who's watching?</h1>
    <div class="profiles">
        <div class="profile">
            <img src="https://via.placeholder.com/100" alt="Brian">
            <div class="name">Brian</div>
        </div>
        <div class="profile">
            <img src="https://via.placeholder.com/100" alt="Karen">
            <div class="name">Karen</div>
        </div>
        <div class="profile">
            <img src="https://via.placeholder.com/100" alt="River">
            <div class="name">River</div>
        </div>
        <div class="profile">
            <div class="add-profile">+</div>
            <div class="name">Add Profile</div>
        </div>
    </div>
    <button class="manage-profiles">Manage Profiles</button>
</body>
</html>
