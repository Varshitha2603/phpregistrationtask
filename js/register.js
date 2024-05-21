"use strict";
//
// let register_btn = document.getElementById("register_btn");
// // console.log(register_btn);
//
// register_btn.addEventListener("click", () => {
//     document.location = "views/partials/register.partials.php";
// })
//

const validation = new JustValidate("#register_form");
validation
    .addField("#fname", [
        {
            rule: "required"
        }
    ])
    .addField("#lname", [
        {
            rule: "required"
        }
    ])
    .addField("#fatherName", [
        {
            rule: "required"
        }
    ])
    .addField("#email", [
        {
            rule: "required"
        },
        {
            rule: "email"
        }
    ])
    .addField("#password", [
        {
            rule: "required"
        },
        {
            rule: "password"
        }
    ])
    .onSuccess((event) => {
        document.getElementById("reg_btn").submit();
    })
