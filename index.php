

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link  rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Registration Form</h1>
    <form id="form">
        <table id="tab">
            <tr>
                <td><label>Name: </label></td>
                <td><input type="text" name="name" id="name" /><br></td>
            </tr>
        <tr>  
        <td><label>Roll Number: </label></td>
        <td><input type="text" name="roll" id="roll" /><br></td>
        </tr>
        <tr>
        <td><label>Courses: </label></td>
        <td><input type="radio" name="course" id="course"/>MCA
        <input type="radio" name="course" id="course"/>MSc<br></td>
        </tr>
        <tr>
        <td><label>Email: </label></td>
        <td><input type="text" name="email" id="email" /><br></td>
        </tr>
        <tr>
        <td><label>Number: </label></td>
        <td><input type="text" name="number" id="number" /><br></td>
        </tr>
        <tr>
         <tr>
         <td><label>Address: </label></td>
        <td><textarea  name="address" id="address"></textarea><br></td>
</tr>    
    </table>
    <div id="button">
        <input type="submit" name="submit" id="submit" value="Register" />
    </div>
    </form>
</body>
</html>
