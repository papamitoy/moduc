document.getElementById("loginForm").addEventListener("submit",(e)=>{
    e.preventDefault();
    var formData = new FormData(document.getElementById('loginForm'));
    axios.post("/moduc/requests/POST/login.request.php",formData).then(res=>{
        console.log(res.data)
        if(res.data.success){
            Swal.fire(
                'Success',
                res.data.message,
                'success'
            ).then(()=>{
                location.reload();
            })
        }else{
            Swal.fire(
                'Warning',
                res.data.message,
                'warning'
            ) 
        }
    }).catch(err=>{
        console.log("err",err)
    });
});

document.getElementById("registerForm").addEventListener("submit",(e)=>{
    e.preventDefault();
    var formData = new FormData(document.getElementById('registerForm'));
    axios.post("/moduc/requests/POST/register.request.php",formData).then(res=>{
        console.log(res.data)
        if(res.data.success){
            Swal.fire(
                'Success',
                res.data.message,
                'success'
            ).then(()=>{
                location.reload();
            })
        }else{
            Swal.fire(
                'Warning',
                res.data.message,
                'warning'
            ) 
        }
    }).catch(err=>{
        console.log("err",err)
    });
});


document.getElementById("addSubject").addEventListener("submit",(e)=>{
    e.preventDefault();
    var formData = new FormData(document.getElementById('registerForm'));
    axios.post("/moduc/requests/POST/addsubject.request.php",formData).then(res=>{
        console.log(res.data)
        if(res.data.success){
            Swal.fire(
                'Success',
                res.data.message,
                'success'
            ).then(()=>{
                location.reload();
            })
        }else{
            Swal.fire(
                'Warning',
                res.data.message,
                'warning'
            ) 
        }
    }).catch(err=>{
        console.log("err",err)
    });
});