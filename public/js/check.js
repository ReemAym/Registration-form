
function check_password(){
    var pass = document.getElementById("password").value;
    var confirm_pass = document.getElementById("confirm_password").value;
    if(pass!=confirm_pass)
    {
        document.getElementById("confirm_message").style.display="block"; 
        return false;
    }
    else
    {
        document.getElementById("confirm_message").style.display="none"; 
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
        document.getElementById("fullName_message").style.display="block";
        return false;
     }
     else{
        document.getElementById("fullName_message").style.display="none";
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
        document.getElementById("passPattern_message1").style.display="block";
        return false;
    }
    else
    {
        document.getElementById("passPattern_message1").style.display="none";
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
        document.getElementById("passPattern_message2").style.display="none";
        return true;
    }
    else
    {
        document.getElementById("passPattern_message2").style.display="block";
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

document.getElementById("button").addEventListener("click", function()
{
    
    var input = document.getElementById("date").value;
    var d = new Date(input);
    //document.getElementById("txtHint").innerHTML = "helllllooooo";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML
                = this.responseText;
        }
    }
    xmlhttp.open("GET", "api/ActorsData/"+(d.getMonth()+1)+"/"+d.getDate(), true);
    xmlhttp.send();

})