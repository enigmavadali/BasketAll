function fun()
    {
        var name=document.getElementById("r_name").value;
        var uname=document.getElementById("r_uname").value;
        var email=document.getElementById("r_email").value;
        var pno=document.getElementById("r_pno").value;
        var addr=document.getElementById("r_addr").value;
        var dob=document.getElementById("r_dob").value;
        var pass=document.getElementById("r_pass").value;
        var cpass=document.getElementById("r_cpass").value;

        if(name==""){
            alert("fill Name");
            document.getElementById("r_name").focus();
            return false;}
        else if(name.length>20){
            alert("enter name less than 20 chars");
            document.getElementById("r_name").focus();
            return false;}
        if(uname==""){
            alert("fill UserName");
            document.getElementById("r_uname").focus();
            return false;}
        else if(uname.length>10){
            alert("enter username within than 10 chars");
            document.getElementById("r_uname").focus();
            return false;}
        var l=email.length;
        if(email==""){
            alert("fill email");
            document.getElementById("r_email").focus();
            return false;}
        else if(email.indexOf("@")>email.lastIndexOf(".")){
            alert("enter valid email");
            document.getElementById("r_email").focus();
            return false;}

        if(pass==""|| cpass==""){
            alert("please fill password fields");
            document.getElementById("r_pass").focus();
            return false;}
        else if(pass!=cpass){
            alert("passwords do not match");
            document.getElementById("r_pass").focus();
            return false;}
        if(pno=="" || pno.length!=10){
            alert("enter valid mobile no");
            document.getElementById("r_pno").focus();
            return false;}
        
    }
