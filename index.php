<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
</head>
<body>
<h1>Users</h1>
<form action="submit.php" method="post" enctype="multipart/form-data">
    <fieldset style="border-radius: 10px;background-color: #5a0262db; width: 400px; height: 250px;">
        <label for="name" style="color: white">Name</label><br>
        <input type="text" id="name"  name="name" placeholder="Enter Name" style="width:500px;height:25px;border-radius:5px"><br>
        <label for="Email" style="color: white">Email</label><br>
        <input type="email" id="Email" name="email" placeholder="Enter email"style="width:500px;height:25px;border-radius:5px"><br>
        <label for="message" style="color: white">Description</label><br>
        <textarea name="message" id="message" placeholder="Enter a description" style="width:500px;height:50px;border-radius:5px"></textarea><br>
        <label style="color: white">Image</label><br>
        <input type="file" id="image" name="image">
        <input type="submit"  name="submit" id="submit" value="Submit" style="color: white;height: 30px;background-color: #2ec52e;margin-left: 365px;margin-top: 10px;"><br>
    </fieldset>
</form>
</body>
</html>
