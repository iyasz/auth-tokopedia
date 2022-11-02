const post_auth = document.getElementById("post_auth");
const inp_reg = document.getElementsByClassName("inp_reg").value;
const btn_auth = document.getElementById("btn_auth");
const validate_reg = document.getElementById("validate_reg");

// document.addEventListener('load', function() )

post_auth.addEventListener("keyup", () => {
  if (post_auth.value === "") {
    validate_reg.innerHTML = "Nomor Ponsel atau Email harus diisi";
    return false;
  } else if (!post_auth.value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,7}$/)) {
    validate_reg.innerHTML = "Format email salah";
    validate_reg.style.color = "red";
    post_auth.style.borderColor = "red";
    btn_auth.style.background = "#e5e7e9";
    btn_auth.style.color = "#696868";
    btn_auth.classList.add("button-loginH");
    btn_auth.classList.add("button-loginA");
    btn_auth.classList.remove("btnLogin-hover");
    btn_auth.classList.remove("btnLogin-active");
    return false;
  }

  // if (!post_auth.value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,7}$/)) {
  // }

  post_auth.style.borderColor = "#03e60a";
  validate_reg.innerHTML = "";
  btn_auth.style.background = "#03AC0E";
  btn_auth.style.color = "#fff";
  btn_auth.classList.add("btnLogin-hover");
  btn_auth.classList.add("btnLogin-active");
  return true;
  //   btn_auth.classList.remove("btnLogin-hover");

  //   if (btn_auth.classList.contains("btnLogin-hover")) {
  //     btn_auth.classList.remove("btnLogin-active");
  //   }

  // .myCustomHover:hover {
  //      color:red;
  // }
  // .myCustomActive:active {
  //     background:yellow;
  // }

  // var myDiv = document.getElementById('myDiv');
  // myDiv.classList.add('myCustomHover');
  // myDiv.classList.toogle('myCustomActive');
  // myDiv.classList.remove('myCustomHover');
  // if (myDiv.classList.contains('myCustomActive') myDiv.classList.remove('myCustomActive');
  // /* ... and so on */</script>
});
