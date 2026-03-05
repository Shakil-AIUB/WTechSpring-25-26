
function collect_name()
{
    let name1 = document.getElementById("name1").value;
    console.log(name1);
    let name2 = document.getElementById("name2").value;
    console.log(name2);



    return true
}

function collect_email()
{
    let email= document.getElementById("email").value;
    console.log(email);

    return true;
}



function collect_phone()
{
    let phone= document.getElementById("phone").value;
    console.log(phone);

    return true;
}



function collect_address()
{
    let address= document.getElementById("message").value;
    console.log(address);

    return true;
}



function collect_data()
{
   
    let isnamevalid = collect_name();
    let isemailvalid= collect_email();
    let isphonevalid= collect_phone();
    let isaddressvalid= collect_address();


    // let Page= document.getElementById("Age").value;
    // console.log(Page);

    // let dob= document.getElementById("DOB").value;
    // alert(dob);

//   let Pname = document.getElementById("PatientName");
//     // console.log(Pname);

//     var para1 = document.getElementById("demo").value;
//     para1.innerHTML="Hello Patient: " + Pname.value;

//     return false;

    return false;
}