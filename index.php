<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Buying Cart</title>
    <style type="text/css">
        section.form_exam {
            max-width: 800px;
            margin: 0 auto;
            width: 100%;
        }
        section.form_exam input {
            width: 100%;
            padding: 10px;
            margin: 10px 0px;
        }
        section.form_exam input[type="radio"] {
            width: 2%;
        }
        section.form_exam h1 {
            width: 50%;
            display: inline;
        }
        select{

            padding: 10px;
            width: 100%;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    
<section class="form_exam">
        <form method="POST" action="form_post.php">
            <!-----------------Console------------------->
            <input type="radio" name="Console" value="Console" placeholder="Console">
               <h1><label>Console</label></h1>
            <div class="Console box">
            <label><h3>Console Extras</h3></label>
                <div class="label">
                    <label>Wired Controllers</label>
                </div>
                <input type="number" name="wired_extra_console" value="2">
                <div class="label">
                    <label>Remote Controllers</label>
                </div>
                <input type="number" name="remote_extra_console" value="2">
            </div>
            <div class="Console box">
                <label>Console Type</label>
                <select name="console_type">
                    <option>XBOX</option>
                </select>
            </div>
            <hr>
            <!-----------------end of Console------------------->

            <!-----------------Television------------------->
            <input type="radio" name="Television" value="Television" placeholder="Console" >
            <h1><label>Television</label></h1>
            
            <div class="Television box">
            <label><h3>Televisions Extras</h3></label>
                <label>Wired Controllers</label>
                <input type="number"  name="wired_extra_Television" value="2">
                <br>
                <label>Remote Controllers</label>
                <input type="number"  name="Remote_extra_Television" value="2">
            </div>
            <div class="Television box">
                <label>Television Type</label>
                <select name="Television_type">
                    <option value="Sony">Sony</option>
                    <option value="Toshiba">Toshiba</option>
                </select>
            </div>
            <!-----------------end of Television------------------->
            <hr>
            <input type="radio" name="Microwave" value="Microwave" placeholder="Console" >
            <h1><label>Microwave</label></h1>
            
            <input type="submit" name="submit">
        </form>
    </section>


</body>
</html>