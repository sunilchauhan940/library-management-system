$(function(){
    var $fm = $('#addform');
    
    if($fm.length){
        $fm.validate({
            rules:{
                name:{
                    required:true
                },
                email:{
                    required:true
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
                }
            },
            messages:{
                name:{
                    required:"Please Enter Name..."
                },
                email:{
                    required:"Please Enter Email..."
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
                    required:true
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
                }
            },
            messages:{
                name:{
                    required:"Please Enter Name..."
                },
                email:{
                    required:"Please Enter Email..."
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
                }
            }
        })
    }
})

$(document).ready(function() {
    $('#dataTable').DataTable();
});
  