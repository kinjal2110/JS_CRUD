<?php
include 'header.php';
?>

<body>
    <div class="container">
        <h2 class="text-center text-primary">Javascript CRUD</h2>
        <table cellspacing="0" cellpadding="" class="table table-striped" id='user_input'>
            <form method="POST" onsubmit="return send_data(this);">
                <tr>
                    <input type="hidden" id="id">
                    <td>Name:</td>
                    <td><input type="text" name="name" id="name" class="form-control" placeholder="Enter your name here"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" id="email" class="form-control" placeholder="Enter your email here"></td>
                </tr>
                <tr>
                    <td><button type="reset" class="btn btn-danger">cancel</button></td>
                    <td>
                        <button type="submit" id="submit" class='btn btn-primary'>submit</button>
                        <button type="button" id="update" class='btn btn-info' onclick="update_db()">update</button>

                    </td>
                </tr>
            </form>
        </table>

        <br>
        <br>
        <div id="user_data">

        </div>

    </div>
</body>
<script>
    document.getElementById("user_data").style.display = "none";
    document.getElementById("update").style.display = "none";

    document.getElementById("user_data").style.display = "block";

    function send_data(data) {
        var name = data.name.value;
        var email = data.email.value;

        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "insert_db.php", true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        var param = 'name=' + name + '&email=' + email;

        if (name == '') {
            alert('Please enter name');
        } else if (email == '') {
            alert('Please enter email');
        } else {
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var json_data = JSON.parse(this.responseText);
                    if (json_data['status'] == 'success') {
                        alert(json_data['message']);
                    } else {
                        alert(json_data['message']);
                    }
                }
            }
        }
        xhttp.send(param);
    }

    // for display table
    var xhr = new XMLHttpRequest();
    xhr.open('POST', "display_db.php", true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("user_data").innerHTML = xhr.responseText;
        }
    }
    xhr.send();

    // delete user data
    function delete_data(id) {
        var conf = confirm("Are you sure you want to delete this data");
        if (conf == true) {
            var xhr = new XMLHttpRequest();
            var param = 'id=' + id;
            xhr.open('POST', 'delete_db.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var json_data = JSON.parse(xhr.responseText);
                    if (json_data['status'] == true) {
                        alert(json_data['message']);
                    } else {
                        alert(json_data['message']);
                    }
                }
            }
            xhr.send(param);
        }
    }
    // console.table({
    //     firstname: "Kinjal",
    //     lastname: "Suryavanshi"
    // });
    // console.table(['graps','apple','orange']);

    // update user data
    function update_data(id) {
        var xhr = new XMLHttpRequest();
        var param = 'id=' + id;
        xhr.open('POST', 'update_display_db.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.status == 200 && xhr.readyState == 4) {
                var json_data = JSON.parse(xhr.responseText);
                document.getElementById("id").value = json_data['id'];
                document.getElementById("name").value = json_data['name'];
                document.getElementById("email").value = json_data['email'];
                document.getElementById("submit").style.display = "none";
                document.getElementById("update").style.display = "block";
            }
        }
        xhr.send(param);
    }

    function update_db() {
        var xhr = new XMLHttpRequest();
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var id = document.getElementById('id').value;
        var param = 'id=' + id + '&name=' + name + '&email=' + email;
        xhr.open('POST', "update_db.php", true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.status == 200 && xhr.readyState == 4) {
                var json_data = JSON.parse(xhr.responseText);
                if (json_data['status'] == true) {
                    alert(json_data['message']);
                } else {
                    alert(json_data['message']);
                }
            }
        }
        xhr.send(param);
    }
</script>