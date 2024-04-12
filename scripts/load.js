window.onload = (event) => {
  fnCalculateAge();
};

function fnCalculateAge() {
  var dob = new Date("09/18/2000");

  var month_diff = Date.now() - dob.getTime();

  //convert the calculated difference in date format
  var age_dt = new Date(month_diff);

  //extract year from date
  var year = age_dt.getUTCFullYear();

  //now calculate the age of the user
  var age = Math.abs(year - 1970);
  document.getElementById("result").innerHTML = age;
}
