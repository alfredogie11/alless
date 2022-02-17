<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload</title>
    <link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="adminDesign.css">
</head>
<body>

<div class="header">
    <div class="header-left">
        <img src="logo.jpg" width="180" height="200" style="border: 5px double #b4aeaa">
    </div>
    <div class="header-right">
        <div class="lower-right-header">
            <p class="header-txt">Add New Item</p>
        </div>
    </div>
</div>


    <div class="admin-cont">
        <div class="left-admin">
            <button type="button" onclick="back()">Back</button>
            <button type="button" onclick="logout()">Logout</button>
            <script>
                function logout() {
                    location.href = "index.php"
                }
                function back() {
                    location.href = "admin.php"
                }
            </script>
        </div>
        <div class="right-admin-2">

            <form method="post" action="uploadProcess.php" enctype="multipart/form-data">
                <table class="form-table">
                    <tr>
                        <td class="label">Category</td>
                        <td>
                            <select style="width: 80%" name="category">
                                <option>Top Clothes</option>
                                <option>Bottom Clothes</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Name</td>
                        <td><input class="input-2" type="text" name="name" required></td>
                    </tr>
                    <tr>
                        <td class="label">Stocks</td>
                        <td><input class="input-2" type="number" name="qty" required></td>
                    </tr>
                    <tr>
                        <td class="label">Price</td>
                        <td><input class="input-2" type="number" name="price" required></td>
                    </tr>
                    <tr>

                        <td colspan="2"><input class="input-2" type="file" name="img" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="submit" class="major-button">Add</button></td>

                    </tr>
                </table>
                <style>
                    .form-table tr td input{
                        all: unset;
                        padding: 0.3rem 0.2rem;
                        text-align: center;
                        width: 30vw;
                    }
                    .form-table tr td input:focus{
                        border-bottom: 1px solid #6c655b;
                    }
                    select{
                        margin: 0;
                    }
                </style>

            </form>
        </div>
    </div>


</body>
</html>
