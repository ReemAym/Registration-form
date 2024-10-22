<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Registration Form</title>
    @include('header')

</head>
<body>


<br><br>
<form onsubmit="return multi_check()" action="{{route('students.store')}}" method="POST" enctype="multipart/form-data">
    @csrf 

    <div>
            <label for="full_name">{{__('formText.fullname')}}</label>
            <label id="d"> * </label>
            <input class="label" id="full_name" type="text" placeholder=" {{__('formText.enterfull')}} " name="full_name" required>
            <span id="fullName_message" class="error">{{__('formText.correctname_error')}}</span><br><br>
    </div>

    <div>
            <label for="user_name">{{__('formText.username')}}</label>
            <label id="d"> * </label>
            <input class="label" id="user_name" type="text" placeholder=" {{__('formText.enteruser')}} " name="user_name" required> <br><br>
    </div>

    <div>
            <label for="date">{{__('formText.birthdate')}}:</label>
            <label id="d"> * </label>
            <input class="label" id="date" type="date" name="birthdate" required>
            <button type="button" onclick="showActors()">{{__('formText.check')}}</button> <br>
            <span id="txtHint"></span><br>
    </div>

    <div>
            <label for="phone">{{__('formText.phone')}}</label>
            <label id="d"> * </label>
            <input class="label" id="phone" type="tel" placeholder=" {{__('formText.enterphone')}}" name="phone" pattern="[0-9]*" required>
            <br><br>
    </div>

    <div>
            <label for="address">{{__('formText.address')}}</label>
            <label id="d"> * </label>
            <input class="label" id="address" type="text" placeholder=" {{__('formText.enteraddress')}} " name="address_" required> <br><br>
    </div>

    <div>
            <label for="password">{{__('formText.password')}}</label>
            <label id="d"> * </label>
            <label id="c"> {{__('formText.passwordpattern')}}  </label>
            <input class="label" id="password" type="password" placeholder=" {{__('formText.enterpassword')}} " name="password_" required>
            <span id="passPattern_message1" class="error">{{__('formText.passwordsmall_error')}}</span> 
            <span id="passPattern_message2" class="error">{{__('formText.passwordpattern_error')}}</span> <br><br>

    </div>

    <div>
            <label for="confirm_password">{{__('formText.confirm')}}</label>
            <label id="d"> * </label>
            <input class="label" id="confirm_password" type="password" placeholder=" {{__('formText.enterpassagain')}}" name="confirm_password" required>
            <span id="confirm_message" class="error">{{__('formText.matchpassword_error')}}</span>
            <br><br>
    </div>

    <div>
            <label for="user_image">{{__('formText.userimage')}}</label>
            <label id="d"> * </label>
            <input id="user_image" type="file" accept=".jpg, .jpeg, .png " name="image_" required> <br><br><br>
    </div>

    <div>
            <label for="email">{{__('formText.email')}}</label>
            <label id="d"> * </label>
            <input class="label" id="email" type="email" placeholder=" {{__('formText.entermail')}} " name="email" required> <br><br>
    </div>

        <input name='save' class="submit" type="submit" value="{{__('formText.save')}}" />
        <input class="submit" type="reset" value="{{__('formText.reset')}}" />
    </form>
    <br><br>

    @include('footer')

    <script src="{{ asset('js/check.js') }}"></script>

</body>
</html>