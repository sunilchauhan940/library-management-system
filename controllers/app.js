$(function(){
    var $fm = $('#addform');
    
    if($fm.length){
        $fm.validate({
            rules:{
                name:{
                    required:true
                },
                email:{
                    required:true,
                    email:true
                },
                mobile:{
                    required:true
                },
                birth_date:{
                    required:true
                },
                address:{
                    required:true
                },
                gender:{
                    required:true
                },
                photo:{
                    required:true
                },
                password:{
                    required:true
                },
                c_password:{
                    required:true,
                    equalTo:"#password"
                }
            },
            messages:{
                name:{
                    required:"Please Enter Name..."
                },
                email:{
                    required:"Please Enter Email...",
                    email:"Enter Valid Email..."
                },
                mobile:{
                    required:"Please Enter Mobile..."
                },
                birth_date:{
                    required:"Select Any BirthDate..."
                },
                address:{
                    required:"Please Enter Address..."
                },
                gender:{
                    required:"Select Any Gender..."
                },
                photo:{
                    required:"Select Any Image..."
                },
                password:{
                    required:"Please Enter Password..."
                },
                c_password:{
                    required:"Please Confirm Password...",
                    equalTo:"Password is not match..."
                }
            }
        })
    }
})

$(function(){
    var $fm = $('#updateform');
    
    if($fm.length){
        $fm.validate({
            rules:{
                name:{
                    required:true
                },
                email:{
                    required:true,
                    email:true
                },
                mobile:{
                    required:true
                },
                birth_date:{
                    required:true
                },
                address:{
                    required:true
                },
                gender:{
                    required:true
                },
                photo:{
                    required:true
                },
                password:{
                    required:true
                },
                c_password:{
                    required:true,
                    equalTo:"#password"
                }
            },
            messages:{
                name:{
                    required:"Please Enter Name..."
                },
                email:{
                    required:"Please Enter Email...",
                    email : "Please Enter Valid Email..."
                },
                mobile:{
                    required:"Please Enter Mobile..."
                },
                birth_date:{
                    required:"Select Any BirthDate..."
                },
                address:{
                    required:"Please Enter Address..."
                },
                gender:{
                    required:"Select Any Gender..."
                },
                photo:{
                    required:"Select Any Image..."
                },
                password:{
                    required:"Please Enter Password..."
                },
                c_password:{
                    required:"Please Confirm Password...",
                    equalTo:"Password is not match..."
                }
            }
        })
    }
})

$(document).ready(function() {
    $('#dataTable').DataTable({
        "iDisplayLength":5,
        "aLengthMenu":[[5,10,25,50,-1],[5,10,25,50,"All"]],
        
    });
});
  