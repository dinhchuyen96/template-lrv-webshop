<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h1 id="heading1">Admin Login</h1>
    <div>
        <form action="" class="myForm" method="post" name="myForm">
            @csrf
            <div class="input-container">
                <i class="fa fa-envelope icon"></i>
                <input type="email" placeholder="Email" name="email" class="input-field"  maxlength="40"  required>
            </div>
            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input type="password" placeholder="Password"  minlength="5"  maxlength="10" name="password" class="input-field" required>
            </div>
            <div class="text-center" style="color: red;">
                @error('email')
                    {{ $message }}
                @enderror
                @error('password')
                    {{ $message }}
                @enderror

            </div>
            <div><input type="submit" class="bttn"></div>
        </form>
    </div>
    @if (session()->has('wrong'))
        <h3  style="color: red; text-align: center">{{ session()->get('wrong') }}</h3>
    @endif
</body>

</html>
<style>
    * {
        box-sizing: border-box;
        padding: 1px;
        font-family: Arial, Helvetica, sans-serif;
    }

    #heading1 {
        text-align: center;
        padding: 30px;
    }

    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;

    }

    .myForm {
        max-width: 500px;
        margin: auto;
        margin-top: 10px;
    }

    .input-container {

        display: flex;
        width: 100%;
        margin-bottom: 15px;

    }

    .icon {
        padding: 10px;
        background: darkorange;
        color: white;
        min-width: 50px;
        text-align: center;
    }

    .input-field {
        width: 100%;
        padding: 10px;
        outline: none;
        border: none;
        border-bottom: 3px solid darkcyan;
    }

    .input-field:focus {
        border: 2px solid darkcyan;
    }

    .bttn {
        background-color: darkorange;
        color: white;
        padding: 15px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .bttn:hover {
        opacity: 1;
        background-color: darkcyan;
    }

    a:hover {
        color: blueviolet;
    }

    .icon:hover {
        background-color: darkcyan;
    }

</style>
