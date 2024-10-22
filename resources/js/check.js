function check_password(){
    var pass = document.getElementById("password").value;
    var confirm_pass = document.getElementById("confirm_password").value;
    if(pass!=confirm_pass)
    {
        document.getElementById("confirm_message").innerHTML="Confirm password doesn't match password entered"; 
        return false;
    }
    else
    {
        document.getElementById("confirm_message").innerHTML=""; 
        return true;
    }
}

function check_fullName(){
    var name=document.getElementById("full_name").value;
    var splitName=name.split('');
    var flag1=false;
    var flag2=false;
    for(let i=0;i<splitName.length;i++)
    {
        if(splitName[i]==' ')
        {
            flag1=true;
        }

        if(splitName[i]>='a'&& splitName[i]<='z' || splitName[i]>='A'&& splitName[i]<='Z' || splitName[i]==' ')
        {
            flag2=true;
        }
        else
        {
            flag2=false;
            break;
        }
    }
     if(!flag1 || !flag2)
     {
        document.getElementById("fullName_message").innerHTML="Enter full name in correct way";
        return false;
     }
     else{
        document.getElementById("fullName_message").innerHTML="";
        return true;
     }

}

function check_pattern(){
    var pattern =document.getElementById("password").value;
    var splitPattern= pattern.split('');
    var special_character=['!','@','#','$','%','^','&','*','(',')','<','>','?'];
    var special=false;
    var num=false;
    var character=false;

    if(splitPattern.length<8)
    {
        document.getElementById("passPattern_message").innerHTML="Enter password in correct way mentioned, password entered less than 8 character";
        return false;
    }

    for(let i=0;i<splitPattern.length;i++)
    {
        if(special_character.includes(splitPattern[i]))
        {
            special=true;
        }
        if(splitPattern[i]>='0' && splitPattern[i]<='9')
        {
            num=true;
        }
        if(splitPattern[i]>='a'&& splitPattern<='z' || splitPattern[i]>='A' &&splitPattern<='Z')
        {
            character=true;
        }
    }

    if(num&&character&&special)
    {
        document.getElementById("passPattern_message").innerHTML="";
        return true;
    }
    else
    {
        document.getElementById("passPattern_message").innerHTML="Enter password in correct way mentioned";
        return false;
    }
}

function multi_check(){
    if(check_fullName() && check_pattern() && check_password())
    {
        return true;
    }
    else{
        return false;
    }
}

function showActors() {
    
    var input = document.getElementById("date").value;
    var d = new Date(input);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML
                = this.responseText;
        }
    }
    xmlhttp.open("GET", "API_Ops.php?q=" + d.getDate()+"&w="+(d.getMonth()+1), true);
    xmlhttp.send();
}