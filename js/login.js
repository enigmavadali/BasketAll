function fun()
    {
        var uname=document.getElementById("l_uname").value;
        var pass=document.getElementById("l_pass").value;

        if(uname==""){
            alert("Fill UserName");
            document.getElementById("l_name").focus();
            return false;}

        if(pass==""){
            alert("Please fill password field");
            document.getElementById("l_pass").focus();
            return false;}
        
        
    }
