const post_auth = document.getElementById("post_auth");
const inp_reg = document.getElementsByClassName("inp_reg");
const btn_auth = document.getElementById("btn_auth");
const validate_reg = document.getElementById("validate_reg");

let olds = [];
// document.addEventListener('load', function() )

// btn_auth.addEventListener("mouseenter", () => {
//   btn_auth.style.background = "red";
// });

post_auth.addEventListener("keyup", () => {
  if (post_auth.value == "") {
    olds.push("Nomor Ponsel atau Email harus diisi");
    validate_reg.innerHTML = "Nomor Ponsel atau Email harus diisi";
    validate_reg.style.color = "red";
    post_auth.style.borderColor = "red";
    btn_auth.style.background = "#e5e7e9";
    btn_auth.style.color = "#212121";
    btn_auth.classList.add("button-loginH");
    btn_auth.classList.add("button-loginA");
    btn_auth.classList.remove("btnLogin-hover");
    btn_auth.classList.remove("btnLogin-active");
    btn_auth.disabled = true;
    btn_auth.setAttribute("disabled");
    return false;
  } else if (!post_auth.value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,7}$/)) {
    olds.push("Format email salah");
    validate_reg.innerHTML = "Format email salah";
    validate_reg.style.color = "red";
    post_auth.style.borderColor = "red";
    btn_auth.style.background = "#e5e7e9";
    btn_auth.style.color = "#696868";
    btn_auth.classList.add("button-loginH");
    btn_auth.classList.add("button-loginA");
    btn_auth.classList.remove("btnLogin-hover");
    btn_auth.classList.remove("btnLogin-active");
    btn_auth.disabled = true;
    btn_auth.setAttribute("disabled");
    return false;
  }

  // if (!post_auth.value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,7}$/)) {
  // }

  // if()

  post_auth.style.borderColor = "#03e60a";
  validate_reg.innerHTML = "Example: email@tokopedia.com";
  validate_reg.style.color = "#00000073";
  btn_auth.disabled = false;
  btn_auth.removeAttribute("disabled");
  btn_auth.style.background = "#03AC0E";
  btn_auth.style.color = "#fff";
  btn_auth.style.border = "0";
  btn_auth.classList.add("btnLogin-hover");
  btn_auth.classList.add("btnLogin-active");
  return true;
  //   btn_auth.classList.remove("btnLogin-hover");
});

// btn_auth.addEventListener("click", () => {
//   document.querySelector(".popup").style.display = "flex";
// });
