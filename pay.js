function validate(){
                //alert("validation");
                var name = document.forms["payform"]["fname"];
                 var add = document.forms["payform"]["address"];
                var mail = document.forms["payform"]["email"];
                var mail = document.forms["payform"]["expmonth"];
                if (name.value == ""){
                            window.alert("Name Required");
                } 
                 if (add.value == ""){
                            window.alert("Password Required");
                }  
                if (mail.value == ""){
                            window.alert(" Mail ID Required");
                }  
                
            }

