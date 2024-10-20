function emailSend(){
 Email.send({
    Host : "smtp.elasticemail.com",
    Username : "jerrycosta6916@gmail.com",
    Password : "384E65BC1E929871C308316C85658248912F",
    port: "2525",
    To : 'detralaverne6@gmail.com',
    From : "jerrycosta6916@gmail.com",
    Subject : "This is the subject",
    Body : "And this is the body"
}).then(
  message => alert(message)
);
}
