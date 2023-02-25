$(document).ready(function () {
  $("#submit-button").click(() => {
    let username = $("#username").val();
    let password = $("#pwd").val();

    if (username === "Test" && password === "Test.1234") {
      changeMessage("Login successfully", false);
      return true;
    } else {
      changeMessage("Wrong username or password", true);
      return false;
    }
  });

  function changeMessage(msg, isError) {
    let message = $(".message");
    message.html(msg);
    if (!isError) {
      message.css("color", "green");
    } else {
      message.css("color", "red");
    }
  }
});
